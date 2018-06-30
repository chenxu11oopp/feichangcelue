<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"E:\www\feichangcelue/application/index\view\ucenter\mobile\index.html";i:1528681619;s:65:"E:\www\feichangcelue/application/index\view\public\PublicNav.html";i:1528425165;}*/ ?>
<!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>非常谋略</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="../public/static/home/css/mui.min.css" rel="stylesheet" />
		<link href="../public/static/home/css/moblie/mobliecom.css" rel="stylesheet" />
	</head>
	<!--个人中心-资金明细-->

	<body class="moneydetail_body">
		<header class="bg_fff mui-bar mui-bar-nav">
			<a class="color_red mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="javascript:history.back(-1)"></a>
			<h1 class="mui-title">资金明细</h1>
		</header>
		<nav class="ml_tab mui-bar mui-bar-tab">
    <a class="mui-tab-item" href="./index.html">
        <span class="mui-icon mui-icon-home"></span>
        <span class="mui-tab-label">首页</span>
    </a>
    <a class="mui-tab-item" href="<?php echo url('index/index/stock'); ?>">
        <span class="mui-icon mui-icon-phone"></span>
        <span class="mui-tab-label">我要配资</span>
    </a>
    <a class="mui-tab-item" href="<?php echo url('index/index/buy'); ?>">
        <span class="mui-icon mui-icon-phone"></span>
        <span class="mui-tab-label">我要交易</span>
    </a>
    <a class="mui-tab-item mui-active" href="./ucenter/home.html">
        <span class="mui-icon mui-icon-email"></span>
        <span class="mui-tab-label" id="abc">账户中心</span>
    </a>
</nav>
		<div class="mui-content">
			<div class="">
				<!--控制器-->
				<div class="mui-segmented-control mui-segmented-control-inverted">
					<a class="mui-control-item <?php if($_GET['flow'] == ''): ?> mui-active <?php endif; ?>" href="../ucenter/index.html?recent=<?php echo $_GET['recent']; ?>" >全部</a>
					<a class="mui-control-item <?php if($_GET['flow'] == '1'): ?> mui-active <?php endif; ?>" href="../ucenter/index.html?flow=1&recent=<?php echo $_GET['recent']; ?>" >收入</a>
					<a class="mui-control-item <?php if($_GET['flow'] == '2'): ?> mui-active <?php endif; ?>" href="../ucenter/index.html?flow=2&recent=<?php echo $_GET['recent']; ?>" >支出</a>
				</div>
				<!--内容-->
				<div class="">
					<!--item1-收入和支出-->
					<div id="item1" class="mui-control-content mui-active">
						<?php if(($fundrecord|count) >  '0'): ?>
						<ul class="mui-table-view mui-table-view-striped mui-table-view-condensed">
							<?php if(is_array($fundrecord) || $fundrecord instanceof \think\Collection || $fundrecord instanceof \think\Paginator): $i = 0; $__LIST__ = $fundrecord;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li class="mui-table-view-cell">
								<div class="mui-table">
									<div class="mui-table-cell mui-col-xs-10">
										<h5 class="money_title color_black"><?php echo $vo['remarks']; ?></h5>
										<p class="money_date mui-h6"><?php echo $vo['createTime']; ?></p>
									</div>
									<div class="mui-table-cell mui-col-xs-2 mui-text-right">
										<?php if($vo['flow'] == 2): ?><span class="money_num mui-h5 color_green">-<?php echo round($vo['amount'],2); ?></span>
						                <?php else: ?><span class="money_num mui-h5 color_red"><?php echo round($vo['amount'],2); ?></span>
						                <?php endif; ?>
									</div>
								</div>
							</li>
							 <?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<div class="pagination_box">
					    	<?php echo $fundrecord->render(); ?>
					   </div>
					    <?php else: ?>
					    <p class="data_empty">暂无数据</p>
					    <?php endif; ?>
					</div>

				</div>
			</div>

		</div>
		<!---js---->
		<script src="/public/static/home/js/moblie/mui.min.js"></script>
		<script type="text/javascript">
			mui.init({
				swipeBack: true //启用右滑关闭功能
			})
			//href
			 mui('body').on('tap', 'a', function() {
	                    var data_href = this.getAttribute("data-href");
	                    var href = this.getAttribute("href");
	                    var url=data_href;
	                    if(!url||url==''){
	                        url=href;
	                    }
	                    window.location.href = url;
	         });
		</script>
	</body>

</html>