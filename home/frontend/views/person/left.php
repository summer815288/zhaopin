<?php use yii\helpers\Url;?>
    <div class="sidebar">
        <a class="btn_create" href="create.html">创建简历</a>
        <dl class="company_center_aside">
            <dt><b>简历管理</b></dt>
            <dd><a href="<?php echo Url::to(['person/resume_create']) ?>">创建简历</a></dd>
            <dd><a href="<?php echo Url::to(['person/resume_list']) ?>">我的简历</a></dd>
        </dl>
        <dl class="company_center_aside">
            <dt><b>求职管理</b></dt>
            <dd><a href="">面试邀请</a></dd>
            <dd><a href="">已申请职位</a></dd>
            <dd><a href="">职位收藏夹</a></dd>
        </dl>
        <dl class="company_center_aside">
            <dt><b>账号管理</b></dt>
            <dd><a href="<?php echo Url::to(['person/man']) ?>">基本资料</a></dd>
            <dd><a href="">账号安全</a></dd>
            <dd><a href="">我的消息</a></dd>
            <dd><a href="">安全退出</a></dd>
        </dl>


        <div class="subscribe_side mt20">
            <div class="f14">想找到更好的工作？</div>
            <div class="f18 mb10">就用猎鹰求职加速助手 </div>
            <div>咨询：<a class="f16" href="mailto:jessica@lagou.com">jessica@lieying.com</a></div>
            <div class="f18 ti2em">010-88888888</div>
        </div>
        <div class="subscribe_side mt20">
            <div class="f14">加入互联网求职交流群</div>
            <div class="f18 mb10">跟同行聊聊</div>
            <div class="f24">350470860</div>
        </div>
    </div>
    <!-- end .sidebar -->