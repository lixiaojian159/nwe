<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>添加二级目录</title>
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
        <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('admin/index/index');?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo U('admin/MiddleCate/index');?>">二级栏目</a><span class="crumb-step">&gt;</span><span>添加二级栏目</span></div>
    </div>

    <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('/admin/MiddleCate/addAct');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th width="120"><i class="require-red">*</i>一级目录：</th>
                            <td>
                                <select name="hightId" id="catid" class="required">
                                    <option value="">请选择一级目录</option>
                                    <?php if(is_array($hcates)): foreach($hcates as $key=>$hcate): ?><option value="<?php echo ($hcate['id']); ?>"><?php echo ($hcate['name']); ?></option><?php endforeach; endif; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>二级栏目名称：</th>
                            <td>
                                <input class="common-text required" id="title" name="name" size="50" value="" type="text" required>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onClick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>
        </div>




    </div>

</div>


</body>