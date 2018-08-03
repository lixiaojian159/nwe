<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="stylesheet" href="/Public/home/css/reset.css" />
		<link rel="stylesheet" href="/Public/home/css/swiper.css" />
		<link rel="stylesheet" href="/Public/home/css/basic_style.css" />
		<link rel="stylesheet" href="/Public/home/css/my_style.css" />
		<link rel="shortcut icon" href=""/>
		<script type="text/javascript" src="/Public/home/js/jquery.js" ></script>
		<script type="text/javascript" src="/Public/home/js/swiper.min.js" ></script>
		<script type="text/javascript" src="/Public/home/js/my_js.js" ></script>
		<script type="text/javascript" src="/Public/home/js/jquery.SuperSlide.2.1.1.js" ></script>
		
		<title><?php echo ($web_title); ?>底层-诺维尔</title>
		<script>
			
		</script>
	</head>

	<body>
        
        <nav class="navbar">
			<div class="container">
				<a href="index.html" class="pull-left">
					<img src="/Public/home/images/logo.png" />
				</a>
				<div class="pull-right">
					<img src="/Public/home/images/tel.png" />
				</div>	

			</div>
			<div class="nav">
				<ul class="container">
					<li>
						<a href="index.html">网站首页</a>
					</li>
					<li>
						<a href="about.html">公司简介</a>
					</li>
					<li>
						<a href="product.html">产品中心</a>
						<div>
							<a href="product.html">冷库分类</a>
							<a href="product0.html">制冷设备</a>
						</div>
					</li>
					<li>
						<a href="case.html">冷库案例</a>
					</li>
					<li>
						<a href="news.html">新闻中心</a>
						<div>
							<a href="news.html">技术服务</a>
							<a href="news0.html">行业新闻</a>
						</div>
					</li>
					<li>
						<a href="service.html">售后服务</a>
						<div>
							<a href="service.html">技术服务</a>
							<a href="service.html">故障分析</a>
						</div>
					</li>
					<li>
						<a href="message.html">在线留言</a>
					</li>
					<li>
						<a href="contact.html">联系我们</a>
					</li>
					
				</ul>	
			</div>
		</nav>

		主内容

		<footer>
			<div class="container">
				<img class="pull-left" src="/Public/home/images/logo-bottom.png" />
				<p class="pull-left">北京诺尔威制冷设备有限公司 版权所有 备案号：京ICP备13029738号-1<br />地址：北京市通州区台湖东亚环球国际A3-1-1106<br />联系人：李经理  咨询电话：13651336671<br />全国免费咨询热线：400-885-7927 固定电话：010-57126786 邮箱：nuoerw@163.com</p>
				<img id='ewm' class="pull-right" src="/Public/home/images/ewm.png" />
			</div>
		</footer>

		<script>
			jQuery(".swiper-wrapper2").slide({mainCell:".bd>div",autoPlay:true,effect:"topMarquee",vis:5,interTime:50,trigger:"click"});
		</script>

		<script>
			$(function(){
				$('.main-box').eq(0).show()
				$('.head h4 span').click(function(){
					var i = $(this).index()
					$('.main-box').eq(i).show().siblings('.main-box').hide()
					$(this).addClass('active').siblings().removeClass('active')
				})
			})
		</script>
	</body>
</html>