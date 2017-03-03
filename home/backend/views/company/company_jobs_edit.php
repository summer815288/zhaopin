<?php
use yii\helpers\Html;
?>
<?=Html::beginForm('company/company_jobs_edit_to','post')?>
<script type="text/javascript" charset="utf-8" src="admin/js/category/jquery.min.js"></script>
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
    <tr  style="position: relative">
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold;">*</span>
            职业类别：
        </td>
        <td>
            <input type="text" class="LocalDataMultiC" id="positionName" style="cursor: pointer" readonly/>
            <div class="input"></div>
            <div id="jobs_div" style="width: 700px;height: 458px;background-color: #ffffff;display: none">
                <div style="height: 44px;">
                    <span style="float: left;margin: 5px;padding: 5px"><b>职位选择</b></span>
                    <span class="closes" style="float: right;margin: 5px;padding: 5px;background-color: #9900FF;cursor: pointer">×</span>
                </div>
                <div>
                    <?php foreach($category_jobs_parents as $v){?>
                        <div style="float: left;width: 700px;background-color: #ffffff;border-bottom: 1px solid #1B242F">
                            <div style="width: 159px;float: left;">
                                <span><?=trim($v['categoryname'])?></span>
                            </div>
                            <div style="width: 541px;float: right">
                                <ul>
                                    <?php foreach($category_jobs as $v2){?>
                                        <?php if($v['id']==$v2['parentid']){?>
                                            <li class="mouse" style="width: 151px;line-height:180%;float: left;list-style-type: none;font-size: 13px;margin: 1px;">
                                                <a href="javascript:void(0)" topname="<?=$v2['categoryname']?>" topclass="<?=$v['id']?>"  id="<?=$v2['id']?>" class="jobs_click">
                                                    <input type="button" class="jobs_id"  style="padding-left: 2px;margin-right:5px;font-weight: bold;background-color: #ffffff;border: 1px solid #1B242F;color: #0000ff" value="+"/><?=$v2['categoryname']?>
                                                </a>
                                                <div class="jobs_three" style=";position:absolute;display:none;background-color: red;width:300px;">
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </td>
        <script>
            //点击职业类别显示
            $(document).on('click','.LocalDataMultiC',function(){
                var jobs_div=$("#jobs_div");
                jobs_div.toggle('10000');

            });
            //鼠标移除事件
            $(document).on("mouseleave",'.jobs_three',function(){
                $(".jobs_three").hide()
            })
            //点击职业类别三级显示
            $(document).on('click','.jobs_click',function(){
                var obj=$(this);
                var topclass=$(this).attr('topclass');//一级id
                var parentid=$(this).prop('id');//二级id
                var html='';
                $.ajax({
                    type:'POST',
                    data:{parentid:parentid},
                    url:'index.php?r=company/category_jobs',
                    dataType:"json",
                    success:function(msg){
                        $.each(msg,function(i,v){
                            html +="<span class='input_val' topclass='"+topclass+"' category='"+parentid+"' subclass='"+v['id']+"' style='cursor: pointer;display:inline-table;width:150px;line-height: 15px;'>"+ v['categoryname']+"</span>";
                        });

                        obj.next().html("<span style='cursor: pointer' class='input_val' topclass='"+topclass+"' category='"+parentid+"'>"+obj.attr('topname')+"</span>"+"</br>"+html).toggle();
                    }
                })
            });
            //点击赋值到文本框
            $(document).on('click','.input_val',function(){
                var topclass= $(this).attr('topclass');//一级分类id
                var category=$(this).attr('category');//二级分类id
                var category_cn=$(this).text();//三级分类id
                $(".LocalDataMultiC").val(category_cn);
                $(".input").html("<input type='hidden' name='topclass' value='"+topclass+"'/><input type='hidden' name='category' value='"+category+"'/><input type='hidden' name='subclass' value='0'/><input type='hidden' name='category_cn' value='"+category_cn+"'/>");
                $("#jobs_div").hide();
            });
            //点击关闭div
            $('.closes').click(function(){
                $("#jobs_div").hide();
            })
        </script>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right"> 学历要求：</td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <select name="education" style="border: 2px solid #f1f1f1;outline: medium none;width:100px;transition: border 0.2s ease-in 0s;appearance:none;-moz-appearance:none;-webkit-appearance:none;cursor: pointer;">
                <?php foreach($education_cn as $item){?>
                    <option e_name="<?=$item['c_name']?>"  class="education"value="<?=$item['c_id']?>"><?=$item['c_name']?></option>
                <?php }?>
            </select>
            <input type="hidden" name="education_cn"/>
        <script>
            $(document).on('click','.education',function(){
                var education=$(this);
                for(var i=0;i<education.length;i++){
                    var education_cn=education.attr('e_name')
                }
                $("input[name='education_cn']").val(education_cn)
            })
        </script>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">工作经验：</td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">

            <select name="experience" style="border: 2px solid #f1f1f1;outline: medium none;transition: border 0.2s ease-in 0s;width: 100px;appearance:none;-moz-appearance:none;-webkit-appearance:none;cursor: pointer;">
                <?php foreach($experience_cn as $item){?>
                    <option e_name="<?=$item['c_name']?>" class="experience" value="<?=$item['c_id']?>"><?=$item['c_name']?></option>
                <?php }?>
            </select>
            <input type="hidden" name="experience_cn"/>
        <script>
            $(document).on('click','.experience',function(){
                var experience=$(this);
                for(var i=0;i<experience.length;i++){
                    var experience_cn=experience.attr('e_name')
                }
                $("input[name='experience_cn']").val(experience_cn)
            })
        </script>
        </td>
    </tr>
    <tr>
        <td style=" border-bottom:1px #CCCCCC dashed" height="30" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            月薪范围：
        </td>
        <td style=" border-bottom:1px #CCCCCC dashed" bgcolor="#FFFFFF">
            <select name="wage" style="border: 2px solid #f1f1f1;outline: medium none;padding: 6px 10px;transition: border 0.2s ease-in 0s;width: 150px;appearance:none;-moz-appearance:none;-webkit-appearance:none;cursor: pointer;">
                <?php foreach($wage_cn as $item){?>
                    <option w_name="<?=$item['c_name']?>" class="wage" value="<?=$item['c_id']?>"><?=$item['c_name']?></option>
                <?php }?>
            </select>
            <input type="hidden" name="wage_cn"/>
        <script>
            $(document).on('click','.wage',function(){
                var wage=$(this);
                for(var i=0;i<wage.length;i++){
                    var wage_cn=wage.attr('w_name')
                }
                $("input[name='wage_cn']").val(wage_cn)
            })
        </script>
        </td>
    </tr>
    <tr>
        <td valign="top" bgcolor="#FFFFFF" align="right">
            <span style="color:#FF3300; font-weight:bold">*</span>
            职位描述：
        </td>
        <td bgcolor="#FFFFFF"><textarea name="" id="" cols="30" rows="10"></textarea></td>
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