<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\www\feichangcelue/application/index\view\ucenter\mobile\user_info.html";i:1528446747;}*/ ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>非常谋略</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="../public/static/home/css/mui.min.css" rel="stylesheet" />
		<link href="../public/static/home/css/moblie/mobliecom.css" rel="stylesheet" />
	</head>
<!--个人中心-实名认证（个人资料）-->
	<body class="userInfo_body">
		<header class="bg_fff mui-bar mui-bar-nav">
		    <a class="color_red mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		    <h1 class="mui-title">个人资料</h1>
		</header>
		<div class="mui-content">
		   <p class="ml-tip">请务必准确填写，以保证账号安全</p>
			<form class="mui-input-group">
			    <div class="mui-input-row">
			        <label>实名认证</label>
			        <p class="input_r mui-clearfix">
			        	<?php if($IDNumber == ''): ?>
			        	<span class="reallIdCard mui-pull-left">未认证</span>
			        	<a href="../ucenter/real_name.html" class="color_red real_name_a mui-pull-right">点击认证</a>
			        	<?php else: ?> 
			        	<span class="reallIdCard mui-pull-left color_black"><?php echo $IDNumber; ?></span>
			        	<?php endif; ?>
			        	
			        </p>
			    </div>
			   
			</form>
		</div>
		
		
	
		
		<!---js---->
		<script src="/public/static/home/js/moblie/mui.min.js"></script>
		<script type="text/javascript">
			mui.init({
				swipeBack: true //启用右滑关闭功能
			})
		</script>
	</body>
</html>

