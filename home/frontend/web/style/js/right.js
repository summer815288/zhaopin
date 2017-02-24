$(document).ready(function()
{
//所有提交按钮效果
    $("input[type='submit'],input[type='button']").hover(
        function () {
            $(this).addClass("hover");
        },
        function () {
            $(this).removeClass("hover");
        }
    );
//所有多选按钮效果
    $(".input_checkbox,.input_checkbox_add").hover(
        function () {
            $(this).addClass("h");
        },
        function () {
            $(this).removeClass("h");
        }
    );
//全选
    $('#chk').click(function(){$("#form1 :checkbox").attr('checked',$("#chk").is(':checked'))});
    $('#chk2').click(function(){$("#form1 :checkbox").attr('checked',$("#chk2").is(':checked'))});
});
// 右侧漂浮
$(function(){
    $(".guwen").click(function(){
        $(this).hide();
        $(".guwen_open").show();
    });
    $(".guwen_open .close").click(function(){
        $(".guwen_open").hide();
        $(".guwen").show();
    })
})
$(document).ready(function() {
    $(".guwen").click(function(){
        $(this).hide();
        $(".guwen_open").show();
    });
    $(".guwen_close").click(function(){
        $(".guwen_open").hide();
        $(".guwen").show();
    });
});
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
    vtip_reason("/74cms_v3.7_20160412/upload/","jobs_reason");
    // 单个刷新
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