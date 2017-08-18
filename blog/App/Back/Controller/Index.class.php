<?php

	//后台首页控制器

	//命名空间
	namespace Back\Controller;

	//引入空间元素
	use \Core\Controller;

	class Index extends Controller{
	
		public function index(){
			//显示视图
			$this->view->display('index.html');
		}
	}