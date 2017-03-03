<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
<script id="allmobilize" charset="utf-8" src="style/js/allmobilize.min.js"></script>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>拉勾网-最专业的互联网招聘平台</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="" name="description">
<meta content="" name="keywords">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link rel="Shortcut Icon" href="h/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="style/css/style.css"/>
<link rel="stylesheet" type="text/css" href="style/css/external.min.css"/>
<link rel="stylesheet" type="text/css" href="style/css/popup.css"/>
<script src="style/js/jquery.1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="style/js/jquery.lib.min.js"></script>
<script src="style/js/ajaxfileupload.js" type="text/javascript"></script>
<script type="text/javascript" src="style/js/additional-methods.js"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script type="text/javascript" src="style/js/conv.js"></script>
</head>
<body>
<div id="body">
    <div id="header">
        <div class="wrapper">
            <a href="index.html" class="logo">
                <img src="style/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘" />
            </a>
            <ul class="reset" id="navheader">
                <li class="current"><a href="?r=index/index">首页</a></li>
                <li ><a href="?r=index/company" >公司</a></li>
                <!-- <li ><a href="#" target="_blank">论坛</a></li> -->
<?php $session = Yii::$app->session; ?>
                <?php if($session->get('type') == 1){ ?>                
                <li ><a href="?r=index/create" rel="nofollow">发布职位</a></li>
                <?php }else if($session->get('type') == 2){?>
                <li ><a href="?r=person/myinfo" rel="nofollow">我的简历</a></li>
                <?php }?>
            </ul>
            
            <dl class="collapsible_menu">
                <dt>
                    <span><?=$session->get('email')?>&nbsp;</span> 
                    <span class="red dn" id="noticeDot-1"></span>
                    <i></i>
                </dt>


                <?php if($session->get('type') == 1){ ?>
                <!-- 企业用户 -->
                    <dd><a href="?r=company/positions">我发布的职位</a></dd>
                    <dd><a href="?r=company/positions">我发布的职位</a></dd>
                    <dd><a href="?r=company/positions">我收到的简历</a></dd>
                    <dd class="btm"><a href="?r=company/myhome">我的公司主页</a></dd>
                    <dd><a href="?r=company/create">我要招人</a></dd>
                    <dd><a href="?r=index/loginset">帐号设置</a></dd>
                    <dd class="logout"><a rel="nofollow" href="?r=login/loginout">退出</a></dd>
                <?php }else if($session->get('type') == 2){?>
                <!-- 个人用户 -->
                    <dd><a rel="nofollow" href="?r=person/person">个人中心</a></dd>
                    <dd><a rel="nofollow" href="?r=person/resume_list">我的简历</a></dd>
                    <dd><a href="?r=person/collections">我收藏的职位</a></dd>
                    <dd class="btm"><a href="?r=person/subscribe">我的订阅</a></dd>
                    <dd><a href="create.html">我要找工作</a></dd>
                    <dd><a href="?r=person/man">帐号设置</a></dd>
                    <dd class="logout"><a rel="nofollow" href="?r=login/loginout">退出</a></dd>

                <?php }else if($session->get('type') == null) { ?>
                    <ul class="loginTop">
                        <li><a href="?r=login/login" rel="nofollow">登录</a></li> 
                        <li>|</li>
                        <li><a href="?r=login/register" rel="nofollow">注册</a></li>
                    </ul>
                <?php }?>
            </dl>
        </div>
    </div><!-- end #header -->
<?php echo $content?>
</body>
</html>
<style>
    .pre li {
        float:left;
        list-style-type:none;
        padding-left: 25px;;
    }
</style>