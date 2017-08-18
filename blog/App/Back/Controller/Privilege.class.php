<?php

	//后台权限控制器

	//命名空间
	namespace Back\Controller;

	//权限判定
	if(!defined('ACCESS')) header('Location:http://www.blog.com/index.php?p=back');

	//引入空间元素
	use \Core\Controller;


	class Privilege extends Controller{
		
		//获取登录表单
		public function index(){
			
			$this->view->display('login.html');
		}

		//得到验证码图片
		public function getCaptcha(){
			//实例化验证码图片类
			$captcha = new \Captcha();
			$captcha->generate();
		}

		//验证用户登录信息
		public function check(){
			//var_dump($_POST);
			//接收数据
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			$captcha  = trim($_POST['captcha']);

			//合法性验证：数据都不能为空
			if(empty($captcha) || empty($username) || empty($password)){
				//为空：应该重新来过
				$this->error('用户名、密码和验证码都不能为空！','p=back&m=Privilege');
			}

			
			//合理性验证
			//验证码验证
			if(!\Captcha::checkCaptcha($captcha)){
				//不对
				$this->error('验证码错误！','p=back&m=privilege');
			}

			//判断数据在数据库存在（数据查询）
			$admin = new \Model\Admin();
			//$user = $admin->checkUser($username,$password);
			//通过用户名获取用户
			$user = $admin->getUserByUsername($username);
			//var_dump($user);exit;

			//验证
			if(!$user){
				$this->error('当前用户名不存在！','p=back&m=privilege');
			}

			//验证密码
			if($user['a_password'] != md5($password)){
				$this->error('密码错误！','p=back&m=privilege');
			}

			//将用户信息保存到session
			$_SESSION['user'] = $user;

			//成功：进入首页
			$this->success('欢迎：' . $username . ' 进入博客项目后台！','p=Back');
		}
	}