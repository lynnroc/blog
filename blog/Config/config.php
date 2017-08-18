<?php

	//配置文件

	//返回配置数组
	return array(
		//数据库信息
		'type' => 'mysql',

		'mysql' => array(
			'host' => 'localhost',
			'port' => '3306',
			'user' => 'root',
			'pass' => 'root',
			'dbname' => 'Blog',
			'charset' => 'utf8',
			'prefix' => 'bl_' 
		),
	
		//其他配置项

		//后台博文显示数量
		'back_article_pagecount' => 3,

		//前台博文列表显示的数据量
		'home_article_pagecount' => 4,

		//后台用户列表显示的数据量
		'back_user_pagecount' => 3,

		//后台评论显示数量
		'back_comment_pagecount' => 3,
	);