﻿<style type="text/css">
    body, html {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
    #allmap{width:100%;height:500px;}
    p{margin-left:5px; font-size:14px;}
  </style>
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Og1IWYYufB3o6bUgGXhaZ5EY4TM6ecOK"></script>
<title>根据关键字本地搜索</title>

    <div id="container">
                <div class="clearfix">
            <div class="content_l">
            	                <dl class="job_detail">
                    <dt>
                        <h1 title="产品经理">
                            <em></em>
                    	<div><?php echo $jobs[0]['companyname']?></div>
                      <?= $jobs[0]['jobs_name']?></h1>
                        
                                               	
                       	                       	<div class="jd_collection" id="jobCollection">
                       		                       		<div class="jd_collection_success">
                       			<span>已成功收藏该职位，</span>
								<a class="jd_collection_page" href="collections.html">查看全部</a>								
								<a class="jd_collection_x" href="javascript:;"></a>
							</div>
                       	</div>
                       	                    </dt>
                    <dd class="job_request">
                    	<span class="red"><?= $jobs[0]['wage_cn']?></span>
                       	<span><?= $jobs[0]['district_cn']?></span> 
                       	<span><?= $jobs[0]['experience_cn']?></span>
                       	<span><?= $jobs[0]['education_cn']?></span> 
                       	<span><?= $jobs[0]['nature_cn']?></span><br>
                      	  职位诱惑 : <?= $jobs[0]['tag_cn']?>
                      	<div>发布时间：<?= date('Y-m-d',$jobs[0]['addtime'])?></div>
                    </dd>
                    <dd class="job_bt">
                        <h3 class="description">职位描述</h3>
                        <p><strong>工作职责：</strong>&nbsp;<br>1、挖掘公司互联网产品现有和预期的市场需求；&nbsp; <br>2、负责组织公司互联网新产品开发和产品改进；&nbsp; <br>3、发掘收集竞争对手信息，进行竞争对手分析，制定应对战略；&nbsp; <br>4、在产品运营中倾听用户声音，了解用户潜在需求，并在产品改进中满足；&nbsp; <br>5、在产品运营中整合已有的产品功能、用户资源、推广资源，策划运营活动；&nbsp; <br>6、与市场、运营、UI、开发、测试、公关、法务、客服等人员紧密合作，实现产品目标。 <br>&nbsp; <br> <strong>任职要求：</strong> <br>1、本科及以上学历，英语四级以上，专业不限；&nbsp; <br>2、对互联网产品有敏锐的直觉和良好的市场分析能力；&nbsp; <br>3、有严密的逻辑分析能力，有良好的沟通协作能力；&nbsp; <br>4、有很强的责任心、学习能力、文字表达能力；&nbsp; <br>5、具有很强的团队协助精神，善于总结和分享经验；&nbsp; <br>6、具有互联网产品规划和产品设计经验者优先。</p> 
<p>&nbsp;</p> 
<p><strong>其他：&nbsp;</strong></p> 
<p>1、五险一金、商业综合医疗保险，节日慰问金、生日礼金、结婚礼金、年度体检、旅游；</p> 
<p>2、工作时间为5天工作制，享受国家法定节假日、带薪年假7天、带薪病假、产假（陪产假）、婚假、丧假等；</p> 
<p>3、每周定期举办足球、羽毛球、篮球及员工深度互动等文体活动。</p>
                    </dd>
                     
                                        	<!-- 用户是否激活 0-否；1-是 -->
	                			       									                    <dd class="resume resume_web">
				                        <div>
								          <span> 你已有可投递的在线简历：<a title="jason的简历" target="_blank" href="jianli.html"><strong>jason的简历</strong></a></span><br>
								          <span>简历更新于2014-07-01 15:53</span>
				                        </div>
				                        <span class="setBtns">
				                        	<a target="_blank" title="预览" href="h/resume/preview.html">预览</a> |
				                        	<a title="修改" target="_blank" href="jianli.html">修改</a>
				                        </span>
				                    </dd>
				                			            	                                                        <div class="saoma saoma_btm">
                      	<div class="dropdown_menu">
							<div class="drop_l">
								<img width="131" height="131" src="style/images/b533f6e729e74b418fcd6862bbde95dc_318969.jpg">
																<span>[仅限本人使用]</span>
															</div>
							<div class="drop_r">
								<div class="drop_title"></div>
								<p>
									想知道HR在看简历嘛？<br>
          							想在微信中收到面试通知？<br>
          							<span>&lt;&lt; 扫一扫，给你解决</span>
								</p>
							</div>
						</div>
                    </div>
                                        <dd>
                                        	                    				                   		<!-- 用户是否激活 0-否；1-是 -->
		                				                   			
	                   					                        									                							                   		<a title="投个简历" class="btn fr btn_apply inline cboxElement" href="#setResumeApply">投个简历</a>
						              								                	                        				                        	
		                        	                        	                   		                	                </dd>
                </dl>
                                <div id="weibolist"></div>
            </div>	
            <div class="content_r">
                <dl class="job_company">
                    <dt>
                    	<a target="_blank" href="h/c/5004.html">
                            <img width="80" height="80" alt="广州百田信息科技有限公司" src="style/images/ff8080814356e881014357741e5910f1.jpg" class="b2">
                            <div>
                                <h2 class="fl">
                                	  <?= $jobs[0]['companyname']?>
                                    <img width="15" height="19" alt="拉勾认证企业" src="style/images/valid.png">   
                                    <span class="dn">拉勾认证企业</span>
                                                                        
                                </h2>
                            </div>
                        </a>
                    </dt>
                    <dd>
                    	<ul class="c_feature reset">
                        	<li><span>领域</span><?= $jobs[0]['trade_cn']?></li>
                        	<li><span>规模</span><?= $jobs[0]['scale_cn']?></li>
                        	<li>
                        		<span>主页</span> 
                        		           							<a rel="nofollow" title="http://www.100bt.com" target="_blank" href="http://www.100bt.com">http://www.100bt.com</a>
           						                        	</li>
                        </ul>
                        
                        <h4>发展阶段</h4>
                        <ul class="c_feature reset">
                        	<li><span>目前阶段</span> 上市公司</li>
                        	                        </ul>
                        
                        <!--	                    	<h4>公司产品</h4>
	                        <ul class="c_feature reset">
	                        		                        		<li><span>百田网、问他</span></li>
	                        		                        </ul>
                                                
                       	<h4>公司标签</h4>
                        <ul class="company_tags reset" id="hasLabels">
                        	                            	<li><span>股票期权</span></li>
                                                        	<li><span>专项奖金</span></li>
                                                        	<li><span>年底双薪</span></li>
                                                        	<li><span>五险一金</span></li>
                                                        	<li><span>带薪年假</span></li>
                                                        	<li><span>节日礼物</span></li>
                                                        	<li><span>年度旅游</span></li>
                                                        	<li><span>弹性工作</span></li>
                                                        	<li><span>定期体检</span></li>
                                                        	<li><span>岗位晋升</span></li>
                                                        	<li><span>技能培训</span></li>
                                                        	<li><span>扁平管理</span></li>
                                                        	<li><span>领导好</span></li>
                                                        	<li><span>美女多</span></li>
                                                        	<li><span>帅哥多</span></li>
                                                       <li class="link"><a>编辑</a></li>
                        </ul>
                        <div class="clear"></div>
                        <div id="addLabel" class="addLabel dn">
                            <input type="text" class="fl" id="label" name="label" placeholder="添加自定义标签" />	
                            <input type="submit" id="add" value="贴上" />
                        </div> -->    	

                        <h4>工作地址</h4>
                       	<div class="address">
                        <?= $jobs[0]['district_cn']?>
                        </div>
                        <div id="smallmap" style="overflow: hidden; position: relative; z-index: 0; background-color: rgb(243, 241, 236); color: rgb(0, 0, 0); text-align: left;"><div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: grab;">
                        <div id="allmap"></div>
                       <!--  <div class="BMap_mask" style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; width: 280px; height: 200px;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"><span style="position: absolute; padding: 0px; margin: 0px; border: 0px none; -moz-user-select: none; cursor: pointer; background: url(style/images/img/blank.gifquot) repeat scroll 0% 0% transparent; width: 19px; height: 25px; left: 130px; top: 75px; z-index: -4626192;" "="" unselectable="on" class="BMap_Marker BMap_noprint" title=""></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;"><label class="BMapLabel" unselectable="on" style="position: absolute; -moz-user-select: none; display: none; cursor: inherit; background-color: rgb(190, 190, 190); border: 1px solid rgb(190, 190, 190); padding: 1px; white-space: nowrap; font: 12px arial,simsun,sans-serif; z-index: -20000; color: rgb(190, 190, 190);">shadow</label></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"><span style="position: absolute; padding: 0px; margin: 0px; border: 0px none; width: 0px; height: 0px; -moz-user-select: none; left: 130px; top: 75px; z-index: -4626192;" unselectable="on" class="BMap_Marker"><div style="position: absolute; margin: 0px; padding: 0px; width: 19px; height: 25px; overflow: hidden;"><img style="border:none;margin-left:0px; margin-top:0px; " src="style/images/marker_red_sprite.png"></div></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;"><span style="position: absolute; padding: 0px; margin: 0px; border: 0px none; width: 20px; height: 11px; -moz-user-select: none; left: 134px; top: 89px;" unselectable="on"><div style="position: absolute; margin: 0px; padding: 0px; width: 20px; height: 11px; overflow: hidden;"><img style="border:none;margin-left:-19px; margin-top:-13px; " src="style/images/marker_red_sprite.png"></div></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 201;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 1;"><div style="position: absolute; overflow: visible; z-index: -100; left: 140px; top: 100px; display: none;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 2; display: block;"><div style="position: absolute; overflow: visible; top: 100px; left: 140px; z-index: 0; display: block;"><canvas style="position: absolute; width: 256px; height: 256px; left: -106px; top: -188px; background: none repeat scroll 0% 0% rgb(243, 241, 236);" width="256" height="256" id="_1_bg_12325_2569_16"></canvas><canvas style="position: absolute; width: 256px; height: 256px; left: -362px; top: -188px; background: none repeat scroll 0% 0% rgb(243, 241, 236);" width="256" height="256" id="_1_bg_12324_2569_16"></canvas><canvas style="position: absolute; width: 256px; height: 256px; left: -106px; top: 68px; background: none repeat scroll 0% 0% rgb(243, 241, 236);" width="256" height="256" id="_1_bg_12325_2568_16"></canvas><canvas style="position: absolute; width: 256px; height: 256px; left: -362px; top: 68px; background: none repeat scroll 0% 0% rgb(243, 241, 236);" width="256" height="256" id="_1_bg_12324_2568_16"></canvas></div><div style="position: absolute; overflow: visible; top: 100px; left: 140px; z-index: 10; display: block;"><canvas style="position: absolute; width: 256px; height: 256px; left: -106px; top: -188px;" width="256" height="256" id="_1_poi_12325_2569_16"></canvas><canvas style="position: absolute; width: 256px; height: 256px; left: -362px; top: -188px;" width="256" height="256" id="_1_poi_12324_2569_16"></canvas><canvas style="position: absolute; width: 256px; height: 256px; left: -106px; top: 68px;" width="256" height="256" id="_1_poi_12325_2568_16"></canvas><canvas style="position: absolute; width: 256px; height: 256px; left: -362px; top: 68px;" width="256" height="256" id="_1_poi_12324_2568_16"></canvas></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 3;"></div></div><div style="position: absolute; z-index: 1201; top: 10px; right: 10px; width: 17px; height: 16px; background: url(style/images/img/st-close.pngquot) no-repeat scroll 0% 0% transparent; cursor: pointer; display: none;" title="退出全景"></div><div style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:-moz-grab" id="zoomer"><div style="top:0;left:0;" class="BMap_zoomer"></div><div style="top:0;right:0;" class="BMap_zoomer"></div><div style="bottom:0;left:0;" class="BMap_zoomer"></div><div style="bottom:0;right:0;" class="BMap_zoomer"></div></div><div style="height: 32px; position: absolute; z-index: 30; -moz-user-select: none; bottom: 0px; right: auto; top: auto; left: 1px; display: none;" class=" anchorBL"><a title="到百度地图查看此区域" target="_blank" href="http://map.baidu.com/?sr=1" style="outline: medium none;"><img src="style/images/copyright_logo.png" style="border:none;width:77px;height:32px"></a></div><div unselectable="on" class=" BMap_cpyCtrl BMap_noprint anchorBL" style="cursor: default; white-space: nowrap; -moz-user-select: none; color: black; background: none repeat scroll 0% 0% transparent; font: 11px/15px arial,simsun,sans-serif; bottom: 2px; right: auto; top: auto; left: 4px; position: absolute; z-index: 10;"><span _cid="1" style="display: inline;"><span style="font-size:11px">&copy; 2014 Baidu&nbsp;- Data &copy; <a style="display:inline;" href="http://www.navinfo.com/" target="_blank">NavInfo</a> &amp; <a style="display:inline;" href="http://www.cennavi.com.cn/" target="_blank">CenNavi</a> &amp; <a style="display:inline;" href="http://www.365ditu.com/" target="_blank">道道通</a></span></span></div> -->
                       </div>
                        <a id="mapPreview" href="javascript:;">查看完整地图</a>
                  </dd>
                </dl>
                <script src="style/js/jquery.1.10.1.min.js" type="text/javascript"></script>

                <script type="text/javascript">

                  // 百度地图API功能
                  var map = new BMap.Map("allmap");          
                  map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
                  var local = new BMap.LocalSearch(map, {
                    renderOptions:{map: map}
                  });

                  // $(function(){
                   $(document).ready(function(){                    
                   var address = $(".address").html();

                   local.search(address);
                  })
                </script>


              <div id="myRecommend_jd">
            		<h2>可能适合你的职位 <i>匹配度</i></h2>
            		<ul class="reset">
            			            			<li>
            				<a target="_blank" href="h/jobs/148004.html">
								<span class="f14">产品经理</span>
								<span class="c7">短讯神州</span>
								<em>92%</em>
							</a>
            			</li>
            			            			<li>
            				<a target="_blank" href="h/jobs/46793.html">
								<span class="f14">产品经理</span>
								<span class="c7">爱拍</span>
								<em>89%</em>
							</a>
            			</li>
            			            			<li>
            				<a target="_blank" href="h/jobs/99307.html">
								<span class="f14">产品经理</span>
								<span class="c7">一彩票</span>
								<em>88%</em>
							</a>
            			</li>
            			            			<li>
            				<a target="_blank" href="h/jobs/147510.html">
								<span class="f14">产品经理</span>
								<span class="c7">林安集团</span>
								<em>88%</em>
							</a>
            			</li>
            			            			<li>
            				<a target="_blank" href="h/jobs/146995.html">
								<span class="f14">产品经理</span>
								<span class="c7">鼎梵数码科技</span>
								<em>87%</em>
							</a>
            			</li>
            			            		</ul>
            		            		<a target="_blank" class="more" href="h/jobs/mList.html">更多推荐职位&gt;&gt;</a>
            		            	</div><!--end #myRecommend-->
				                <a class="eventAd" target="_blank" href="h/subject/s_zhouyou.html?utm_source=BD__lagou&amp;utm_medium=&amp;utm_campaign=zhouyou">
                  <img width="280" height="135" src="style/images/zhouyou.jpg">
                </a>
            </div>
       	</div>                    
      <input type="hidden" id="userid" name="userid" value="68ad090107cb481fff4ef57dcc6681a1">
      <input type="hidden" id="resend_type" name="type" value="1">
      <input type="hidden" id="jobid" value="22194">
      <input type="hidden" id="companyid" value="5004">
      <input type="hidden" id="positionLng" value="">
      <input type="hidden" id="positionLat" value="">
	
		<div id="tipOverlay"></div>
<!-------------------------------------弹窗lightbox  ----------------------------------------->
<div style="display:none;">
	<!-- 设置默认投递简历 -->
	<div style="height:280px;" class="popup" id="setResume">
	    <table width="100%">
	    	<tbody><tr>
	    		<td class="f18 c5">请选择你要投出去的简历：</td>
	    	</tr>
	    	<tr>
	        	<td>
                    <form class="resumeSetForm" id="resumeSetForm">
	            		<label class="radio">
	            			<input type="radio" value="1" class="resume1" name="resumeName">
	            			在线简历：
	            				            				<span title="jason的简历">jason的简历</span>
	            				            		</label>
            			<div class="setBtns">
            					            				<a target="_blank" href="h/resume/preview.html">预览</a> |
	            										<a target="_blank" href="jianli.html">修改</a>
            			</div>
	            		<div class="clear"></div>
	            		<label class="radio">
	            			<input type="radio" value="0" class="resume0" name="resumeName">
	            			附件简历：
	            				            				<span class="uploadedResume red">暂无附件简历</span>
	            				            		</label>
	            		<div class="setBtns">
	            				            				<a class="downloadResume dn" href="h/nearBy/downloadResume">下载</a> <span class="dn">|</span>
            					<a class="reUpload" title="上传附件简历" target="_blank">上传附件简历</a>
	            				            			
            				<input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','reUploadResume1')" id="reUploadResume1" name="newResume" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M">
            			</div>
            			<div class="clear"></div>
            			<span style="display:none;" class="error">只支持word、pdf、ppt、txt、wps格式文件，请重新上传</span>
	            		<label class="bgPink">默认使用此简历直接投递，下次不再提示</label>
	            		<span class="setTip error"></span>
	            		<input type="submit" value="保存设置" class="btn_profile_save btn_s">
	            	</form>
	            </td>
	        </tr>
	    </tbody></table>
	</div><!--/#setResume-->

<!-- 投递简历时  - 设置默认投递简历 -->
	<div style="height:280px;" class="popup" id="setResumeApply">
	    <table width="100%">
	    	<tbody><tr>
	    		<td class="f18 c5">请选择你要投出去的简历：</td>
	    	</tr>
	    	<tr>
	        	<td>
                    <form class="resumeSetForm" id="resumeSendForm">
	            		<label class="radio">
	            			<input type="radio" value="1" class="resume1" name="resumeName">
	            			在线简历：
	            				            				<span title="jason的简历">jason的简历</span>
	            				            		</label>
            			<div class="setBtns">
            					            				<a target="_blank" href="h/resume/preview.html">预览</a> |
	            										<a target="_blank" href="jianli.html">修改</a>
            			</div>
	            		<div class="clear"></div>
	            		<label class="radio">
	            			<input type="radio" value="0" class="resume0" name="resumeName">
	            			附件简历：
	            				            				<span class="uploadedResume red">暂无附件简历</span>
	            				            		</label>
	            		<div class="setBtns">
	            				            				<a class="downloadResume dn" href="h/nearBy/downloadResume">下载</a> <span class="dn">|</span>
            					<a class="reUpload" title="上传附件简历" target="_blank">上传附件简历</a>
	            				            			<input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','reUploadResume2')" id="reUploadResume2" name="newResume" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M">
            			</div>
            			<div class="clear"></div>
            			<span style="display:none;" class="error">只支持word、pdf、ppt、txt、wps格式文件，请重新上传</span>
	            		<label class="bgPink"><input type="checkbox" checked="checked">默认使用此简历直接投递，下次不再提示</label>
	            		<span class="setTip error"></span>
	            		<input type="submit" value="确认投递简历" class="btn_profile_save btn_s">
	            	</form>
	            </td>
	        </tr>
	    </tbody></table>
	</div><!--/#setResumeApply-->

	<!-- 上传简历 -->
	<div class="popup" id="uploadFile">
	    <table width="100%">
	    	<tbody><tr>
	        	<td align="center">
	                <form>
	                    <a class="btn_addPic" href="javascript:void(0);">
	                    	<span>选择上传文件</span>
	                        <input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload')" class="filePrew" id="resumeUpload" name="newResume" size="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" tabindex="3">
	                    </a>
	                </form>
	            </td>
	        </tr>
	    	<tr>
	        	<td align="left">支持word、pdf、ppt、txt、wps格式文件<br>文件大小需小于10M</td>
	        </tr>
	        <tr>
	        	<td align="left" style="color:#dd4a38; padding-top:10px;">注：若从其它网站下载的word简历，请将文件另存为.docx格式后上传</td>
	        </tr>
	    	<tr>
	        	<td align="center"><img width="55" height="16" alt="loading" style="visibility: hidden;" id="loadingImg" src="style/images/loading.gif"></td>
	        </tr>
	    </tbody></table>
	</div><!--/#uploadFile-->
	
	<!-- 简历上传成功 -->
	<div class="popup" id="uploadFileSuccess">
     	<h4>简历上传成功！</h4>
         <table width="100%">
             <tbody><tr>
                 <td align="center"><p>你可以将简历投给你中意的公司了。</p></td>
             </tr>
         	<tr>
             	<td align="center"><a class="btn_s" href="javascript:top.location.reload();">确&nbsp;定</a></td>
             </tr>
         </tbody></table>
     </div><!--/#uploadFileSuccess-->
	
	<!-- 登录框 -->
	<div style="height:240px;" class="popup" id="loginPop">
       	<form id="loginForm">
			<input type="text" placeholder="请输入登录邮箱地址" tabindex="1" name="email" id="email" style="background-image: url(style/images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
			<input type="password" placeholder="请输入密码" tabindex="2" name="password" id="password" style="background-image: url(style/images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
			<span id="beError" style="display:none;" class="error"></span>
		    <label for="remember" class="fl"><input type="checkbox" name="autoLogin" checked="checked" value="" id="remember"> 记住我</label>
		    <a class="fr" href="h/reset.html">忘记密码？</a>
		    <input type="submit" value="登 &nbsp; &nbsp; 录" id="submitLogin">
		</form>
		<div class="login_right">
			<div>还没有拉勾帐号？</div>
			<a class="registor_now" href="register.html">立即注册</a>
		    <div class="login_others">使用以下帐号直接登录:</div>
		    <a title="使用新浪微博帐号登录" class="icon_wb" target="_blank" href="h/ologin/auth/sina.html"></a>
		    <a title="使用腾讯QQ帐号登录" target="_blank" class="icon_qq" href="h/ologin/auth/qq.html"></a>
		</div>
    </div><!--/#loginPop-->
    
    <!-- 投简历成功前填写基本信息 -->
    <style>
    #cboxContent{overflow:visible;}
    #colorbox, #cboxOverlay, #cboxWrapper{overflow:visible;}
    </style>
    <div style="height:300px; overflow:visible;" class="popup" id="infoBeforeDeliverResume">
    	<div class="f18">为方便所投递企业HR查阅，请确认个人信息</div>
    	<form method="post" id="basicInfoForm">
	        <table width="100%">
	            <tbody><tr>
	                <td valign="middle">
				        <span class="redstar">*</span>
				    </td> 
				    <td>
				        <input type="text" placeholder="姓名" name="name">
				    </td>
				    <td valign="middle">
				        <span class="redstar">*</span>
				    </td> 
				    <td>
				        <input type="hidden" id="degree" value="" name="degree">
				        <input type="button" value="最高学历" id="select_degree" class="profile_select_190 profile_select_normal">
						<div class="boxUpDown boxUpDown_190 dn" id="box_degree" style="display: none;"></div> 
				    </td>
	            </tr>
	            <tr>
	                <td valign="middle">
				        <span class="redstar">*</span>
				    </td> 
				    <td>
				        <input type="hidden" id="workyear" value="" name="workyear">
				        <input type="button" value="工作年限" id="select_workyear" class="profile_select_190 profile_select_normal">
						<div class="boxUpDown boxUpDown_190 dn" id="box_workyear" style="display: none;"></div> 
				    </td>
				    <td valign="middle">
				        <span class="redstar">*</span>
				    </td> 
				    <td>
				        <input type="hidden" id="expectCity" value="" name="expectCity">
				        <input type="button" value="期望工作城市" id="select_expectCity" class="profile_select_190 profile_select_normal">
						<div class="boxUpDown boxUpDown_596 dn" id="box_expectCity" style="display: none;"></div> 
				    </td>
	            </tr>
	            <tr>
	                <td valign="middle">
				        <span class="redstar">*</span>
				    </td> 
				    <td>
				        <input type="text" placeholder="联系电话" name="tel">
				    </td>
				    <td valign="middle">
				        <span class="redstar">*</span>
				    </td> 
				    <td>
				        <input type="text" placeholder="邮箱地址" name="email">
				    </td>
	            </tr>
	        	<tr>
	        		<td></td> 
	            	<td colspan="3">
	            		<input type="hidden" value="" name="type">
	            		<input type="submit" value="确认并投递" class="btn">
	            	</td>
	            </tr>
	        </tbody></table>
		</form>
    </div><!--/#infoBeforeDeliverResume-->
    
    <!-- 上传附件简历操作说明-重新上传 -->
    <div class="popup" id="fileResumeUpload">
        <table width="100%">
            <tbody><tr>
                <td>
                	<div class="f18 mb10">请上传标准格式的word简历</div>
                </td>
            </tr>
            <tr>
                <td>
                	<div class="f16">
                		操作说明：<br>
                		打开需要上传的文件 - 点击文件另存为 - 选择.docx - 保存
                	</div>
                </td>
            </tr>
        	<tr>
            	<td align="center">
            		<a title="上传附件简历" href="#uploadFile" class="inline btn cboxElement">重新上传</a>
            	</td>
            </tr>
        </tbody></table>
    </div><!--/#fileResumeUpload-->
    
    <!-- 上传附件简历操作说明-重新上传 -->
    <div class="popup" id="fileResumeUploadSize">
        <table width="100%">
            <tbody><tr>
                <td>
                	<div class="f18 mb10">上传文件大小超出限制</div>
                </td>
            </tr>
            <tr>
                <td>
                	<div class="f16">
                		提示：<br>
                		单个附件不能超过10M，请重新选择附件简历！
                	</div>
                </td>
            </tr>
        	<tr>
            	<td align="center">
            		<a title="上传附件简历" href="#uploadFile" class="inline btn cboxElement">重新上传</a>
            	</td>
            </tr>
        </tbody></table>
    </div><!--/#deliverResumeConfirm-->
    
    <!-- 投简历成功前二次确认 -->
    <div class="popup" id="deliverResumeConfirm">
        <table width="100%">
            <tbody><tr>
                <td class="msg">
                	<div class="f18">你的简历中：</div>
                	<div class="f16 count"><span class="f18 confirm_field">学历、工作年限、期望工作城市</span>与该职位要求不匹配，确认要投递吗？</div>
                </td>
            </tr>
        	<tr>
            	<td align="center">
            		<input type="hidden" value="" name="type">
            		<a class="btn" href="javascript:sendResume(314873,22194,true,true);">确认投递</a>
            		<a class="btn_s" href="javascript:;">放弃投递</a>
            		<a class="f20 edit_field" href="javascript:;">修改信息</a>
            	</td>
            </tr>
        </tbody></table>
    </div><!--/#deliverResumeConfirm-->
    
     <!-- 投简历成功 -->
    <div style="width:440px;padding-bottom:10px;" class="popup" id="deliverResumesSuccess">
        <table width="100%">
            <tbody><tr class="drawGGJ">
                <td align="center">
                	<p class="font_16 count"></p>
                	<p class="font_16 share dn">邀请好友成功注册拉勾，可提升每日投递量 &nbsp;&nbsp; <a target="_blank" href="h/share/invite.html">邀请好友&gt;&gt;</a></p>
                </td>
            </tr>
        	<tr class="drawQD">
            	<td align="center"><a class="btn_s" href="javascript:top.location.reload();">确&nbsp;定</a></td>
            </tr>
            <tr class="weixinQR">
            	<td>
            		<div class="weixin">
                       	<div class="qr">
                       		<img width="120" height="120" src="style/images/b533f6e729e74b418fcd6862bbde95dc_318969.jpg">
                       		
                       		<div>[仅限本人使用]</div>
                       	</div>
                       	<div class="qr_text">
						              想知道HR是否看过你的简历？<br>
						              想在微信中收到面试通知？<br>
						    <span>&lt;&lt; 微信扫一扫，一并解决</span>
                       	</div>
                   	</div>
            	</td>
            </tr>
        </tbody></table>
    </div><!--/#deliverResumesSuccess-->
    
    <!-- 投递时，一个简历都没有弹窗 -->
	<div class="popup" id="sendNoResume">
	    <table width="100%">
	    	<tbody><tr>
	    		<td align="center" class="f18 c5">你还没有可以投递的简历呢</td>
	    	</tr>
	    	<tr>
	    		<td align="center" class="c5">请上传附件简历或填写在线简历后再投递吧~</td>
	    	</tr>
	    	<tr>
	        	<td align="center">
                   <form>
                        <a class="btn_addPic" href="javascript:void(0);">
                        	<span>选择上传文件</span>
                        	<input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload2')" class="filePrew" id="resumeUpload2" name="newResume" size="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M">
                        </a>
                    </form>
                    <a target="_blank" href="jianli.html" class="btn">完善在线简历</a>
	            </td>
	        </tr>
	    </tbody></table>
	</div><!--/#sendNoResume-->
    
    <!-- 没有简历请上传 -->
    <div class="popup" id="deliverResumesNo">
        <table width="100%">
            <tbody><tr>
                <td align="center"><p class="font_16">你在拉勾还没有简历，请先上传一份</p></td>
            </tr>
        	<tr>
            	<td align="center">
                    <form>
                        <a class="btn_addPic" href="javascript:void(0);">
                        	<span>选择上传文件</span>
                        	<input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload1')" class="filePrew" id="resumeUpload1" name="newResume" size="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M">
                        </a>
                    </form>
                </td>
            </tr>
        	<tr>
            	<td align="center">支持word、pdf、ppt、txt、wps格式文件，大小不超过10M</td>
            </tr>
        </tbody></table>
    </div><!--/#deliverResumesNo-->
    
      <!--
    	激活邮箱
		登录邮箱未验证时，
	 	点击上传附件简历、申请职位、订阅职位、发布职位出现该弹窗
	-->	
	<div style="height:240px;" class="popup" id="activePop">
       	 <h4>登录邮箱未验证</h4>
       	<p>请验证你的登录邮箱以使用拉勾网的所有功能！       	</p>
       	<p>我们已将验证邮件发送至：<a>jason@qq.com</a>，请点击邮件内的链接完成验证。</p>
                <p><a id="resend" href="javascript:void(0)">重新发送验证邮件 </a> | <a target="_blank" href="register.html"> 换个邮箱？ </a>  	</p>
    </div><!--/#activePop-->    
    
     <!--
    	激活邮箱
		验证邮件发送成功弹窗
	-->	
    <div class="popup" id="resend_success">
       	 <p>我们已将激活邮件发送至：<a>jason@qq.com</a>，请点击邮件内的链接完成验证。</p>
       	    </div><!--/#resend_success-->
    
    <!--地图弹窗-->	
        <div class="popup" id="baiduMap">
	        <div id="allmap" style="overflow: hidden; position: relative; z-index: 0; background-color: rgb(243, 241, 236); color: rgb(0, 0, 0); text-align: left;"><div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: grab;"><div class="BMap_mask" style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; width: 0px; height: 0px;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;"><label class="BMapLabel" unselectable="on" style="position: absolute; -moz-user-select: none; display: none; cursor: inherit; background-color: rgb(190, 190, 190); border: 1px solid rgb(190, 190, 190); padding: 1px; white-space: nowrap; font: 12px arial,simsun,sans-serif; z-index: -20000; color: rgb(190, 190, 190);">shadow</label></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 201;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 1;"></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 2;"></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 3;"></div></div><div style="position: absolute; z-index: 1201; top: 10px; right: 10px; width: 17px; height: 16px; background: url(style/images/img/st-close.pngquot) no-repeat scroll 0% 0% transparent; cursor: pointer; display: none;" title="退出全景"></div><div style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:-moz-grab" id="zoomer"><div style="top:0;left:0;" class="BMap_zoomer"></div><div style="top:0;right:0;" class="BMap_zoomer"></div><div style="bottom:0;left:0;" class="BMap_zoomer"></div><div style="bottom:0;right:0;" class="BMap_zoomer"></div></div><div unselectable="on" class=" BMap_stdMpCtrl BMap_stdMpType0 BMap_noprint anchorTL" style="width: 62px; height: 186px; bottom: auto; right: auto; top: 10px; left: 10px; position: absolute; z-index: 1100; -moz-user-select: none;"><div class="BMap_stdMpPan"><div title="向上平移" class="BMap_button BMap_panN"></div><div title="向左平移" class="BMap_button BMap_panW"></div><div title="向右平移" class="BMap_button BMap_panE"></div><div title="向下平移" class="BMap_button BMap_panS"></div><div class="BMap_stdMpPanBg BMap_smcbg"></div></div><div class="BMap_stdMpZoom" style="height: 141px; width: 62px;"><div title="放大一级" class="BMap_button BMap_stdMpZoomIn"><div class="BMap_smcbg"></div></div><div title="缩小一级" class="BMap_button BMap_stdMpZoomOut" style="top: 120px;"><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSlider" style="height: 102px;"><div class="BMap_stdMpSliderBgTop" style="height: 102px;"><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSliderBgBot" style="top: 91px; height: 15px;"></div><div title="放置到此级别" class="BMap_stdMpSliderMask"></div><div title="拖动缩放" class="BMap_stdMpSliderBar" style="cursor: grab; top: 91px;"><div class="BMap_smcbg"></div></div></div><div class="BMap_zlHolder"><div class="BMap_zlSt"><div class="BMap_smcbg"></div></div><div class="BMap_zlCity"><div class="BMap_smcbg"></div></div><div class="BMap_zlProv"><div class="BMap_smcbg"></div></div><div class="BMap_zlCountry"><div class="BMap_smcbg"></div></div></div></div></div><div unselectable="on" style="bottom: auto; right: 10px; top: 10px; left: auto; white-space: nowrap; cursor: pointer; position: absolute; z-index: 10; -moz-user-select: none;" class=" BMap_noprint anchorTR"><div style="-moz-user-select: none; float: left;"><div style="-moz-user-select: none; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.35); border-left: 1px solid rgb(139, 164, 220); border-top: 1px solid rgb(139, 164, 220); border-bottom: 1px solid rgb(139, 164, 220); background: none repeat scroll 0% 0% rgb(142, 168, 224); padding: 2px 6px; font: bold 12px/1.3em arial,simsun,sans-serif; text-align: center; white-space: nowrap; border-radius: 3px 0px 0px 3px; color: rgb(255, 255, 255);" title="显示普通地图">地图</div></div><div style="-moz-user-select: none; float: left;"><div style="-moz-user-select: none; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.35); border-left: 1px solid rgb(139, 164, 220); border-top: 1px solid rgb(139, 164, 220); border-bottom: 1px solid rgb(139, 164, 220); background: none repeat scroll 0% 0% rgb(255, 255, 255); padding: 2px 6px; font-family: arial,simsun,sans-serif; font-style: normal; font-variant: normal; font-size: 12px; line-height: 1.3em; font-size-adjust: none; font-stretch: normal; -moz-font-feature-settings: normal; -moz-font-language-override: normal; text-align: center; white-space: nowrap; color: rgb(0, 0, 0);" title="显示卫星影像">卫星</div><div style="-moz-user-select: none; position: absolute; top: 0px; left: 0px; z-index: -1; display: none;"><div style="border-right:1px solid #8ba4dc;border-bottom:1px solid #8ba4dc;border-left:1px solid #8ba4dc;background:white;font:12px arial,simsun,sans-serif;padding:0 8px 0 6px;line-height:1.6em;box-shadow:2px 2px 3px rgba(0, 0, 0, 0.35)" title="显示带有街道的卫星影像"><span class="BMap_checkbox" "="" checked="checked"></span><label style="vertical-align: middle; cursor: pointer;">混合</label></div></div></div><div style="-moz-user-select: none; float: left;"><div style="-moz-user-select: none; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.35); border-left: 1px solid rgb(139, 164, 220); border-width: 1px; border-style: solid; border-color: rgb(139, 164, 220); background: none repeat scroll 0% 0% rgb(255, 255, 255); padding: 2px 6px; font-family: arial,simsun,sans-serif; font-style: normal; font-variant: normal; font-size: 12px; line-height: 1.3em; font-size-adjust: none; font-stretch: normal; -moz-font-feature-settings: normal; -moz-font-language-override: normal; text-align: center; white-space: nowrap; border-radius: 0px 3px 3px 0px; color: rgb(0, 0, 0);" title="显示三维地图">三维</div></div></div><div unselectable="on" class=" BMap_omCtrl BMap_ieundefined BMap_noprint anchorBR quad4" style="width: 13px; height: 13px; bottom: 0px; right: 0px; top: auto; left: auto; position: absolute; z-index: 10; -moz-user-select: none;"><div class="BMap_omOutFrame" style="width: 149px; height: 149px;"><div class="BMap_omInnFrame" style="bottom: auto; right: auto; top: 5px; left: 5px; width: 142px; height: 142px;"><div class="BMap_omMapContainer"></div><div class="BMap_omViewMv" style="cursor: grab;"><div class="BMap_omViewInnFrame"><div></div></div></div></div></div><div class="BMap_omBtn BMap_omBtnClosed" style="bottom: 0px; right: 0px; top: auto; left: auto;"></div></div></div>
        </div><!--/#baiduMap-->
</div>
<!------------------------------------- end ----------------------------------------->

<script src="style/js/job_detail.js" type="text/javascript"></script>
<script src="style/js/count.js" type="text/javascript"></script>

<!-- <script type="text/javascript">
var options = {
    	"snsId": "snwb",
    	"uid": "",
    	"token": "",
    	"openId": "",
    	"appKey": "",
    	"merchantId": "11253",
    	"merchantType": "news",
    	"socialLoginUrl_sina": ctx+"/ologin/auth/sina.html",
    	"socialLoginUrl_qq": "",
    	"weiboId_sina": "3619164344010985",
    	"weiboId_qq": "",
    	"socialAllUrl": ctx+"/user/hbzx.html",
    	"productId": "22194",
    	"productCategory": "",
    	"productName": "产品经理",
    	"productArea": "广州",
    	"productPrice": "",
    	"productUrl": ctx+"/jobs/22194.html",
    	"productImage": ctx+"/upload/logo/ff8080814356e881014357741e5910f1.jpg",
    	"excerpt": "广州 / 全职 / 8k-15k / 经验1-3年 / 本科及以上 / 职位诱惑 : 上市公司，快速发展空间，产品的话语权",
    	"sendContent":"我觉得这个职位不错，你觉得咋样？",
    	"shareContent":"请输入你对此职位的评论",
    	"autoSend": false,
    	"load": true
　　}
</script>
<script src="style/js/common.js" type="text/javascript"></script> -->
<script>
$(function(){
	$('#weibolist .cookietxte').text('推荐本职位给好友');
	$(document).bind('cbox_complete', function(){ 
		hbzxJQ("#gaosutapt .pttui a").trigger("click"); 
		hbzxJQ("#mepingpt .pttui a").trigger("click"); 
	});
	$('#cboxOverlay').bind('click',function(){
		top.location.reload();
	});
	$('#colorbox').on('click','#cboxClose',function(){
		if($(this).siblings('#cboxLoadedContent').children('div').attr('id') == 'deliverResumesSuccess' || $(this).siblings('#cboxLoadedContent').children('div').attr('id') == 'uploadFileSuccess'){
			top.location.reload();
		}
	});
			popQR();
	})
</script>

<script src="http://api.map.baidu.com/api?v=2.0&amp;ak=A2c1a1ff1fe0750e3290660295aac602" type="text/javascript"></script><script src="http://api.map.baidu.com/getscript?v=2.0&amp;ak=A2c1a1ff1fe0750e3290660295aac602&amp;services=&amp;t=20140617153133" type="text/javascript"></script>

			<div class="clear"></div>
			<input type="hidden" value="e789f5e7097b4c828e9d40ef39a6baf8" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop" style="display: inline;"></a>
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


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>