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
    <div class="public-nav">您当前的位置：<a href="">系统</a>><a href="">导航栏设置</a></div>
    <div class="public-content">
        <div class="public-content-header">
            <h4><a style="float: left" href="?r=navigation/index">导航菜单&nbsp;&nbsp;</a>
                <a style="float: left" href="?r=navigation/navadd">&nbsp;&nbsp;添加导航栏目&nbsp;&nbsp;</a>
                <a style="float: left" href="?r=navigation/navcate">&nbsp;&nbsp;导航分类</a></h4>
        </div>
        <div class="public-content-cont">
            <table class="public-cont-table">
                <tr>
                    <th style="width:30%">调用名称</th>
                    <th style="width:10%">分类名称</th>
                    <th style="width:15%">操作</th>
                </tr>
                <?php foreach ($list as $key => $value): ?>
                    <tr>
                        <td><?php echo $value['categoryname']?></td>
                        <td><?php echo $value['alias']?></td>
                        <td>
                            <div class="table-fun">
                                <a href="?r=navigation/cateupdate&id=<?php echo $value['id']?>">修改</a>
                                <a href="javascript:void(0);" class="del">删除</a>
                                <input type="hidden" name="id" value="<?php echo $value['id']?>">
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
            <a style="float: left" href="?r=navigation/cateadd"><input type="button" value="新增类别"></a>
            <div class="page">
                <form action="" method="get">
                    共<span>42</span>个站点
                    <a href="">首页</a>
                    <a href="">上一页</a>
                    <a href="">下一页</a>
                    第<span style="color:red;font-weight:600">12</span>页
                    共<span style="color:red;font-weight:600">120</span>页
                    <input type="text" class="page-input">
                    <input type="submit" class="page-btn" value="跳转">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="js/jquery.min.js"></script>
<script>
    $(".del").click(function () {
        var msg = "您确定要删除吗？";
        if (confirm(msg)==true) {
            var id = $(this).next().val();
            $(this).parent().parent().parent().remove();
            $.ajax({
                type: "POST",
                url: "?r=navigation/catedel",
                data: {'id': id},
            });
        }
        else
        {
            return false;
        }
    })
</script>