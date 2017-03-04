<?php
use yii\widgets\ActiveForm;
?>
 <div id="container">
        				
		<div id="sidebar">
			<div class="mainNavs">
				<?php foreach($list as $key =>$value):?>
				<div class="menu_box">
						<div class="menu_main">
							<h2><?php echo $value['categoryname']?> <span></span></h2>
							<?php foreach($value['son'] as $ke =>$val):?>
							<a href="h/jobs/list_Java?labelWords=label"><?php echo $val['categoryname']?></a>
							<?php endforeach;?>
						</div>
						<div class="menu_sub dn">
							<?php foreach($value['son'] as $ke =>$val):?>
							<dl class="reset">
								<dt>
									<a href="h/jobs/list_移动开发?labelWords=label"><?php echo $val['categoryname']?></a>
								</dt>
								<dd>
									<?php foreach($val['sun'] as $k =>$v):?>
									<a href="?r=index/mlist&job=<?php echo $v['categoryname']?>"><?php echo $v['categoryname']?></a>
									<?php endforeach;?>
								</dd>
							</dl>
							<?php endforeach;?>
						</div>
					</div>
				<?php endforeach;?>
							</div>
			<!-- <a class="subscribe" href="subscribe.html" target="_blank">订阅职位</a> -->
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
        <input type="text" id="search_input" name = "kd"  tabindex="1" value=""  placeholder="请输入职位名称，如：产品经理"  />
        <input type="submit" id="search_button" value="搜索" />
	<?php ActiveForm::end(); ?>
</div>
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
</dl>
<script>
	//热门搜索
	$(".hotSearch").click(function(){
		var hot = $(this).contents().next().children().html();
		var par='?r=index/list';
		location.href='index.php'+par+'&hot='+hot;
	})
</script>
	<div id="home_banner">
        <ul class="banner_bg">
        <li  class="banner_bg_1 current" >
                <a href="h/subject/s_buyfundation.html?utm_source=DH__lagou&utm_medium=banner&utm_campaign=haomai" target="_blank"><img src="style/images/d05a2cc6e6c94bdd80e074eb05e37ebd.jpg" width="612" height="160" alt="好买基金——来了就给100万" /></a>
            </li>
            	                <li  class="banner_bg_2" >
                <a href="h/subject/s_worldcup.html?utm_source=DH__lagou&utm_medium=home&utm_campaign=wc" target="_blank"><img src="style/images/c9d8a0756d1442caa328adcf28a38857.jpg" width="612" height="160" alt="世界杯放假看球，老板我也要！" /></a>
            </li>
            	                <li  class="banner_bg_3" >
                <a href="h/subject/s_xiamen.html?utm_source=DH__lagou&utm_medium=home&utm_campaign=xiamen" target="_blank"><img src="style/images/d03110162390422bb97cebc7fd2ab586.jpg" width="612" height="160" alt="出北京记——第一站厦门" /></a>
            </li>
            	            </ul>
        <div class="banner_control">
            <em></em> 
            <ul class="thumbs">
            		                    <li  class="thumbs_1 current" >
                    <i></i>
                    <img src="style/images/4469b1b83b1f46c7adec255c4b1e4802.jpg" width="113" height="42" />
                </li>
                	                    <li  class="thumbs_2" >
                    <i></i>
                    <img src="style/images/381b343557774270a508206b3a725f39.jpg" width="113" height="42" />
                </li>
                	                    <li  class="thumbs_3" >
                    <i></i>
                    <img src="style/images/354d445c5fd84f1990b91eb559677eb5.jpg" width="113" height="42" />
                </li>
                	                </ul>
        </div>
    </div><!--/#main_banner-->
	
	<ul id="da-thumbs" class="da-thumbs">
	<?php foreach($news as $k=>$v){?>
    		  <li >
                <a href="#" target="_blank">
                    <img src="<?= $v['news_img']?>" width="112" height="112" alt="联想" />
                    <div class="hot_info">
                    	<h2 title="联想"><?= $v['news_title']?></h2>
                        <em></em>
                        <p title="世界因联想更美好">
                        	<?= $v['news_content']?>
                        </p>
                    </div>
                </a>
            </li>
            <?php }?>
</ul>
                            
        <?php $session = Yii::$app->session; if($session->get('type') == 2){ ?>
            <ul class="reset hotabbing">
            	<li class="current">热门职位</li>
            	<li>最新职位</li>
            </ul>
            <div id="hotList">
	            <ul class="hot_pos reset">
					<?php foreach($jobs as $key =>$value):?>
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
					   		<span><em class="c7">职位诱惑：</em><?php echo $value['contents']?>等</span>
					   		<br />
					   		<span><?php echo date("Y-m-d",$value['addtime'])?>发布</span>
							<!-- <a  class="wb">分享到微博</a> -->
						</div>
			             <div class="hot_pos_r">
			                   <div class="mb10 recompany">
								   <a href="h/c/5232.html" target="_blank"><?php echo $value['companyname']?></a>
							   </div>
			                   <span><em class="c7">领域：</em> <?php echo $value['trade_cn']?></span>
			                   <br />
			                   <span><em class="c7">阶段：</em> 成长型(A轮)</span>
			                   <span><em class="c7">规模：</em><?php echo $value['scale_cn']?></span>
			                    <ul class="companyTags reset">
									<?php foreach(explode(",",$value['tag_cn']) as $k =>$v):?>
										<li><?php echo $v?></li>
									<?php endforeach;?>
								</ul>
			              </div>
					</li>
					<?php endforeach;?>
	                <a href="?r=index/list" class="btn fr" target="_blank">查看更多</a>
	             </ul>


	            <ul class="hot_pos hot_posHotPosition reset" style="display:none;">
					<?php foreach($jobs as $key =>$value):?>
					<li class="clearfix">
						<div class="hot_pos_l">
							 <div class="mb10">
								 <a href="h/jobs/147822.html" target="_blank"><?php echo $value['jobs_name']?></a>&nbsp;
								 <span class="c9">[北京]</span>
							  </div>
							  <span><em class="c7">月薪： </em><?php echo $value['wage_cn']?></span>
							  <span><em class="c7">经验：</em> <?php echo $value['experience_cn']?></span>
							  <span><em class="c7">最低学历： </em><?php echo $value['education_cn']?></span>
							  <br />
							  <span><em class="c7">职位诱惑：</em><?php echo $value['contents']?></span>
							  <br />
							  <span><?php echo date("Y-m-d",$value['addtime'])?>发布</span>
						</div>
						<div class="hot_pos_r">
								<div class="mb10 recompany">
									<a href="h/c/399.html" target="_blank"><?php echo $value['companyname']?></a>
								</div>
								<span><em class="c7">领域：</em> <?php echo $value['trade_cn']?></span>
<!--								<span><em class="c7">创始人：</em></span>-->
								<br />
								<span><em class="c7">性质：</em> <?php echo $value['nature_cn']?></span>
								<span><em class="c7">规模：</em><?php echo $value['scale_cn']?></span>
								<ul class="companyTags reset">
									<?php foreach(explode(",",$value['tag_cn']) as $k =>$v):?>
									<li><?php echo $v?></li>
									<?php endforeach;?>
								</ul>
						</div>
					</li>
					<?php endforeach;?>
					<a href="?r=index/list" class="btn fr" target="_blank">查看更多</a>
	            </ul>
            </div>
            <?php }else if($session->get('type') == 1){?>
				<ul class="reset hotabbing">
            	<li class="current">最新简历</li>            	
            	</ul>
            <div id="hotList">
	            <ul class="hot_pos reset">
					<?php foreach($resume as $key =>$value):?>
	                <li class="odd clearfix">
						 <div class="hot_pos_l">
							<div class="mb10">
								  <a href="<?php echo Url::toRoute(['person/resume_end','id'=>$value['id']]) ?>" target="_blank"><?php echo $value['major_cn']?></a>&nbsp;
								  <span class="c9">[<?php echo $value['district_cn']?>]</span>
							</div>
							<span><em class="c7">姓名： </em><?php echo $value['fullname']?></span>
							<span><em class="c7">性别： </em><?php echo $value['sex_cn']?></span>
							<span><em class="c7">期望薪资： </em><?php echo $value['wage_cn']?></span>
							<span><em class="c7">经验：</em> <?php echo $value['experience_cn']?></span>
							<span><em class="c7">最低学历： </em><?php echo $value['education_cn']?></span>
					   		<br />
					   		<span><em class="c7">联系电话：</em><?php echo $value['telephone']?></span>
					   		<br />
					   		<span><?php echo date("Y-m-d",$value['addtime'])?>发布</span>
							<!-- <a  class="wb">分享到微博</a> -->
						</div>
			             <div class="hot_pos_r">
			                   <div class="mb10 recompany">
								   <a href="h/c/5232.html" target="_blank"></a>
							   </div>
							   <span><em class="c7">邮箱：</em><?php echo $value['email']?></span><br>
							   <span><em class="c7">个人简述：</em><?php echo $value['tag_cn']?></span><br>
			                   <span><em class="c7">领域：</em> <?php echo $value['trade_cn']?></span>
			                   <br />
			                   <!-- <span><em class="c7">阶段：</em> 成长型(A轮)</span>
			                   <span><em class="c7">规模：</em></span> -->
			                    <ul class="companyTags reset">
									<!--  -->
								</ul>
			              </div>
					</li>
					<?php endforeach;?>
	               
	             </ul>           
	           
            </div>
				

            <?php }?>
            <div class="clear"></div>
			<div id="linkbox">
			    <dl>
			        <dt>友情链接</dt>
			        <dd>
			        		<a href="http://www.zhuqu.com/" target="_blank">住趣家居网</a> <span>|</span>
			        		<a href="http://www.woshipm.com/" target="_blank">人人都是产品经理</a> <span>|</span>
			        		<a href="http://zaodula.com/" target="_blank">互联网er的早读课</a> <span>|</span>
			                <a href="http://lieyunwang.com/" target="_blank">猎云网</a> <span>|</span>
			        		<a href="http://www.ucloud.cn/" target="_blank">UCloud</a> <span>|</span>
			          		<a href="http://www.iconfans.com/" target="_blank">iconfans</a>  <span>|</span>
			          		<a href="http://www.html5dw.com/" target="_blank">html5梦工厂</a>   <span>|</span>
			          		<a href="http://www.sykong.com/" target="_blank">手游那点事</a> 
			          		
			          		<a href="http://www.mycodes.net/" target="_blank">源码之家</a> <span>|</span>
			          		<a href="http://www.uehtml.com/" target="_blank">uehtml</a> <span>|</span>
			          		<a href="http://www.w3cplus.com/" target="_blank">W3CPlus</a> <span>|</span>
			          		<a href="http://www.boxui.com/" target="_blank">盒子UI</a> <span>|</span>
			          		<a href="http://www.uimaker.com/" target="_blank">uimaker</a> <span>|</span>
			          		<a href="http://www.yixieshi.com/" target="_blank">互联网的一些事</a> <span>|</span>
			          		<a href="http://www.chuanke.com/" target="_blank">传课网</a> <span>|</span>
			          		<a href="http://www.eoe.cn/" target="_blank">安卓开发</a> <span>|</span>
			          		<a href="http://www.eoeandroid.com/" target="_blank">安卓开发论坛</a> 
			          		<a href="http://hao.360.cn/" target="_blank" >360安全网址导航</a> <span>|</span>
			          		<a href="http://se.360.cn/" target="_blank" >360安全浏览器</a> <span>|</span>
			          		<a href="http://www.hao123.com/" target="_blank" >hao123上网导航</a> <span>|</span>
			          		<a href="http://www.ycpai.com" target="_blank" >互联网创业</a><span>|</span>
			          		<a href="http://www.zhongchou.cn" target="_blank" >众筹网</a><span>|</span>
			          		<a href="http://www.marklol.com/" target="_blank" >马克互联网</a><span>|</span>
			          		<a href="http://www.chaohuhr.com/" target="_blank" >巢湖英才网</a>
			          		
			          		<a href="http://www.zhubajie.com/" target="_blank" >创意服务外包</a><span>|</span>
			          		<a href="http://www.thinkphp.cn/" target="_blank" >thinkphp</a><span>|</span>
			          		<a href="http://www.chuangxinpai.com/" target="_blank" >创新派</a><span>|</span>

			          		<a href="http://w3cshare.com/" target="_blank" >W3Cshare</a><span>|</span>
			          		<a href="http://www.518lunwen.cn/" target="_blank" >论文发表网</a><span>|</span>
			          		<a href="http://www.199it.com" target="_blank" >199it</a><span>|</span>

			          		<a href="http://www.shichangbu.com" target="_blank" >市场部网</a><span>|</span>
			          		<a href="http://www.meitu.com/" target="_blank" >美图公司</a><span>|</span>
			          		<a href="https://www.teambition.com/" target="_blank" >Teambition</a>
			          		<a href="http://oupeng.com/" target="_blank" >欧朋浏览器</a><span>|</span>
			          		<a href="http://iwebad.com/" target="_blank">网络广告人社区</a>
			          		<a href="h/af/flink.html" target="_blank" class="more">更多</a>
			        </dd>
			    </dl>
			</div>
        </div>	
 	    <input type="hidden" value="" name="userid" id="userid" />
 		<!-- <div id="qrSide"><a></a></div> -->
<!--  -->

<!-- <div id="loginToolBar">
	<div>
		<em></em>
		<img src="style/images/footbar_logo.png" width="138" height="45" />
		<span class="companycount"></span>
		<span class="positioncount"></span>
		<a href="#loginPop" class="bar_login inline" title="登录"><i></i></a>
		<div class="right">
			<a href="register.html?from=index_footerbar" onclick="_hmt.push(['_trackEvent', 'button', 'click', 'register'])" class="bar_register" id="bar_register" target="_blank"><i></i></a>
		</div>
		<input type="hidden" id="cc" value="16002" />
		<input type="hidden" id="cp" value="96531" />
	</div>
</div>
 -->
<!-------------------------------------弹窗lightbox  ----------------------------------------->
<div style="display:none;">
	<!-- 登录框 -->
	<div id="loginPop" class="popup" style="height:240px;">
       	<form id="loginForm">
			<input type="text" id="email" name="email" tabindex="1" placeholder="请输入登录邮箱地址" />
			<input type="password" id="password" name="password" tabindex="2" placeholder="请输入密码" />
			<span class="error" style="display:none;" id="beError"></span>
		    <label class="fl" for="remember"><input type="checkbox" id="remember" value="" checked="checked" name="autoLogin" /> 记住我</label>
		    <a href="h/reset.html" class="fr">忘记密码？</a>
		    <input type="submit" id="submitLogin" value="登 &nbsp; &nbsp; 录" />
		</form>
		<div class="login_right">
			<div>还没有拉勾帐号？</div>
			<a href="register.html" class="registor_now">立即注册</a>
		    <div class="login_others">使用以下帐号直接登录:</div>
		    <a href="h/ologin/auth/sina.html" target="_blank" id="icon_wb" class="icon_wb" title="使用新浪微博帐号登录"></a>
		    <a href="h/ologin/auth/qq.html" class="icon_qq" id="icon_qq" target="_blank" title="使用腾讯QQ帐号登录" ></a>
		</div>
    </div><!--/#loginPop-->
</div>
<!------------------------------------- end ----------------------------------------->
<script type="text/javascript" src="style/js/Chart.min.js"></script>
<script type="text/javascript" src="style/js/home.min.js"></script>
<script type="text/javascript" src="style/js/count.js"></script>
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

<!-- <script src="style/js/wb.js" type="text/javascript" charset="utf-8"></script>
 -->

</body>
</html>