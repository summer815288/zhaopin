<?php use yii\helpers\Url;?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/public.css">
</head>
<body>
<div class="public-header-warrp">
	<div class="public-header">
		<div class="content">
			<div class="public-header-logo"><a href=""><i>WINNER</i><h3>猎鹰招聘网</h3></a></div>
			<div class="public-header-admin fr">
				<p class="admin-name"><?php echo $name?>管理员 您好！</p>
				<div class="public-header-fun fr">
					<a href="http://www.zhaopin.com/frontend/web/index.php?r=index/index" class="public-header-man">网站首页</a>
					<a href="?r=login/loginout" class="public-header-loginout">安全退出</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="clearfix"></div>
<!-- 内容展示 -->
<div class="public-ifame mt20">
	<div class="content">
	<!-- 内容模块头 -->
		<div class="public-ifame-header">
			<ul>
				<li class="ifame-item logo">
					<div class="item-warrp">
						<a href="#"><i>WINNER</i>
							<h3 class="logo-title">猎鹰招聘网</h3>
							<p class="logo-des">创建于 2017/2/14 13:14:00</p>
						</a>
					</div>
				</li>
				<li class="ifame-item"><div class="item-warrp"><span>注册时间：2017/2/14 13:14:00<br>VIP有效期：</span></div></li>
				<li class="ifame-item"><div class="item-warrp" style="border:none"><span>网站浏览量：15451</span></div></li>
				<div class="clearfix"></div>
			</ul>
		</div>
		<div class="clearfix"></div>
		<!-- 左侧导航栏 -->
		<div class="public-ifame-leftnav">
			<div class="public-title-warrp">
				<div class="public-ifame-title ">
					<a href="">首页</a>
				</div>
			</div>
			<ul class="left-nav-list">
				<li class="public-ifame-item">
					<a href="javascript:;">企业管理</a>
					<div class="ifame-item-sub">
                        <ul>
                            <li class="active"><a href="<?php echo Url::to(['company/job']);?>" target="content">职位列表</a></li>
                            <li><a href="<?php echo Url::to(['admin/admin_music']);?>" target="content">待审核职位</a></li>
                            <li><a href="<?php echo Url::to(['company/manage']);?>" target="content">管理企业</a></li>
                            <li><a href="<?php echo Url::to(['company/approve']);?>" target="content">待认证企业</a></li>
                            <li><a href="<?php echo Url::to(['admin/index_tj']);?>" target="content">企业会员</a></li>
                            <li><a href="<?php echo Url::to(['admin/index_tj']);?>" target="content">订单管理</a></li>
                        </ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">个人管理</a>
					<div class="ifame-item-sub">
						<ul>
                            <li><a href="<?php echo Url::to(['member/resume']);?>" target="content">简历列表</a></li>
							<li><a href="信息管理/cate_manage.html" target="content">待审核简历</a></li>
							<li><a href="信息管理/cate_manage.html" target="content">高级人才</a></li>
							<li><a href="信息管理/cate_manage.html" target="content">代开通高级人才</a></li>
							<li><a href="信息管理/cate_manage.html" target="content">照片简历</a></li>
							<li><a href="信息管理/cate_manage.html" target="content">待审核照片</a></li>
							<li><a href="信息管理/cate_manage.html" target="content">个人会员</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">工具</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="旅游管理/lytc_manage.html" target="content">信息列表</a>|<a href="#" target="content">添加</a></li>
							<li><a href="#" target="content">分类管理</a></li>
							<li><a href="#" target="content">分类管理</a></li>
							<li><a href="旅游管理/listbanner.html" target="content">列表页轮播管理</a></li>
							<li><a href="旅游管理/listbanner.html" target="content">分类轮播管理</a></li>
							<li><a href="旅游管理/listbanner.html" target="content">旅游预订管理</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">内容</a>
					<div class="ifame-item-sub">
						<ul>
							<li>
								<a href="?r=content/list" target="content">新闻列表</a>|
								<a href="?r=content/add" target="content">添加</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">系统</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="<?php echo Url::to(['system/web_config']);?>" target="content">网站配置</a></li>
							<li><a href="<?php echo Url::to(['system/company_set']);?>" target="content">企业设置</a></li>
							<li><a href="<?php echo Url::to(['system/person_set']);?>" target="content">个人设置</a></li>
							<li><a href="#" target="content">微商圈</a></li>
							<li><a href="#" target="content">安全设置</a></li>
							<li><a href="#" target="content">搜索设置</a></li>
							<li><a href="#" target="content">页面管理</a></li>
							<li><a href="<?php echo Url::to(['navigation/index']);?>" target="content">导航设置</a></li>
							<li><a href="#" target="content">分类管理</a></li>
							<li><a href="#" target="content">热门关键字</a></li>
							<li><a href="#" target="content">网站管理员</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">管理员管理</a>
					<div class="ifame-item-sub">
						<ul>							
							<li>
								<a href="?r=rbac/admin" target="content">管理员列表</a>|
								<a href="?r=rbac/adminadd" target="content">添加</a>
							</li>
							<li>
								<a href="?r=rbac/role" target="content">角色列表</a>|
								<a href="?r=rbac/roleadd" target="content">添加</a>
							</li>
							<li><a href="#" target="content">权限设置</a></li>
							<!-- <li><a href="#" target="content">页面管理</a></li>				
							<li><a href="#" target="content">分类管理</a></li>
							<li><a href="#" target="content">热门关键字</a></li>
							<li><a href="#" target="content">网站管理员</a></li> -->
						</ul>
					</div>
				</li>
				
			</ul>
		</div>
		<!-- 右侧内容展示部分 -->
		<div class="public-ifame-content">
		<iframe name="content" src="<?php echo Url::to(['admin/main']);?>" frameborder="0" id="mainframe" scrolling="yes" marginheight="0" marginwidth="0" width="100%" style="height: 700px;"></iframe>

	
		</div>
	</div>
</div>
<script src="js/jquery.min.js"></script>
<script>
$().ready(function(){
	var item = $(".public-ifame-item");

	for(var i=0; i < item.length; i++){
		$(item[i]).on('click',function(){
			$(".ifame-item-sub").hide();
			if($(this.lastElementChild).css('display') == 'block'){
				$(this.lastElementChild).hide()
				$(".ifame-item-sub li").removeClass("active");
			}else{
				$(this.lastElementChild).show();
				$(".ifame-item-sub li").on('click',function(){
					$(".ifame-item-sub li").removeClass("active");
					$(this).addClass("active");
				});
			}
		});
	}
});
</script>
</body>
</html>