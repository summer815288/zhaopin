<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
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
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">首页推荐管理</a></div>
		<div class="public-content">
			<div class="public-content-header">
				<h3>修改网站配置</h3>
			</div>
			<div class="public-content-cont two-col">

			<form action="<?php echo Url::to(['admin/index_tj']);?>" method="post">
               <div class="public-cont-left">
					<div class="public-cont-title">
						<h3>添加修改分类</h3>
					</div>
					<div class="form-group">
						<label for="">所属导航</label>
						<select name="navigate" id="" class="form-select">
							<option value="1">一级导航</option>
							<option value="2">二级导航</option>
							<option value="3">三级导航</option>
							<option value="4">四级导航</option>
						</select>
					</div>
					<div class="form-group mt0">
						<label for="">导航名称</label>
						<input type="text" name="nav_name" class="form-input-small">
					</div>
					<div class="form-group mt0">
						<label for="">导航介绍</label>
						<input type="text" name="nav_introduce" class="form-input-small">
					</div>
					<div class="form-group mt0">
						<label for="">排序编号</label>
						<input type="text" name="nav_number" class="form-input-small">
					</div>
					<!-- <div class="form-group mt0">
						<label for="">链接</label>
						<input type="text" class="form-input-small">
					</div> -->
					<div class="form-group mt0">
						<label for="">是否显示</label>
						<input type="checkbox" name="is_show" value="1">
					</div>
				<!-- 	<div class="form-group mt0">
						<label for="">是否外链	</label>
						<input type="checkbox" name="is_external_link" value="1">
					</div> -->
					<div class="form-group mt0">
						<label for="">新栏目</label>
						<input type="checkbox" name="new_column" value="1">
					</div>
					<!-- <div class="form-group mt0">
						<label for="">图标</label>
						<input type="text" class="form-input-small">
						<div class="file"><input type="file" class="form-input-file" />选择文件</div>
						<div class="file"><input type="submit" class="form-input-file"/>上传</div>
					</div> -->
					<div class="form-group mt0" style="text-align:center;margin-top:15px;">
						<input type="submit" class="sub-btn" value="提   交">
					</div>
				</div>

			</form>

				
				<table class="public-cont-table">
					<tr>
						<th style="width:10%">Id</th>
						<th style="width:10%">分类名称</th>
						<th style="width:10%">排序编号</th>
						<th style="width:10%">显示</th>
						<th style="width:10%">新栏目</th>
						<th style="width:20%">操作</th>
					</tr>
					<?php foreach ($data as $k => $v): ?>
						<tr>
						<td><?php echo $v['nav_id'] ?></td>
						<td>+ <?php echo $v['nav_name'] ?></td>
						<td><?php echo $v['nav_number'] ?></td>
						<?php if($v['is_show']==1){ ?>
                        <td><span style="color:#6bc095">显示</span></td>
						<?php }else{ ?>	
						<td><span style="color:#6bc095">不显示</span></td>					
						<?php } ?>
						<?php if($v['is_show']==1){ ?>
                        <td><span style="color:#999">是</span></td>
						<?php }else{ ?>	
						<td><span style="color:#999">不是</span></td>				
						<?php } ?>
						<td>
							<div class="table-fun">
								<a href="">修改</a>
								<a href="">删除</a>
							</div>
						</td>
					</tr>
					<?php endforeach ?>
					
					<?= LinkPager::widget(['pagination' => $pagination]) ?>
				
				</table>
			</div>
		</div>
	</div>
</body>
</html>