<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"E:\phpStudy\PHPTutorial\WWW\feichangmoulue/application/index\view\index\mobile\freetrial.html";i:1527839585;}*/ ?>
<!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>非常谋略</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="./public/static/home/css/mui.min.css" rel="stylesheet" />
		<link href="./public/static/home/css/moblie/tradeCommon.css" rel="stylesheet" />
	</head>
	<!--免费体验区域-->
	<body class="buy_body">
		<!--标题-->
		<header class="ml_header mui-bar mui-bar-nav">
			<a class="color_red mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">
		    	<a class="Asharebuy" href="./buy.html">A股点买</a>
		    	<a class="freetrial color_red" href="./freetrial.html">免费体验</a>
		    </h1>
		</header>
		<!--主体-->
		<div class="mui-content">
			<!--链接-->
			<div class="bg_fff mui-segmented-control mui-segmented-control-inverted">
				<a class="mui-control-item mui-active" href="./freetrial.html">点买</a>
				<a class="sell_a mui-control-item" href="./freetrialSell.html">点卖</a>
				<a class="mui-control-item" href="./freetrialHistory.html">结算</a>
			</div>
			<!--内容-->
			<div id="item1" class="mui-control-content mui-active">
				<!--搜索-->
				<div class="search_box">
					<div class="mui-input-row mui-search">
						<input id="searchTxt1" type="search" class="mui-input-clear" placeholder="请输入股票名称/代码/简拼">
					</div>
					<ul class="search_ul"></ul>
				</div>
				<!--标题-->
				<div class="share_title share_title1 bg_fff mui-clearfix">
					<div class="title_l mui-pull-left">
						<h5 id="stockName">招商银行</h5>
						<span id="stockNum" class="font14">600036</span>
					</div>
					<div class="title_r mui-pull-right">
						<h5 id="nowPrice" class="color">----</h5>
						<span id="num1" class="color font14">--</span>
						<span id="num2" class="color font14">--</span>
					</div>
				</div>
				<!--图表-->
				<div class="chart_box">
					<!--控制器-->
					<div class="chart_control mui-segmented-control mui-segmented-control-inverted">
						<a class="mui-control-item mui-active" href="#item_1">分时</a>
						<a class="mui-control-item" href="#item_2">日K</a>
					</div>
					<!--内容-->
						<!--item1-->
						<div id="item_1" class="mui-control-content mui-active">
							<!-- 为ECharts准备分时图 -->
   							<div class="figure" id="chart" style="-webkit-tap-highlight-color:transparent;user-select:none;background:none;cursor:default;position:relative;overflow:hidden;width:350px;height:250px;margin: 0 auto;"></div>
                    	</div>
						<!--item2-->
						<div id="item_2" class="mui-control-content">
							<div class="figure" id="chartK" style="-webkit-tap-highlight-color:transparent;user-select:none;background:none;cursor:default;position:relative;overflow:hidden;width:350px;height:250px;margin: 0 auto;"></div>
                    	</div>
						<!--loading-->
						<div class="loader">
							<div class="loading-3">
						    	<i></i>
						    	<i></i>
						    	<i></i>
						    	<i></i>
						    	<i></i>
						    	<i></i>
						    	<i></i>
						    	<i></i>
						    </div>
						</div>
				</div>
				<!--买买买-->
				<div class="stock-price f-right mui-row" id="stock-price">
                        <ul class="sell mui-col-xs-6 mui-row">
                            <li class=""><em>卖⑤</em><b class="red">--</b><i>--</i></li>
                            <li class=""><em>卖④</em><b class="red">--</b><i>--</i></li>
                            <li class=""><em>卖③</em><b class="red">--</b><i>--</i></li>
                            <li class=""><em>卖②</em><b class="red">--</b><i>--</i></li>
                            <li class=""><em>卖①</em><b class="red">--</b><i>--</i></li>
                        </ul>
                        <ul class="buy mui-col-xs-6 mui-row">
                            <li><em>买①</em><b class="red">--</b><i>--</i></li>
                            <li><em>买②</em><b class="red">--</b><i>--</i></li>
                            <li><em>买③</em><b class="red">--</b><i>--</i></li>
                            <li><em>买④</em><b class="red">--</b><i>--</i></li>
                            <li><em>买⑤</em><b class="red">--</b><i>--</i></li>
                        </ul>
                </div>
				<a type="button" id="buy_step1" tapEvent='true' class="ml_btn_bot mui-btn mui-btn-block" href="javascript:;">买  入</a>
			</div>
			<!--购买界面-->
			<div id="item2" class="mui-control-content mui-active bg_fff">
				<!--标题-->
				<div class="t_stock_name share_title bg_fff mui-clearfix" style="padding-bottom: 0;">
					<div class="title_l mui-pull-left">
						<h5 id="t_stock_name">招商银行</h5>
						<span id="stockNum" class="font14">600036</span>
					</div>
					<div class="title_r mui-pull-right mui-text-right">
						<h5 class="color_red" style="font-size: 24px;"><?php echo (isset($usableSum) && ($usableSum !== '')?$usableSum:0); ?></h5>
						<p>账户余额(元)</p>
					</div>
				</div>
				<p class="p_title1 color_black bg_fff">买入金额</p>
				<div id="buy_price_ul" class="choseBox1 mui-row mui-text-center bg_fff">
					<li class="chose_item mui-col-xs-3">
						<a class="chose_a chose-active" href="javascript:void(0);">2000</a>
					</li>

				</div>
				<p class="pad10 font12">操作提示：免费体验限额2000元，更多金额请到A股点买区操作。</p>
				<p class="pad10 color_black font12">可买入<span id="gu" class="color_red">-</span>股，资金利用率<span id="lyl" class="color_red">-</span></p>
				<ul class="choseBox2" style="margin: 0;">
					<li class="mui-row">
						<p class="mui-col-xs-3 mui-col-sm-3">持仓时间</p>
						<div class="chose_item mui-col-xs-9 mui-col-sm-9">
							<a class="bz_text" href="javascript:void(0);" style="color: black;">T+1|D</a>
						</div>
						<p class="mui-col-xs-3 mui-col-sm-3">盈利分配</p>
						<div class="chose_item mui-col-xs-9 mui-col-sm-9">
							<a class="bz_text" href="javascript:void(0);" style="color: black;">90%</a>
						</div>
						<p class="mui-col-xs-3 mui-col-sm-3">履约保证金</p>
						<div class="chose_item mui-col-xs-9 mui-col-sm-9">
							<a id="guaranteeFee" class="bz_text" href="javascript:void(0);">0元</a>
						</div>
					</li>
					<li class="mui-row">
						<p id="check-surplus" class="mui-col-xs-3 mui-col-sm-3">触发止盈</p>
						<div id="check-surplus_ul" class="chose_item mui-col-xs-9 mui-col-sm-9">
							<a class="bz_text" href="javascript:void(0);">20%</a>
						</div>
					</li>

				</ul>
				<div class="result_box">
					<ul class="pad10" style="margin: 0;">
						<li class="mui-clearfix">
							<span class="li_l mui-pull-left">交易综合费</span>
							<span id="publicFee" class="li_r mui-pull-right"><span class="color_red">1</span>&nbsp;元</span>
						</li>
						<li class="total mui-clearfix">
							<span class="li_l mui-pull-left">总计</span>
							<span class="li_r mui-pull-right"><span id="total" class="color_red">1</span>&nbsp;元</span>
						</li>
					</ul>
					<p class="pad10 font12">点卖时间段：交易日09:30-11:30  |  13:00-14:58</p>
					<div class="protocol_row last_p pad10">
                    <p><input type="checkbox" name="agree_pro" id="agree_pro" checked="true">我已阅并签署以下协议</p>
	                    <a href="./protocol_1.html" target="_blank">《非常谋略策略人参与沪深A股交易合作涉及费用及资费标准》</a>
	                    <a href="./protocol_2.html" target="_blank">《非常谋略投资人与点买人参与沪深A股交易合作协议》</a>
	                    <a href="./protocol_3.html" target="_blank">《非常谋略服务协议》</a>
	                </div>
				</div>

				<button id="buy_step2" type="button" class="ml_btn_bot mui-btn mui-btn-block">买  入</button>
			</div>

		</div>
		<script src="./public/static/libs/jquery-2.2.0/jquery-2.2.0.min.js"></script>
		<script src="./public/static/home/js/moblie/mui.min.js"></script>
		<script src="./public/static/home/js/echarts.min.js"></script>
		<script src="./public/static/home/js/moblie/freetrial_moblie.js"></script>
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



         //数据初始化
        var delayFee = parseInt("<?php echo $delayFee; ?>");
	    var dealFee = parseInt("<?php echo $dealFee; ?>");
	    var publicFee = parseInt("<?php echo $delayFee + $dealFee; ?>");
        buy_moblie.init();
		</script>
	</body>

</html>
