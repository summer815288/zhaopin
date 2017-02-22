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
    <div class="public-nav">您当前的位置：<a href="">系统</a><a href="">地区管理</a></div>
    <div class="public-content">
        <div class="public-content-cont">
            <table class="public-cont-table">
                <tr>
                    <th style="width:30%"><input type="checkbox">地区分类</th>
                    <th style="width:15%">排序</th>
                    <th style="width:35%">操作</th>
                </tr>
                <?php foreach ($data as $key => $value): ?>
                <tr>
                    <td style="text-align:left"><input type="checkbox"><button class="add">+</button><button class="jian" style="display: none">-</button><input type="text" value="<?php echo $value['categoryname']?>" area="<?php echo $value['id']?>" class="title"></td>
                    <td><input type="hidden" value="<?php echo $value['id']?>"><input type="text" style="width: 10%" value="<?php echo $value['category_order']?>" class="sort"></td>
                    <td>
                        <div class="table-fun">
                            <a href="?r=address/addarea&id=<?php echo $value['id']?>">添子</a>
                            <a href="javascript:void(0);" class="del">删除</a>
                            <input type="hidden" value="<?php echo $value['id']?>">
                        </div>
                    </td>
                </tr>
                <tr style="display: none">
                    <td colspan="3">
                        <table>
                            <?php foreach ($value['son'] as $k => $val): ?>
                             <tr >
                                <td style="width:30%"><input type="checkbox"><input type="text" value="<?php echo $val['categoryname']?>" area="<?php echo $val['id']?>" class="title"></td>
                                <td style="width:15%"><input type="hidden" value="<?php echo $val['id']?>"><input type="text" style="width: 10%" value="<?php echo $val['category_order']?>" class="sort"></td>
                                <td style="width:35%">
                                    <div class="table-fun">
                                        <a href="javascript:void(0);" class="del">删除</a>
                                        <input type="hidden" value="<?php echo $val['id']?>">
                                    </div>
                                </td>
                             </tr>
                            <?php endforeach ?>
                        </table>
                    </td>
                 </tr>
                <?php endforeach ?>
            </table>
<!--            <input style="float: left" type="button" value="保存修改">-->
            <a style="float: left" href="?r=navigation/navadd"><input type="button" value="添加栏目"></a>
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
    $(".add").click(function () {
        $(this).parent().parent().next().show();
        $(this).hide();
        $(this).next().show();
    })
    $(".jian").click(function () {
        $(this).parent().parent().next().hide();
        $(this).hide();
        $(this).prev().show();
    })
    //修改地区名
    $(".title").blur(function () {
        var id=$(this).attr('area');
        var title=$(this).val();
        $.ajax({
            type: "POST",
            url: "?r=address/index",
            data: {'id':id,'title':title},
        });
    })
    //修改排序
    $(".sort").blur(function () {
        var id=$(this).prev().val();
        var sort=$(this).val();
        $.ajax({
            type: "POST",
            url: "?r=address/sort",
            data: {'id':id,'sort':sort},
        });
    })
    //删除地区
    $(".del").click(function () {
        var id=$(this).next().val();
        $(this).parent().parent().parent().remove();
        $.ajax({
            type: "POST",
            url: "?r=address/del",
            data: {'id':id},
        });
    })
</script>