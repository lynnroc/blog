<?php
/* Smarty version 3.1.30, created on 2017-03-28 05:53:10
  from "E:\Blog\App\Back\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d989c6c82b36_09999785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9364794d32ca46d89a202cc5bb6fc348ce717acd' => 
    array (
      0 => 'E:\\Blog\\App\\Back\\View\\Index\\index.html',
      1 => 1490621405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:App/Back/View/Public/header.html' => 1,
    'file:App/Back/View/Public/sidebar.html' => 1,
    'file:App/Back/View/Public/footer.html' => 1,
  ),
),false)) {
function content_58d989c6c82b36_09999785 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>博客后台</title>
    <link rel="stylesheet" type="text/css" href="Public/<?php echo @constant('PLAT');?>
/css/app.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="Public/<?php echo @constant('PLAT');?>
/js/app.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="wrapper">
	<!-- START HEADER -->
    <?php $_smarty_tpl->_subTemplateRender("file:App/Back/View/Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- END HEADER -->
    
    <!-- START MAIN -->
    <div id="main">
        <!-- START SIDEBAR -->
        <?php $_smarty_tpl->_subTemplateRender("file:App/Back/View/Public/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- END SIDEBAR -->

        <!-- START PAGE -->
        <div id="page">
            <!-- start page title -->
            <div class="page-title">
                <div class="in">
                    <div class="titlebar">
                        <h2>控制面板</h2>
                        <p>小标题</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- end page title -->
            <!-- START CONTENT -->
            <div class="content">
                <!-- start simple tips -->
                <div class="simple-tips">
                    <h2>提示</h2>
                    <ul>
                        <li>1. 使用左侧的导航菜单进入功能</li>
                        <li>2. 使用右上角的退出按钮退出管理后台</li>
                    </ul>
                    <a href="#" class="close tips" title="关闭">关闭</a>
                </div>
                <div class="simple-tips">
                    <h2>提示</h2>
                    <ul>
                        <li>1. 您当前使用的ip: 127.0.0.1</li>
                        <li>2. PHP版本: 5.3.16</li>
                        <li>3. 浏览器: Chrome</li>
                    </ul>
                    <a href="#" class="close tips" title="关闭">关闭</a>
                </div>

                <!-- start dashbutton -->
                <div class="grid740">
                    <span class="dashbutton">	<img src="Public/<?php echo @constant('PLAT');?>
/img/icons/dashbutton/users.png" width="44" height="32" alt="icon" />	<b>用户数</b>	3</span>
                    <div class="clear"></div>
                </div>

                <div class="clear"></div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END PAGE -->
    <div class="clear"></div>
    </div>
    <!-- END MAIN -->

    <!-- START FOOTER -->
    <?php $_smarty_tpl->_subTemplateRender("file:App/Back/View/Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- END FOOTER -->
</div>
</body>
</html><?php }
}
