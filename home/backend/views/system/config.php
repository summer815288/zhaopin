<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台欢迎页</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
<div class="container">
    <div class="public-nav">您当前的位置：<a href="">管理首页</a></div>
    <div class="public-content">
        <form action="?r=system/web_config" method="post">
        <div class="public-content-header">
            <input type="button" class="set_one" value="网站配置">
            <input type="button" class="set_two" value="注册设置">
<!--            <button class="set_three">电子地图</button>-->
        </div>
        <div class="public-content-cont">
            <div id="box1">
<!--            <form action="" method="post">-->
                <div class="form-group">
                    <label for="">网站名称：</label>
                    <input class="form-input-txt" type="text" name="site_anme" value="<?php echo $value['site_name']?>" />
                </div>
                <div class="form-group">
                    <label for="">网站域名：</label>
                    <input class="form-input-txt" type="text" name="site_domain" value="<?php echo $value['site_domain']?>" />
                </div>
                <div class="form-group">
                    <label for="">安装目录：</label>
                    <input class="form-input-txt" type="text" name="template_dir" value="<?php echo $value['template_dir']?>" />
                </div>
                <div class="form-group">
                    <label for="">联系电话（顶部）：</label>
                    <input class="form-input-txt" type="text" name="top_tel" value="<?php echo $value['top_tel']?>" />
                </div>
                <div class="form-group">
                    <label for="">联系电话（底部）：</label>
                    <input class="form-input-txt" type="text" name="bootom_tel" value="<?php echo $value['bootom_tel']?>" />
                </div>
                <div class="form-group">
                    <label for="">网站底部联系地址：</label>
                    <input class="form-input-txt" type="text" name="address" value="<?php echo $value['address']?>" />
                </div>

             </div>
            <div id="box2" style="display:none">
                <div class="form-group">
                    <label for="">网站底部其他说明:</label>
                    <input class="form-input-txt" type="text" name="bottom_other" value="<?php echo $value['bottom_other']?>" />
                </div>
                <div class="form-group">
                    <label for="">网站备案号（ICP）:</label>
                    <input class="form-input-txt" type="text" name="icp" value="<?php echo $value['icp']?>" />
                </div>
                <div class="form-group">
                    <label for="">网站Logo</label>
                    <input class="form-input-txt" type="text" name="web_logo" value="UploadFiles/20167111477414.jpg" />
                    <div class="file"><input type="file" class="form-input-file" />选择文件</div>
                    <div class="file"><input type="submit" class="form-input-file"/>上传</div>
                    <a href="#">预览</a>
                </div>
                <div class="form-group">
                    <label for="">暂时关闭网站：</label>
                    <?php if($value['isclose']==1){?>
                        否<input class="form-input-radius" type="radio" name="isclose" value="0" />
                        是<input class="form-input-radius" type="radio" checked="checked" name="isclose" value="1" />
                    <?php }else{?>
                        否<input class="form-input-radius" type="radio" checked="checked" name="isclose" value="0" />
                        是<input class="form-input-radius" type="radio" name="isclose" value="1" />
                    <?php }?>
                </div>
                <div class="form-group">
                    <label for="">关闭会员注册：</label>
                    <?php if($value['closereg']==1){?>
                    否<input class="form-input-radius" type="radio" name="closereg" value="0" />
                    是<input class="form-input-radius" type="radio" checked="checked" name="closereg" value="1" />
                    <?php }else{?>
                    否<input class="form-input-radius" type="radio" checked="checked" name="closereg" value="0" />
                    是<input class="form-input-radius" type="radio" name="closereg" value="1" />
                    <?php }?>
                </div>
                <div class="form-group">
                    <label for="">关闭更新时间：</label>
                    <?php if($value['closetime']==1){?>
                    否<input class="form-input-radius" type="radio" name="closetime" value="0" />
                    是<input class="form-input-radius" type="radio" checked="checked" name="closetime" value="1" />
                    <?php }else{?>
                    否<input class="form-input-radius" type="radio" checked="checked" name="closetime" value="0" />
                    是<input class="form-input-radius" type="radio" name="closetime" value="1" />
                    <?php }?>
                </div>
                <div class="form-group">
                    <label for="">邮件注册会员激活：</label>
                    <?php if($value['emailreg']==1){?>
                    否<input class="form-input-radius" type="radio" name="emailreg" value="0" />
                    是<input class="form-input-radius" type="radio" checked="checked" name="emailreg" value="1" />
                    <?php }else{?>
                    否<input class="form-input-radius" type="radio" checked="checked" name="emailreg" value="0" />
                    是<input class="form-input-radius" type="radio" name="emailreg" value="1" />
                    <?php }?>
                </div>
                <div class="form-group">
                    <label for="">网站主体背景：</label>
                </div>
            </div>
                <div class="form-group" style="margin-left:150px;">
                    <input type="submit" class="sub-btn" value="提  交" />
                    <input type="reset" class="sub-btn" value="重  置" />
                </div>
        </div>
        </form>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script>
    $(".set_one").click(function () {
        $("#box1").show();
        $("#box2").hide();
    })
    $(".set_two").click(function () {
        $("#box1").hide();
        $("#box2").show();
    })
</script>
<script src="kingediter/kindeditor-all-min.js"></script>
<script>
    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_id');
    });
</script>
</body>
</html>