<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\web\View;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台欢迎页</title>
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href=" css/content.css" />
    <script src="js/jquery-3.1.1.min.js"></script>

</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">个人会员</a></div>
		<div class="public-content">
			<div class="public-content-header">
				<h3>个人日志</h3>
			</div>
			<div class="public-content-cont">
				<table class="public-cont-table">
					<tr>
						<th style="width:20%">会员名</th>
						<th >类型</th>
						<th >创建时间</th>
						<th >IP</th>
						<th >登陆地址</th>
						<th>描述</th>
					</tr>
                    <?php  foreach($log as $k=>$v){?>
					<tr>
                        <td align="center"><?php  echo $v['log_username']?>
                        <span style="color:#cccccc;">[uid:<?php  echo $v['log_uid']?>]</span>
                        </td>
                        <td align="center"><?php  echo $v['log_utype']?></td>
                        <td align="center"><?php  echo date("Y-m-d H:i:s",$v['log_addtime'])?></td>
                        <td align="center"><?php  echo $v['log_ip']?></td>
                        <td align="center"><?php  echo $v['log_address']?></td>
                        <td align="center"><?php  echo $v['log_value']?></td>


					</tr>
                    <?php  }?>
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


