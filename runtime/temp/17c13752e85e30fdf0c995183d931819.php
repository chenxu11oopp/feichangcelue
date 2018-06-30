<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"E:\www\feichangcelue2/application/index\view\index\mobile\index.html";i:1528857872;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection"content="telephone=no, email=no" />
	<link href="./public/stock/css/reset.css" rel="stylesheet" type="text/css">
	<link href="./public/stock/css/swiper-3.3.1.min.css" rel="stylesheet" type="text/css">
	<link href="./public/stock/css/style.css" rel="stylesheet" type="text/css">
	<script src="./public/stock/js/sizes.js" type="text/javascript"></script>
	<title>首页</title>
</head>
<body>

<div class="wapper">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="./public/stock/img/banner1.png" alt=""></div>
			<div class="swiper-slide"><img src="./public/stock/img/banner1.png" alt=""></div>
			<div class="swiper-slide"><img src="./public/stock/img/banner1.png" alt=""></div>
		</div>
		<!-- 如果需要分页器 -->
		<div class="swiper-pagination"></div>
	</div>
	<div class="pz">
		<ul>
			<li><a href="<?php echo url('index/index/stock'); ?>"><img src="./public/stock/img/ri.png" alt="">按天配资</a></li>
			<li><a href="<?php echo url('index/index/stock'); ?>"><img src="./public/stock/img/yue.png" alt="">按月配资</a></li>
			<li><a href="./freetrial.html"><img src="./public/stock/img/mian.png" alt="">免息体验</a></li>
		</ul>
	</div>
	<div class="list">
		<ul>
			<li>动态资产<span>0</span></li>
			<li>可用金额<span>0</span></li>
			<li>冻结资金<span>0</span></li>
			<li>实盘可买<span>0</span></li>
			<li>证券市值<span>0</span></li>
			<li>持仓盈亏<span>0</span></li>
		</ul>
	</div>
	<div class="news">
		<dl>
			<dt><img src="./public/stock/img/cai.png"></dt>
			<dd>财经早餐</dd>
			<dd>(最新鲜最全面的财经资讯)</dd>
		</dl>
		<dl>
			<dt><img src="./public/stock/img/liu.png"></dt>
			<dd>牛散实操</dd>
			<dd>(经典实战,牛散的操作)</dd>
		</dl>
	</div>
</div>

<div id="footer">
	<ul class="clear">
		<li class="active"><a href="./index.html"><i></i><span>首页</span></a></li>
		<li><a href="<?php echo url('index/index/stock'); ?>"><i></i>我要配资</a></li>
		<li><a href="<?php echo url('index/index/buy'); ?>"><i></i>我要交易</a></li>
		<li><a href="./ucenter/home.html"><i></i>账户中心</a></li>
	</ul>
</div>
<script src="./public/stock/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="./public/stock/js/swiper.jquery.min.js" type="text/javascript"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        autoplay : 4000,//可选选项，自动滑动
        loop : true,
        // 如果需要分页器
        pagination : '.swiper-pagination'
    });
</script>
<script>
    $(function(){
        $("#footer li").click(function(){
            $(this).addClass('active').siblings().removeClass('active');
        });

    });
</script>
</body>
</html>