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
						<th style="width:5%">编号</th>
						<th style="width:10%">管理员</th>
						<th style="width:10%">角色</th>
						<th style="width:15%">登录时间</th>
						<th style="width:25%">操作</th>
					</tr>
					<tbody id="tbody">
					<?php foreach($admin_list as $k=>$v){?>
					<tr>
						<td><?php echo $v['admin_id']?></td>						
						<td><?php echo $v['admin_name']?></td>
						<td><?php echo $v['r_name']?></td>
						<td><?php echo date("Y-m-d H:i:s",$v['login_time'])?></td>
						<td>
							<div class="table-fun">
								<a href="?r=rbac/setpower&rid=<?php echo $v['r_id']?>"><button class="del">权限</button></a>
								<button class="del" value="<?php echo $v['admin_id']?>">删除</button>
							</div>
						</td>
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