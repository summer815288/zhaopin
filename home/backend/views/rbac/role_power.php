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
    <div class="public-nav">您当前的位置：<a href="">首页</a>><a href="">管理员列表</a></div>
    <div class="public-content">
        <div class="public-content-header">
            <!-- <h3>修改网站配置</h3> -->
        </div>
        <div class="public-content-cont">
            <table class="public-cont-table">
                <tr>
                    <th style="width:5%">选择</th>
                    <th style="width:10%">控制器</th>
                    <th style="width:10%">方法</th>
                </tr>
                <tbody id="tbody">
                <?php foreach($list as $k=>$v){?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?php echo $v['p_controller']?></td>
                        <td><?php echo $v['p_action']?></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>