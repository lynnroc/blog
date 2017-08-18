<?php

	//文章模型对应article表

	//命名空间
	namespace Model;

	//引入空间元素
	use \Core\Model;

	class Article extends Model{
		//属性
		protected $table = 'article';

		//获取所有的文章
		//@param1 int $pagecount，每页显示的数据量
		//@param2 int $page = 1，当前要显示的页码
		public function getAllArticles($pagecount,$page = 1){
			//计算limit数据
			$offset = ($page - 1) * $pagecount;

			//组织SQL执行
			$sql = "select a.id,a.a_name,a.a_publishtime,a.a_sort,a.a_status,c.c_name,a.a_content from {$this->getTableName()} as a left join bl_category as c on a.c_id = c.id limit {$offset},{$pagecount}";

			return $this->dao->db_getAll($sql);
		}

		//获取总记录数
		public function getCounts(){
			$sql = "select count(*) as c from {$this->getTableName()}";
			$res = $this->dao->db_getOne($sql);
			return $res ? $res['c'] : 0;
		}

		//数据入库
		public function insertArticle($data){
			//数组元素中所有下标对应的都是数据表中字段名：字段包含所有不允许为空的字段
			//insert into 表名 (字段列表) values (值列表)
	
			//循环遍历构造字段列表和值列表
			$fields = $values = '';
			foreach($data as $k => $v){
				//$k就是字段名，$v就是值
				$fields .= $k . ',';
				$values .= '"' . $v . '",';
			}

			//去除右边逗号
			$fields = rtrim($fields,',');
			$values = rtrim($values,',');

			//构造SQL
			$sql = "insert into {$this->getTableName()} ({$fields}) values({$values})";
			return $this->dao->db_exec($sql);
		}

		//删除文章
		public function deleteArticle($id){
			$sql = "delete from {$this->getTableName()} where id = {$id}";
			return $this->dao->db_exec($sql);
		}

		//通过ID获取文章
		public function getArticleById($id){
			return $this->getDataById($id);
		}

		//更新数据
		public function updateArticle($id,$data){
			//SQL：update 表名 set 字段1 = 值1,字段2=值2... where id = $id

			$update = '';
			foreach($data as $k => $v){
				//$k字段名，$v新值
				$update .= $k . '="' . $v . '",';
			}
			//右侧多出一个逗号
			$update = rtrim($update,',');

			//组织SQL
			$sql = "update {$this->getTableName()} set {$update} where id = {$id}";
			return $this->dao->db_exec($sql);
		}

		//获取文章及相关信息
		public function getArticleInfoById($id){
			$sql = "select a.*,c.c_name from {$this->getTableName()} as a left join bl_category as c on a.c_id = c.id where a.id = {$id}";

			return $this->dao->db_getOne($sql);
		
		}

		//点赞功能
		public function updateZan($id){
			//组织SQL执行
			$sql = "update {$this->getTableName()} set a_zan = a_zan + 1 where id = {$id}";
			return $this->dao->db_exec($sql);
		}

	}