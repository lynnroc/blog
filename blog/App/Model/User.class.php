<?php

	//User表对应的模型

	namespace Model;
	use \Core\Model;

	class User extends Model{
		//属性
		protected $table = 'user';

		//验证用户名是否存在
		public function checkUserByUsername($username){
			//组织SQL执行
			$username = addslashes($username);
			$sql = "select id from {$this->getTableName()} where u_username='{$username}'";
			return $this->dao->db_getOne($sql);
		}

		//验证邮箱是否存在
		public function checkUserByEmail($email){
			//组织SQL执行
			$email = addslashes($email);
			$sql = "select id from {$this->getTableName()} where u_email='{$email}'";
			return $this->dao->db_getOne($sql);
		}

		//数据入库
		public function insertUser($username,$email,$password){
			//组织SQL执行
			$password = md5($password);
			$now = time();
			$sql = "insert into {$this->getTableName()} value(null,'{$username}','{$password}','{$email}',$now)";

			return $this->dao->db_exec($sql);
		}

		//获取用户信息
		public function getUserByUsername($username){
			//防止SQL注入
			$username = addslashes($username);

			//组织SQL执行
			$sql = "select * from {$this->getTableName()} where u_username='{$username}'";
			return $this->dao->db_getOne($sql);
		}

		//获取所有用户
		public function getAllUsers($pagecount,$page = 1){
			$offset = ($page - 1) * $pagecount;

			$sql = "select * from {$this->getTableName()} limit {$offset},{$pagecount}";
			return $this->dao->db_getAll($sql);
		}

		//获取总记录数
		public function getCounts(){
			$sql = "select count(*) as c from {$this->getTableName()}";
			$res = $this->dao->db_getOne($sql);

			return $res ? $res['c'] : 0;
		}
	}