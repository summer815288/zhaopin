<?php use yii\helpers\Url;?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/public.css">
</head>
<body>
<!-- 内容展示 -->
<div class="public-ifame mt20">
    <div class="content">
        <!-- 左侧导航栏 -->
        <div class="public-ifame-leftnav">
            <div class="public-title-warrp">
                <div class="public-ifame-title ">
                    <a href="">首页</a>
                </div>
            </div>
            <ul class="left-nav-list">
                <li class="public-ifame-item">
                    <a href="javascript:;">简历管理</a>
                    <div class="ifame-item-sub">
                        <ul>
                            <li class="active"><a href="<?php echo Url::to(['company/company_jobs']);?>" target="content">创建简历</a></li>
                            <li><a href="<?php echo Url::to(['company/company_jobs_to']);?>" target="content">我的简历</a></li>
                        </ul>
                    </div>
                </li>
                <li class="public-ifame-item">
                    <a href="javascript:;">求职管理</a>
                    <div class="ifame-item-sub">
                        <ul>
                            <li><a href="<?php echo Url::to(['member/resume']);?>" target="content">面试邀请</a></li>
                            <li><a href="<?php echo Url::to(['member/resume_wait']);?>" target="content">已申请职位</a></li>
                            <li><a href="<?php echo Url::to(['member/resume_talent']);?>" target="content">职位收藏夹</a></li>

                        </ul>
                    </div>
                </li>
                <li class="public-ifame-item">
                    <a href="javascript:;">账号管理</a>
                    <div class="ifame-item-sub">
                        <ul>
                            <li><a href="<?php echo Url::to(['person/man']);?>" target="content">基本资料</a></li>
                            <li><a href="<?php echo Url::to(['member/resume_wait']);?>" target="content">账号安全</a></li>
                            <li><a href="<?php echo Url::to(['member/resume_talent']);?>" target="content">我的消息</a></li>
                            <li><a href="<?php echo Url::to(['member/resume_talent']);?>" target="content">安全退出</a></li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 右侧内容展示部分 -->
        <div class="public-ifame-content">
            <iframe name="content" src="<?php echo Url::to(['admin/main']);?>" frameborder="0" id="mainframe" scrolling="yes" marginheight="0" marginwidth="0" width="100%" style="height: 700px;"></iframe>


        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script>
    $().ready(function(){
        var item = $(".public-ifame-item");

        for(var i=0; i < item.length; i++){
            $(item[i]).on('click',function(){
                $(".ifame-item-sub").hide();
                if($(this.lastElementChild).css('display') == 'block'){
                    $(this.lastElementChild).hide()
                    $(".ifame-item-sub li").removeClass("active");
                }else{
                    $(this.lastElementChild).show();
                    $(".ifame-item-sub li").on('click',function(){
                        $(".ifame-item-sub li").removeClass("active");
                        $(this).addClass("active");
                    });
                }
            });
        }
    });
</script>