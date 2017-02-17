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
		<div class="public-nav">您当前的位置：<a href="">首页</a>><a href="">新闻列表</a></div>
		<div class="public-content">
			<div class="public-content-header">
				<!-- <h3>修改网站配置</h3> -->
			</div>
			<span>
		        标题：<input type="text" name="keywords" id="title" value="" size="16" style="height: 20px">
		    </span>
		    <span>
		        <button class="combutton02 w50" id="search">查询</button>
		    </span>
			<div class="public-content-cont">
				<table class="public-cont-table">
					<tr>
						<th style="width:5%">编号</th>
						<th style="width:10%">新闻标题</th>
						<th style="width:10%">分类</th>
						<th style="width:20%">内容</th>
						<th style="width:20%">新闻图片</th>
						<th style="width:20%">时间</th>
						<th style="width:10%">发布人</th>
						<th style="width:20%">操作</th>
					</tr>
					<tbody id="tbody">
					<?php foreach($list as $k=>$v){?>
					<tr>
						<td><?php echo $v['news_id']?></td>
						<td>
							<span class="change"><?php echo $v['news_title']?></span>
							<input type="text" style="display: none" class="input">
							<input type="hidden" value="<?php echo $v['news_id']?>">
						</td>
						<td><?php echo $v['nc_name']?></td>
						<td><?php echo $v['news_content']?></td>
						<td><img src="<?php echo $v['news_img']?>" width="100px"></td>
						<td><?php echo $v['news_time']?></td>
						<td><?php echo $v['news_author']?></td>
						<td>
							<div class="table-fun">
								<button class="del" value="<?php echo $v['news_id']?>">删除</button>
							</div>
						</td>
					</tr>
					<?php }?>
					</tbody>

				</table>
				<div class="page">
					<?php echo $str?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
	//搜索   分页
	   var arr = new Object();
	   $('#search').click(function(){
	       arr['title']=$("#title").val();
	       page(1);
	   })
	   function page(p){
	       var str='';
	       $.each(arr,function(k,v){
	           str +='&'+k+'='+v;
	       });
	       $.ajax({
	           type: "GET",
	           url: "?r=content/getajax",
	           data: 'p='+p+str,
	           dataType:'json',
	           success: function(msg){
	               str1(msg);
	           }
	       });
	   }
	   function str1(msg){
	       var str ="";
	       $.each(msg.list,function(k,v){
	       	str +='<tr><td>'+v.news_id+'</td>';
	       	str +='<td>'+v.news_title+'</td>';
	       	str +='<td>'+v.nc_name+'</td>';
	       	str +='<td>'+v.news_content+'</td>';
	       	str +='<td><img src='+v.news_img+' width="100px"></td>';
	       	str +='<td>'+v.news_time+'</td>';
	       	str +='<td>'+v.news_author+'</td>';
	       	str +='<td><div class="table-fun"><a href="">删除</a></div></td>';
	       	str += '</tr>';
	       })
	       $("#tbody").html(str);
	       $('.page').html(msg.page);
	   }

	   //删除
	   $(".del").click(function(){
	   	var id = $(this).val();
	   	$(this).parent().parent().parent().remove();
	   	$.ajax({
	   	   type: "POST",
	   	   url: "?r=content/getdel",
	   	   data: "id="+id,
	   	   success: function(msg){
	   	     // alert("删除成功！");
	   	   }
	   	});
	   })

	   //新闻标题的即点即改
	   $(".change").click(function(){
	   		var title = $(this).html();
	   		$(this).next().val(title);
	   		$(this).hide();
	   		$(this).next().show();
	   })
	   $(".input").blur(function(){
	   		var titles = $(this).val();
	   		var id = $(this).next().val();
	   		// alert(id);
	   		$(this).prev().html(titles);
	   		$(this).hide();
	   		$(this).prev().show();

	   		$.ajax({
	   		   type: "POST",
	   		   url: "?r=content/getcha",
	   		   data: "titles="+titles+"&id="+id,
	   		   success: function(msg){
	   		     alert("修改成功！");
	   		   }
	   		});
	   })
</script>