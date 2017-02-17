<?php use yii\helpers\Url;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台欢迎页</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href=" css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
<div class="container">
    <div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">企业管理</a>><a href="">待认证企业</a></div>
    <div class="public-content">
        <div class="public-content-header">
            <h3>修改网站配置</h3>
        </div>
        <div class="public-content-cont">
            <table class="public-cont-table">
                <tr>
                    <th style="width:10%"><input type="checkbox"/>公司名称</th>
                    <th style="width:10%">所属会员</th>
                    <th style="width:10%">营业执照</th>
                    <th style="width:10%">认证状态</th>
                    <th style="width:10%">创建时间</th>
                    <th style="width:10%">刷新时间</th>
                    <th style="width:10%">目前积分</th>
                    <th style="width:10%">收到简历</th>
                    <th style="width:20%">操作</th>
                </tr>
                <?php foreach($companyManage as $item){?>
                <tr>
                    <td><input type="checkbox"/><?=$item['companyname']?></td>
                    <td><?=$item['username']?></td>
                    <td><?php if($item['certificate_img']!=''){echo "<a href='' title='点击查看' style='color: #0000cc'>已上传</a>";}else{echo "<font color='#a9a9a9'>未上传</font>";}?></td>
                    <td><?php if($item['audit']==1){echo "<font color=green>认证通过</font>";}else{echo "<font color='#a9a9a9'>未认证</font>";}?></td>
                    <td><?=date('Y-m-d',$item['addtime'])?></td>
                    <td><?=date('Y-m-d',$item['refreshtime'])?></td>
                    <td><?=$item['points']?>积分</td>
                    <td>(0/<?=$item['personal_look']?>)</td>
                    <td>
                        <div class="table-fun">
                            <a href="<?php echo Url::to(['company/company_log'])?>">日志</a>
                            <a href='<?php echo Url::toRoute(["company/company_edit",'uid'=>$item['personal_uid']])?>'>修改</a>
                            <a href="">管理</a>
                        </div>
                    </td>
                </tr>
                <?php }?>
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