<?php
use yii\helpers\Html;
?>
<?=Html::beginForm('company/company_jobs_edit_to','post')?>
<script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
<div>
     <div> 职位修改操作</div>
</div>
    <div style="line-height: 50px;padding-left: 5px;margin-left: 10px;background-color: #f0f8fd;display: inline-block;width: 100%">
    修改职位-<span style="color:#0066CC">发布职位2</span>
    </div>
<table width="100%" cellspacing="0" cellpadding="4" border="0" bgcolor="#FFFFFF">
    <tbody>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">所属会员：</td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF"> 2414619320@qq.com </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">所属企业：</td>
        <td class="link_lan" style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <a href="http://www.php9.com/74cms_v3.7_20160412/upload/company/company-show.php?id=1" target="_blank">北京企业</a>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">刷新时间：</td>
        <td class="link_lan" style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF"> 2017-02-22 </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" width="110" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            职位名称：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed">
            <input id="jobs_name" class="input_text_200" name="jobs_name" value="发布职位2" maxlength="50" type="text">
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            招聘状态：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <label style="color: rgb(0, 153, 0);">
                <input name="display" value="1" checked="checked" type="radio">
                招聘中
            </label>
            <label style="color: rgb(102, 102, 102);">
                <input name="display" value="2" type="radio">
                暂停招聘
            </label>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            审核状态：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <label style="color: rgb(0, 153, 0);">
                <input name="audit" value="1" checked="checked" type="radio">
                审核通过
            </label>
            <label style="color: rgb(102, 102, 102);">
                <input name="audit" value="2" type="radio">
                审核中
            </label>
            <label style="color: rgb(102, 102, 102);">
                <input name="audit" value="3" type="radio">
                审核未通过
            </label>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" width="110" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            性别要求：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed">
            <label style="color: rgb(102, 102, 102);">
                <input name="sex" value="1" title="男" type="radio">
                男
            </label>
            <label style="color: rgb(102, 102, 102);">
                <input name="sex" value="2" title="女" type="radio">
                女
            </label>
            <label style="color: rgb(0, 153, 0);">
                <input name="sex" value="3" title="不限" checked="checked" type="radio">
                不限
            </label>
            <input id="sex_cn" name="sex_cn" value="不限" type="hidden">
            <script>
                $(document).on('click',"input[name='sex']",function(){if($(this).val()=='1'){$("#sex_cn").val($(this).prop('title'))}else if($(this).val()=='2'){$("#sex_cn").val($(this).prop('title'))}else if($(this).val()=='3'){$("#sex_cn").val($(this).prop('title'))}})
            </script>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            职位性质：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <label style="color: rgb(0, 153, 0);">
                <input name="nature" value="62" title="全职" checked="checked" type="radio">
                全职
            </label>
            <label style="color: rgb(102, 102, 102);">
                <input name="nature" value="63" title="兼职" type="radio">
                兼职
            </label>
            <label style="color: rgb(102, 102, 102);">
                <input name="nature" value="64" title="实习" type="radio">
                实习
            </label>
            <input id="nature_cn" name="nature_cn" value="全职" type="hidden">
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold;">*</span>
            招聘人数：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <input id="amount" class="input_text_200" name="amount" value="50" maxlength="4" onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))" type="text">
            人
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">有效日期：</td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            发布日期：2017-02-22 11:06，截止日期：2017-03-09 11:06
            <input name="olddeadline" value="1489028779" type="hidden">
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            职位类别：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <input id="category" placeholder="请选择职业分类" readonly="readonly" type="text">
            <div id="msg" class="msg" style="left: 130px;align-content: center;background-color:#ffffff;position:absolute;display: none">
                <ul>
            <?php foreach($category_jobs as $item){?>
                    <li class="twop" style="list-style-type:none;cursor: pointer;font-size: 18px" id="<?=$item['id']?>" title="<?=$item['categoryname']?>"><?=$item['categoryname']?></li>
            <?php }?>
                </ul>
            </div>
            <div class="tinfo" style="left: 130px;align-content: center;background-color:red;position:absolute;display: none">
                <ul>
                    <?php foreach($category2 as $item){?>
                        <li style="list-style-type:none;cursor: pointer;font-size: 18px" id="<?=$item['id']?>" title="<?=$item['categoryname']?>"><?=$item['categoryname']?></li>
                    <?php }?>
                </ul>
            </div>
            <script>
                $(function () {
                    //分类文本框点击时切换分类选择层的显示与隐藏
                    $("#category").click(function () {
                        $("#msg").toggle('show');
                    });
                    //二级分类标题点击时切换三级分类的显示与隐藏
                    $(".twop").click(function () {

                        var obj=$(".tinfo");
                        for(var i=0;i<=obj.length;i++){
                            $("#msg").hide();
                            if($(this).prop('id')==obj.eq(i).prop('id')){
                                $(".tinfo").show();
                            }
                        }


                    });
                    //三层分类层鼠标离开时隐藏
                    $(".tinfo").mouseleave(function () {
                        $(this).hide();
                    });
                    //三级分类点击时开始判断并且设置获取分类
                    $(".tinfo a").click(function () {
                        var classname = $(this).attr("class");//获取被点击的三级分类的class，唯一，一般为分类id
                        var valinfo = $(this).text();//获取三级分类的值
                        //循环已经选择过的三级分类，如果存在去除
                        $("#data_checkbox span").each(function () {
                            if ($(this).attr("class") == classname) {
                                $(this).remove();
                            }
                        });
                        //获取已经选择的分类的个数，如果超过最大选择项，提示返回
                        var length = $("#data_checkbox span").length;
                        if (length >= maxlength) {
                            alert("最多只能选择"+maxlength+"个职位");
                            return;
                        }
                        //将选择的分类追加至指定的区域
                        $("#data_checkbox").append('<span class="' + classname + '"><label><input type="checkbox" checked="true"> <b style="color:#0297fd">' + valinfo + '</b></label></span>');
                        //分类文本框赋值
                        setval();
                    });
                    //已选择文本框区域的分类项绑定单击事件，点击移除
                    $("#data_checkbox span").live("click",function () {
                        $(this).remove();
                        //分类文本框重新赋值
                        setval();
                    });
                    //关闭按钮
                    $(".panel_closebtn").click(function () {
                        $("#msgbg").hide().siblings("#msg").hide();
                    });
                    //重新获取最新的选择的分类赋值给分类文本框
                    function setval()
                    {
                        var carray = "";
                        $("#data_checkbox span").each(function () {
                            carray += $(this).find("b").text()+",";
                        });
                        carray=carray.substring(0,carray.length-1);
                        $("#category").val(carray);
                    }
                });
            </script>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            工作地区：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <select name="" id=""></select>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right"> 学历要求：</td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <select name="" id=""></select>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">工作经验：</td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <select name="" id=""></select>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            月薪范围：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <select name="" id=""></select>
        </td>
    </tr>
    <tr>
        <td valign="top" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            职位描述：
        </td>
        <td bgcolor="#FFFFFF">职位描述</td>
    </tr>
    <tr>
        <td height="30" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            应届生应聘：
        </td>
        <td>
            <label style="color: rgb(0, 153, 0);">
                <input name="graduate" value="0" checked="checked" type="radio">
                不允许
            </label>
            <label style="color: rgb(102, 102, 102);">
                <input name="graduate" value="1" type="radio">
                允许
            </label>
        </td>
    </tr>
    </tbody>
</table>
<div style="line-height: 50px;padding-left: 5px;background-color: #f0f8fd;display: inline-block;width: 100%">联系方式</div>
<table width="100%" cellspacing="0" cellpadding="4" border="0" bgcolor="#FFFFFF">
    <tbody>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            联 系 人：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <input id="contact" class="input_text_200 valid" name="contact" value="小卜" maxlength="15" style="" type="text">
            <label style="color: rgb(0, 153, 0);">
                <input name="contact_show" value="1" checked="checked" type="checkbox">
                联系人在职位详细页中显示
            </label>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            联系手机：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <input id="telephone" class="input_text_200 valid" name="telephone" maxlength="35" value="13161173620" style="" type="text">
            <label style="color: rgb(0, 153, 0);">
                <input name="telephone_show" value="1" checked="checked" type="checkbox">
                联系电话在职位详细页中显示
            </label>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" align="right">固定电话：</td>
        <td style=" border-bottom:1px #CCCCCC dashed">
            <input id="landline_tel_first" class="input_text_200 valid" name="landline_tel_first" style="width: 50px;" maxlength="4" value="0372" type="text">
            -
            <input id="landline_tel_next" class="input_text_200" name="landline_tel_next" style="width:100px;" maxlength="11" value="11111111111" type="text">
            -
            <input id="landline_tel_last" class="input_text_200 valid" name="landline_tel_last" style="width: 80px;" maxlength="6" value="156322" type="text">
        </td>
        <td> </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            联系邮箱：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <label>
                <input id="email" class="input_text_200" name="email" maxlength="80" value="2414619320@qq.com" type="text">
            </label>
            <label style="color: rgb(0, 153, 0);">
                <input name="email_show" value="1" checked="checked" type="checkbox">
                联系邮箱在职位详细页中显示
            </label>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            联系地址：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <input id="address" class="input_text_200" name="address" maxlength="50" value="北京市上帝街道" type="text">
            <label> </label>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">用邮箱接收简历?</td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <label style="color: rgb(0, 153, 0);">
                <input name="notify" value="1" checked="checked" type="radio">
                接收
            </label>
            <label style="color: rgb(102, 102, 102);">
                <input name="notify" value="0" type="radio">
                不接收
            </label>
            <span style="color: #666666">    (默认为接收：当有人给此岗位投递简历时，系统会发一份通知邮件提醒查看)</span>
        </td>
    </tr>
    <tr>
        <td height="30" bgcolor="#FFFFFF" align="right"></td>
        <td height="120" bgcolor="#FFFFFF">
            <input class="admin_submit" name="submit22" value="返 回" style="background-image: url('../web/admin/images/admin_submit.jpg');border: 0 none;font-size: 12px;height: 27px;line-height: 27px;margin-bottom: 4px;margin-right: 8px;text-align: center;width: 85px;" type="button">
        </td>
    </tr>
    </tbody>
</table>
<?Html::endForm()?>