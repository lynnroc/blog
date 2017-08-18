<?php

	//后台分类管理控制器

	//命名空间
	namespace Back\Controller;

	//引入公共元素
	use \Core\Controller;

	class Category extends Controller{
	
		//显示所有分类数据
		public function index(){
			//调用模型获取数据
			$category = new \Model\Category();
			$categories = $category->getAllCategories();

			//分配数据给视图
			$this->view->assign('categories',$categories);
			$this->view->display('categoryIndex.html');
		}

		//添加分类：获取新增表单
		public function add(){
			//获取所有分类数据
			$category = new \Model\Category();
			$categories = $category->getAllCategories();

			//分配给模板
			$this->view->assign('categories',$categories);

			//加载对应的模板文件
			$this->view->display('categoryAdd.html');
		}

		//添加分类：分类入库
		public function insert(){
			//接收数据
			$name = trim($_POST['name']);
			$parent_id = $_POST['parent_id'];
			$sort = trim($_POST['sort']);

			//合法性判定
			if(empty($name)) $this->error('分类名字不能为空！','p=back&m=category&a=add');
			if(!is_numeric($sort) || $sort != (integer)$sort || $sort < 0){
				 $this->error('排序必须为正整数！','p=back&m=category&a=add');
			}

			//合理性验证：同一父分类下不允许有同名分类
			$category = new \Model\Category();
			if($category->checkCategoryName($parent_id,$name)){
				//当前父分类下已经存在同名分类
				$this->error('当前分类名字' . $name . '已经在指定父分类下存在！','p=back&m=category&a=add');
			}

			//数据入库
			if($category->insertCategory($name,$parent_id,$sort)){
				//成功
				$this->success('分类：' . $name . '新增成功！','p=back&m=category');
			}else{
				//失败
				$this->error('输出插入失败！','p=back&m=category&a=add');
			}
		}

		//删除分类
		public function delete(){
			//接收数据
			$id = (integer)$_REQUEST['id'];

			//验证：是否允许删除
			$category = new \Model\Category;
			if($category->checkLefe($id)){
				//有子分类
				$this->error('当前分类有子分类不可以删除！','p=back&m=category');
			}

			//控制器调用模型删除
			if($category->deleteCategory($id)){
				//删除成功
				$this->success('删除成功！','p=back&m=category');
			}else{
				//删除失败
				$this->error('删除失败！','p=back&m=category');
			}
		}


		//编辑分类：显示
		public function edit(){
			//获取要编辑的分类ID
			$id = (integer)$_REQUEST['id'];

			//获取当前分类数据
			$category = new \Model\Category();
			$edit_cat = $category->getCategoryById($id);

			//获取所有分类：加入当前分类ID，因为编辑的时候不需要去选择自己及其自己的子分类
			$categories = $category->getAllCategories($id);
			
			//分配数据给视图
			$this->view->assign('categories',$categories);
			$this->view->assign('edit_cat',$edit_cat);
			$this->view->display('categoryEdit.html');
		}

		//编辑分类：更新数据
		public function update(){
			//获取要更新的分类ID
			$id = (integer)$_REQUEST['id'];

			//接收数据
			$name = trim($_POST['name']);
			$parent_id = (integer)$_POST['parent_id'];
			$sort = trim($_POST['sort']);

			//合法性判定
			if(empty($name)) $this->error('分类名字不能为空！','p=back&m=category&a=edit&id=' . $id);
			if(!is_numeric($sort) || $sort != (integer)$sort || $sort < 0){
				 $this->error('排序必须为正整数！','p=back&m=category&a=edit&id=' . $id);
			}

			//合理性验证：同一父分类下不能有同名分类
			$category = new \Model\Category();
			$cat = $category->checkCategoryName($parent_id,$name);

			//判断：排除自己
			if($cat && $cat['id'] != $id){
				//当前父分类下有同名分类，且分类还是当前要编辑的分类
				$this->error('当前分类名字：' . $name . '已经存在！','p=back&m=category&a=edit&id=' . $id);
			}

			//更新操作
			if($category->updateCategory($id,$name,$parent_id,$sort)){
				$this->success('更新成功！','p=back&m=category');
			}else{
				//失败
				$this->error('更新失败！','p=back&m=category&a=edit&id=' . $id);
			}
		}
	}