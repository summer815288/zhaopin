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
		<div class="public-nav">您当前的位置：<a href="">首页</a>><a href="">新闻添加</a></div>
		<div class="public-content">
			<div class="public-content-header">
				<!-- <h3>修改网站配置</h3> -->
			</div>
			<div class="public-content-cont">
			<!-- <form action="?r=content/addpost" method="post"> -->
			<?php
			use yii\widgets\ActiveForm;
			use yii\helpers\Html;
			?>

			<?php $form = ActiveForm::begin([
				'action' => ['system/jobsaddpost'],
				'method'=>'post',
				]); ?>

				<div class="form-group">
					<label for="">所属分类</label>
					<select name="cate" id="">					
						<option value="<?=$id?>"><?= $data[0]['categoryname']?></option>
				
					</select>
				</div>
				<div class="form-group">
					<label for="">名称</label>
					<input class="form-input-txt" type="text" name="name" value="" />
				</div>
				
				<div class="form-group">
					<label for="">排序</label>
					<input class="form-input-txt" type="text" name="sort" value="" />

				</div>			
				

				<div class="form-group" style="margin-left:150px;">
					<input type="submit" class="sub-btn" value="提  交" />
				</div>
				<?php ActiveForm::end(); ?>

				<!-- </form> -->
			</div>
		</div>
	</div>
<script src="js/kindeditor-all-min.js"></script>
<script src="js/laydate.js"></script>
<script>
	 KindEditor.ready(function(K) {
            window.editor = K.create('#editor_id');
        });
</script>
</body>
</html>