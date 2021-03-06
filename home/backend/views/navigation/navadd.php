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
            <h5>新增导航栏</h5>
            <form action="?r=navigation/navadd" method="post">
                <div class="form-group">
                    <label for="">类型：</label>
                    <input class="form-input-radius" type="radio" name="urltype" value="0" />系统内容
                    <input class="form-input-radius" type="radio" name="urltype" value="1" />其他链接
                </div>
                <div class="form-group">
                    <label for="">栏目名称：</label>
                    <input class="form-input-txt" type="text" name="title" value="" />
                </div>
                <div class="form-group">
                    <label for="">系统页面：</label>
                    <input class="form-input-txt" type="text" name="pagealias" value="" />
                </div>
                <div class="form-group">
                    <label for="">分类ID：</label>
                    <input class="form-input-txt" type="text" name="list_id" value="" />
                </div>
                <div class="form-group">
                    <label for="">类别：</label>
                    <input class="form-input-radius" type="radio" checked="checked" name="alias" value="QS_top" />顶部导航
                    <input class="form-input-radius" type="radio" name="alias" value="low_name" />底部导航
                </div>
                <div class="form-group">
                    <label for="">打开方式：</label>
                    <input class="form-input-radius" type="radio" checked="checked" name="target" value="_blank" />新窗口
                    <input class="form-input-radius" type="radio" name="target" value="_self" />当前窗口
                </div>
                <div class="form-group">
                    <label for="">显示顺序：</label>
                    <input class="form-input-txt" type="text" name="navigationorder" value="" />
                </div>
                <div class="form-group">
                    <label for="">是否显示</label>
                    <input class="form-input-radius" type="radio" checked="checked" name="display" value="1" />显示
                    <input class="form-input-radius" type="radio" name="display" value="0" />隐藏
                </div>
<!--                <div class="form-group">-->
<!--                    <label for="">显示颜色：</label>-->
                    <!-- <input class="form-input-txt" type="text" name="tag" value="" /> -->
                </div>
                <div class="form-group">
                    <label for="">导航关联标记：</label>
                    <input class="form-input-txt" type="text" name="tag" value="" />
                </div>
                <div class="form-group" style="margin-left:150px;">
                    <input type="submit" class="sub-btn" value="确定提交" />
                    <input type="reset" class="sub-btn" value="返回" />
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