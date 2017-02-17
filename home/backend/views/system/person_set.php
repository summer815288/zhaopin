<?php
use yii\widgets\ActiveForm;
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
    <div class="public-nav">您当前的位置：<a href="">管理首页</a></div>
    <div class="public-content">
        <div class="public-content-header">
            <input type="button" class="set_one" value="配置">
        </div>
        <div class="public-content-cont">
            <div class="jbsz">
                <form action="?r=system/person_set" method="post">
                    <div style="line-height: 30px;background-color: #f5f9fe"><h1>基本设置</h1></div>
                    <div class="form-group">
                        <label for="">个人会员允许发布简历:</label>
                        <input class="form-input-txt" type="text" name="resume_max" value="<?php echo $value['resume_max']?>" />份
                    </div>
                    <div class="form-group">
                        <label for="">每天允许申请职位:</label>
                        <input class="form-input-txt" type="text" name="apply_jobs_max" value="<?php echo $value['apply_jobs_max']?>" />个
                    </div>
                    <div class="form-group">
                        <label for="">上传简历照片大小不能超过:</label>
                        <input class="form-input-txt" type="text" name="resume_photo_max" value="<?php echo $value['resume_photo_max']?>" />kb
                    </div>
                    <div class="form-group">
                        <label for="">简历列表数最大为:</label>
                        <input class="form-input-txt" type="text" name="resume_list_max" value="<?php echo $value['resume_list_max']?>" />条
                    </div>
                    <div class="form-group">
                        <label for="">刷新简历时间间隔:</label>
                        <input class="form-input-txt" type="text" name="per_refresh_resume_space" value="<?php echo $value['per_refresh_resume_space']?>" />分钟
                    </div>
                    <div class="form-group">
                        <label for="">每天刷新简历次数限制:</label>
                        <input class="form-input-txt" type="text" name="per_refresh_resume_time" value="<?php echo $value['per_refresh_resume_time']?>" />次
                    </div>
                    <br/>
                    <table>
                        <tr>
                            <Td>Web端允许查看联系方式：</Td>
                            <Td>
                                <?php if($value['resume_privacy']==1){?>
                                    <input type="radio" name="resume_privacy" checked="checked" value="1">真实姓名
                                    <input type="radio" name="resume_privacy" value="2">简历编号
                                    <input type="radio" name="resume_privacy" value="3">姓氏
                                <?php }elseif($value['resume_privacy']==2){?>
                                    <input type="radio" name="resume_privacy" value="1">真实姓名
                                    <input type="radio" name="resume_privacy" checked="checked" value="2">简历编号
                                    <input type="radio" name="resume_privacy" value="3">姓氏
                                <?php }else{?>
                                    <input type="radio" name="resume_privacy" value="1">真实姓名
                                    <input type="radio" name="resume_privacy" value="2">简历编号
                                    <input type="radio" name="resume_privacy" checked="checked" value="3">姓氏
                                <?php }?>
                            </Td>
                        </tr>
                    </table>
                    <input type="submit" value="保存修改">
                </form>
            </div>
            <div class="lookset">
                <form action="?r=system/person_set" method="post">
                    <div style="line-height: 60px;background-color: #f5f9fe"><h1>审核与认证设置</h1></div>
                    <table>
                        <tr>
                            <Td>新发布简历默认审核状态：</Td>
                            <Td>
                                <?php if($value['audit_resume']==1){?>
                                    <input type="radio" name="audit_resume" checked="checked" value="1">审核通过
                                    <input type="radio" name="audit_resume" value="2">审核中
                                    <input type="radio" name="audit_resume" value="3">审核未通过
                                <?php }elseif($value['audit_resume']==2){?>
                                    <input type="radio" name="audit_resume" value="1">审核通过
                                    <input type="radio" name="audit_resume" checked="checked" value="2">审核中
                                    <input type="radio" name="audit_resume" value="3">审核未通过
                                <?php }else{?>
                                    <input type="radio" name="audit_resume" value="1">审核通过
                                    <input type="radio" name="audit_resume" value="2">审核中
                                    <input type="radio" name="audit_resume" checked="checked" value="3">审核未通过
                                <?php }?>
                            </Td>
                        </tr>
                        <tr>
                            <td>修改简历后审核状态变为：</td>
                            <td>
                                <?php if($value['audit_edit_resume']==1){?>
                                    <input type="radio" name="audit_edit_resume" checked="checked" value="1">保持不变
                                    <input type="radio" name="audit_edit_resume" value="2">审核通过
                                    <input type="radio" name="audit_edit_resume" value="3">审核中
                                    <input type="radio" name="audit_edit_resume" value="4">审核未通过
                                <?php }elseif($value['audit_edit_resume']==2){?>
                                    <input type="radio" name="audit_edit_resume" value="1">保持不变
                                    <input type="radio" name="audit_edit_resume" checked="checked" value="2">审核通过
                                    <input type="radio" name="audit_edit_resume" value="3">审核中
                                    <input type="radio" name="audit_edit_resume" value="4">审核未通过
                                <?php }elseif($value['audit_edit_resume']==3){?>
                                    <input type="radio" name="audit_edit_resume" value="1">保持不变
                                    <input type="radio" name="audit_edit_resume" value="2">审核通过
                                    <input type="radio" name="audit_edit_resume" checked="checked" value="3">审核中
                                    <input type="radio" name="audit_edit_resume" value="4">审核未通过
                                <?php }else{?>
                                    <input type="radio" name="audit_edit_resume" value="1">保持不变
                                    <input type="radio" name="audit_edit_resume" value="2">审核通过
                                    <input type="radio" name="audit_edit_resume" value="3">审核中
                                    <input type="radio" name="audit_edit_resume" checked="checked" value="4">审核未通过
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <Td>新增简历照片后照片默认审核状态：</Td>
                            <Td>
                                <?php if($value['audit_resume_photo']==1){?>
                                    <input type="radio" name="audit_resume_photo" checked="checked" value="1">审核通过
                                    <input type="radio" name="audit_resume_photo" value="2">审核中
                                    <input type="radio" name="audit_resume_photo" value="3">审核未通过
                                <?php }elseif($value['audit_resume_photo']==2){?>
                                    <input type="radio" name="audit_resume_photo" value="1">审核通过
                                    <input type="radio" name="audit_resume_photo" checked="checked" value="2">审核中
                                    <input type="radio" name="audit_resume_photo" value="3">审核未通过
                                <?php }else{?>
                                    <input type="radio" name="audit_resume_photo" value="1">审核通过
                                    <input type="radio" name="audit_resume_photo" value="2">审核中
                                    <input type="radio" name="audit_resume_photo" checked="checked" value="3">审核未通过
                                <?php }?>
                            </Td>
                        </tr>
                        <tr>
                            <td>修改简历的照片后照片审核状态：</td>
                            <td>
                                <?php if($value['audit_edit_photo']==1){?>
                                    <input type="radio" name="audit_edit_photo" checked="checked" value="1">保持不变
                                    <input type="radio" name="audit_edit_photo" value="2">审核通过
                                    <input type="radio" name="audit_edit_photo" value="3">审核中
                                    <input type="radio" name="audit_edit_photo" value="4">审核未通过
                                <?php }elseif($value['audit_edit_photo']==2){?>
                                    <input type="radio" name="audit_edit_photo" value="1">保持不变
                                    <input type="radio" name="audit_edit_photo" checked="checked" value="2">审核通过
                                    <input type="radio" name="audit_edit_photo" value="3">审核中
                                    <input type="radio" name="audit_edit_photo" value="4">审核未通过
                                <?php }elseif($value['audit_edit_photo']==3){?>
                                    <input type="radio" name="audit_edit_photo" value="1">保持不变
                                    <input type="radio" name="audit_edit_photo" value="2">审核通过
                                    <input type="radio" name="audit_edit_photo" checked="checked" value="3">审核中
                                    <input type="radio" name="audit_edit_photo" value="4">审核未通过
                                <?php }else{?>
                                    <input type="radio" name="audit_edit_photo" value="1">保持不变
                                    <input type="radio" name="audit_edit_photo" value="2">审核通过
                                    <input type="radio" name="audit_edit_photo" value="3">审核中
                                    <input type="radio" name="audit_edit_photo" checked="checked" value="4">审核未通过
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <td>强制会员认证手机：</td>
                            <td>
                                <?php if($value['login_per_audit_mobile']==1){?>
                                    <input type="radio" name="login_per_audit_mobile" checked="checked" value="1">是
                                    <input type="radio" name="login_per_audit_mobile" value="0">否
                                <?php }else{?>
                                    <input type="radio" name="login_per_audit_mobile" value="1">是
                                    <input type="radio" name="login_per_audit_mobile" checked="checked" value="0">否
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <td>强制会员认证email：</td>
                            <td>
                                <?php if($value['login_per_audit_email']==1){?>
                                    <input type="radio" name="login_per_audit_email" checked="checked" value="1">是
                                    <input type="radio" name="login_per_audit_email" value="0">否
                                <?php }else{?>
                                    <input type="radio" name="login_per_audit_email" value="1">是
                                    <input type="radio" name="login_per_audit_email" checked="checked" value="0">否
                                <?php }?>
                            </td>
                        </tr>
                        <tr >
                            <Td colspan="2"><input type="submit" value="保存修改"></Td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="lookset">
                <form action="?r=system/person_set" method="post">
                    <div style="line-height: 60px;background-color: #f5f9fe"><h1>联系方式设置</h1></div>
                    <table>
                        <tr>
                            <Td>Web端允许查看简历联系方式：</Td>
                            <Td>
                                <?php if($value['showresumecontact']==1){?>
                                    <input type="radio" name="showresumecontact" checked="checked" value="1">游客可见
                                    <input type="radio" name="showresumecontact" value="2">已登录会员可见
                                    <input type="radio" name="showresumecontact" value="3">下载后可见
                                <?php }elseif($value['showresumecontact']==2){?>
                                    <input type="radio" name="showresumecontact" value="1">游客可见
                                    <input type="radio" name="showresumecontact" checked="checked" value="2">已登录会员可见
                                    <input type="radio" name="showresumecontact" value="3">下载后可见
                                <?php }else{?>
                                    <input type="radio" name="showresumecontact" value="1">游客可见
                                    <input type="radio" name="showresumecontact" value="2">已登录会员可见
                                    <input type="radio" name="showresumecontact" checked="checked" value="3">下载后可见
                                <?php }?>
                            </Td>
                        </tr>
                        <tr>
                            <Td>触屏版允许查看简历联系方式：</Td>
                            <Td>
                                <?php if($value['showresumecontact_wap']==1){?>
                                    <input type="radio" name="showresumecontact_wap" checked="checked" value="1">游客可见
                                    <input type="radio" name="showresumecontact_wap" value="2">已登录会员可见
                                    <input type="radio" name="showresumecontact_wap" value="3">下载后可见
                                <?php }elseif($value['showresumecontact_wap']==2){?>
                                    <input type="radio" name="showresumecontact_wap" value="1">游客可见
                                    <input type="radio" name="showresumecontact_wap" checked="checked" value="2">已登录会员可见
                                    <input type="radio" name="showresumecontact_wap" value="3">下载后可见
                                <?php }else{?>
                                    <input type="radio" name="showresumecontact_wap" value="1">游客可见
                                    <input type="radio" name="showresumecontact_wap" value="2">已登录会员可见
                                    <input type="radio" name="showresumecontact_wap" checked="checked" value="3">下载后可见
                                <?php }?>
                            </Td>
                        </tr>
                        <tr>
                            <td>企业查看收到的简历无需下载：</td>
                            <td>
                                <?php if($value['showapplycontact']==1){?>
                                    <input type="radio" name="showapplycontact" value="0">关闭
                                    <input type="radio" name="showapplycontact" checked="checked" value="1">开启
                                <?php }else{?>
                                    <input type="radio" name="showapplycontact" checked="checked" value="0">关闭
                                    <input type="radio" name="showapplycontact" value="1">开启
                                <?php }?>
                            </td>
                        </tr>
                        <tr >
                            <Td colspan="2"><input type="submit" value="保存修改"></Td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="lpicture">
                <form action="?r=system/person_set" method="post">
                    <div style="line-height: 60px;background-color: #f5f9fe"><h1>联系方式图形化</h1></div>
                    <table style="width: 500px">
                        <tr>
                            <td>简历联系方式：</td>
                            <td>
                                <?php if($value['contact_img_resume']==1){?>
                                    <input type="radio" name="contact_img_resume" value="0">文字
                                    <input type="radio" name="contact_img_resume" checked="checked" value="1">图形化
                                <?php }else{?>
                                    <input type="radio" name="contact_img_resume" checked="checked" value="0">文字
                                    <input type="radio" name="contact_img_resume" value="1">图形化
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <Td colspan="2"><input type="submit" value="保存修改"></Td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="jldownload">
                <form action="?r=system/person_set" method="post">
                    <div style="line-height: 60px;background-color: #f5f9fe"><h1>简历下载设置</h1></div>
                    <table style="width: 500px">
                        <tr>
                            <td>简历下载要求：</td>
                            <td>
                                <?php if($value['down_resume_limit']==1){?>
                                    <input type="radio" name="down_resume_limit" value="0">已登录且有发布职位的企业可下载
                                    <input type="radio" name="down_resume_limit" checked="checked" value="1">已登录的企业可下载
                                <?php }else{?>
                                    <input type="radio" name="down_resume_limit" checked="checked" value="0">已登录且有发布职位的企业可下载
                                    <input type="radio" name="down_resume_limit" value="1">已登录的企业可下载
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <Td colspan="2"><input type="submit" value="保存修改"></Td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="lpicture">
                    <form action="?r=system/person_set" method="post">
                        <div style="line-height: 60px;background-color: #f5f9fe"><h1>高级简历下载设置</h1></div>
                        <table style="width: 500px">
                            <tr>
                                <td>高级简历下载要求：</td>
                                <td>
                                    <?php if($value['elite_resume_complete_percent']==1){?>
                                        <input type="radio" name="elite_resume_complete_percent" value="0">已登录且有发布职位的猎头可下载
                                        <input type="radio" name="elite_resume_complete_percent" checked="checked" value="1">已登录的猎头可下载
                                    <?php }else{?>
                                        <input type="radio" name="elite_resume_complete_percent" checked="checked" value="0">已登录且有发布职位的猎头可下载
                                        <input type="radio" name="elite_resume_complete_percent" value="1">已登录的猎头可下载
                                    <?php }?>
                                </td>
                            </tr>
                            <tr>
                                <Td colspan="2"><input type="submit" value="保存修改"></Td>
                            </tr>
                        </table>
                    </form>
                </div>
        </div>
    </div>
</div>
<script src="kingediter/kindeditor-all-min.js"></script>
<script>
    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_id');
    });
</script>
</body>
</html>