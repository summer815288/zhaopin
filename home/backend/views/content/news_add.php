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
				'action' => ['content/addpost'],
				'method'=>'post',
				'options' => ['enctype' => 'multipart/form-data'],
				]); ?>

				<div class="form-group">
					<label for="">请选择分类</label>
					<select name="cate" class="form-select">
						<option value="">请选择分类</option>
						<?php foreach($list as $k=>$v){?>
							<option value="<?php echo $v['nc_id']?>"><?php echo $v['nc_name']?></option>
						<?php }?>
					</select>
				</div>
				<div class="form-group">
					<label for="">新闻标题</label>
					<input class="form-input-txt" type="text" name="title" value="" />
				</div>
				
				<div class="form-group">
					<label for="">新闻内容</label>
					<textarea class="form-input-textara" type="text" name="content"></textarea>
				</div>
				
				<div class="form-group">
					<label for="">发布人</label>
					<input class="form-input-txt" type="text" name="author" value="" />
				</div>

<!-- 				<div class="form-group">
					<label for="">缩略图</label>
					<input class="form-input-txt" type="text" name="Dream_SiteName" value="" />
					<div class="file"><input type="file" class="form-input-file"/>选择文件</div>
					<div class="file"><input type="submit" class="form-input-file"/>上传</div>
					<a href="#">预览</a>
				</div>
				 -->
				 <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
				<div class="form-group">
					<label for="">录入时间</label>
					<input class="form-input-txt" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" name="time">
				</div>
				<div class="form-group" style="margin-left:150px;">
					<input type="submit" class="sub-btn" value="提  交" />
					<input type="reset" class="sub-btn" value="重  置" />
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