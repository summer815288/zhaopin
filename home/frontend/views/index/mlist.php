<div id="container">
        	  	
        <div class="clearfix">
            <div class="content_l recommend_list">
<!--            	<h2>拉勾网根据你的个人简历为你推荐以下职位： <a class="more" href="jianli.html">修改简历信息&gt;&gt;</a></h2>-->
            	
            	<ul class="hot_pos reset">
					<?php foreach($list as $value):?>
	            	<li class="clearfix">
		            	<div class="hot_pos_l">
							<div class="mb10">
								<a target="_blank" href="http://www.lagou.com/jobs/22194.html"><?php echo $value['jobs_name']?></a>&nbsp;
								<span class="c9">[<?php echo $value['district_cn']?>]</span>
							</div>
							<span><em class="c7">月薪： </em><?php echo $value['wage_cn']?></span>
							<span><em class="c7">经验：</em> <?php echo $value['experience_cn']?></span>
							<span><em class="c7">最低学历： </em><?php echo $value['education_cn']?></span>
							<br />
							<span><em class="c7">职位诱惑：</em><?php echo $value['contents']?>等</span>
							<br />
							<span><?php echo date("Y-m-d",$value['addtime'])?>发布</span>
			                        <!-- <a  class="wb">分享到微博</a> -->
			            </div>
			            <div class="hot_pos_r">
							<div class="mb10 recompany"><a target="_blank" href="http://www.lagou.com/c/5004.html"><?php echo $value['companyname']?></a></div>
							<span><em class="c7">领域：</em> <?php echo $value['trade_cn']?></span><br>
							<span><em class="c7">阶段：</em> 上市公司</span>
							<span><em class="c7">规模：</em> <?php echo $value['scale_cn']?></span>
							<ul class="companyTags reset">
								<?php foreach(explode(",",$value['tag_cn']) as $k =>$v):?>
									<li><?php echo $v?></li>
								<?php endforeach;?>
							</ul>
			             </div>
			         </li>
					<?php endforeach;?>
				</ul>
	            
	            <form id="searchForm"></form>
	                                <div class="Pagination myself"><a title="1" >首页</a><span title="上一页" class="disabled">上一页 </span><span title="1" class="current">1</span><a title="2" >2</a><a title="3" >3</a><a title="4" >4</a><a title="5" >5</a><a title="2" >下一页 </a><a title="7" >尾页</a></div>
                            </div>	
            <div class="content_r">
            	<div class="subscribe_side">
	            	<a target="_blank" href="subscribe.html">
	                    <div class="subpos"><span>订阅</span> 职位</div>
	                    <div class="c7">拉勾网会根据你的筛选条件，定期将符合你要求的职位信息发给你
	                    </div>
	                    <div class="count">已有
	                    		                    		<em>3</em>
	                    		                    		<em>4</em>
	                    		                    		<em>2</em>
	                    		                    		<em>1</em>
	                    		                    		<em>0</em>
	                    		                    	人订阅
	                    </div>
	                    <i>我也要订阅职位</i>
	            	</a>
	            </div> 
                <div class="greybg qrcode mt20">
                	<img width="242" height="242" alt="拉勾微信公众号二维码" src="style/images/qrcode.jpg">
                    <span class="c7">扫描拉勾二维码，微信轻松搜工作</span>
                </div>
            </div>
       	</div>
      <input type="hidden" id="userid" name="userid" value="314873">
<script>
$(function(){
	
	/***************************
 	 * 分页
 	 */
 	 						$('.Pagination').pager({
		      currPage: 1,
		      pageNOName: "pn",
		      form: "searchForm",
		      pageCount: 7,
		      pageSize:  5 
		});
	});
</script>
			<div class="clear"></div>
			<input type="hidden" value="" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<div id="footer">
		<div class="wrapper">
			<a rel="nofollow" target="_blank" href="about.html">联系我们</a>
		    <a target="_blank" href="http://www.lagou.com/af/zhaopin.html">互联网公司导航</a>
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