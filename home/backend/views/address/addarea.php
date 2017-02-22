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
    <div class="public-nav">您当前的位置：<a href="">添加子地区</a>></div>
    <div class="public-content">
        <div class="public-content-cont">
            <h3>新增子地区</h3>
        </div>
        <div class="public-content-cont">
            <form action="?r=address/addarea" method="post">
                <div class="form-group">
                    <label for="">所属分类：</label>
                    <input class="form-input-txt" type="text" name="parentid" value="<?php echo $data['categoryname']?>" />
                </div>
                <div class="form-group">
                    <label for="">名称：</label>
                    <input class="form-input-txt" type="text" name="categoryname" value="" />
                </div>
                <div class="form-group">
                    <label for="">排序：</label>
                    <input class="form-input-txt" type="text" name="category_order" value="" />
                </div>
                <div class="form-group" style="margin-left:150px;">
                    <!--                    <i nput type="hidden" name="admin_set" value="0" />-->
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