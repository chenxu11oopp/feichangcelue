<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\www\feichangcelue/application/index\view\ucenter\mobile\quick_pay.html";i:1528440039;}*/ ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>非常谋略</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="../public/static/home/css/mui.min.css" rel="stylesheet" />
		<link href="../public/static/home/css/moblie/mobliecom.css" rel="stylesheet" />
	</head>
<!--个人中心-充值-支付宝-->
	<body class="quick_body payment_body">
		<header class="bg_fff mui-bar mui-bar-nav">
		    <a class="color_red mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		    <h1 class="mui-title">连连支付</h1>
		</header>
		<div class="mui-content">
		   <div class="money">账户余额：<span class="balance color_red"><?php echo $usableSum; ?></span>元</div>
			<p class="tip"><img src="../public/static/home/img/moblie/yl2.png">无需开通网银，有银行卡就能支付</p>
			<form class="mui-input-group" action="<?php echo url('index/lianlianauthpay/authllpay_wap'); ?>" method="get" target="_blank" >
			     <div class="mui-input-row">
			        <label>银行卡号</label>
			        <div class="bankcard input_r">
						<input type="text" name="bankCard" class="mui-input-clear" placeholder="银行卡号" data-input-clear="1">
			        </div>
			    </div>
			     <div class="mui-input-row">
			        <label>姓名</label>
			        <div class="bankcard input_r">
						<input type="text" name="realName" class="mui-input-clear" placeholder="姓名" data-input-clear="1">
			        </div>
			    </div>
			    <div class="mui-input-row">
			        <label>身份证号</label>
			        <div class="bankcard input_r">
						<input type="text" name="IDCard" class="mui-input-clear" placeholder="身份证号" data-input-clear="1">
			        </div>
			    </div>
			    <div class="mui-input-row">
			        <label>充值金额</label>
					<div class="bankcard input_r">
			        <input type="text" name="b-pay-amount" class="mui-input-clear" placeholder="最低1元起充" data-input-clear="1">
					</div>
			    </div>
				<p class="tip1 font12" style="display:none;">注：单卡单笔限额5000，每日最高1万</p>
				<div class="btn_box" style="background: #efeff4;padding-top: 25px;">
					<button type="submit" class="ml_btn mui-btn mui-btn-block">提交</button>
				</div>
			</form>
		</div>




		<!---js---->
		<script src="../public/static/home/js/moblie/mui.min.js"></script>
		<script type="text/javascript">
			mui.init({
				swipeBack: true //启用右滑关闭功能
			})
		</script>
	</body>
</html>
