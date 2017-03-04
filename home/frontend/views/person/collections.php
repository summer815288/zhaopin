﻿
    <div id="container">
        	  	
        <div class="clearfix">
            <div class="content_l">
            	<dl class="c_collections">
                    <dt>
                        <h1><em></em>我收藏的职位</h1>
                    </dt>
                    <dd>
                    	<form id="collectionsForm">
                            <ul class="reset my_collections">
								<?php foreach ($collect as $value):?>
                               	 <li data-id="133340">
                             		<a title="携程旅行网" target="_blank" href="h/c/6636.html">
                             			<img alt="携程旅行网" src="style/images/ff808081441c19bf01441f9a47190b3a.png">
                             		</a>
                             		<div class="co_item">
                             			<h2 title="酒店业务助理">
	                                        <a target="_blank" href="h/jobs/133340.html">
	                                        	<em><?php echo $value['jobs_name']?></em>
	                                        	<span>（<?php echo $value['wage_cn']?>）</span>
	                                    	</a>
	                                    </h2>
	                                    <span class="co_time">发布时间：<?php echo date("Y-m-d",$value['addtime'])?></span>
	                                    <div class="co_cate"><?php echo $value['companyname']?> / <?php echo $value['district_cn']?> / <?php echo $value['experience_cn']?> / <?php echo $value['education_cn']?></div>
	                                    <span class="co_youhuo c7"><?php echo $value['tag_cn']?></span>
										<a class="collection_link" target="_blank" href="h/jobs/133340.html">投个简历</a>
<!--										<i></i>-->
										<span class="collectdel"><a class="collectionCancel collection_link collected" href="javascript:;">
                                        	取消收藏
                                        	<span>已取消收藏</span>
                                        </a></span>
										<input type="hidden" name="id" value="<?php echo $value['id']?>">
                               		</div>
                            	</li>
								<?php endforeach;?>
							</ul>
						</form>
					</dd>
                </dl>
            </div>	
            <div class="content_r">
            	<div class="mycenterR" id="myInfo">
            		<h2>我的信息</h2>
            		<a href="collections.html">我收藏的职位</a>
            		<br>
            		            		<a target="_blank" href="subscribe.html">我订阅的职位</a>
            		            	</div><!--end #myInfo-->
            					<div class="greybg qrcode mt20">
                	<img width="242" height="242" alt="拉勾微信公众号二维码" src="style/images/qr_delivery.png">
                    <span class="c7">扫描拉勾二维码，微信轻松搜工作</span>
                </div>
            </div>
       	</div>
<script src="style/js/collections.min.js"></script>
<script>
	//取消收藏
	$(".collectdel").click(function () {
		var _this=$(".collectdel");
		var id=$(this).next().val();
		$.ajax({
			type: "POST",
			url: "?r=person/collectdel",
			data: {'id':id},
			success: function(msg){
				if(msg==1)
				{
					_this.parent().parent().remove();
				}
			}
		});
	})
$(function(){
	$('.Pagination').pager({
	      currPage: 1,
	      pageNOName: "pageNo",
	      form: "collectionsForm",
	      pageCount: 1,
	      pageSize:  5
	});
});
</script>
			<div class="clear"></div>
			<input type="hidden" value="4c6ae41d8c254f91becdb5f9ef2d4394" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<div id="footer">
		<div class="wrapper">
			<a rel="nofollow" target="_blank" href="h/about.html">联系我们</a>
		    <a target="_blank" href="h/af/zhaopin.html">互联网公司导航</a>
		    <a rel="nofollow" target="_blank" href="http://e.weibo.com/lagou720">拉勾微博</a>
		    <a rel="nofollow" href="javascript:void(0)" class="footer_qr">拉勾微信<i></i></a>
			<div class="copyright">&copy;2013-2014 Lagou <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP备14023790号-2</a></div>
		</div>
	</div>

<script src="style/js/core.min.js" type="text/javascript"></script>
<script src="style/js/popup.min.js" type="text/javascript"></script>

<!--  -->

<script type="text/javascript">
$(function(){
	$('#noticeDot-1').hide();
	$('#noticeTip a.closeNT').click(function(){
		$(this).parent().hide();
	});
});
var index = Math.floor(Math.random() * 2);
var ipArray = new Array('42.62.79.226','42.62.79.227');
var url = "ws://" + ipArray[index] + ":18080/wsServlet?code=314873";
var CallCenter = {
		init:function(url){
			var _websocket = new WebSocket(url);
			_websocket.onopen = function(evt) {
				console.log("Connected to WebSocket server.");
			};
			_websocket.onclose = function(evt) {
				console.log("Disconnected");
			};
			_websocket.onmessage = function(evt) {
				//alert(evt.data);
				var notice = jQuery.parseJSON(evt.data);
				if(notice.status[0] == 0){
					$('#noticeDot-0').hide();
					$('#noticeTip').hide();
					$('#noticeNo').text('').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
					$('#noticeNoPage').text('').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
				}else{
					$('#noticeDot-0').show();
					$('#noticeTip strong').text(notice.status[0]);
					$('#noticeTip').show();
					$('#noticeNo').text('('+notice.status[0]+')').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
					$('#noticeNoPage').text(' ('+notice.status[0]+')').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
				}
				$('#noticeDot-1').hide();
			};
			_websocket.onerror = function(evt) {
				console.log('Error occured: ' + evt);
			};
		}
};
CallCenter.init(url);
</script>

<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>