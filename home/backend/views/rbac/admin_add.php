<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台欢迎页</title>
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/public.css" />
	<link rel="stylesheet" href="css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">添加管理员</a></div>
		<div class="public-content">
			<div class="public-content-header">
				<h3>修改网站配置</h3>
			</div>
			<div class="public-content-cont">
			<form action="?r=rbac/adminpost" method="post">
				<div class="form-group">
					<label for="">角色</label>
					<select name="role" class="form-select">
						<option value="">请选择分类</option>
						<?php foreach($role as $k=>$v){?>
						<option value="<?php echo $v['r_id']?>"><?php echo $v['r_name']?></option>
						<?php }?>
					</select>
				</div>
				<div class="form-group">
					<label for="">管理员名</label>
					<input class="form-input-txt" type="text" name="admin_name" value="" />
				</div>
				<div class="form-group">
					<label for="">密码</label>
					<input class="form-input-txt" type="text" name="admin_pwd" value="" />
				</div>
				
				
				<div class="form-group" style="margin-left:150px;">
					<input type="submit" class="sub-btn" value="提  交" />
				</div>
				</form>
			</div>
		</div>
	</div>
<script src="../kingediter/kindeditor-all-min.js"></script>
<script src="../js/laydate.js"></script>
<script>
	 KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>
</body>
</html>