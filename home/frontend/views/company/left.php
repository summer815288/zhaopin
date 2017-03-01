<?php
use yii\helpers\Url;
?>
<div class="sidebar">
    <a class="btn_create" href="<?php echo Url::to(['company/create'])?>">发布新职位</a>
    <dl class="company_center_aside">
        <dt>职位管理</dt>
        <dd><a href="<?php echo Url::to(['company/create'])?>">发布新职位</a></dd>
        <dd><a href="<?php echo Url::to(['company/jobs'])?>">管理职位</a></dd>
        <dd><a href="haveNoticeResumes.html">微信招聘</a></dd>
    </dl>
    <dl class="company_center_aside">
        <dt>简历管理</dt>
        <dd><a href="<?php echo Url::to(['company/recruitment'])?>">面试邀请</a></dd>
        <dd><a href="">收到的简历</a></dd>
        <dd><a href="">已下载的简历</a></dd>
        <dd><a href="">收藏的简历</a></dd>
    </dl>
    <dl class="company_center_aside">
        <dt>会员服务</dt>
        <dd><a href="">我的账户</a></dd>
        <dd><a href="">充值订单</a></dd>
        <dd><a href="">增值服务</a></dd>
        <dd><a href="">企业模板</a></dd>
    </dl>
    <dl class="company_center_aside">
        <dt>账户管理</dt>
        <dd><a href="<?php echo Url::to(['company/company_profile'])?>">企业资料</a></dd>
        <dd><a href="">安全认证</a></dd>
        <dd><a href="">我的消息</a></dd>
        <dd><a href="">退出登录</a></dd>
    </dl>



    <div class="subscribe_side mt20">
        <div class="f14">想收到更多更好的简历？</div>
        <div class="f18 mb10">就用拉勾招聘加速助手 </div>
        <div>咨询：<a class="f16" href="mailto:jessica@lagou.com">jessica@lagou.com</a></div>
        <div class="f18 ti2em">010-57286512</div>
    </div>
    <div class="subscribe_side mt20">
        <div class="f14">加入互联网HR交流群</div>
        <div class="f18 mb10">跟同行聊聊</div>
        <div class="f24">338167634</div>
    </div>            </div><!-- end .sidebar -->