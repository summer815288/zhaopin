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
    <div class="public-nav">您当前的位置：<a href="">管理首页</a>></div>
    <div class="public-content">
        <div class="public-content-header">
            <h4><a style="float: left" href="?r=navigation/index">导航菜单&nbsp;&nbsp;</a>
                <a style="float: left" href="?r=navigation/navadd">&nbsp;&nbsp;添加导航栏目&nbsp;&nbsp;</a>
                <a style="float: left" href="?r=navigation/navcate">&nbsp;&nbsp;导航分类</a></h4>
        </div>
        <div class="public-content-cont">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">网站名称</label>
                    <input class="form-input-txt" type="text" name="Dream_SiteName" value="" />
                </div>
                <div class="form-group">
                    <label for="">网站标题</label>
                    <input class="form-input-txt" type="text" name="Dream_SiteName" value="" />
                </div>
                <div class="form-group">
                    <label for="">网站关键词</label>
                    <input class="form-input-txt" type="text" name="Dream_SiteName" value="" />
                </div>
                <div class="form-group">
                    <label for="">网站描述</label>
                    <input class="form-input-txt" type="text" name="Dream_SiteName" value="" />
                </div>
                <div class="form-group">
                    <label for="">收款方式</label>
                    <input class="form-input-radius" type="radio" checked="checked" name="Dream_SiteName" value="" />
                    <input class="form-input-radius" type="radio" name="Dream_SiteName" value="" />
                </div>
                <div class="form-group" style="margin-left:150px;">
                    <input type="submit" class="sub-btn" value="提  交" />
                    <input type="reset" class="sub-btn" value="重  置" />
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../kingediter/kindeditor-all-min.js"></script>
<script>
    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_id');
    });
</script>
</body>
</html>