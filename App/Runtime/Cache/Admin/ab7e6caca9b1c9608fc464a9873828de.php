<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>一级目录</title>
    <link rel="stylesheet" type="text/css" href="/nwe/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/nwe/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/nwe/Public/admin/js/jquery.js" ></script>
</head>

<body>


<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="#">退出</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo U('admin/cate/index');?>"><i class="icon-font">&#xe008;</i>目录管理</a>
                        </li>
                        <li><a href="design.html"><i class="icon-font">&#xe004;</i>文章管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-wrap">

    
    <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">一级目录</span></div>
    </div>
    <div class="result-wrap">
        <form name="myform" id="myform" method="post" action="">
            <div class="result-title">
                <div class="result-list">
                    <a href="<?php echo U('admin/cate/index');?>">
                        一级栏目 
                    </a>
                    <a href="<?php echo U('admin/cate/add');?>"><i class="icon-font"></i>新增</a>

                    <a href="<?php echo U('admin/MiddleCate/index');?>">
                        二级栏目 
                    </a>
                    <a href="<?php echo U('admin/MiddleCate/add');?>"><i class="icon-font"></i>新增</a>

                    <a href="<?php echo U('admin/ThreeCate/index');?>">
                        三级栏目 
                    </a>
                    <a href="<?php echo U('admin/ThreeCate/add');?>"><i class="icon-font"></i>新增</a>
                </div>
            </div>
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>上级目录名称</th>
                        <th>三级目录名称</th>
                        <th>发布人</th>
                        <th>添加时间</th>
                        <th>更新时间</th>
                        <th>操作</th>
                    </tr>
                    <?php if(is_array($tcates)): foreach($tcates as $key=>$tcate): ?><tr>
                        <td><?php echo ($tcate['id']); ?></td>
                        <td title="发哥经典"><a target="_blank" href="#" title="发哥经典"><?php echo (getHightMiddleCate($tcate['middle_id'])); ?></a>
                        </td>
                        <td title="发哥经典"><a target="_blank" href="#" title="发哥经典"><?php echo ($tcate['name']); ?></a>
                        </td>
                        <td>admin</td>
                        <td><?php echo (date("Y-m-d H:i:s",$tcate['created_at'])); ?></td>
                        <td><?php echo (date("Y-m-d H:i:s",$tcate['updated_at'])); ?></td>
                        <td>
                            <a class="link-update" href="<?php echo U('Admin/ThreeCate/save',[ 'id'=>$tcate['id'] ]);?>">修改</a>
                            <a class="link-del" href="<?php echo U('Admin/ThreeCate/del',[ 'id'=>$tcate['id'] ]);?>">删除</a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                </table>
                <div class="list-page"><!--分页--></div>
            </div>
        </form>
    </div>


    </div>

</div>


</body>