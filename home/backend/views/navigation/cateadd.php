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
            <h3>新增导航分类</h3>
        </div>
        <div class="public-content-cont">
            <form action="?r=navigation/cateadd" method="post">
                <div class="form-group">
                    <label for="">分类名称：</label>
                    <input class="form-input-txt" type="text" name="categoryname" value="" />
                </div>
                <div class="form-group">
                    <label for="">调用标题：</label>
                    <input class="form-input-txt" type="text" name="alias" value="" />
                </div>
                <div class="form-group" style="margin-left:150px;">
                    <input type="submit" class="sub-btn" value="提  交" />
                    <a href="?r=navigation/navcate"><input type="reset" class="sub-btn" value="返回" /></a>
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