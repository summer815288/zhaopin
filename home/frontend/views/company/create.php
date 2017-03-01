<?php
use yii\helpers\Html;
?>
<div id="container">
<style>
            .showyearbox {
                background-color: #ffffff;
                border: 1px solid #ccc;
                box-shadow: 3px 3px 4px #cccccc;
                display: none;
                left: 0;
                padding: 5px;
                position: absolute;
                top: 35px;
                width: 365px;
                z-index: 88;
            }
            .input_text_50_bg {
                background: rgba(0, 0, 0, 0) url("../images/icon36.png") no-repeat scroll 52px -98px;
                border: 1px solid #cccccc;
                color: #666666;
                cursor: pointer;
                font-size: 14px;
                line-height: 16px;
                padding: 9px;
                width: 50px;
            }
</style>
<?php include"left.php";?>
            <div class="content">
            	<dl class="company_center_content">
                    <dt><h1><em></em>发布新职位</h1></dt>
                    <dd   style="background-color: #fafafa">
                    	<div class="ccc_tr">今日已发布 <span>0</span> 个职位   还可发布 <span>5</span> 个职位</div>
                    <?=Html::beginForm('index.php?r=company/create_to','post')?>
                            <dt class="redstar">职位信息:</dt>
                            <table class="btm">
                            	<tbody>
                                    <tr>
                                        <td width="25"><span class="redstar">*</span></td>
                                        <td width="95">职位名称：</td>
                                        <td>
                                            <input type="text" placeholder="请输入职位名称，如：产品经理" value="" name="jobs_name" id="positionName">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25"><span class="redstar">*</span></td>
                                        <td width="85">职业性质</td>
                                        <td>
                                            <ul class="profile_radio clearfix reset">
                                                <li>
                                                    全职<em></em>
                                                    <input type="radio" class="nature" name="nature" val="全职" value="62">
                                                </li>
                                                <li>
                                                    兼职<em></em>
                                                    <input type="radio" class="nature" name="nature" val="兼职" value="63">
                                                </li>
                                                <li>
                                                    实习<em></em>
                                                    <input type="radio" class="nature" name="nature" val="实习" value="64">
                                                </li>
                                                <input type="hidden" class="nature_cn" name="nature_cn"/>
                                            </ul>
                                            <script>
                                                $(document).on('click','.nature',function(){
                                                    if($(this).prop('checked',true)){
                                                        var val=$(this).attr('val')
                                                        $(".nature_cn").val(val)
                                                    }
                                                })
                                            </script>
                                        </td>
                                    </tr>
                                    <tr  style="position: relative">
                                        <td width="25"><span class="redstar">*</span><div class="tian"></div></td>
                                        <td width="85">职位类别 <div class="tian"></div></td>
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
                                                jobs_div.toggle();

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
                                        <td><span class="redstar">*</span></td>
                                        <td>招聘人数：</td>
                                        <td>
                                            <input type="text" placeholder="请输入招聘人数" value="" name="amount">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="redstar">*</span></td>
                                        <td>工作城市</td>
                                        <td>
                                            <input type="text" class="district_cn" style="cursor: pointer" readonly placeholder="请选择城市" id="positionName" name="district_cn">
                                            <input type='hidden' name='district' />
                                            <input type='hidden' name='sdistrict' />
                                            <input type='hidden' name='district_cn' />
                                            <div id="djobs_div" style="width: 625px;height: 240px;background-color: #ffffff;display: none">
                                                <div style="height: 44px;">
                                                    <span style="float: left;margin: 5px;padding: 5px"><b>城市选择</b></span>
                                                    <span class="dcloses" style="float: right;margin: 5px;padding: 5px;background-color: #9900FF;cursor: pointer">×</span>
                                                </div>
                                                <div>
                                                    <div style="width: 625px;background-color: #ffffff;">
                                                        <ul>
                                                            <?php foreach($category_one as $v){?>
                                                                <li style="list-style-type: none;width: 100px;line-height: 22px;display: inline-table">
                                                                    <input type="button" class="cate1" c_id="<?=$v['id']?>" c_name="<?=$v['categoryname']?>" style="font-weight: bold;background-color: #ffffff;color: #0000aa;border: 1px solid #0000aa;padding: 1px 2px" value="+"/><?=$v['categoryname']?>
                                                                        <div class="mouse_leave" style="position: absolute;display: none;background-color: #AFAFAF;width: 400px;height: auto;z-index: 10">
                                                                            <ul>
                                                                                <li class="cate2" c_id="<?=$v['id']?>" val="<?=$v['categoryname']?>" style="cursor: pointer;list-style-type: none;width: 80px;display: inline-table;font-weight: bold">不限</li><br>
                                                                                <?php foreach($category_district as $v2){?>
                                                                                    <?php if($v['id']==$v2['parentid']){?>
                                                                                        <li class="cate2" c_id="<?=$v2['id']?>" val="<?=$v2['categoryname']?>" style="cursor: pointer;list-style-type: none;width: 80px;display: inline-table">
                                                                                            <?=$v2['categoryname']?>
                                                                                        </li>
                                                                                    <?php }?>
                                                                                <?php }?>
                                                                            </ul>
                                                                        </div>
                                                                </li>
                                                            <?php }?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <script>
                                            //点击职业类别显示
                                            $(document).on('click','.district_cn',function(){
                                                var djobs_div=$("#djobs_div");
                                                djobs_div.toggle();
                                            });
                                            //点击关闭div
                                            $('.dcloses').click(function(){
                                                $("#djobs_div").hide();
                                            });
                                            //点击让二级城市显示
                                            $(document).on('click','.cate1',function(){
                                                $(this).next().toggle()
                                            });
                                            //点击赋值
                                            $(document).on('click','.cate2',function(){
                                                var district_div=$(".district_cn");
                                                var district=$(this).parent().parent().prev().attr('c_id');//一级分类id
                                                var c_name=$(this).parent().parent().prev().attr('c_name');//一级分类name
                                                var sdistrict=$(this).attr('c_id');//二级分类id
                                                var district_cn=$(this).attr('val');//二级分类name
//                                                alert(c_name);
                                                if(district==sdistrict){
                                                    district_div.val(district_cn);//赋值到文本框
                                                    $("input[name='district']").val(district);
                                                    $("input[name='sdistrict']").val(0);
                                                    $("input[name='district_cn']").val(c_name);
                                                    $("#djobs_div").hide();
                                                }else{
                                                    district_div.val(c_name+'/'+district_cn);//赋值到文本框
                                                    $("input[name='district']").val(district);
                                                    $("input[name='sdistrict']").val(sdistrict);
                                                    $("input[name='district_cn']").val(c_name+"/"+district_cn);
                                                    $("#djobs_div").hide();
                                                }
                                            })
                                            //鼠标移出事件
                                            $(document).on('mouseleave','.mouse_leave',function(){
                                                $(this).hide();
                                            });
                                        </script>
                                    </tr>
                                    <tr>
                                        <td><span class="redstar">*</span></td>
                                        <td width="85">薪资待遇：</td>
                                        <td>
                                            <select name="wage_cn" style="border: 2px solid #f1f1f1;font-size:22px;height: 45px;margin-top: 20px;outline: medium none;padding: 6px 10px;transition: border 0.2s ease-in 0s;width: 625px;appearance:none;-moz-appearance:none;-webkit-appearance:none;cursor: pointer;">
                                                <?php foreach($wage_cn as $item){?>
                                                    <option value="<?=$item['c_id']?>"><?=$item['c_name']?></option>
                                                <?php }?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="redstar">*</span></td>
                                        <td width="85">职业亮点：</td>
                                        <td>
                                            <input type="button" class="btn_redstar" style="padding: 5px 10px" value="添加+"/>
                                            <span hidden="hidden" name="redsta" class="c_id"></span>
                                            <div class="redstar_div" style="position: relative;font-size:15px;width: 662px;background-color: #ffffff;height: 241px;display: none">
                                                <div style="height: 34px;border-bottom: 1px solid #8c8c8c">
                                                   <span style="margin: 5px;float: left"><b>职位亮点选择</b></span>
                                                    <input type="button" class="tag_close" value="X" style="float: right;margin: 5px"/>
                                                    <input  class="mar_bottom" type="button" style="float: right;margin: 5px;" value="确定"/>
                                                </div>
                                                <div style="line-height: 30px;border-bottom: 1px solid #8c8c8c">
                                                    <span>最多可选<font color="red"> 5 </font>项</span>
                                                    <span class="tag_count">已选<font color="red" class="tag_num"> 0 </font>项</span>
                                                    <span class="close_all"></span>
                                                </div>
                                                <table>
                                                    <?php foreach($redstar as $item){?>
                                                    <tr style="display: inline;line-height: 19px;">
                                                        <td style="width: 146px;">
                                                            <a class="tag"><input  type="checkbox" class="tag_check" id="<?=$item['c_id']?>"   value="<?=$item['c_name']?>"/><?=$item['c_name']?></a>
                                                        </td>
                                                    </tr>
                                                    <?php }?>
                                                </table>
                                            </div>
                                        </td>
                                        <script>
                                            //点击职位亮点div显示
                                            $(".btn_redstar").click(function(){
                                                $(".redstar_div").toggle();
                                            });
                                            //点击关闭职业亮点选择
                                            $(document).on('click','.close',function(){
                                                $(this).remove()
                                            });
                                            //点击职位亮点选择
                                            $(document).on('click','.tag',function(){
                                                var tag=$(this);
                                                //点击时候增加一
                                                var num=$(".num").length;
                                                var tag_id=tag.children().prop('id');
                                                var tag_cn=tag.children().val();
                                                if(tag.children().prop('checked')==true){
                                                    tag.children().prop('checked',false);
                                                    var obj=$('.num');
                                                    for(var i=0;i<obj.length;i++){
                                                        if(tag_id==obj.eq(i).attr("id")){
                                                           obj.eq(i).remove();
                                                            num=num-1;
                                                            $(".tag_num").html(num);
                                                        }
                                                    }
                                                }else{
                                                    if(num<=4){
                                                        num=num+1;
                                                        tag.children().prop('checked',true);
                                                        var tag_cn_input="<span class='num' value='"+tag_cn+" ' id='"+tag_id+"' style='margin-left: 5px;padding: 5px 8px;background-color: #44d0c7' >"+tag_cn+" <i class='tag_close' style='cursor:pointer'>×</i></span>";
                                                        $(".tag_count").after(tag_cn_input);
                                                        $(".tag_num").html(num);
                                                        $(".close_all").html("<input  style='float:right;padding:3px;' type='button' class='tag_del' value='全部清除'/>")
                                                    }else{
                                                        alert('最多只能选五项')
                                                    }
                                                }
                                            })
                                            //点击[X]删除
                                            $(document).on('click','.tag_close',function(){
                                                var obj=$(".num");
                                                var tag_id=obj.attr('id');
                                                for(var i=0;i<obj.length;i++){
                                                    if(tag_id==obj.eq(i).attr('id')){
                                                        obj.eq(i).remove()
                                                    }
                                                }
                                                var tag_check=$(".tag_check");
                                                for(var j=0;j<tag_check.length;j++){
                                                    if(tag_id==tag_check.eq(j).attr('id')){
                                                        tag_check.eq(j).prop('checked',false);
                                                    }
                                                }
                                                var num=obj.length;
                                                num=num-1;
                                                $(".tag_num").html(num);
                                            })
                                            //点击全部清除
                                            $(document).on('click','.tag_del',function(){
                                                var obj=$(".num");
                                                for(var i=0;i<obj.length;i++){
                                                    obj.eq(i).remove()
                                                }
                                                var tag_check=$(".tag_check");
                                                for(var j=0;j<tag_check.length;j++){
                                                    tag_check.eq(j).prop('checked',false);
                                                }
                                                $(".tag_num").html(0);
                                            })
                                            //点击确定按钮赋值
                                            $(document).on('click','.mar_bottom',function(){
                                                var obj=$('.num');
                                                var btn_redstar=$(".btn_redstar");
                                                var tag_id='';
                                                var tag_cn='';

                                                for(var i=0;i<obj.length;i++){
                                                    var tag_c=obj.eq(i).attr('value');
                                                    btn_redstar.before("<input type='button' style='padding:5px;margin:5px' value='"+tag_c+"'/>");
                                                    tag_id+=','+obj.eq(i).attr('id');
                                                    tag_cn+=','+obj.eq(i).attr('value');
                                                }
                                                tag_id=tag_id.substr(1);
                                                tag_cn=tag_cn.substr(1);
                                                btn_redstar.before("<input type='hidden' name='tag' style='padding:5px;margin:5px' value='"+tag_id+"'/>");
                                                btn_redstar.before("<input type='hidden' name='tag_cn' style='padding:5px;margin:5px' value='"+tag_cn+"'/>");
                                                $(".redstar_div").hide();
                                            });
                                            //点击[X]隐藏div
                                            $(document).on('click','.tag_close',function(){
                                                $(".redstar_div").hide();
                                            })
                                        </script>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="btm">
                            	<tbody>
                                <dt class="redstar">职位要求:</dt>
                                <tr>
                                    <td width="25"><span class="redstar">*</span></td>
                                    <td width="95">性别要求：</td>
                                    <td>
                                        <ul class="profile_radio clearfix reset">
                                            <li>
                                                不限<em></em>
                                                <input type="radio" class="sex" name="sex" val="不限" value="3">
                                            </li>
                                            <li>
                                                男<em></em>
                                                <input type="radio" class="sex" name="sex" val="男" value="1">
                                            </li>
                                            <li>
                                                女<em></em>
                                                <input type="radio" class="sex" name="sex" val="女" value="2">
                                            </li>
                                            <input type="hidden" class="sex_cn" name="sex_cn"/>
                                        </ul>
                                        <script>
                                            $(document).on('click','.sex',function(){
                                                if($(this).prop('checked',true)){
                                                    var val=$(this).attr('val')
                                                    $(".sex_cn").val(val)
                                                }
                                            })
                                        </script>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="25"><span class="redstar">*</span></td>
                                    <td width="85">学历要求：</td>
                                    <td>
                                        <select name="education_cn" style="border: 2px solid #f1f1f1;font-size:22px;height: 45px;margin-top: 20px;outline: medium none;padding: 6px 10px;transition: border 0.2s ease-in 0s;width: 625px;appearance:none;-moz-appearance:none;-webkit-appearance:none;cursor: pointer;">
                                            <?php foreach($education_cn as $item){?>
                                                <option value="<?=$item['c_id']?>"><?=$item['c_name']?></option>
                                            <?php }?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="25"><span class="redstar">*</span></td>
                                    <td width="85">工作经验：</td>
                                    <td>
                                        <select name="experience_cn" style="border: 2px solid #f1f1f1;font-size:22px;height: 45px;margin-top: 20px;outline: medium none;padding: 6px 10px;transition: border 0.2s ease-in 0s;width: 625px;appearance:none;-moz-appearance:none;-webkit-appearance:none;cursor: pointer;">
                                            <?php foreach($experience_cn as $item){?>
                                                <option value="<?=$item['c_id']?>"><?=$item['c_name']?></option>
                                            <?php }?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="25"><span class="redstar">*</span></td>
                                    <td width="85">年龄要求：</td>
                                    <td>
                                        <select name="minage" id="" style="border: 2px solid #f1f1f1;font-size:22px;height: 45px;margin-top: 20px;outline: medium none;padding: 6px 10px;transition: border 0.2s ease-in 0s;width: 303px;appearance:none;-moz-appearance:none;-webkit-appearance:none;cursor: pointer;">
                                            <?php for($i=16;$i<=60;$i++){?>
                                            <option value="<?=$i.'岁'?>"><?=$i.'岁'?></option>
                                            <?php }?>
                                        </select>
                                        <span>至</span>
                                        <select name="maxage" id="" style="border: 2px solid #f1f1f1;font-size:22px;height: 45px;margin-top: 20px;outline: medium none;padding: 6px 10px;transition: border 0.2s ease-in 0s;width: 303px;appearance:none;-moz-appearance:none;-webkit-appearance:none;cursor: pointer;">
                                            <?php for($i=16;$i<=60;$i++){?>
                                                <option value="<?=$i.'岁'?>"><?=$i.'岁'?></option>
                                            <?php }?>
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="btm">
                                <dt class="redstar">职位描述:</dt>
                            	<tbody>
                                <tr>
                                	<td width="25"><span class="redstar">*</span></td>
                                	<td width="85">职位描述:</td>
                                	<td>
                                        <textarea name="" id="" cols="30" rows="10"></textarea>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                           
                            <table class="btm">
                                <dt class="redstar">联系方式:</dt>
                            	<tbody>
                                        <tr>
                                            <td width="25"><span class="redstar">*</span></td>
                                            <td width="95">联系人：</td>
                                            <td>
                                                <input type="text" value="<?php echo $company_profile[0]['contact']?>" name="contact">
                                            </td>
                                            <td><input type="checkbox" <?php if($company_profile[0]['contact_show']=='1'){echo "checked";}?> value="1" name="contact_show"/>对外公开联系人</td>
                                        </tr>
                                        <tr>
                                            <td width="25"><span class="redstar">*</span></td>
                                            <td width="95">联系手机：</td>
                                            <td>
                                                <input type="text" value="<?php echo $company_profile[0]['telephone']?>" name="telephone">
                                            </td>
                                            <td><input type="checkbox" <?php if($company_profile[0]['telephone_show']=='1'){echo "checked";}?>  value="1" name="telephone_show"/>对外公开联系人</td>
                                        </tr>
                                        <tr>
                                            <td width="25"><span class="redstar">*</span></td>
                                            <td width="95">联系邮箱：</td>
                                            <td>
                                                <input type="text" value="<?php echo $company_profile[0]['email']?>" name="email">
                                            </td>
                                            <td><input type="checkbox" <?php if($company_profile[0]['email_show']=='1'){echo "checked";}?> value="1" name="email_show"/>对外公开联系人</td>
                                        </tr>
                                        <tr>
                                            <td width="25"><span class="redstar">*</span></td>
                                            <td width="95">联系地址：</td>
                                            <td>
                                                <input type="text" value=" <?php echo $company_profile[0]['address']?>" name="address">
                                            </td>
                                        </tr>
                            </tbody>
                            </table>
                            
                            <table>
                                <dt class="redstar">高级设置:</dt>
                            	<tbody>
                                <tr>
                                	<td width="25"><span class="redstar">*</span></td>
                                	<td colspan="2">
                                    	接收简历邮箱： <span id="receiveEmailVal">
                                            <input type="text" disabled value="<?php echo $company_profile[0]['email']?>" name="email_two"><input type="checkbox" value="1" name="notify"/>接收
                                        </span>

                                    </td>
                                </tr>
                                <tr>
                                    <td width="25"><span class="redstar">*</span></td>
                                    <td colspan="2">
                                    	简历短信通知：<span id="receiveEmailVal">
                                        <input type="text" value="<?php echo $company_profile[0]['telephone']?>" name="telephone_two">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                    	<input type="submit" value="发布" id="jobPreview" class="btn_32">
                                    </td>
                                </tr>
                         	</tbody>
                            </table>
                    <?=Html::endForm()?>
                    </dd>
                </dl>
            </div><!-- end .content -->

<!------------------------------------- 弹窗lightbox ----------------------------------------->
<div style="display:none;">
	<!--联系方式弹窗-->	
        <div style="height:180px;" class="popup" id="telTip">
	        <form id="telForm">
	        	<table width="100%">
	            	<tbody><tr>
	            		<td align="center" class="f18">留个联系方式方便我们联系你吧！</td>
	            	</tr>
	            	<tr>
	                	<td align="center">
							<input type="text" maxlength="49" placeholder="请输入你的手机号码或座机号码" name="tel">
							<span style="display:none;" class="error" id="telError"></span>
						</td>
	                </tr>
	                <tr>
	                	<td align="center">
	                		<input type="submit" value="提交" class="btn">
	                	</td>
	                </tr>
	            </tbody></table>
            </form>
        </div><!--/#telTip-->
        
    <!--地图弹窗-->	
        <div class="popup" id="baiduMap">
        	<div class="mb10">点击地图可重新定位公司所在的位置</div>
	        <div id="allmap" style="overflow: hidden; position: relative; z-index: 0; background-color: rgb(243, 241, 236); color: rgb(0, 0, 0); text-align: left;"><div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: grab;"><div class="BMap_mask" style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; width: 0px; height: 0px;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;"><label class="BMapLabel" unselectable="on" style="position: absolute; -moz-user-select: none; display: none; cursor: inherit; background-color: rgb(190, 190, 190); border: 1px solid rgb(190, 190, 190); padding: 1px; white-space: nowrap; font: 12px arial,simsun,sans-serif; z-index: -20000; color: rgb(190, 190, 190);">shadow</label></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 201;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 1;"><div style="position: absolute; overflow: visible; z-index: -100; left: 0px; top: 0px; display: none;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 2; display: block;"><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 0; display: block;"><canvas style="position: absolute; width: 256px; height: 256px; left: -74px; top: -213px; background: none repeat scroll 0% 0% rgb(243, 241, 236);" width="256" height="256" id="_1_bg_6323_2355_15"></canvas></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 10; display: block;"><canvas style="position: absolute; width: 256px; height: 256px; left: -74px; top: -213px;" width="256" height="256" id="_1_poi_6323_2355_15"></canvas></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 3;"></div></div><div style="position: absolute; z-index: 1201; top: 10px; right: 10px; width: 17px; height: 16px; background: url(style/images/img/st-close.pngquot) no-repeat scroll 0% 0% transparent; cursor: pointer; display: none;" title="退出全景"></div><div style="height: 32px; position: absolute; z-index: 30; -moz-user-select: none; bottom: 0px; right: auto; top: auto; left: 1px; display: none;" class=" anchorBL"><a title="到百度地图查看此区域" target="_blank" href="http://map.baidu.com/?sr=1" style="outline: medium none;"><img src="style/images/copyright_logo.png" style="border:none;width:77px;height:32px"></a></div><div style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:-moz-grab" id="zoomer"><div style="top:0;left:0;" class="BMap_zoomer"></div><div style="top:0;right:0;" class="BMap_zoomer"></div><div style="bottom:0;left:0;" class="BMap_zoomer"></div><div style="bottom:0;right:0;" class="BMap_zoomer"></div></div><div unselectable="on" class=" BMap_stdMpCtrl BMap_stdMpType0 BMap_noprint anchorTL" style="width: 62px; height: 186px; bottom: auto; right: auto; top: 10px; left: 10px; position: absolute; z-index: 1100; -moz-user-select: none;"><div class="BMap_stdMpPan"><div title="向上平移" class="BMap_button BMap_panN"></div><div title="向左平移" class="BMap_button BMap_panW"></div><div title="向右平移" class="BMap_button BMap_panE"></div><div title="向下平移" class="BMap_button BMap_panS"></div><div class="BMap_stdMpPanBg BMap_smcbg"></div></div><div class="BMap_stdMpZoom" style="height: 141px; width: 62px;"><div title="放大一级" class="BMap_button BMap_stdMpZoomIn"><div class="BMap_smcbg"></div></div><div title="缩小一级" class="BMap_button BMap_stdMpZoomOut" style="top: 120px;"><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSlider" style="height: 102px;"><div class="BMap_stdMpSliderBgTop" style="height: 102px;"><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSliderBgBot" style="top: 19px; height: 87px;"></div><div title="放置到此级别" class="BMap_stdMpSliderMask"></div><div title="拖动缩放" class="BMap_stdMpSliderBar" style="cursor: grab; top: 19px;"><div class="BMap_smcbg"></div></div></div><div class="BMap_zlHolder"><div class="BMap_zlSt"><div class="BMap_smcbg"></div></div><div class="BMap_zlCity"><div class="BMap_smcbg"></div></div><div class="BMap_zlProv"><div class="BMap_smcbg"></div></div><div class="BMap_zlCountry"><div class="BMap_smcbg"></div></div></div></div></div><div unselectable="on" style="bottom: auto; right: 10px; top: 10px; left: auto; white-space: nowrap; cursor: pointer; position: absolute; z-index: 10; -moz-user-select: none;" class=" BMap_noprint anchorTR"><div style="-moz-user-select: none; float: left;"><div style="-moz-user-select: none; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.35); border-left: 1px solid rgb(139, 164, 220); border-top: 1px solid rgb(139, 164, 220); border-bottom: 1px solid rgb(139, 164, 220); background: none repeat scroll 0% 0% rgb(142, 168, 224); padding: 2px 6px; font: bold 12px/1.3em arial,simsun,sans-serif; text-align: center; white-space: nowrap; border-radius: 3px 0px 0px 3px; color: rgb(255, 255, 255);" title="显示普通地图">地图</div></div><div style="-moz-user-select: none; float: left;"><div style="-moz-user-select: none; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.35); border-left: 1px solid rgb(139, 164, 220); border-top: 1px solid rgb(139, 164, 220); border-bottom: 1px solid rgb(139, 164, 220); background: none repeat scroll 0% 0% rgb(255, 255, 255); padding: 2px 6px; font-family: arial,simsun,sans-serif; font-style: normal; font-variant: normal; font-size: 12px; line-height: 1.3em; font-size-adjust: none; font-stretch: normal; -moz-font-feature-settings: normal; -moz-font-language-override: normal; text-align: center; white-space: nowrap; color: rgb(0, 0, 0);" title="显示卫星影像">卫星</div><div style="-moz-user-select: none; position: absolute; top: 0px; left: 0px; z-index: -1; display: none;"><div style="border-right:1px solid #8ba4dc;border-bottom:1px solid #8ba4dc;border-left:1px solid #8ba4dc;background:white;font:12px arial,simsun,sans-serif;padding:0 8px 0 6px;line-height:1.6em;box-shadow:2px 2px 3px rgba(0, 0, 0, 0.35)" title="显示带有街道的卫星影像"><span class="BMap_checkbox" "="" checked="checked"></span><label style="vertical-align: middle; cursor: pointer;">混合</label></div></div></div><div style="-moz-user-select: none; float: left;"><div style="-moz-user-select: none; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.35); border-left: 1px solid rgb(139, 164, 220); border-width: 1px; border-style: solid; border-color: rgb(139, 164, 220); background: none repeat scroll 0% 0% rgb(255, 255, 255); padding: 2px 6px; font-family: arial,simsun,sans-serif; font-style: normal; font-variant: normal; font-size: 12px; line-height: 1.3em; font-size-adjust: none; font-stretch: normal; -moz-font-feature-settings: normal; -moz-font-language-override: normal; text-align: center; white-space: nowrap; border-radius: 0px 3px 3px 0px; color: rgb(0, 0, 0);" title="显示三维地图">三维</div></div></div><div unselectable="on" class=" BMap_scaleCtrl BMap_noprint anchorBL" style="bottom: 18px; right: auto; top: auto; left: 81px; width: 88px; position: absolute; z-index: 10; -moz-user-select: none;"><div unselectable="on" class="BMap_scaleTxt" style="background-color: transparent; color: black;">500&nbsp;米</div><div class="BMap_scaleBar BMap_scaleHBar" style="background-color: black;"><img src="style/images/mapctrls.png" style="border:none"></div><div class="BMap_scaleBar BMap_scaleLBar" style="background-color: black;"><img src="style/images/mapctrls.png" style="border:none"></div><div class="BMap_scaleBar BMap_scaleRBar" style="background-color: black;"><img src="style/images/mapctrls.png" style="border:none"></div></div><div unselectable="on" class=" BMap_omCtrl BMap_ieundefined BMap_noprint anchorBR quad4" style="width: 13px; height: 13px; bottom: 0px; right: 0px; top: auto; left: auto; position: absolute; z-index: 10; -moz-user-select: none;"><div class="BMap_omOutFrame" style="width: 149px; height: 149px;"><div class="BMap_omInnFrame" style="bottom: auto; right: auto; top: 5px; left: 5px; width: 142px; height: 142px;"><div class="BMap_omMapContainer"></div><div class="BMap_omViewMv" style="cursor: grab;"><div class="BMap_omViewInnFrame"><div></div></div></div></div></div><div class="BMap_omBtn BMap_omBtnClosed" style="bottom: 0px; right: 0px; top: auto; left: auto;"></div></div><div unselectable="on" class=" BMap_cpyCtrl BMap_noprint anchorBL" style="cursor: default; white-space: nowrap; -moz-user-select: none; color: black; background: none repeat scroll 0% 0% transparent; font: 11px/15px arial,simsun,sans-serif; bottom: 2px; right: auto; top: auto; left: 4px; position: absolute; z-index: 10;"><span _cid="1" style="display: inline;"><span style="font-size:11px">&copy; 2014 Baidu&nbsp;- Data &copy; <a style="display:inline;" href="http://www.navinfo.com/" target="_blank">NavInfo</a> &amp; <a style="display:inline;" href="http://www.cennavi.com.cn/" target="_blank">CenNavi</a> &amp; <a style="display:inline;" href="http://www.365ditu.com/" target="_blank">道道通</a></span></span></div></div>
        </div><!--/#baiduMap-->
</div>
<!------------------------------------- end ----------------------------------------->
<!-- <script type="text/javascript" src="style/js/tinymce.min.js"></script>
<script>
$(function(){

	/*textarea 编辑器*/
	tinymce.init({
	    selector: "textarea.tinymce",
	    // width: 100,
	    height: 225,
		language: "zh_CN",
		content_css: ctx + "/js/tinymce4/content.css",
		plugins: "contextmenu autolink code paste searchreplace",
	    contextmenu: "copy cut paste",
	    // paste_word_valid_elements: "",
	    paste_as_text: true,
	    // paste_webkit_styles: "color",//all | none
	    // paste_retain_style_properties: "font-size",//
	    menubar: false,
	    statusbar: false,
	    toolbar: [
	    	"undo redo | bold italic underline strikethrough | bullist numlist | alignleft aligncenter alignright | removeformat | code"
	    ],
	    save_enablewhendirty: function(e) {
	        console.log('dirty',e);
	    },
	    save_onsavecallback: function(e){
	        console.log('save',e);
	    },
	    setup: function (editor) {
	        editor.on('keyup', function (e) {
	        	tinyMCE.triggerSave();
	        	var editorContent = tinyMCE.get(editor.id).getContent();
			    if(editorContent.length > 20){
					$("#" + editor.id).valid();
			    }
	        });
	    }
	});
});
</script> -->

<!-- old -->
<script src="style/js/jquery.tinymce.js" type="text/javascript"></script>
<script>
$(function(){
		
	/***********************************************
	** textarea 编辑器
	*/
	$('textarea.tinymce').tinymce({
		// Location of TinyMCE script
		script_url : ctx+'/js/tinymce/jscripts/tiny_mce/tiny_mce.js',

		// General options
		theme : "advanced",
		language : "zh-cn",
		plugins : "paste,autolink,lists,style,layer,save,advhr,advimage,advlink,iespell,inlinepopups,preview,media,searchreplace,contextmenu,fullscreen,noneditable,visualchars,nonbreaking",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,|,justifyleft,justifycenter,justifyright,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,|,hr,fullscreen,image",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "none",//定义输入框下方是否显示状态栏，默认不显示
		theme_advanced_resizing : false,
		paste_auto_cleanup_on_paste: true,
		paste_as_text: true,
		auto_cleanup_word:true,
		paste_remove_styles: true,
		contextmenu: "copy cut paste",
        force_br_newlines: true,
        force_p_newlines: false,
        apply_source_formatting: false,
        remove_linebreaks: false,
        convert_newlines_to_brs: true,

		// Example content CSS (should be your site CSS)
		content_css : ctx+"/js/tinymce/examples/css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		},
		onchange_callback: function(editor){
	        tinyMCE.triggerSave();
	        var editorContent = tinyMCE.get(editor.id).getContent();
		    if(editorContent.length &gt; 20){
				$("#" + editor.id).valid();
		    }
	    } 
	});
	
	$('#workAddress').focus(function(){
		$('#beError').hide();
	});
});
</script>
<!-- end old -->

<script src="style/js/jobs.min.js" type="text/javascript"></script>
<script src="http://api.map.baidu.com/api?v=2.0&amp;ak=A2c1a1ff1fe0750e3290660295aac602" type="text/javascript"></script><script src="http://api.map.baidu.com/getscript?v=2.0&amp;ak=A2c1a1ff1fe0750e3290660295aac602&amp;services=&amp;t=20140617153133" type="text/javascript"></script>
<script type="text/javascript">
//百度地图API功能
var map = new BMap.Map("allmap");
//控件添加
map.addControl(new BMap.NavigationControl());
map.addControl(new BMap.MapTypeControl());
map.addControl(new BMap.ScaleControl());
map.addControl(new BMap.OverviewMapControl());

var point = new BMap.Point(116.331398,39.897445);//初始化坐标点
map.centerAndZoom(point, 15);
/* map.centerAndZoom(, 15); */
map.enableScrollWheelZoom(true);//允许缩放
var gc = new BMap.Geocoder();//地址定位
var local = new BMap.LocalSearch(map, {
	  renderOptions:{map: map}
});
function showInfo(e){
	 map.clearOverlays();//清除所有覆盖物
	 //map.centerAndZoom(new BMap.Point(olng, olat), 11);//重定义中心点
	 //alert(e.point.lng + ", " + e.point.lat);
	 var marker = new BMap.Marker(new BMap.Point(e.point.lng, e.point.lat));  // 创建标注
	 marker.addEventListener("mouseup",function(em){//覆盖物监听事件--释放鼠标时定位覆盖物位置
		var pt = em.point;//移动后重新定位
		gc.getLocation(pt, function(rs){
		   var addComp = rs.addressComponents;
		   var label = new BMap.Label("我的坐标："+em.point.lng + ", " + em.point.lat+"  我的地址："+addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber,{offset:new BMap.Size(20,-10)});
			// marker.setLabel(label);//新坐标-新地址
			 if(rs){
	 				 var sContent =
					"&lt;h4 style='margin:0 0 5px 0;padding:0.2em 0'&gt;"+addComp.province+"&lt;/h4&gt;" + 
					"&lt;p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'&gt;"+rs.address+"&lt;/p&gt;" + 
					"&lt;/div&gt;";
				 	var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
				 	//图片加载完毕重绘infowindow
			 		marker.openInfoWindow(infoWindow);
	 			}
			
			  $('#lat').val(em.point.lat);
			  $('#lng').val(em.point.lng);
		});
	});
	marker.enableDragging();    //可拖拽
	map.addOverlay(marker);     // 将标注添加到地图中
	
	 /////////////////////地址定位
	 var pt = e.point;
	gc.getLocation(pt, function(rs){
	    var addComp = rs.addressComponents;
	    var label = new BMap.Label("我的坐标："+e.point.lng + ", " + e.point.lat+"  我的地址："+addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber,{offset:new BMap.Size(20,-10)});
	 			//marker.setLabel(label);
	 			if(rs){
	 				 var sContent =
					"&lt;h4 style='margin:0 0 5px 0;padding:0.2em 0'&gt;"+addComp.province+"&lt;/h4&gt;" + 
					"&lt;p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'&gt;"+rs.address+"&lt;/p&gt;" + 
					"&lt;/div&gt;";
				 	var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
				 	//图片加载完毕重绘infowindow
			 		marker.openInfoWindow(infoWindow);
	 			}  
	 			
	 		$('#lat').val(e.point.lat);
			$('#lng').val(e.point.lng);
	});
	
	//////////////////////重置中心点
	 olng = e.point.lng;
	 olat = e.point.lat;
}
map.addEventListener("click", showInfo);//地图点击事件

$(function(){
	$('#mapPreview').bind('click',function(){
		$.colorbox({inline:true, href:"#baiduMap",title:"公司地址"});
		var address = $('#positionAddress').val();
		var city = $('#workAddress').val();
	    map.setCurrentCity(city);
	    map.setZoom(15);
		gc.getPoint(address, function(point){
		  if (point) { 
		    map.centerAndZoom(point, 15);
			map.setZoom(15);
	    	map.setCenter(point);
		   	local.search(address);
		  }
		}, city); 
		/* map.addEventListener("tilesloaded",function(){
	    	map.setZoom(15);
	    }); */
	});
});
</script>

			<div class="clear"></div>
			<input type="hidden" value="c29d4a7c35314180bf3be5eb3f00048f" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<div id="footer">
		<div class="wrapper">
			<a rel="nofollow" target="_blank" href="about.html">联系我们</a>
		    <a target="_blank" href="http://www.lagou.com/af/zhaopin.html">互联网公司导航</a>
		    <a rel="nofollow" target="_blank" href="http://e.weibo.com/lagou720">拉勾微博</a>
		    <a rel="nofollow" href="javascript:void(0)" class="footer_qr">拉勾微信<i></i></a>
			<div class="copyright">&copy;2013-2014 Lagou <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP备14023790号-2</a></div>
		</div>
	</div>

<script src="style/js/core.min.js" type="text/javascript"></script>
<script src="style/js/popup.min.js" type="text/javascript"></script>

<!--  -->


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>