<?php

	//前台控制器

	//命名空间
	namespace Home\Controller;

	//引入空间元素
	use \Core\Controller;

	class Index extends Controller{
	
		//入口方法
		public function index(){
			//获取页码
			$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;

			//获取每页显示数据量：加载配置
			global $config;

			//获取所有博文
			$article = new \Model\Article();
			$articles = $article->getAllArticles($config['home_article_pagecount'],$page);

			//获取文章数量
			$counts = $article->getCounts();

			//调用分页类
			$pagestring = \Page::getPageString($counts,'index','index',PLAT,$config['home_article_pagecount'],$page);
			
			//显示首页视图
			$this->view->assign('articles',$articles);
			$this->view->assign('pagestring',$pagestring);
			$this->view->display('blogShowList.html');
		}
	}