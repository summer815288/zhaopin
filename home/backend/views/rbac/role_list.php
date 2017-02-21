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
						<th style="width:5%">角色</th>
						<th style="width:5%">操作</th>
					</tr>
					<tbody id="tbody">
					<?php foreach($arole as $k=>$v){?>
					<tr>
						<td><?php echo $v['r_id']?></td>						
						<td><?php echo $v['r_name']?></td>
						<td>
							<div class="table-fun">
								<button class="del" value="<?php echo $v['r_id']?>">删除</button>
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
<script>
	$(".del").click(function(){
		var id = $(this).val();
		$(this).parent().parent().parent().remove();
		$.ajax({
		   type: "POST",
		   url: "?r=rbac/roledel",
		   data: "id="+id,
		   success: function(msg){
		     // alert("删除成功！");
		   }
		});
	})
</script>