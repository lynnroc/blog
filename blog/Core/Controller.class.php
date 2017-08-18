<?php

	//公共控制器

	//命名空间
	namespace Core;

	class Controller{

		//实例化视图类
		protected $view;
		public function __construct(){
			//权限判定：前台不需要
			if(strtolower(PLAT) == 'back' && strtolower(MODULE) != 'privilege' && !isset($_SESSION['user'])){
				//没有权限：应该去登录
				$this->error('没有登录！','p=back&m=Privilege');
			}

			//视图出实惠
			$this->view = new View();
		}
		

		//公共方法
		protected function success($msg,$url,$time = 1){
			//跳转提示功能
			header("Refresh:{$time};url='index.php?{$url}'");
			echo $msg;

			//终止脚本
			exit();
		}

		protected function error($msg,$url,$time = 3){
			//跳转提示功能
			header("Refresh:{$time};url='index.php?{$url}'");
			echo $msg;

			//终止脚本
			exit();
		}
	}