<link rel="stylesheet" href="/74cms_v3.7_20160412/upload/templates/default/css/user_common.css">
<link rel="stylesheet" href="/74cms_v3.7_20160412/upload/templates/default/css/user_company.css">
<div id="container">
    <?php include"left.php";?>
    <div class="content">
        <dl class="company_center_content" >
            <dt><h1><em></em>管理职位</h1></dt>
            <dd  style="background-color: #fafafa">
                <div class="bbox1 link_bk my_account">
                    <div class="topnav">
                        <div class="topnav get_resume">
                            <div class="titleH1"><div class="h1-title">管理职位</div></div>
                            <div class="navs link_bk">
                                <a href="">发布中职位<span>(2)</span></a>
                                <a href="">审核中职位<span>(0)</span></a>
                                <a href="">未显示职位<span class="check">(0)</span></a>
                                <a href="">全部职位<span>(2)</span></a>
                            </div>
                        </div>
                    </div>
                    <form id="form1" name="form1" method="post" action="?act=jobs_perform">
                        <!-- 新的发布中职位 -->
                        <div class="company-data-list">
                            <div class="c-data-top com-job-ma clearfix">
                                <div class="item f-left check-item"><input name="chkAll" id="chk" title="全选/反选" type="checkbox"></div>
                                <div class="item f-left top-item1">职位名称</div>
                                <div class="item f-left top-item2">
                                    <div class="data-filter span4">&nbsp;</div>
                                </div>
                                <div class="item f-left top-item3">
                                    <div class="data-filter span4">
                                        <span class="filter-span">推广状态<i class="filter-icon"></i></span>
                                        <ul class="filter-down">
                                            <li><a href="">全部</a></li>
                                            <li><a href="">置顶</a></li>
                                            <li><a href="">套色</a></li>
                                            <li><a href="">紧急</a></li>
                                            <li><a href="">推荐</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="c-data-row check-control">
                                <div class="c-data-content com-job-ma clearfix">
                                    <div class="c-item f-left check-item"><input name="y_id[]" id="y_id" value="3" type="checkbox"></div>
                                    <div class="c-item f-left content1">
                                        <div class="job-ma-block">
                                            <div><a href="http://www.php9.com/74cms_v3.7_20160412/upload/jobs/jobs-show.php?id=3" target="_blank" class="name-link underline" title="发布职位2">发布职位2</a></div>
                                            <p>应聘简历：<a href="" class="data-ctrl underline">0</a> | 更新时间：2017-02-22 11:06 <a href="javascript:;" jobsid="3" class="data-ctrl underline refresh">[刷新]</a></p>
                                            <div class="job-ma-ctrl">
                                                <a href="?act=editjobs&amp;id=3" class="data-ctrl underline">修改</a>&nbsp;<a href="http://www.php9.com/74cms_v3.7_20160412/upload/resume/resume-list.php?jobcategory=1.2.543" class="data-ctrl underline" target="_blank">匹配</a>&nbsp;<a url="?act=jobs_perform&amp;display2=1&amp;y_id=3" href="javascript:;" class="data-ctrl underline ctrl-close">关闭</a>&nbsp;<a href="javascript:;" class="data-ctrl underline ctrl-del" url="?act=jobs_perform&amp;delete=1&amp;y_id=3">删除</a>
                                                <a href="javascript:;" class="pengyouquan" id="jobs_3">分享到朋友圈</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-item f-left content2">&nbsp;</div>
                                    <div class="c-item f-left content3">
                                        <a href="javascript:void(0);" class="data-ctrl set_promotion" catid="3" jobid="3">置顶</a>
                                        <a href="javascript:void(0);" class="data-ctrl set_promotion" catid="4" jobid="3">套色</a><br>
                                        <a href="javascript:void(0);" class="data-ctrl set_promotion" catid="2" jobid="3">紧急</a>
                                        <a href="javascript:void(0);" class="data-ctrl set_promotion" catid="1" jobid="3">推荐</a>
                                    </div>
                                </div>
                            </div>
                            <div class="c-data-row check-control">
                                <div class="c-data-content com-job-ma clearfix">
                                    <div class="c-item f-left check-item"><input name="y_id[]" id="y_id" value="2" type="checkbox"></div>
                                    <div class="c-item f-left content1">
                                        <div class="job-ma-block">
                                            <div><a href="http://www.php9.com/74cms_v3.7_20160412/upload/jobs/jobs-show.php?id=2" target="_blank" class="name-link underline" title="发布职位"><span style="color:#bc123a">发布职位</span></a></div>
                                            <p>应聘简历：<a href="company_recruitment.php?act=apply_jobs&amp;jobsid=2&amp;jobname=发布职位" class="data-ctrl underline">2</a> | 更新时间：2017-02-21 22:42 <a href="javascript:;" jobsid="2" class="data-ctrl underline refresh">[刷新]</a></p>
                                            <div class="job-ma-ctrl">
                                                <a href="?act=editjobs&amp;id=2" class="data-ctrl underline">修改</a>&nbsp;<a href="http://www.php9.com/74cms_v3.7_20160412/upload/resume/resume-list.php?jobcategory=74.75.688" class="data-ctrl underline" target="_blank">匹配</a>&nbsp;<a url="?act=jobs_perform&amp;display2=1&amp;y_id=2" href="javascript:;" class="data-ctrl underline ctrl-close">关闭</a>&nbsp;<a href="javascript:;" class="data-ctrl underline ctrl-del" url="?act=jobs_perform&amp;delete=1&amp;y_id=2">删除</a>
                                                <a href="javascript:;" class="pengyouquan" id="jobs_2">分享到朋友圈</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-item f-left content2">&nbsp;</div>
                                    <div class="c-item f-left content3">
                                        <a href="javascript:void(0);" class="data-ctrl set_promotion" catid="3" jobid="2">置顶</a>
                                        <a href="javascript:void(0);" class="data-ctrl underline" style="color:#999" title="该职位已套色">套色</a><br>
                                        <a href="javascript:void(0);" class="data-ctrl set_promotion" catid="2" jobid="2">紧急</a>
                                        <a href="javascript:void(0);" class="data-ctrl set_promotion" catid="1" jobid="2">推荐</a>
                                    </div>
                                </div>
                            </div>
                            <div class="c-data-row last">
                                <div class="c-data-content apply_jobs clearfix">
                                    <div class="c-item f-left check-item"><input name="chkAll" id="chk2" title="全选/反选" type="checkbox"></div>
                                    <div class="data-last-btn f-left">
                                        <input name="refresh" id="refresh" value="1" type="hidden">
                                        <input name="refresh" class="btn-65-30blue" value="刷新职位" id="refresh_all" type="button">
                                        <input value="关闭" name="display2" class="btn-65-30blue" id="display2" type="submit">
                                        <input name="delete" class="btn-65-30blue ctrl-del" value="删除" id="delete" act="?act=jobs_perform&amp;delete=1" type="button">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 审核中的 职位 -->
                        <!-- 未显示 职位 -->
                        <!-- 全部职位 职位 -->

                    </form>
                </div>
            </dd>
        </dl>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        // 发布职位 成功提示弹出
        var addjobs_save_succeed="";
        if(addjobs_save_succeed>0)
        {

            var d=dialog({
                title: '系统提示',
                content: $(".addjob-success-dialog"),
                cancelDisplay: false,
                cancel: function () {
                    window.location.href="?act=jobs";
                }
            }).showModal();
            // 置顶
            $(".set_promotion").live('click', function(event) {
                d.close().remove();
                set_promotion_dialog(".set_promotion");
            });
        }
        // 单个关闭
        $(".ctrl-close").click(function(event) {
            var mycoDialog=dialog(),
                url = $(this).attr("url");
            mycoDialog.title('系统提示');
            mycoDialog.content('<div class="del-dialog"><div class="tip-block"><span class="del-tips-text close-tips-text">关闭后将不对外展示招聘信息，您确定要关闭吗？</span></div></div><div class="center-btn-wrap"><input type="button" value="确定" class="btn-65-30blue btn-big-font DialogSubmit" /><input type="button" value="取消" class="btn-65-30grey btn-big-font DialogClose" /></div>');
            mycoDialog.width('300');
            mycoDialog.showModal();
            /* 关闭 */
            $(".DialogClose").live('click',function() {
                mycoDialog.close().remove();
            });
            // 确定
            $(".DialogSubmit").click(function() {
                if (url) {window.location.href=url};
            });
        });
        /*
         顶部筛选 36
         */
        $('.data-filter').on('click', function(e){
            $(this).find('.filter-down').toggle();
            // 动态设置下拉列表宽度
            var fWidth = $(this).find('.filter-span').outerWidth(true) - 2;
            $(this).find(".filter-down").width(fWidth);
            // 点击其他位置收起下拉
            $(document).one("click",function(){
                $('.filter-down').hide();
            });
            e.stopPropagation();
            //点击下拉时收起其他下拉
            $(".data-filter").not($(this)).find('.filter-down').hide();
        });

        $('.refresh').on('click', function()
        {
            var jobsid = $(this).attr("jobsid"),
                ajax_url = "company_ajax.php?act=jobs_refresh_ajax&jobsid="+jobsid,
                msg = '';
            var myDialog = dialog();
            myDialog.title('刷新提示');
            myDialog.content("加载中...");
            myDialog.width('300');
            myDialog.showModal();
            jQuery.ajax({
                url: ajax_url,
                success: function (data) {
                    myDialog.content(data);
                    /* 关闭 */
                    $(".DialogClose").live('click',function() {
                        myDialog.close().remove();
                    });
                    /* 确定操作 */
                    $(".DialogSubmit").click(function()
                    {
                        window.location.href="company_jobs.php?act=jobs_perform&y_id="+jobsid+"&refresh=1";
                    });
                }
            });
        });
        // 批量刷新
        $("#refresh_all").on('click', function(){
            var length=$("#form1 :checkbox[name='y_id[]'][checked]").length;
            $.get("company_ajax.php?act=jobs_all_refresh_ajax",{length:length},
                function(result)
                {
                    var myDialog=dialog();
                    myDialog.title('刷新提示');
                    myDialog.content(result);
                    myDialog.width('300');
                    myDialog.showModal();
                    /* 关闭 */
                    $(".DialogClose").live('click',function() {
                        myDialog.close().remove();
                        return false;
                    });
                    // 确定
                    $(".DialogSubmit").click(function()
                    {
                        $("#form1").submit();
                    });
                });
        });
        // 职位推广
        set_promotion_dialog(".set_promotion");
        // 推广下拉
        $(".spread").toggle(function() {
            $(this).find(".spread_but_group").slideDown("fast");
            $(this).find("img").attr("src","/74cms_v3.7_20160412/upload/templates/default//images/spread_icon_up.gif");
        }, function() {
            $(this).find(".spread_but_group").slideUp("fast");
            $(this).find("img").attr("src","/74cms_v3.7_20160412/upload/templates/default//images/spread_icon.gif");
        });
        /*批量 关闭职位 */
        $("#display2").click(function(){
            var length=$("#form1 .check-control :checkbox[checked]").length;
            if(length>0)
            {
                var cof = confirm("您是否要关闭您选中的职位，您共选中"+length+"个职位,确定关闭吗？");
                if(cof) {
                    return true;
                } else {
                    return false;
                }
            }
            else
            {
                alert("您没有选中职位！");
                return false;
            }

        });
        // 删除弹出
        delete_dialog('.ctrl-del','#form1');
        // 分享到朋友圈
        $(".pengyouquan").on('click', function() {
            id=$(this).attr('id');
            var pengyouquan = dialog({
                content: '<img src="http://www.php9.com/74cms_v3.7_20160412/upload/plus/url_qrcode.php?url=http://www.php9.com/74cms_v3.7_20160412/upload/m/m-wzp.php?company_id=1" alt="扫描二维码" width="80" height="80" />',
                quickClose: true// 点击空白处快速关闭
            });
            pengyouquan.showModal(document.getElementById(''+id+''));
        });

    });
</script>