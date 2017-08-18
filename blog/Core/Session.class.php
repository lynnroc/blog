<?php

	//session入库

	//命名空间
	namespace Core;

	class Session extends Model{
		//属性：保存表名字
		protected $table = 'session';

		//构造方法：注册session机制
		public function __construct(){
			//触发父类构造方法
			parent::__construct();
			
			//注册
			session_set_save_handler(array($this,'open'),array($this,'close'),array($this,'read'),array($this,'write'),array($this,'destroy'),array($this,'gc'));

			//开启session
			@session_start();
		}

		//实现需要修改session机制的6个方法：open，close，read，write，destroy和gc
		public function open(){
			//建立数据库连接操作：实例化session对象的时候，就会继承Model构造方法，父类构造方法已经实现DAO的初始化，连接认证已经建立好
		}

		public function close(){
			//不需要销毁资源
		}

		public function read($id){
			//去除脏读数据（过期数据）
			$expire = time() - ini_get('session.gc_maxlifetime');

			//通过sessionID从数据库取出数据，然后得到对应的序列化的session内容，并返回
			$sql = "select s_content from {$this->getTableName()} where s_id = '{$id}' and s_expire >= {$expire}";

			//执行SQL
			$res = $this->dao->db_getOne($sql);
	
			//返回内容
			return isset($res['s_content']) ? $res['s_content'] : '';
		}

		public function write($id,$content){
			$now = time();

			//session写入很频繁，而且会使用同一个sessionID写入多次：本质要做的事情是内容和时间的更新，ID不便（主键冲突）
			$sql = "replace into {$this->getTableName()}  values('{$id}','{$content}',{$now})";
			return $this->dao->db_exec($sql);
		}

		public function destroy($id){
			$sql = "delete from {$this->getTableName()}  where s_id = '{$id}'";
			return $this->dao->db_exec($sql);
		}

		public function gc($lifetime){	//ini_get也可以从配置文件取出生命周期
			$expire = time() - $lifetime;
			$sql = "delete from {$this->getTableName()}  where s_expire < {$expire}";
			return $this->dao->db_exec($sql);
		}

	}