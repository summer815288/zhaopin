<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台欢迎页</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href=" css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
<div class="container">
    <div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">名片管理</a></div>
    <div class="public-content">
        <div class="public-content-header">
            <h3>修改网站配置</h3>
        </div>
        <div class="public-content-cont">
            <table class="public-cont-table">
                <tr>
                    <th style="width:10%">会员名</th>
                    <th style="width:10%">类型</th>
                    <th style="width:20%">创建时间</th>
                    <th style="width:20%">IP</th>
                    <th style="width:20%">登录地址</th>
                    <th style="width:20%">描述</th>
                </tr>
                <?php foreach($company_log as $item){?>
                <tr>
                    <td><?=$item['log_username']?></td>
                    <td><?php if($item['log_utype']==1){echo "<font color='#a9a9a9'>企业会员</font>";}?></td>
                    <td><?=date('Y-m-d',$item['log_addtime'])?></td>
                    <td><?=$item['log_ip']?></td>
                    <td><?=$item['log_address']?></td>
                    <td><?=$item['log_value']?></td>
                </tr>
                <?php }?>
            </table>
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