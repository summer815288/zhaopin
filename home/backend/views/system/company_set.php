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
                <input type="button" class="set_two" value="配置积分模式">
            </div>
            <div class="public-content-cont">
                <div id="box1">
                    <div class="jbsz">
                    <form action="?r=system/company_set" method="post">
                        <div style="line-height: 30px;background-color: #f5f9fe"><h1>基本设置</h1></div>
                        <div class="form-group">
                            <label for="">发布招聘默认有效期:</label>
                            <input class="form-input-txt" type="text" name="company_add_days" value="<?php echo $value['company_add_days']?>" />天
                        </div>
                        <div class="form-group">
                            <label for="">上传营业执照文件限制:</label>
                            <input class="form-input-txt" type="text" name="certificate_max_size" value="<?php echo $value['certificate_max_size']?>" />kb
                        </div>
                        <div class="form-group">
                            <label for="">企业LOGO文件限制:</label>
                            <input class="form-input-txt" type="text" name="logo_max_size" value="<?php echo $value['logo_max_size']?>" />kb
                        </div>
                        <div class="form-group">
                            <label for="">职位列表数最大为:</label>
                            <input class="form-input-txt" type="text" name="jobs_list_max" value="<?php echo $value['jobs_list_max']?>" />条
                        </div>
                        <input type="submit" value="保存修改">
                    </form>
                    </div>
                    <div class="lookset">
                        <form action="?r=system/company_set" method="post">
                            <div style="line-height: 60px;background-color: #f5f9fe"><h1>查看联系方式设置</h1></div>
                            <table>
                                <tr>
                                    <Td>Web端允许查看联系方式：</Td>
                                    <Td>
                                        <?php if($value['showjobcontact']==1){?>
                                        <input type="radio" name="showjobcontact" checked="checked" value="1">游客
                                        <input type="radio" name="showjobcontact" value="2">已登录会员
                                        <input type="radio" name="showjobcontact" value="3">已登录且发布了有效简历
                                        <?php }elseif($value['showjobcontact']==2){?>
                                        <input type="radio" name="showjobcontact" value="1">游客
                                        <input type="radio" name="showjobcontact" checked="checked" value="2">已登录会员
                                        <input type="radio" name="showjobcontact" value="3">已登录且发布了有效简历
                                        <?php }else{?>
                                        <input type="radio" name="showjobcontact" value="1">游客
                                        <input type="radio" name="showjobcontact" value="2">已登录会员
                                        <input type="radio" name="showjobcontact" checked="checked" value="3">已登录且发布了有效简历
                                        <?php }?>
                                    </Td>
                                </tr>
                                <tr>
                                    <Td>移动端允许查看联系方式：</Td>
                                    <Td>
                                        <?php if($value['showjobcontact_wap']==1){?>
                                            <input type="radio" name="showjobcontact_wap" checked="checked" value="1">游客
                                            <input type="radio" name="showjobcontact_wap" value="2">已登录会员
                                            <input type="radio" name="showjobcontact_wap" value="3">已登录且发布了有效简历
                                        <?php }elseif($value['showjobcontact_wap']==2){?>
                                            <input type="radio" name="showjobcontact_wap" value="1">游客
                                            <input type="radio" name="showjobcontact_wap" checked="checked" value="2">已登录会员
                                            <input type="radio" name="showjobcontact_wap" value="3">已登录且发布了有效简历
                                        <?php }else{?>
                                            <input type="radio" name="showjobcontact_wap" value="1">游客
                                            <input type="radio" name="showjobcontact_wap" value="2">已登录会员
                                            <input type="radio" name="showjobcontact_wap" checked="checked" value="3">已登录且发布了有效简历
                                        <?php }?>
                                    </Td>
                                </tr>
                                <tr >
                                    <Td colspan="2"><input type="submit" value="保存修改"></Td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="lpicture">
                        <form action="?r=system/company_set" method="post">
                            <div style="line-height: 60px;background-color: #f5f9fe"><h1>联系方式图形化</h1></div>
                            <table style="width: 500px">
                                <tr>
                                    <td>企业联系方式：</td>
                                    <td>
                                        <?php if($value['contact_img_com']==1){?>
                                        <input type="radio" name="contact_img_com" value="0">文字
                                        <input type="radio" name="contact_img_com" checked="checked" value="1">图形化
                                        <?php }else{?>
                                        <input type="radio" name="contact_img_com" checked="checked" value="0">文字
                                        <input type="radio" name="contact_img_com" value="1">图形化
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>职位联系方式：</td>
                                    <td>
                                        <?php if($value['contact_img_job']==1){?>
                                            <input type="radio" name="contact_img_job" value="0">文字
                                            <input type="radio" name="contact_img_job" checked="checked" value="1">图形化
                                        <?php }else{?>
                                            <input type="radio" name="contact_img_job" checked="checked" value="0">文字
                                            <input type="radio" name="contact_img_job" value="1">图形化
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr>
                                    <Td colspan="2"><input type="submit" value="保存修改"></Td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="statusset">
                        <form action="?r=system/company_set" method="post">
                            <div style="line-height: 60px;background-color: #f5f9fe"><h1>认证与审核状态设置</h1></div>
                            <table>
                                <tr>
                                    <td>企业认证状态默认：</td>
                                    <td>
                                        <?php if($value['audit_add_com']==1){?>
                                            <input type="radio" name="audit_add_com" checked="checked" value="1">未认证
                                            <input type="radio" name="audit_add_com" value="2">认证通过
                                            <input type="radio" name="audit_add_com" value="3">认证中
                                            <input type="radio" name="audit_add_com" value="4">认证失败
                                        <?php }elseif($value['audit_add_com']==2){?>
                                            <input type="radio" name="audit_add_com" value="1">未认证
                                            <input type="radio" name="audit_add_com" checked="checked" value="2">认证通过
                                            <input type="radio" name="audit_add_com" value="3">认证中
                                            <input type="radio" name="audit_add_com" value="4">认证失败
                                        <?php }elseif($value['audit_add_com']==3){?>
                                            <input type="radio" name="audit_add_com" value="1">未认证
                                            <input type="radio" name="audit_add_com" value="2">认证通过
                                            <input type="radio" name="audit_add_com" checked="checked" value="3">认证中
                                            <input type="radio" name="audit_add_com" value="4">认证失败
                                        <?php }else{?>
                                            <input type="radio" name="audit_add_com" value="1">未认证
                                            <input type="radio" name="audit_add_com" value="2">认证通过
                                            <input type="radio" name="audit_add_com" value="3">认证中
                                            <input type="radio" name="audit_add_com" checked="checked" value="4">认证失败
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>修改企业资料后认证状态：</td>
                                    <td>
                                        <?php if($value['audit_edit_com']==1){?>
                                            <input type="radio" name="audit_edit_com" checked="checked" value="1">保持不变
                                            <input type="radio" name="audit_edit_com" value="2">未认证
                                            <input type="radio" name="audit_edit_com" value="3">认证通过
                                            <input type="radio" name="audit_edit_com" value="4">认证中
                                            <input type="radio" name="audit_edit_com" value="5">认证失败
                                        <?php }elseif($value['audit_edit_com']==2){?>
                                            <input type="radio" name="audit_edit_com" value="1">保持不变
                                            <input type="radio" name="audit_edit_com" checked="checked" value="2">未认证
                                            <input type="radio" name="audit_edit_com" value="3">认证通过
                                            <input type="radio" name="audit_edit_com" value="4">认证中
                                            <input type="radio" name="audit_edit_com" value="5">认证失败
                                        <?php }elseif($value['audit_edit_com']==3){?>
                                            <input type="radio" name="audit_edit_com" value="1">保持不变
                                            <input type="radio" name="audit_edit_com" value="2">未认证
                                            <input type="radio" name="audit_edit_com" checked="checked" value="3">认证通过
                                            <input type="radio" name="audit_edit_com" value="4">认证中
                                            <input type="radio" name="audit_edit_com" value="5">认证失败
                                        <?php }elseif($value['audit_edit_com']==4){?>
                                            <input type="radio" name="audit_edit_com" value="1">保持不变
                                            <input type="radio" name="audit_edit_com" value="2">未认证
                                            <input type="radio" name="audit_edit_com" value="3">认证通过
                                            <input type="radio" name="audit_edit_com" checked="checked" value="4">认证中
                                            <input type="radio" name="audit_edit_com" value="5">认证失败
                                         <?php }else{?>
                                            <input type="radio" name="audit_edit_com" value="1">保持不变
                                            <input type="radio" name="audit_edit_com" value="2">未认证
                                            <input type="radio" name="audit_edit_com" value="3">认证通过
                                            <input type="radio" name="audit_edit_com" value="4">认证中
                                            <input type="radio" name="audit_edit_com" checked="checked" value="5">认证失败
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr>
                                    <Td>已认证企业发布职位后审核状态为：</Td>
                                    <Td>
                                        <?php if($value['audit_verifycom_addjob']==1){?>
                                            <input type="radio" name="audit_verifycom_addjob" checked="checked" value="1">审核通过
                                            <input type="radio" name="audit_verifycom_addjob" value="2">审核中
                                            <input type="radio" name="audit_verifycom_addjob" value="3">审核未通过
                                        <?php }elseif($value['audit_verifycom_addjob']==2){?>
                                            <input type="radio" name="audit_verifycom_addjob" value="1">审核通过
                                            <input type="radio" name="audit_verifycom_addjob" checked="checked" value="2">审核中
                                            <input type="radio" name="audit_verifycom_addjob" value="3">审核未通过
                                        <?php }else{?>
                                            <input type="radio" name="audit_verifycom_addjob" value="1">审核通过
                                            <input type="radio" name="audit_verifycom_addjob" value="2">审核中
                                            <input type="radio" name="audit_verifycom_addjob" checked="checked" value="3">审核未通过
                                        <?php }?>
                                    </Td>
                                </tr>
                                <tr>
                                    <td>已认证企业修改职位后审核状态为：</td>
                                    <td>
                                        <?php if($value['audit_verifycom_editjob']==1){?>
                                            <input type="radio" name="audit_verifycom_editjob" checked="checked" value="1">保持不变
                                            <input type="radio" name="audit_verifycom_editjob" value="2">审核通过
                                            <input type="radio" name="audit_verifycom_editjob" value="3">审核中
                                            <input type="radio" name="audit_verifycom_editjob" value="4">审核未通过
                                        <?php }elseif($value['audit_verifycom_editjob']==2){?>
                                            <input type="radio" name="audit_verifycom_editjob" value="1">保持不变
                                            <input type="radio" name="audit_verifycom_editjob" checked="checked" value="2">审核通过
                                            <input type="radio" name="audit_verifycom_editjob" value="3">审核中
                                            <input type="radio" name="audit_verifycom_editjob" value="4">审核未通过
                                        <?php }elseif($value['audit_verifycom_editjob']==3){?>
                                            <input type="radio" name="audit_verifycom_editjob" value="1">保持不变
                                            <input type="radio" name="audit_verifycom_editjob" value="2">审核通过
                                            <input type="radio" name="audit_verifycom_editjob" checked="checked" value="3">审核中
                                            <input type="radio" name="audit_verifycom_editjob" value="4">审核未通过
                                        <?php }else{?>
                                            <input type="radio" name="audit_verifycom_editjob" value="1">保持不变
                                            <input type="radio" name="audit_verifycom_editjob" value="2">审核通过
                                            <input type="radio" name="audit_verifycom_editjob" value="3">审核中
                                            <input type="radio" name="audit_verifycom_editjob" checked="checked" value="4">审核未通过
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr>
                                    <Td>未认证企业发布职位后审核状态为：</Td>
                                    <Td>
                                        <?php if($value['audit_unexaminedcom_addjob']==1){?>
                                            <input type="radio" name="audit_unexaminedcom_addjob" checked="checked" value="1">审核通过
                                            <input type="radio" name="audit_unexaminedcom_addjob" value="2">审核中
                                            <input type="radio" name="audit_unexaminedcom_addjob" value="3">审核未通过
                                        <?php }elseif($value['audit_unexaminedcom_addjob']==2){?>
                                            <input type="radio" name="audit_unexaminedcom_addjob" value="1">审核通过
                                            <input type="radio" name="audit_unexaminedcom_addjob" checked="checked" value="2">审核中
                                            <input type="radio" name="audit_unexaminedcom_addjob" value="3">审核未通过
                                        <?php }else{?>
                                            <input type="radio" name="audit_unexaminedcom_addjob" value="1">审核通过
                                            <input type="radio" name="audit_unexaminedcom_addjob" value="2">审核中
                                            <input type="radio" name="audit_unexaminedcom_addjob" checked="checked" value="3">审核未通过
                                        <?php }?>
                                    </Td>
                                </tr>
                                <tr>
                                    <td>未认证企业修改职位后审核状态为：</td>
                                    <td>
                                        <?php if($value['audit_unexaminedcom_editjob']==1){?>
                                            <input type="radio" name="audit_unexaminedcom_editjob" checked="checked" value="1">保持不变
                                            <input type="radio" name="audit_unexaminedcom_editjob" value="2">审核通过
                                            <input type="radio" name="audit_unexaminedcom_editjob" value="3">审核中
                                            <input type="radio" name="audit_unexaminedcom_editjob" value="4">审核未通过
                                        <?php }elseif($value['audit_unexaminedcom_editjob']==2){?>
                                            <input type="radio" name="audit_unexaminedcom_editjob" value="1">保持不变
                                            <input type="radio" name="audit_unexaminedcom_editjob" checked="checked" value="2">审核通过
                                            <input type="radio" name="audit_unexaminedcom_editjob" value="3">审核中
                                            <input type="radio" name="audit_unexaminedcom_editjob" value="4">审核未通过
                                        <?php }elseif($value['audit_unexaminedcom_editjob']==3){?>
                                            <input type="radio" name="audit_unexaminedcom_editjob" value="1">保持不变
                                            <input type="radio" name="audit_unexaminedcom_editjob" value="2">审核通过
                                            <input type="radio" name="audit_unexaminedcom_editjob" checked="checked" value="3">审核中
                                            <input type="radio" name="audit_unexaminedcom_editjob" value="4">审核未通过
                                        <?php }else{?>
                                            <input type="radio" name="audit_unexaminedcom_editjob" value="1">保持不变
                                            <input type="radio" name="audit_unexaminedcom_editjob" value="2">审核通过
                                            <input type="radio" name="audit_unexaminedcom_editjob" value="3">审核中
                                            <input type="radio" name="audit_unexaminedcom_editjob" checked="checked" value="4">审核未通过
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>强制会员认证手机：</td>
                                    <td>
                                        <?php if($value['login_com_audit_mobile']==1){?>
                                            <input type="radio" name="login_com_audit_mobile" checked="checked" value="1">是
                                            <input type="radio" name="login_com_audit_mobile" value="0">否
                                        <?php }else{?>
                                            <input type="radio" name="login_com_audit_mobile"" value="1">是
                                            <input type="radio" name="login_com_audit_mobile" checked="checked value="0">否
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>强制会员认证email：</td>
                                    <td>
                                        <?php if($value['login_com_audit_email']==1){?>
                                            <input type="radio" name="login_com_audit_email" checked="checked" value="1">是
                                            <input type="radio" name="login_com_audit_email" value="0">否
                                        <?php }else{?>
                                            <input type="radio" name="login_com_audit_email" value="1">是
                                            <input type="radio" name="login_com_audit_email" checked="checked" value="0">否
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr>
                                    <Td colspan="2"><input type="submit" value="保存修改"></Td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="messageset">
                        <form action="?r=system/company_set" method="post">
                            <div style="line-height: 60px;background-color: #f5f9fe"><h1>过期信息设置</h1></div>
                            <table>
                                <tr>
                                    <td>是否显示过期招聘信息：</td>
                                    <td>
                                        <?php if($value['outdated_jobs']==1){?>
                                            <input type="radio" name="outdated_jobs" value="0">否
                                            <input type="radio" name="outdated_jobs" checked="checked" value="1">是
                                        <?php }else{?>
                                            <input type="radio" name="outdated_jobs" checked="checked" value="0">否
                                            <input type="radio" name="outdated_jobs" value="1">是
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr>
                                    <Td colspan="2"><input type="submit" value="保存修改"></Td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="otherset">
                        <form action="?r=system/company_set" method="post">
                            <div style="line-height: 60px;background-color: #f5f9fe"><h1>其他设置</h1></div>
                            <table>
                                <tr>
                                    <td>允许公司名称重复：</td>
                                    <td>
                                        <?php if($value['company_repeat']==1){?>
                                            <input type="radio" name="company_repeat" value="0">否
                                            <input type="radio" name="company_repeat" checked="checked" value="1">是
                                        <?php }else{?>
                                            <input type="radio" name="company_repeat" checked="checked" value="0">否
                                            <input type="radio" name="company_repeat" value="1">是
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
                <div id="box2" style="display:none">
                    <form action="?r=system/company_set" method="post">
                        <div style="line-height: 60px;background-color: #f5f9fe"><h1>其他设置</h1></div>
                        <table>
                            <tr>
                                <td>积分代替名：</td>
                                <td><input type="text" name="points_byname" value="<?php echo $value['points_byname']?>"></td>
                            </tr>
                            <tr>
                                <td>积分量词：</td>
                                <td><input type="text" name="points_quantifier" value="<?php echo $value['points_quantifier']?>"></td>
                            </tr>
                            <tr>
                                <td>充值比例：1元等于:</td>
                                <td><input type="text" name="payment_rate" value="<?php echo $value['payment_rate']?>">点积分</td>
                            </tr>
                            <tr>
                                <td>充值最低额度：</td>
                                <td><input type="text" name="payment_min" value="<?php echo $value['payment_min']?>">元</td>
                            </tr>
                            <tr>
                                <td>积分充值提醒：</td>
                                <td><input type="text" name="points_min_remind" value="<?php echo $value['points_min_remind']?>"></td>
                            </tr>
                            <tr>
                                <td>刷新普通职位时间间隔：</td>
                                <td><input type="text" name="com_pointsmode_refresh_space" value="<?php echo $value['com_pointsmode_refresh_space']?>">分钟</td>
                            </tr>
                            <tr>
                                <td>每天刷新普通职位次数限制：</td>
                                <td><input type="text" name="com_pointsmode_refresh_time" value="<?php echo $value['com_pointsmode_refresh_time']?>">次</td>
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
<script src="js/jquery.min.js"></script>
<script>
    $(".set_one").click(function () {
        $("#box1").show();
        $("#box2").hide();
    })
    $(".set_two").click(function () {
        $("#box1").hide();
        $("#box2").show();
    })
</script>
<script src="kingediter/kindeditor-all-min.js"></script>
<script>
    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_id');
    });
</script>
</body>
</html>