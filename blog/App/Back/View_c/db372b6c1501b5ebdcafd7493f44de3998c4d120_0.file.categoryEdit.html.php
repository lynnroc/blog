<?php
/* Smarty version 3.1.30, created on 2017-03-27 20:24:19
  from "E:\Blog\App\back\View\category\categoryEdit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d904738c3456_14817928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db372b6c1501b5ebdcafd7493f44de3998c4d120' => 
    array (
      0 => 'E:\\Blog\\App\\back\\View\\category\\categoryEdit.html',
      1 => 1490617435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d904738c3456_14817928 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div id="header">
        <!-- logo -->
        <div class="logo">	<a href="?"><span class="logo-text text-center font18">博客后台</span></a>	</div>

        <!-- notifications -->
        <div id="notifications">
            <div class="clear"></div>
        </div>

        <!-- quick menu -->
        <div id="quickmenu">
            <a href="#" class="qbutton-left tips" title="新增一篇博客"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/header/newpost.png" width="18" height="14" alt="new post" /></a>
            <a href="#" class="qbutton-right tips" title="直达前台"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/magnify.png" width="18" height="14" alt="new post" /></a>
            <div class="clear"></div>
        </div>

        <!-- profile box -->
        <div id="profilebox">
            <a href="#" class="display">
                <img src="Public/<?php echo @constant('PLAT');?>
/img/simple-profile-img.jpg" width="33" height="33" alt="profile"/> <span>管理员</span> <b>昵称</b>
            </a>

            <div class="profilemenu">
                <ul>
                    <li><a href="#">退出</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- END HEADER -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START SIDEBAR -->
        <div id="sidebar">
            <div id="searchbox" style="z-index: 880;">
                <div class="in" style="z-index: 870;">
                    <p class="text-center font18 line-height35">此广告位常年招商</p>
                </div>
            </div>
            <!-- start sidemenu -->
            <div id="sidemenu">
                <ul>
                    <li class="active"><a href="index.html"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/laptop.png" width="16" height="16" alt="icon"/>控制面板</a></li>
                    <!-- 分类管理 -->
                    <li class="subtitle">
                        <a class="action tips-right" href="#" title="分类管理"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/key.png" width="16" height="16" alt="icon"/>分类管理<img src="Public/<?php echo @constant('PLAT');?>
/img/arrow-down.png" width="7" height="4" alt="arrow" class="arrow" /></a>
                        <ul class="submenu display-block">
                            <li><a href="categoryIndex.html"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/file.png" width="16" height="16" alt="icon"/>分类列表</a></li>
                            <li><a href="categoryAdd.html"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/file_add.png" width="16" height="16" alt="icon"/>添加分类</a></li>
                        </ul>
                    </li>
                    <!-- 分类管理 -->

                    <!-- 博文管理 -->
                    <li class="subtitle">
                        <a class="action tips-right" href="#" title="博文管理"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/mail.png" width="16" height="16" alt="icon"/>博文管理<img src="Public/<?php echo @constant('PLAT');?>
/img/arrow-down.png" width="7" height="4" alt="arrow" class="arrow" /></a>
                        <ul class="submenu display-block">
                            <li><a href="articleAdd.html"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/file_add.png" width="16" height="16" alt="icon"/>添加博文</a></li>
                            <li><a href="articleIndex.html"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/file.png" width="16" height="16" alt="icon"/>博文列表</a></li>
                        </ul>
                    </li>
                    <!-- 博文管理 -->

                    <!-- 用户管理 -->
                    <li class="subtitle">
                        <a class="action tips-right" href="#" title="用户管理"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/user.png" width="16" height="16" alt="icon"/>用户管理<img src="Public/<?php echo @constant('PLAT');?>
/img/arrow-down.png" width="7" height="4" alt="arrow" class="arrow" /></a>
                        <ul class="submenu display-block">
                            <li><a href="userAdd.html"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/user_add.png" width="16" height="16" alt="icon"/>添加用户</a></li>
                            <li><a href="userIndex.html"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/file.png" width="16" height="16" alt="icon"/>用户列表</a></li>
                        </ul>
                    </li>
                    <!-- 用户管理 -->

                    <!-- 评论管理 -->
                    <li><a href="commentIndex.html"><img src="Public/<?php echo @constant('PLAT');?>
/img/icons/sidemenu/file.png" width="16" height="16" alt="icon"/>评论列表</a></li>
                    <!-- 评论管理 -->
                </ul>
            </div>
            <!-- end sidemenu -->
        </div>
        <!-- END SIDEBAR -->

        <!-- START PAGE -->
        <div id="page">
            <!-- start page title -->
            <div class="page-title">
                <div class="in">
                    <div class="titlebar">	<h2>分类管理</h2>	<p>编辑分类</p></div>

                    <div class="clear"></div>
                </div>
            </div>
            <!-- end page title -->

            <!-- START CONTENT -->
            <div class="content">
                <div class="simplebox grid740" style="z-index: 720;">
                    <div class="titleh" style="z-index: 710;">
                        <h3>编辑分类</h3>
                    </div>
                    <div class="body" style="z-index: 690;">

                        <form id="form2" name="form2" method="post" action="index.php">
						<input type="hidden" name="p" value="back"/>
						<input type="hidden" name="m" value="category"/>
						<input type="hidden" name="a" value="update"/>
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['edit_cat']->value['id'];?>
"/>
                            <div class="st-form-line" style="z-index: 680;">
                                <span class="st-labeltext">分类名字</span>
                                <input name="name" type="text" class="st-forminput" style="width:510px" value="<?php echo $_smarty_tpl->tpl_vars['edit_cat']->value['c_name'];?>
">
                                <div class="clear" style="z-index: 670;"></div>
                            </div>
                            <div class="st-form-line" style="z-index: 640;">
                                <span class="st-labeltext">父分类</span>
                                <select name="parent_id" class="uniform">
                                    <option value="0">无</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                                    <option  value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['edit_cat']->value['c_parent_id'] == $_smarty_tpl->tpl_vars['cat']->value['id']) {?> selected="selected" <?php }?>><?php echo str_repeat('--',$_smarty_tpl->tpl_vars['cat']->value['level']);
echo $_smarty_tpl->tpl_vars['cat']->value['c_name'];?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                </select>
                                <div class="clear"></div>
                            </div>
                            <div class="st-form-line" style="z-index: 680;">
                                <span class="st-labeltext">排序</span>
                                <input name="sort" type="text" class="st-forminput" style="width:510px" value="<?php echo $_smarty_tpl->tpl_vars['edit_cat']->value['c_sort'];?>
">
                                <div class="clear" style="z-index: 670;"></div>
                            </div>
                            <div class="button-box" style="z-index: 460;">
                                <input type="submit" name="button" id="button" value="提交" class="st-button">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END PAGE -->
        <div class="clear"></div>
    </div>
    <!-- END MAIN -->

    <!-- START FOOTER -->
    <div id="footer">
        <div class="left-column">© Copyright 2016 - 保留所有权利.</div>
    </div>
    <!-- END FOOTER -->
</div>
</body>
</html><?php }
}
