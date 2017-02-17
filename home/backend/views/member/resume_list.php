<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台欢迎页</title>
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href=" css/content.css" />
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(function () {
            $("[data-toggle='popover']").popover();
        });
    </script>

</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">个人管理</a></div>
		<div class="public-content">
			<div class="public-content-header">
				<h3>简历列表</h3>
			</div>
			<div class="public-content-cont">
				<table class="public-cont-table">
					<tr>
						<th style="width:20%">姓名</th>
						<th >完整指数</th>
						<th >联系方式</th>
						<th >审核状态</th>
						<th >公开</th>
						<th>添加时间</th>
						<th >刷新时间</th>
						<th >操作</th>
					</tr>
                    <?php  foreach($member as $k=>$v){?>
					<tr>
						<td><?php  echo $v['realname']?>

                            <?php  if($v['photo']>0){?>

                            <img src="http://localhost/zhaopin/home/public/images/<?php  echo $v['photo_img']?>"  class="photo_img"  title='<img src="http://localhost/zhaopin/home/public/images/<?php  echo $v['photo_img']?>"   width="50" height="50">'  width="50" height="50" >
                            <?php  }else{?>

                                <div  class="" title="温馨提示" style="height:28px;background-color: wheat;width:80px;color:#009900;display:inline;cursor: pointer"
                                        data-container="body" data-toggle="popover" data-placement="right"
                                        data-content="用户还没有添加图片哦" >
                                    [照片]
                                </div >

                                <?php  }?>
                        </td>
						<td>

                <div   style="width:100%;border:1px #cccccc solid;padding: 1px;text-align: left;position:relative;">
                   <div style="background-color: #99cc00;height:10px;color:#990000;width:<?php  echo $v['complete_percent']?>px">
                   </div>
                         <div style="position: absolute;top:0px;left:40%;font-size: 10px;">
                         <?php  echo $v['complete_percent']?>%
                         </div>
                        </div>

                        </td>
						<td>
                            <a href="<?php echo Url::toRoute(['member/email','email'=>$v['email']])?>">
                                <img src="../../public/backend/email.gif" style="height:15px;">
                            </a>

                                <img src="../../public/backend/sms.gif"
                                     title="用户手机号" style="height:22px;background-color: wheat;cursor: pointer"
                                     data-container="body" data-toggle="popover" data-placement="right"
                                     data-content="<?php  echo $v['phone']?>"          >

                        </td>
                           <td>
                        <?php  if($v['audit']==1){?>
                               审核通过<?php  }else{?>审核中<?php }?>
                           </td>
                        <td><?php  echo $v['display']?></td>
						<td><?php echo date("Y-m-d H:i:s",$v['addtime']) ?></td>
						<td><?php echo date("Y-m-d H:i:s", $v['refreshtime']) ?></td>

						<td>
							<div class="table-fun">
                                <a href="<?php echo Url::toRoute(['member/members_log','uid'=>$v['uid']])?>">日志</a>
								<a href="<?php echo Url::toRoute(['member/members_show','uid'=>$v['uid'],'id'=>$v['id']])?>">查看</a>

							</div>
						</td>
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

<script>
    $(document).on("click",".photo_img",function(){
        var title=$(this).attr('title');
        alert(title);





    })

</script>