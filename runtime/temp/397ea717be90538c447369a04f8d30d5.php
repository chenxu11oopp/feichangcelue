<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"E:\www\feichangcelue/application/index\view\ucenter\mobile\sell.html";i:1528681427;s:65:"E:\www\feichangcelue/application/index\view\public\PublicNav.html";i:1528425165;}*/ ?>
<!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>非常谋略</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="./public/static/home/css/mui.min.css" rel="stylesheet" />
		<link href="./public/static/home/css/moblie/tradeCommon.css" rel="stylesheet" />
	</head>
	<!--点卖区域-->
	<body class="sell_body">
		<!--标题-->
		<header class="ml_header mui-bar mui-bar-nav">
			<a class="color_red mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">
		    	<a class="Asharebuy color_red" href="/buy.html">A股点买</a>
		    	<a class="freetrial" href="/freetrial.html">免费体验</a>
		    </h1>
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
		<!--主体-->
		<div class="mui-content">
			<!--链接-->
			<div class="bg_fff mui-segmented-control mui-segmented-control-inverted">
				<a class="mui-control-item " href="./buy.html">点买</a>
				<a class="sell_a mui-control-item mui-active" href="./sell.html">点卖<span id="shareNum"><?php echo $count; ?></span></a>
				<a class="mui-control-item" href="./history.html">结算</a>
			</div>
			<!--内容-->
			<div id="item1" class="mui-control-content mui-active">
				<?php if(($list|count) >  0): ?>
				<ul class="mui-table-view" id="ul_list">
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				    <li class="mui-table-view-cell mui-collapse">
				        <a class="mui-navigate-right" href="#">
				        	<div class="share_l mui-pull-left">
				        		<h5 class="stockName">
				        			<?php echo $vo['stockName']; ?>
				        			<span class="stockNum font12">(<?php echo $vo['stockCode']; ?>)</span>
				        		</h5>
				        		<p>金额：<span class="moneyNum" style="margin-right: 5px;"><?php echo $vo['dealAmount']; ?>万</span>
				        			  <span class="usableNum"><?php echo $vo['dealQuantity'] * 100; ?></span>股
				        			(<span class="state">可用</span>)
				        		</p>
				        	</div>
				        	<span class="share_r mui-pull-right">
				        		查看详情
				        	</span>
				        </a>
				        <div class="cont mui-row">
				        	<div class="mui-col-xs-3 mui-col-sm-3">
				        		<p class="font12">止盈 <em><?php echo $vo['surplus']; ?></em>元</p>
				        		<p class="font12">止损 <b><?php echo $vo['loss']; ?></b>元</p>
				        	</div>
				        	<div class="mui-col-xs-3 mui-col-sm-3">
				        		<p class="font12">买入<em><?php echo round($vo['dealPrice'],2); ?></em>元</p>
				        		<p class="font12">当前<b class="color"><?php echo round($list2[$i-1][nowPrice],2); ?></b>元</p>
				        	</div>
				        	<div class="num_info mui-col-xs-3 mui-col-sm-3 color" >
				        	<?php echo $list2[$i-1][profitAmount]; ?>
				        	</div>
				        	<div class="num_info color_red mui-text-right mui-col-xs-3 mui-col-sm-3">
				        		<!--<button id="<?php echo $vo['id']; ?>" index="<?php echo $i; ?>" class="btnSell match_btn sell_btn font12" href="javascript:void(0);">匹配中</button>-->
				        		<button id="<?php echo $vo['id']; ?>" index="<?php echo $i; ?>" class="btnSell sell_btn font12" href="javascript:void(0);">卖出</button>
				        	</div>
				        </div>
				        <div class="share_info mui-collapse-content">
				            <ul>
				            	<li class="mui-clearfix">
				            		<span class="li_l mui-pull-left font12">买入时间</span>
				            		<span class="li_r mui-pull-right font12"><?php echo $vo['createTime']; ?></span>
				            	</li>
				            	<li class="mui-clearfix">
				            		<span class="li_l mui-pull-left font12">交易单号</span>
				            		<span class="li_r mui-pull-right font12"><?php echo $vo['id']; ?></span>
				            	</li>
				            	<li class="mui-clearfix">
				            		<span class="li_l mui-pull-left font12">保证金</span>
				            		<span class="li_r mui-pull-right font12"><?php echo $vo['guaranteeFee']; ?>元</span>
				            	</li>
				            	<li class="mui-clearfix">
				            		<span class="li_l mui-pull-left font12">递延线</span>
				            		<span class="li_r mui-pull-right font12"><?php echo $vo['delayLine']; ?>元</span>
				            	</li>
				            	<li class="mui-clearfix">
				            		<span class="li_l mui-pull-left font12">止损线</span>
				            		<span class="li_r mui-pull-right font12"><?php echo $vo['loss']; ?>元</span>
				            	</li>
				            	<li class="mui-clearfix">
				            		<span class="li_l mui-pull-left font12">递延天数</span>
				            		<span class="li_r mui-pull-right font12"><?php if($vo['delayDays'] > 2): ?><?php echo $vo['delayDays'] - 2; else: ?>0<?php endif; ?>天</span>
				            	</li>
				            	<li class="mui-clearfix">
				            		<span class="li_l mui-pull-left font12">递延费</span>
				            		<span class="li_r mui-pull-right font12"><?php echo $vo['delayFeeSum']; ?></span>
				            	</li>
				            	<li class="mui-clearfix">
				            		<span class="li_l mui-pull-left font12">浮动盈亏比</span>
				            		<span class="li_r mui-pull-right font12 color"><?php echo $list2[$i-1][rate] * 100; ?>%</span>
				            	</li>
				            	<p class="float_p bg_fff">浮动盈亏
				            		<span class="color profitAmount">
				            		<?php echo $list2[$i-1][profitAmount]; ?>
				            		</span>
				            	</p>
				            </ul>
				        </div>
				    </li>
				    <?php endforeach; endif; else: echo "" ;endif; ?>
				    <div class="pagination_box">
				    	<?php echo $list->render(); ?>
				    </div>

            		<?php else: ?>
            		<p class="data_empty">暂无持仓</p>
            		<?php endif; ?>

				</ul>
				<p class="mtop_25 mui-text-center">当前持仓所需递延费为<span class="color_red"><?php echo (isset($delayFeeSum) && ($delayFeeSum !== '')?$delayFeeSum:0); ?></span> 元（周末及节假日免费）</br>持仓盈利总计：<span class="color_red"><?php echo (isset($profitSum) && ($profitSum !== '')?$profitSum:0); ?></span> 元</p>




			</div>
		</div>

		<!---js---->
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="/public/static/home/js/moblie/mui.min.js"></script>
		<script type="text/javascript">

			//改变颜色
			$("#ul_list>li").each(function(i, o){
				var p = parseFloat($(o).find(".profitAmount").html());
				if(p > 0){
					$(o).find(".color").addClass("color_red");
				}else if(p < 0){
					$(o).find(".color").addClass("color_green");
				}
			});

			mui.init({
				swipeBack: true //启用右滑关闭功能
			});
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

         //cont
         $('.cont').on('tap',function(e){
         	e.stopPropagation()
         })
         //match_btn
         $('.match_btn').attr('disabled','disabled')

         //sell_btn点买按钮按下时
         $('.sell_btn').on('tap',function(e){
         	var index = $(this).attr("index");
         	//所有未点卖的股票信息
		    var listJson = JSON.parse('<?php echo $listJson; ?>').data;
		    //股票中的4个信息
		    var listJson2 = JSON.parse('<?php echo $listJson2; ?>');

		    var i = index - 1;
		    //股票名称编号
		    var t_code='交易品种:'+listJson[i]['stockName'] + "(" + listJson[i]['stockCode'] + ")"
		    //卖出数量xx手
		    var t_quantity='卖出数量:'+listJson[i]['dealQuantity'] + "手"
			//买入时间
			var t_time='买入时间:'+listJson[i]['createTime'];
			//递延天数
			var t_delayDays='递延天数:'+listJson2[i]['delayDays'];
		    //浮动盈亏
		    var t_profit='浮动盈亏:'+listJson2[i]['profitAmount']+'&nbsp(仅供参考)';
		    //拿到当前按钮的id
         	var orderId = $(this).attr('id');
         	//弹出确认框
         	mui.confirm(t_code+'\n'+t_quantity+'\n'+t_time+'\n'+t_profit,'确认卖出？',['确认','取消'],function(e){
         		if(e.index==0){
				    var params = { orderId : orderId };
				    if(orderId <= 0){
				        mui.alert("订单号不正确");
				        return;
				    }
				    $(this).attr("disabled", true);
				    $.post("/index/ucenter/stockSell", params, function(data){
				        $(".sell_btn").attr("disabled", false);
				        if(data.code == '0'){
				            mui.alert("交易成功");
				            location.href = "/history.html";
				        }else{
				            mui.alert(data.msg);
				        }
				    }, 'json');
         		}else if(e.index==1){
         			mui.toast('还没卖出')
         		}
         	})
         })
            //分页高亮
            $('.pagination_box ul.pagination>li').on('tap',function(){
            	if($(this).hasClass('disabled')){return}
            	$(this).addClass('active').siblings().removeClass('active');
            	mui.toast('正在加载...')
            })
		</script>
	</body>

</html>