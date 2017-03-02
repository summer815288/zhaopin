<?php
use yii\helpers\Url;
?>
<div id="container">
    <?php include"left.php";?>
    <div class="content">
        <dl class="company_center_content">
            <dt><h1><em></em><?php echo $title?></h1></dt>
            <dd style="background-color: #fafafa">
                <div class="publish_tip">
                    <h2><?php echo $content?></h2>
                    <a class="greylink" href="<?php echo Url::to(['company/myhome'])?>"> 进入我的公司主页</a><br>
                    <a class="greylink" href="<?php echo Url::to(['company/company_profile'])?>"> 点击返回上一页</a><br>
                    <div style="float:left;" class="invite_share">
                        <!-- JiaThis Button BEGIN -->
                        <div class="jiathis_style_32x32">
                            <a class="jiathis_button_tsina" title="分享到新浪微博"><span class="jiathis_txt jiathis_separator jtico jtico_tsina">分享到新浪微博</span></a>
                        </div>
                        <!-- JiaThis Button END -->
                    </div>
                </div>
            </dd>
        </dl>
    </div><!-- end .content -->

    <!------------------------------------- 弹窗lightbox ----------------------------------------->
    <div style="display:none;">
        <!--联系方式弹窗-->
        <div style="height:180px;" class="popup" id="telTip">
            <form id="telForm">
                <table width="100%">
                    <tbody><tr>
                        <td align="center" class="f18">留个联系方式方便我们联系你吧！</td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="text" maxlength="49" placeholder="请输入你的手机号码或座机号码" name="tel">
                            <span style="display:none;" class="error" id="telError"></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="submit" value="提交" class="btn">
                        </td>
                    </tr>
                    </tbody></table>
            </form>
        </div><!--/#telTip-->

        <!--地图弹窗-->
        <div class="popup" id="baiduMap">
            <div class="mb10">点击地图可重新定位公司所在的位置</div>
            <div id="allmap" style="overflow: hidden; position: relative; z-index: 0; background-color: rgb(243, 241, 236); color: rgb(0, 0, 0); text-align: left;"><div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: grab;"><div class="BMap_mask" style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; width: 0px; height: 0px;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;"><label class="BMapLabel" unselectable="on" style="position: absolute; -moz-user-select: none; display: none; cursor: inherit; background-color: rgb(190, 190, 190); border: 1px solid rgb(190, 190, 190); padding: 1px; white-space: nowrap; font: 12px arial,simsun,sans-serif; z-index: -20000; color: rgb(190, 190, 190);">shadow</label></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 201;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 1;"><div style="position: absolute; overflow: visible; z-index: -100; left: 0px; top: 0px; display: none;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 2; display: block;"><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 0; display: block;"><canvas style="position: absolute; width: 256px; height: 256px; left: -74px; top: -213px; background: none repeat scroll 0% 0% rgb(243, 241, 236);" width="256" height="256" id="_1_bg_6323_2355_15"></canvas></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 10; display: block;"><canvas style="position: absolute; width: 256px; height: 256px; left: -74px; top: -213px;" width="256" height="256" id="_1_poi_6323_2355_15"></canvas></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 3;"></div></div><div style="position: absolute; z-index: 1201; top: 10px; right: 10px; width: 17px; height: 16px; background: url(style/images/img/st-close.pngquot) no-repeat scroll 0% 0% transparent; cursor: pointer; display: none;" title="退出全景"></div><div style="height: 32px; position: absolute; z-index: 30; -moz-user-select: none; bottom: 0px; right: auto; top: auto; left: 1px; display: none;" class=" anchorBL"><a title="到百度地图查看此区域" target="_blank" href="http://map.baidu.com/?sr=1" style="outline: medium none;"><img src="style/images/copyright_logo.png" style="border:none;width:77px;height:32px"></a></div><div style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:-moz-grab" id="zoomer"><div style="top:0;left:0;" class="BMap_zoomer"></div><div style="top:0;right:0;" class="BMap_zoomer"></div><div style="bottom:0;left:0;" class="BMap_zoomer"></div><div style="bottom:0;right:0;" class="BMap_zoomer"></div></div><div unselectable="on" class=" BMap_stdMpCtrl BMap_stdMpType0 BMap_noprint anchorTL" style="width: 62px; height: 186px; bottom: auto; right: auto; top: 10px; left: 10px; position: absolute; z-index: 1100; -moz-user-select: none;"><div class="BMap_stdMpPan"><div title="向上平移" class="BMap_button BMap_panN"></div><div title="向左平移" class="BMap_button BMap_panW"></div><div title="向右平移" class="BMap_button BMap_panE"></div><div title="向下平移" class="BMap_button BMap_panS"></div><div class="BMap_stdMpPanBg BMap_smcbg"></div></div><div class="BMap_stdMpZoom" style="height: 141px; width: 62px;"><div title="放大一级" class="BMap_button BMap_stdMpZoomIn"><div class="BMap_smcbg"></div></div><div title="缩小一级" class="BMap_button BMap_stdMpZoomOut" style="top: 120px;"><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSlider" style="height: 102px;"><div class="BMap_stdMpSliderBgTop" style="height: 102px;"><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSliderBgBot" style="top: 19px; height: 87px;"></div><div title="放置到此级别" class="BMap_stdMpSliderMask"></div><div title="拖动缩放" class="BMap_stdMpSliderBar" style="cursor: grab; top: 19px;"><div class="BMap_smcbg"></div></div></div><div class="BMap_zlHolder"><div class="BMap_zlSt"><div class="BMap_smcbg"></div></div><div class="BMap_zlCity"><div class="BMap_smcbg"></div></div><div class="BMap_zlProv"><div class="BMap_smcbg"></div></div><div class="BMap_zlCountry"><div class="BMap_smcbg"></div></div></div></div></div><div unselectable="on" style="bottom: auto; right: 10px; top: 10px; left: auto; white-space: nowrap; cursor: pointer; position: absolute; z-index: 10; -moz-user-select: none;" class=" BMap_noprint anchorTR"><div style="-moz-user-select: none; float: left;"><div style="-moz-user-select: none; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.35); border-left: 1px solid rgb(139, 164, 220); border-top: 1px solid rgb(139, 164, 220); border-bottom: 1px solid rgb(139, 164, 220); background: none repeat scroll 0% 0% rgb(142, 168, 224); padding: 2px 6px; font: bold 12px/1.3em arial,simsun,sans-serif; text-align: center; white-space: nowrap; border-radius: 3px 0px 0px 3px; color: rgb(255, 255, 255);" title="显示普通地图">地图</div></div><div style="-moz-user-select: none; float: left;"><div style="-moz-user-select: none; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.35); border-left: 1px solid rgb(139, 164, 220); border-top: 1px solid rgb(139, 164, 220); border-bottom: 1px solid rgb(139, 164, 220); background: none repeat scroll 0% 0% rgb(255, 255, 255); padding: 2px 6px; font-family: arial,simsun,sans-serif; font-style: normal; font-variant: normal; font-size: 12px; line-height: 1.3em; font-size-adjust: none; font-stretch: normal; -moz-font-feature-settings: normal; -moz-font-language-override: normal; text-align: center; white-space: nowrap; color: rgb(0, 0, 0);" title="显示卫星影像">卫星</div><div style="-moz-user-select: none; position: absolute; top: 0px; left: 0px; z-index: -1; display: none;"><div style="border-right:1px solid #8ba4dc;border-bottom:1px solid #8ba4dc;border-left:1px solid #8ba4dc;background:white;font:12px arial,simsun,sans-serif;padding:0 8px 0 6px;line-height:1.6em;box-shadow:2px 2px 3px rgba(0, 0, 0, 0.35)" title="显示带有街道的卫星影像"><span class="BMap_checkbox" "="" checked="checked"></span><label style="vertical-align: middle; cursor: pointer;">混合</label></div></div></div><div style="-moz-user-select: none; float: left;"><div style="-moz-user-select: none; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.35); border-left: 1px solid rgb(139, 164, 220); border-width: 1px; border-style: solid; border-color: rgb(139, 164, 220); background: none repeat scroll 0% 0% rgb(255, 255, 255); padding: 2px 6px; font-family: arial,simsun,sans-serif; font-style: normal; font-variant: normal; font-size: 12px; line-height: 1.3em; font-size-adjust: none; font-stretch: normal; -moz-font-feature-settings: normal; -moz-font-language-override: normal; text-align: center; white-space: nowrap; border-radius: 0px 3px 3px 0px; color: rgb(0, 0, 0);" title="显示三维地图">三维</div></div></div><div unselectable="on" class=" BMap_scaleCtrl BMap_noprint anchorBL" style="bottom: 18px; right: auto; top: auto; left: 81px; width: 88px; position: absolute; z-index: 10; -moz-user-select: none;"><div unselectable="on" class="BMap_scaleTxt" style="background-color: transparent; color: black;">500&nbsp;米</div><div class="BMap_scaleBar BMap_scaleHBar" style="background-color: black;"><img src="style/images/mapctrls.png" style="border:none"></div><div class="BMap_scaleBar BMap_scaleLBar" style="background-color: black;"><img src="style/images/mapctrls.png" style="border:none"></div><div class="BMap_scaleBar BMap_scaleRBar" style="background-color: black;"><img src="style/images/mapctrls.png" style="border:none"></div></div><div unselectable="on" class=" BMap_omCtrl BMap_ieundefined BMap_noprint anchorBR quad4" style="width: 13px; height: 13px; bottom: 0px; right: 0px; top: auto; left: auto; position: absolute; z-index: 10; -moz-user-select: none;"><div class="BMap_omOutFrame" style="width: 149px; height: 149px;"><div class="BMap_omInnFrame" style="bottom: auto; right: auto; top: 5px; left: 5px; width: 142px; height: 142px;"><div class="BMap_omMapContainer"></div><div class="BMap_omViewMv" style="cursor: grab;"><div class="BMap_omViewInnFrame"><div></div></div></div></div></div><div class="BMap_omBtn BMap_omBtnClosed" style="bottom: 0px; right: 0px; top: auto; left: auto;"></div></div><div unselectable="on" class=" BMap_cpyCtrl BMap_noprint anchorBL" style="cursor: default; white-space: nowrap; -moz-user-select: none; color: black; background: none repeat scroll 0% 0% transparent; font: 11px/15px arial,simsun,sans-serif; bottom: 2px; right: auto; top: auto; left: 4px; position: absolute; z-index: 10;"><span _cid="1" style="display: inline;"><span style="font-size:11px">&copy; 2014 Baidu&nbsp;- Data &copy; <a style="display:inline;" href="http://www.navinfo.com/" target="_blank">NavInfo</a> &amp; <a style="display:inline;" href="http://www.cennavi.com.cn/" target="_blank">CenNavi</a> &amp; <a style="display:inline;" href="http://www.365ditu.com/" target="_blank">道道通</a></span></span></div></div>
        </div><!--/#baiduMap-->
    </div>
    <!------------------------------------- end ----------------------------------------->
    <!-- <script type="text/javascript" src="style/js/tinymce.min.js"></script>
    <script>
    $(function(){

        /*textarea 编辑器*/
        tinymce.init({
            selector: "textarea.tinymce",
            // width: 100,
            height: 225,
            language: "zh_CN",
            content_css: ctx + "/js/tinymce4/content.css",
            plugins: "contextmenu autolink code paste searchreplace",
            contextmenu: "copy cut paste",
            // paste_word_valid_elements: "",
            paste_as_text: true,
            // paste_webkit_styles: "color",//all | none
            // paste_retain_style_properties: "font-size",//
            menubar: false,
            statusbar: false,
            toolbar: [
                "undo redo | bold italic underline strikethrough | bullist numlist | alignleft aligncenter alignright | removeformat | code"
            ],
            save_enablewhendirty: function(e) {
                console.log('dirty',e);
            },
            save_onsavecallback: function(e){
                console.log('save',e);
            },
            setup: function (editor) {
                editor.on('keyup', function (e) {
                    tinyMCE.triggerSave();
                    var editorContent = tinyMCE.get(editor.id).getContent();
                    if(editorContent.length > 20){
                        $("#" + editor.id).valid();
                    }
                });
            }
        });
    });
    </script> -->

    <!-- old -->
    <script src="style/js/jquery.tinymce.js" type="text/javascript"></script>
    <script>
        $(function(){

            /***********************************************
             ** textarea 编辑器
             */
            $('textarea.tinymce').tinymce({
                // Location of TinyMCE script
                script_url : ctx+'/js/tinymce/jscripts/tiny_mce/tiny_mce.js',

                // General options
                theme : "advanced",
                language : "zh-cn",
                plugins : "paste,autolink,lists,style,layer,save,advhr,advimage,advlink,iespell,inlinepopups,preview,media,searchreplace,contextmenu,fullscreen,noneditable,visualchars,nonbreaking",

                // Theme options
                theme_advanced_buttons1 : "bold,italic,underline,|,justifyleft,justifycenter,justifyright,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,|,hr,fullscreen,image",
                theme_advanced_toolbar_location : "top",
                theme_advanced_toolbar_align : "left",
                theme_advanced_statusbar_location : "none",//定义输入框下方是否显示状态栏，默认不显示
                theme_advanced_resizing : false,
                paste_auto_cleanup_on_paste: true,
                paste_as_text: true,
                auto_cleanup_word:true,
                paste_remove_styles: true,
                contextmenu: "copy cut paste",
                force_br_newlines: true,
                force_p_newlines: false,
                apply_source_formatting: false,
                remove_linebreaks: false,
                convert_newlines_to_brs: true,

                // Example content CSS (should be your site CSS)
                content_css : ctx+"/js/tinymce/examples/css/content.css",

                // Drop lists for link/image/media/template dialogs
                template_external_list_url : "lists/template_list.js",
                external_link_list_url : "lists/link_list.js",

                // Replace values for the template plugin
                template_replace_values : {
                    username : "Some User",
                    staffid : "991234"
                },
                onchange_callback: function(editor){
                    tinyMCE.triggerSave();
                    var editorContent = tinyMCE.get(editor.id).getContent();
                    if(editorContent.length &gt; 20){
                        $("#" + editor.id).valid();
                    }
                }
            });

            $('#workAddress').focus(function(){
                $('#beError').hide();
            });
        });
    </script>
    <!-- end old -->

    <script src="style/js/jobs.min.js" type="text/javascript"></script>
    <script src="http://api.map.baidu.com/api?v=2.0&amp;ak=A2c1a1ff1fe0750e3290660295aac602" type="text/javascript"></script><script src="http://api.map.baidu.com/getscript?v=2.0&amp;ak=A2c1a1ff1fe0750e3290660295aac602&amp;services=&amp;t=20140617153133" type="text/javascript"></script>
    <script type="text/javascript">
        //百度地图API功能
        var map = new BMap.Map("allmap");
        //控件添加
        map.addControl(new BMap.NavigationControl());
        map.addControl(new BMap.MapTypeControl());
        map.addControl(new BMap.ScaleControl());
        map.addControl(new BMap.OverviewMapControl());

        var point = new BMap.Point(116.331398,39.897445);//初始化坐标点
        map.centerAndZoom(point, 15);
        /* map.centerAndZoom(, 15); */
        map.enableScrollWheelZoom(true);//允许缩放
        var gc = new BMap.Geocoder();//地址定位
        var local = new BMap.LocalSearch(map, {
            renderOptions:{map: map}
        });
        function showInfo(e){
            map.clearOverlays();//清除所有覆盖物
            //map.centerAndZoom(new BMap.Point(olng, olat), 11);//重定义中心点
            //alert(e.point.lng + ", " + e.point.lat);
            var marker = new BMap.Marker(new BMap.Point(e.point.lng, e.point.lat));  // 创建标注
            marker.addEventListener("mouseup",function(em){//覆盖物监听事件--释放鼠标时定位覆盖物位置
                var pt = em.point;//移动后重新定位
                gc.getLocation(pt, function(rs){
                    var addComp = rs.addressComponents;
                    var label = new BMap.Label("我的坐标："+em.point.lng + ", " + em.point.lat+"  我的地址："+addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber,{offset:new BMap.Size(20,-10)});
                    // marker.setLabel(label);//新坐标-新地址
                    if(rs){
                        var sContent =
                            "&lt;h4 style='margin:0 0 5px 0;padding:0.2em 0'&gt;"+addComp.province+"&lt;/h4&gt;" +
                            "&lt;p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'&gt;"+rs.address+"&lt;/p&gt;" +
                            "&lt;/div&gt;";
                        var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
                        //图片加载完毕重绘infowindow
                        marker.openInfoWindow(infoWindow);
                    }

                    $('#lat').val(em.point.lat);
                    $('#lng').val(em.point.lng);
                });
            });
            marker.enableDragging();    //可拖拽
            map.addOverlay(marker);     // 将标注添加到地图中

            /////////////////////地址定位
            var pt = e.point;
            gc.getLocation(pt, function(rs){
                var addComp = rs.addressComponents;
                var label = new BMap.Label("我的坐标："+e.point.lng + ", " + e.point.lat+"  我的地址："+addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber,{offset:new BMap.Size(20,-10)});
                //marker.setLabel(label);
                if(rs){
                    var sContent =
                        "&lt;h4 style='margin:0 0 5px 0;padding:0.2em 0'&gt;"+addComp.province+"&lt;/h4&gt;" +
                        "&lt;p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'&gt;"+rs.address+"&lt;/p&gt;" +
                        "&lt;/div&gt;";
                    var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
                    //图片加载完毕重绘infowindow
                    marker.openInfoWindow(infoWindow);
                }

                $('#lat').val(e.point.lat);
                $('#lng').val(e.point.lng);
            });

            //////////////////////重置中心点
            olng = e.point.lng;
            olat = e.point.lat;
        }
        map.addEventListener("click", showInfo);//地图点击事件

        $(function(){
            $('#mapPreview').bind('click',function(){
                $.colorbox({inline:true, href:"#baiduMap",title:"公司地址"});
                var address = $('#positionAddress').val();
                var city = $('#workAddress').val();
                map.setCurrentCity(city);
                map.setZoom(15);
                gc.getPoint(address, function(point){
                    if (point) {
                        map.centerAndZoom(point, 15);
                        map.setZoom(15);
                        map.setCenter(point);
                        local.search(address);
                    }
                }, city);
                /* map.addEventListener("tilesloaded",function(){
                 map.setZoom(15);
                 }); */
            });
        });
    </script>

    <div class="clear"></div>
    <input type="hidden" value="c29d4a7c35314180bf3be5eb3f00048f" id="resubmitToken">
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



