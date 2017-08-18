<?php

	//admin表对应的模型

	//命名空间
	namespace Model;
	
	//引入空间元素
	use \Core\Model;

	class Admin extends Model{
		//属性：保存表名字
		protected $table = 'admin';
	
		//验证用户名和密码：通过用户提交的用户名和密码来查询数据
		public function checkUser($username,$password){
			//防止SQL注入
			$username = addslashes($username);

			//密码加密处理
			$password = md5($password);

			//组织SQL
			$sql = "select * from {$this->getTableName()} where a_username = '{$username}' and a_password = '{$password}'";

			//执行SQL
			return $this->dao->db_getOne($sql);
		}

		//通过用户名获取用户信息
		public function getUserByUsername($username){
			//防止SQL注入
			$username = addslashes($username);
			
			//组织SQL
			$sql = "select * from {$this->getTableName()} where a_username ='{$username}'";

			//执行
			return $this->dao->db_getOne($sql);
		}

	}