<?php
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div id="container">
            
           	<div class="sidebar">
           		 <div id="options" class="greybg">
                     <dl >
                       	<dt>月薪范围<em ></em></dt>
    	                <dd >
    						<?php foreach($wage_cn as $key =>$value):?>
    						<div class="wage"><?php echo $value['c_name']?></div>
    						<?php endforeach;?>
    	                 </dd>
                    </dl>
                    <dl >
                       	<dt>工作经验 <em ></em></dt>
    	                <dd >
    						<div>不限</div>
    						<?php foreach($experience_cn as $key =>$value):?>
    							<div class="experience"><?php echo $value['c_name']?></div>
    						<?php endforeach;?>
    					</dd>
                    </dl>
                    <dl >
                       	<dt>最低学历 <em ></em></dt>
    	                <dd >
    						<div>不限</div>
    						<?php foreach($education_cn as $key =>$value):?>
    							<div class="education"><?php echo $value['c_name']?></div>
    						<?php endforeach;?>
    					</dd>
                    </dl>
                    <dl >
                       	<dt>工作性质 <em ></em></dt>
    	                <dd >
    						<?php foreach($nature_cn as $key =>$value):?>
    							<div class="nature"><?php echo $value['c_name']?></div>
    						<?php endforeach;?>
    					</dd>
                    </dl>
                 </div>
                <!-- QQ群 -->
              <div class="qq_group">
	            	加入<span>前端</span>QQ群
	            	<div class="f18">跟同行聊聊</div>
	            	<p>160541839</p>
	            </div>
		                                
            <!-- 对外合作广告位  -->
             	    <a href="http://www.w3cplus.com/" target="_blank" class="partnersAd">
		            <img src="style/images/w3cplus.png" width="230" height="80" alt="w3cplus" />
		            </a>
		            <a href="" target="_blank" class="partnersAd">
		            <img src="style/images/jquery_school.jpg" width="230" height="80" alt="JQ学校" />
		            </a>
		            <a href="http://linux.cn/" target="_blank" class="partnersAd">
	            	<img src="style/images/linuxcn.png" width="230" height="80" alt="Linux中文社区"  />
		            </a>
		            <a href="http://zt.zhubajie.com/zt/makesite? utm_source=lagou.com&utm_medium=referral&utm_campaign=BD-yl" target="_blank" class="partnersAd">
		            <img src="style/images/zhubajie.jpg" width="230" height="80" alt="猪八戒" />
		            </a>
		            <a href="http://www.imooc.com" target="_blank" class="partnersAd">
		            <img src="style/images/muke.jpg" width="230" height="80" alt="幕课网" />
		            </a>
	        	       	<!-- 	            <a href="http://www.osforce.cn/" target="_blank" class="partnersAd">
	            	<img src="style/images/osf-lg.jpg" width="230" height="80" alt="开源力量"  />
	            </a>
	         -->
        </div>
        
        <div class="content">
        	<div id="search_box">
        	<?php $form = ActiveForm::begin([
        		'action' => ['index/list'],
        		'method'=>'get',
        		]); ?>
        <ul id="searchType">
        	<li data-searchtype="1" class="type_selected">职位</li>
        	<li data-searchtype="4">公司</li>
         </ul>
        <div class="searchtype_arrow"></div>
        <input type="text" id="search_input" name = "kd"  tabindex="1"   placeholder="请输入职位名称，如：产品经理"  />      
        <input type="submit" id="search_button" value="搜索" />
        <?php ActiveForm::end(); ?>
</div>
<script>
	    $('#options dd div').click(function() {
	        var firstName = $(this).parents('dl').children('dt').text();
	        var fn = $.trim(firstName);
	        var par=window.location.search;	            
	        if(fn=='月薪范围')
	        {
	            var val=$(this).html();
	            // $('#yxInput').attr('value',val);
	            location.href='index.php'+par+'&yx='+val;
	        }
	        else if(fn=="工作经验"){
	            var val=$(this).html();
	            var par=window.location.search;
	            location.href='index.php'+par+'&gj='+val;
	        }
	        else if(fn=="最低学历"){
	            var val=$(this).html();
	            location.href='index.php'+par+'&xl='+val;
	        }
	        else if(fn=="工作性质"){
	            var val=$(this).html();
	            var par=window.location.search;
	            location.href='index.php'+par+'&gx='+val;
	        }

	    });

	// $(".wage").click(function(){
	// 	var wage = $(this).html();
	// 	$.ajax({
	// 	   type: "POST",
	// 	   url: "?r=index/list",
	// 	   data: {wage:wage},
	// 	   // success: function(msg){
	// 	   //   alert( "Data Saved: " + msg );
	// 	   // }
	// 	});
	// })
	// $(".experience").click(function(){
	// 	var experience = $(this).html();
	// 	$.ajax({
	// 	   type: "POST",
	// 	   url: "?r=index/list",
	// 	   data: {experience:experience},
	// 	   // success: function(msg){
	// 	   //   alert( "Data Saved: " + msg );
	// 	   // }
	// 	});
	// })
	// $(".education").click(function(){
	// 	var education = $(this).html();
	// 	$.ajax({
	// 	   type: "POST",
	// 	   url: "?r=index/list",
	// 	   data: {education:education},
	// 	   // success: function(msg){
	// 	   //   alert( "Data Saved: " + msg );
	// 	   // }
	// 	});
	// })
	// $(".nature").click(function(){
	// 	var nature = $(this).html();
	// 	$.ajax({
	// 	   type: "POST",
	// 	   url: "?r=index/list",
	// 	   data: {nature:nature},
	// 	   // success: function(msg){
	// 	   //   alert( "Data Saved: " + msg );
	// 	   // }
	// 	});
	// })
</script>
<style>
.ui-autocomplete{width:488px;background:#fafafa !important;position: relative;z-index:10;border: 2px solid #91cebe;}
.ui-autocomplete-category{font-size:16px;color:#999;width:50px;position: absolute;z-index:11; right: 0px;/*top: 6px; */text-align:center;border-top: 1px dashed #e5e5e5;padding:5px 0;}
.ui-menu-item{ *width:439px;vertical-align: middle;position: relative;margin: 0px;margin-right: 50px !important;background:#fff;border-right: 1px dashed #ededed;}
.ui-menu-item a{display:block;overflow:hidden;}
</style>
<script type="text/javascript" src="style/js/search.min.js"></script>
<dl class="hotSearch">
	<dt>热门搜索：</dt>
	<dd><a href="#">PHP</a></dd>
	<dd><a href="#">Java</a></dd>
	<dd><a href="#">Android</a></dd>
	<dd><a href="#">iOS</a></dd>
	<dd><a href="#">前端</a></dd>
	<dd><a href="#">产品经理</a></dd>
	<dd><a href="#">UI</a></dd>
	<dd><a href="#">运营</a></dd>
	<dd><a href="#">BD</a></dd>
	<dd><a href="#">实习</a></dd>
</dl>			<div class="breakline"></div>
            <dl class="workplace" id="workplaceSelect">
                <dt class="fl">工作地点：</dt>
	               	<dd >
	                	<a href="javascript:;" class="current">全国</a>|
	                </dd>
					<?php foreach ($district as $key =>$value):?>
	               	<dd >
	                	<a href="javascript:;" ><?php echo $value['categoryname']?></a>|
	                </dd>
					<?php endforeach;?>
					  <dd  class="more" >
	                	<a href="javascript:;" id="up">其他</a>
	                	<div class="triangle citymore_arrow" id="up"></div>
					  </dd>
					  <dd id="box_expectCity" class="searchlist_expectCity dn">
					    <span class="bot"></span>
		            	<span class="top"></span>
<!--						展示				-->
						<div class="data-row item-list data-row-nob clearfix" id="show">
							<div class="data-row-side-r615" style="position: relative">
								<ul>
									<?php foreach ($address as $key =>$value):?>
									<li class="" style="list-style: none;width: 100px">
										<a class="cat" rel="2.0" data="2.0,上海市" href="javascript:;" title="上海市"><button style="line-height:10px;width:15px;" class="jia">+</button><?php echo $value['categoryname']?></a>
										<div class="box1" style="width: 400px;display: none;background-color: #00a7d0;position: absolute;z-index: inherit">
											<ul>
											<?php foreach ($value['son'] as $k =>$v):?>
												<li class="cname" style="list-style: none;width: 100px"><span><?php echo $v['categoryname']?></span></li>
											<?php endforeach;?>
											</ul>
										</div>
									</li>
									<?php endforeach;?>
								</ul>
							</div>
						</div>
				     </dd>
            </dl>
         
            <div id="tip_didi" class="dn">
            	<span>亲，“嘀嘀打车”已更名为“滴滴打车”了哦，我们已帮您自动跳转~</span>
            	<a href="javascript:;">我知道了</a>
            </div>
				<ul class="hot_pos reset">
				<?php foreach($models as $key =>$value):?>
					<li class="odd clearfix">

						<div class="hot_pos_l">
							<div class="mb10">
								<a href="h/jobs/147974.html" target="_blank"><?php echo $value['jobs_name']?></a>&nbsp;
								<span class="c9">[<?php echo $value['district_cn']?>]</span>
							</div>
							<span><em class="c7">月薪： </em><?php echo $value['wage_cn']?></span>
							<span><em class="c7">经验：</em> <?php echo $value['experience_cn']?></span>
							<span><em class="c7">最低学历： </em><?php echo $value['education_cn']?></span>
							<br />
							<span><em class="c7">职位诱惑：</em><?php echo $value['contents']?></span>
							<br />
							<span><em class="c7">工作性质：</em><?php echo $value['nature_cn']?></span>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<span><?php echo date("Y-m-d",$value['addtime'])?>发布</span>
							<!-- <a  class="wb">分享到微博</a> -->
						</div>
						<div class="hot_pos_r">
							<div class="apply">
								<a href="?r=index/toudi&id=<?= $value['id']?>" target="_blank">投个简历</a>
							</div>
							<div class="mb10"><a href="h/c/7626.html" title="网利宝" target="_blank"><?php echo $value['companyname']?></a></div>
							<span><em class="c7">领域： </em><?php echo $value['trade_cn']?></span>
<!--							<span><em class="c7">创始人：</em> 赵润龙（Kevin Chiu）</span>-->
							<br />
							<span><em class="c7">阶段： </em>成长型(A轮)</span>
							<span><em class="c7">规模： </em><?php echo $value['scale_cn']?></span>
							<ul class="companyTags reset">
								<?php foreach(explode(",",$value['tag_cn']) as $k =>$v):?>
									<li><?php echo $v?></li>
								<?php endforeach;?>
							</ul>
						</div>
					</li>
				<?php endforeach;?>
			</ul>
	        <div>
        		<?= LinkPager::widget(['pagination' => $pages,'nextPageLabel' => '下一页', 'prevPageLabel' => '上一页','firstPageLabel' => '首页', 'lastPageLabel' => '尾页','options' => ['class' => 'pre'],]); ?>
	       </div>
	        </div>


<script>
//热门搜索
$(".hotSearch").click(function(){
	var hot = $(this).contents().next().children().html();
	var par=window.location.search;
	location.href='index.php'+par+'&hot='+hot;
})

	//展示省级地区
	$("#up").click(function () {
		$(this).parent().next().show();
	})
	//展示子级地区
	$(".jia").click(function () {
		$(this).parent().next().show();
	})
	$(".cname").click(function () {
		$("#box_expectCity").hide();
	})
	$(".box1").mouseleave(function(){
		$(this).hide();
	})


$(function(){
	/***************************
 	 * 分页
 	 */
 	 	$('.Pagination').pager({
		      currPage: 1,
		      pageNOName: "pn",
		      form: "searchForm",
		      pageCount: 30,
		      pageSize:  5 
		});
		
	$(".workplace dd").not('.more').children('a').click(function(){
		$('#lc').val(1);
		editForm("cityInput" , $(this).html());
	});
	
	$("#box_expectCity dd span").click(function(){
		$('#lc').val(1);
		editForm("cityInput" , $(this).html());
	});
	
	$('#options dd div').click(function(){
		var firstName = $(this).parents('dl').children('dt').text();
		var fn = $.trim(firstName);
		if (fn=="月薪范围"){
			editForm("yxInput" , $(this).html());
		}
		else if(fn=="工作经验"){
			editForm("gjInput" , $(this).html());
		}
		else if(fn=="最低学历"){
			editForm("xlInput" , $(this).html());
		}
		else if(fn=="工作性质"){
			editForm("gxInput" , $(this).html());
		}
		else if(fn=="发布时间"){
			editForm("stInput" , $(this).html());
		}
	});
	
	$('#selected ul').delegate('li span.select_remove','click',function(event){
		var firstName = $(this).parent('li').find('strong').text();
		var fn = $.trim(firstName);
		if (fn=="月薪范围")
			editForm("yxInput" , "");
		else if(fn=="工作经验")
			editForm("gjInput" , "");
		else if(fn=="最低学历")
			editForm("xlInput" , "");
		else if(fn=="工作性质")
			editForm("gxInput" , "");
		else if(fn=="发布时间")
			editForm("stInput" , "");
	});
	
	/* search结果飘绿	*/
	(function($) {
		var searchVal = $('#search_input').val();
		var reg = /\s/g;     
		searchVal = searchVal.replace(reg, "").split(""); 
		
		var resultL = '';
		var resultR = '';
		$('.hot_pos li').each(function(){
			resultL = $('.hot_pos_l a',this).text().split("");
			$.each(resultL,function(i,v){
				if($.inArray(v.toLowerCase(),searchVal) != -1 || $.inArray(v.toUpperCase(),searchVal) != -1){
					resultL[i] = '<span>'+ v +'</span>';
				}
			});
			$('.hot_pos_l a',this).html(resultL.join(''));
			
			resultR = $('.hot_pos_r .mb10 a',this).text().split("");
			$.each(resultR,function(i,v){
				if($.inArray(v.toLowerCase(),searchVal) != -1 || $.inArray(v.toUpperCase(),searchVal) != -1){
					resultR[i] = '<span>'+ v +'</span>';
				}
			});
			$('.hot_pos_r .mb10 a',this).html(resultR.join(''));
		});
		
	})(jQuery);
	
	//didi tip
   	if($.cookie('didiTip') != 1 && false){
		$('#tip_didi').show();
	}
	$('#tip_didi a').click(function(){
		$(this).parent().remove();
		$.cookie('didiTip',1,{ expires: 30, path: '/'});
	});
	
});

function editForm(inputId,inputValue){
	$("#"+inputId).val(inputValue);
	var keyword = $.trim($('#search_input').val());
	var reg =  /[`~!@\$%\^\&\*\(\)_<>\?:"\{\},\\\/;'\[\]]/ig;
	var re = /#/g;
	var r = /\./g;
	var kw = keyword.replace(reg," ");

	if(kw == ''){
		$('#searchForm').attr('action','list.html所有职位').submit();	
	}else{
		kw = kw.replace(re,'井');
		kw = kw.replace(r,'。');
		$('#searchForm').attr('action','list.html'+kw).submit();
	}
	//$("#searchForm").submit();
}
</script>

			<div class="clear"></div>
			<input type="hidden" id="resubmitToken" value="" />
	    	<a id="backtop" title="回到顶部" rel="nofollow"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<div id="footer">
		<div class="wrapper">
			<a href="h/about.html" target="_blank" rel="nofollow">联系我们</a>
		    <a href="h/af/zhaopin.html" target="_blank">互联网公司导航</a>
		    <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
		    <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
			<div class="copyright">&copy;2013-2014 Lagou <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">京ICP备14023790号-2</a></div>
		</div>
	</div>

<script type="text/javascript" src="style/js/core.min.js"></script>
<script type="text/javascript" src="style/js/popup.min.js"></script>


<!--  -->

</body>
</html>
