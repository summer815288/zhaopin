<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>

        .ji{
            background-color: lavenderblush;
            display: inline-block;
            height:40px;
            line-height: 30px;
            margin-top: 20px;
            padding-left: 15px;;
            width:97%;
            cursor: pointer;
            text-align: left;
        }


        .tab table tr td{
            border-bottom:1px #CCCCCC dashed;
            width:500px;
            height:30px;
            line-height: 30px;
            margin:10px;
            bgcolor:#FFFFFF;
            align:left;
        }


    </style>
    <script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
<div id="container">
    <?php  include('left.php')?>
    <!-- end .sidebar -->
    <div class="content">
        <dl class="company_center_content">
            <dt><h1><em></em>创建简历</h1></dt>

            <dd style="padding:30px 0px;width: 100%">
                <div class="ji"><h2><span style="color:red">*</span>基本信息</h2></div>
                <div class="con">
                    <table class="btm" style="width:100%" >
                        <tr>
                            <td colspan="3" >简历名称：<b><?php echo $info['title'] ?></b></td>
                        </tr>
                        <tr>

                            <td>姓名：<?php  echo  $info['fullname']?></td>
                            <td>出生年份：<?php echo $info['birthdate']?></td>
                            <td rowspan="7" style="border:1px solid #ccc;padding:3px;width:20%;bgcolor:#FFFFFF;">
                                <?=Html::beginForm(['person/img'],'post',['enctype'=>'multipart/form-data'])?>
                                <input type="hidden" value="<?php echo $info['id']  ?>" name="id">
                                <input type="hidden" value="<?php echo $info['photo']  ?>" name="photo">
                                <input type="file" name="img" id="img" >

                                <?php  if($info['photo']==0){?>
                                    <img src="images/1.png"  style="width:80px;height:auto;" class="imgs" >
                                <?php  }else{?>
                                    <img src="uploads/<?php  echo $info['photo_img']?>" style="width:80px;height:auto;" class="imgs">
                                <?php  }?>
                                <br>

                                <input type="submit" value="上传">
                                <?=Html::endForm()?>
                            </td>
                        </tr>
                        <tr>
                            <td>性别：<?php  echo $info['sex_cn']?></td>
                            <td>现居住地：<?php  echo $info['residence'] ?></td>

                        </tr>
                        <tr>
                            <td>最高学历：<?php  echo  $info['education_cn']?></td>
                            <td>专业：<?php  echo $info['major_cn']?></td>

                        </tr>
                        <tr>
                            <td>工作经验：<?php echo $info['experience_cn']?></td>
                            <td>婚姻状况：<?php echo $info['marriage_cn']?></td>

                        </tr>
                        <tr>
                            <td>身高：<?php  echo $info['height']?></td>
                            <td>籍贯：<?php  echo $info['householdaddress']?></td>

                        </tr>
                        <tr>
                            <td>手机：<?php  echo $info['telephone']?></td>
                            <td>邮箱：<?php  echo $info['email']?></td>

                        </tr>

                    </table>

                </div>

                <div class="ji"><h2><span style="color:red">*</span>求职意向</h2></div>
                <div class="con">
                    <table class="btm" style="width:100%" >
                        <tr style="line-height: 40px;">
                            <td  >
                                求职状态：<?php echo $info['current_cn'] ?><br>
                                工作性质：<?php  echo  $info['nature_cn']?><br>
                                期望行业：<?php echo $info['trade_cn']?><br>
                                期望职位：<?php echo $info['intention_jobs']?><br>
                                工作地区：<?php echo $info['district_cn']?><br>
                                期望薪资：<?php echo $info['wage_cn']?><br>

                            </td>
                        </tr>
                    </table>
                </div>
<!--                工作经历-->

                <div class="ji"><h2><span style="color:red">*</span>工作经历</h2></div>
                <div class="con" >
                    <table class="btms" style="width:100%" >
                        <tr style="line-height: 40px;margin: 5px;">
                            <td  style="text-align: center;" >
                                教育经历最能体现您的学历和专业能力，快来完成它吸引企业和HR的青睐吧！<br>
                                <input type="button" value="+添加经历" style="width:100px;height:30px;background:blue;color:white;" class="add-work" >
                            </td>
                        </tr>
                    </table>
                </div>

<!--                语言能力-->
                <div class="ji"><h2><span style="color:red">*</span>语言能力</h2></div>
                <div class="con" >
                    <table class="btms" style="width:100%" >
                        <tr style="line-height: 40px;margin: 5px;">
                            <td  style="text-align: center;" >
                                语言能力是你勇于上进的最好的体现，快来说说令您难忘的语言能力吧！<br>
                                <input type="button" value="+添加语言" style="width:100px;height:30px;background:blue;color:white;" class="add-language" >
                            </td>
                        </tr>
                    </table>
                </div>
<!--                获得证书-->
                <div class="ji"><h2><span style="color:red">*</span>获得证书</h2></div>
                <div class="con" >
                    <table class="btms" style="width:100%" >
                        <tr style="line-height: 40px;margin: 5px;">
                            <td  style="text-align: center;" >
                                证书是你勇于上进的最好的体现，快来说说令您难忘的获得的证书吧！<br>
                                <input type="button" value="+添加证书" style="width:100px;height:30px;background:blue;color:white;" class="add-certificate" >
                            </td>
                        </tr>
                    </table>
                </div>
<!--        自我描述-->
                <div class="ji"><h2><span style="color:red">*</span>自我描述</h2></div>
                <div class="con" >
                    <table class="btms" style="width:100%" >
                        <tr style="line-height: 40px;margin: 5px;">
                            <td  style="text-align: center;" >
                                客观全面的自我评价更容易获得企业的好感，快来完善以获得HR的亲睐！<br>
                                <input type="button" value="+自我描述" style="width:100px;height:30px;background:blue;color:white;" class="add-specialty" >
                            </td>
                        </tr>
                    </table>
                </div>
<!--                特长标签-->
                <div class="ji"><h2><span style="color:red">*</span>特长标签</h2></div>
                <div class="con" >
                    <table class="btms" style="width:100%" >
                        <tr style="line-height: 40px;margin: 5px;">
                            <td  style="text-align: left;" >
                               特长标签：
                                <input type="button" value="添加+" style="width:100px;height:30px;background:#d3d3d3;color:blue;" class="add-tag" >
                            </td>
                        </tr>
                    </table>
                </div>

<!--                附件上传-->
                <div class="ji"><h2><span style="color:red">*</span>附件上传</h2></div>
                <div class="con" >
                    <table class="btms" style="width:100%" >
                        <tr style="line-height: 40px;margin: 5px;">
                            <td  style="text-align: left;width:40%" >
                                附件上传：
                                <input type="button" value="+上传" style="width:100px;height:30px;background:#d3d3d3;color:blue;" class="add-tag" >
                            </td>
                            <td style="width:45%">
                                <span  style="color:gray;font-size:12px;">最多上传4张，每张最大800KB,支持jpg/gif/bmp/png格式建议上传清晰自然生活照，或者您的专业代表作品。</span>
                            </td>
                            <td style="width:15%"></td>
                        </tr>
                    </table>
                </div>

<!--                word简历-->
                <div class="ji"><h2><span style="color:red">*</span>word简历</h2></div>
                <div class="con" >
                    <table class="btms" style="width:100%" >
                        <tr style="line-height: 40px;margin: 5px;">
                            <td  style="text-align: left;width:40%" >
                                附件简历：
                                <input type="button" value="+上传" style="width:100px;height:30px;background:#d3d3d3;color:blue;" class="add-tag" >
                            </td>
                            <td style="width:45%">
                                <span  style="color:gray;font-size:12px;">请上传.DOC格式的附件(文件大小2M以内)</span>
                            </td>
                            <td style="width:15%"></td>
                        </tr>
                    </table>
                </div>

<!--出现-->
                <?=Html::beginForm(['person/aeducation'],'post')?>
                <table  class="aeducation" style="display: none;" >
                    <tr>
                        <input type="hidden" value="<?php  echo $info['id'];?>" name="pid">

                        <td><span class="redstar">*</span></td>
                        <td width="85"><span >学校名称：</span></td>
                        <td >
                            <input type="text"  name="school"   style="font-size: 16px;width:230px;color:gray;" >
                        </td>
                    </tr>
                    <tr>
                        <td><span class="redstar">*</span></td>
                        <td width="85"><span >专业名称：</span></td>
                        <td >
                            <input type="text"  name="speciality"   style="font-size: 16px;width:230px;color:gray;" >
                        </td>
                    </tr>
                    <tr>
                        <td><span class="redstar">*</span></td>
                        <td width="85"><span >学历：</span></td>
                        <td >
                            <input type="hidden" name="education_cn"   class="ed_cn">
                            <select name="education"  style="font-size:14px;width:255px;height:40px;color:gray;" >
                                <option value="0">请选择</option>
                                <?php foreach($education as $v){ ?>
                                    <option value="<?php echo $v['c_id']?>" class="ed"><?php echo $v['c_name'] ?></option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="redstar">*</span></td>
                        <td width="85"><span >就读时间：</span></td>
                        <td >
                            <!--                                年-->
                            <input type="text" value="年份" name="startyear" class="startyear" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;" readonly >
                            <div style="position: absolute;z-index:3;width:300px;height:150px;background:white;border:1px black solid;display: none;" class="tan-year" >
                                <table >
                                    <tr>
                                        <td width="50px"><img src="images/3.png" style="cursor: pointer" class="prev"></td>
                                        <td  width="240px" style="padding-top:5px;display:inline;" index="1"  class="year">
                                            <?php $i1=date('Y',time());
                                            for($i=$i1;$i>$i1-20;$i--){?>
                                                <a href="javascript:;"  style="padding:3px;cursor: pointer;" class="yea" ><?php  echo $i;?></a>
                                            <?php  }?>
                                        </td>
                                        <td  width="240px" style="padding-top:5px;display:none;" index="2"    class="year">
                                            <?php $i2=date('Y',time())-20;
                                            for($i=$i2;$i>$i2-20;$i--){?>
                                                <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yea"><?php  echo $i;?></a>
                                            <?php  }?>
                                        </td>
                                        <td  width="240px" style="padding-top:5px;display: none;" index="3"   class="year" >
                                            <?php $i3=date('Y',time())-40;
                                            for($i=$i3;$i>$i3-20;$i--){?>
                                                <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yea"><?php  echo $i;?></a>
                                            <?php  }?>
                                        </td>
                                        <td   width="30px"><img src="images/4.png" class="next" style="display:none;cursor: pointer;"></td>
                                    </tr>
                                </table>
                            </div>

                            <!--                                月-->

                            <input   type="text" value="9月" name="startmonth" class="startmonth" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;"  readonly>
                            <div style="margin-left: 103px;z-index:2;position: absolute;width:130px;height:100px;background:white;border:1px black solid;display:none;" class="tan-month" >
                                <table >
                                    <tr>
                                        <td  style="padding-top:5px;">
                                            <?php $i=12;
                                            for($i=12;$i>0;$i--){?>
                                                <a href="javascript:;"  style="padding:3px;cursor:pointer;width:20px;height: 20px;display: inline-table"  class="mon"  ><?php  echo $i;?></a>
                                            <?php  }?>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                            至

                            <!--- 年---->
                            <div style="display:inline;" class="end">
                                <input type="text" value="年份" name="endyear" class="endyear" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;"  readonly>
                                <div style="position: absolute;z-index:3;margin-left:225px;width:300px;height:150px;background:white;border:1px black solid;display: none;" class="tan-years" >
                                    <table >
                                        <tr>
                                            <td width="50px"><img src="images/3.png" style="cursor: pointer" class="prevs"></td>
                                            <td  width="240px" style="padding-top:5px;display:inline;" index="1"  class="years">
                                                <?php $i1=date('Y',time());
                                                for($i=$i1;$i>$i1-20;$i--){?>
                                                    <a href="javascript:;"  style="padding:3px;cursor: pointer;" class="yeas" ><?php  echo $i;?></a>
                                                <?php  }?>
                                            </td>
                                            <td  width="240px" style="padding-top:5px;display:none;" index="2"    class="years">
                                                <?php $i2=date('Y',time())-20;
                                                for($i=$i2;$i>$i2-20;$i--){?>
                                                    <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yeas"><?php  echo $i;?></a>
                                                <?php  }?>
                                            </td>
                                            <td  width="240px" style="padding-top:5px;display: none;" index="3"   class="years" >
                                                <?php $i3=date('Y',time())-40;
                                                for($i=$i3;$i>$i3-20;$i--){?>
                                                    <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yeas"><?php  echo $i;?></a>
                                                <?php  }?>
                                            </td>
                                            <td   width="30px"><img src="images/4.png" class="nexts" style="display:none;cursor: pointer;"></td>
                                        </tr>
                                    </table>
                                </div>

                                <!-- 月-->

                                <input   type="text" value="7月" name="endmonth" class="endmonth" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;"  readonly>
                                <div style="margin-left:328px;z-index:2;position: absolute;width:130px;height:100px;background:white;border:1px black solid;display:none;" class="tan-months" >
                                    <table >
                                        <tr>
                                            <td  style="padding-top:5px;">
                                                <?php $i=12;
                                                for($i=12;$i>0;$i--){?>
                                                    <a href="javascript:;"  style="padding:3px;cursor:pointer;width:20px;height: 20px;display: inline-table"  class="mons"  ><?php  echo $i;?></a>
                                                <?php  }?>
                                            </td>
                                        </tr>
                                    </table>

                                </div>

                            </div>
                            <!-- 至今-->
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;
                            <input type="checkbox" name="todate" class="todate" value="1"  >至今<br>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td width="85"></td>
                        <td>
                            <input type="submit" value="保存" style="font-size: 16px;width:100px;height:40px;color:white;cursor: pointer;border:1px solid black;background:lawngreen;" class="bao">&nbsp;&nbsp;&nbsp;
                            <input type="button" value="取消" style="font-size: 16px;width:100px;height:40px;color:white;cursor: pointer;border:1px solid black;background:gray;"  class="qu">

                        </td>
                    </tr>
                </table>
                <?=Html::endForm()?>

<!--出现-->



                <!--教育经历         -->
                <div class="ji"><h2 style="display: inline-block"><span style="color:red">*</span>教育经历</h2></div>
                <div class="con" >
                    <table class="btms" style="width:100%" >
                        <?php  if(empty($edu)||!isset($edu)){?>
                            <tr style="line-height: 40px;margin: 5px;">
                                <td  style="text-align: center;" >
                                    教育经历最能体现您的学历和专业能力，快来完成它吸引企业和HR的青睐吧！<br>
                                    <input type="button" value="+添加经历" style="width:100px;height:30px;background:blue;color:white;" class="add-education" >
                                </td>
                            </tr>
                        <?php }else{?>
                        <div style="display: inline-block;float:right;padding:10px;"><a style="background:blue;width:30px;color:white;" class="edu_add">+添加</a></div>
                            <?php foreach($edu as $kk=>$vv){  ?>
                                <tr id="<?php  echo $vv['id']?>"  pid="<?php  echo $vv['pid']?>">
                                    <td>
                                        <?php  echo $vv['startyear']?>年<?php  echo $vv['startmonth']?>月-
                                        <?php if($vv['todate']==1){ ?>
                                        <?php echo date('Y-m',time()) ?>
                                            <?php }else{  ?>
                                            <?php  echo $vv['endyear']?>年<?php  echo $vv['endmonth']?>月
                                        <?php }?>
                                    </td>
                                    <td><?php  echo $vv['school']?></td>
                                    <td><?php  echo $vv['speciality']?></td>
                                    <td><?php  echo $vv['education_cn']?></td>
                                    <td >
                                        <a href="<?php echo Url::toRoute(['person/resume_crea','pid'=>$vv['pid'],'id'=>$vv['id']]) ?>" class="edu_update"><img src="images/5.png" ></a>
                                    </td>
                                    <td>  <a href="javascript:;" class="edu_del"><img src="images/6.png" alt=""/></a></td>

                                </tr>
                            <?php }?>

                            <div class="adds" >

                                    <?=Html::beginForm(['person/aeducation'],'post')?>
                                    <table  class="aeducation" style="display: none;" >
                                        <tr>
                                            <input type="hidden" value="<?php  echo $info['id'];?>" name="pid">

                                            <td><span class="redstar">*</span></td>
                                            <td width="85"><span >学校名称：</span></td>
                                            <td >
                                                <input type="text"  name="school"   style="font-size: 16px;width:230px;color:gray;" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="redstar">*</span></td>
                                            <td width="85"><span >专业名称：</span></td>
                                            <td >
                                                <input type="text"  name="speciality"   style="font-size: 16px;width:230px;color:gray;" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="redstar">*</span></td>
                                            <td width="85"><span >学历：</span></td>
                                            <td >
                                                <input type="hidden" name="education_cn"   class="ed_cn">
                                                <select name="education"  style="font-size:14px;width:255px;height:40px;color:gray;" >
                                                    <option value="0">请选择</option>
                                                    <?php foreach($education as $v){ ?>
                                                        <option value="<?php echo $v['c_id']?>" class="ed"><?php echo $v['c_name'] ?></option>
                                                    <?php }?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="redstar">*</span></td>
                                            <td width="85"><span >就读时间：</span></td>
                                            <td >
                                                <!--                                年-->
                                                <input type="text" value="年份" name="startyear" class="startyear" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;" readonly >
                                                <div style="position: absolute;z-index:3;width:300px;height:150px;background:white;border:1px black solid;display: none;" class="tan-year" >
                                                    <table >
                                                        <tr>
                                                            <td width="50px"><img src="images/3.png" style="cursor: pointer" class="prev"></td>
                                                            <td  width="240px" style="padding-top:5px;display:inline;" index="1"  class="year">
                                                                <?php $i1=date('Y',time());
                                                                for($i=$i1;$i>$i1-20;$i--){?>
                                                                    <a href="javascript:;"  style="padding:3px;cursor: pointer;" class="yea" ><?php  echo $i;?></a>
                                                                <?php  }?>
                                                            </td>
                                                            <td  width="240px" style="padding-top:5px;display:none;" index="2"    class="year">
                                                                <?php $i2=date('Y',time())-20;
                                                                for($i=$i2;$i>$i2-20;$i--){?>
                                                                    <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yea"><?php  echo $i;?></a>
                                                                <?php  }?>
                                                            </td>
                                                            <td  width="240px" style="padding-top:5px;display: none;" index="3"   class="year" >
                                                                <?php $i3=date('Y',time())-40;
                                                                for($i=$i3;$i>$i3-20;$i--){?>
                                                                    <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yea"><?php  echo $i;?></a>
                                                                <?php  }?>
                                                            </td>
                                                            <td   width="30px"><img src="images/4.png" class="next" style="display:none;cursor: pointer;"></td>
                                                        </tr>
                                                    </table>
                                                </div>

                                                <!--                                月-->

                                                <input   type="text" value="9月" name="startmonth" class="startmonth" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;"  readonly>
                                                <div style="margin-left: 103px;z-index:2;position: absolute;width:130px;height:100px;background:white;border:1px black solid;display:none;" class="tan-month" >
                                                    <table >
                                                        <tr>
                                                            <td  style="padding-top:5px;">
                                                                <?php $i=12;
                                                                for($i=12;$i>0;$i--){?>
                                                                    <a href="javascript:;"  style="padding:3px;cursor:pointer;width:20px;height: 20px;display: inline-table"  class="mon"  ><?php  echo $i;?></a>
                                                                <?php  }?>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </div>
                                                至

                                                <!--- 年---->
                                                <div style="display:inline;" class="end">
                                                    <input type="text" value="年份" name="endyear" class="endyear" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;"  readonly>
                                                    <div style="position: absolute;z-index:3;margin-left:225px;width:300px;height:150px;background:white;border:1px black solid;display: none;" class="tan-years" >
                                                        <table >
                                                            <tr>
                                                                <td width="50px"><img src="images/3.png" style="cursor: pointer" class="prevs"></td>
                                                                <td  width="240px" style="padding-top:5px;display:inline;" index="1"  class="years">
                                                                    <?php $i1=date('Y',time());
                                                                    for($i=$i1;$i>$i1-20;$i--){?>
                                                                        <a href="javascript:;"  style="padding:3px;cursor: pointer;" class="yeas" ><?php  echo $i;?></a>
                                                                    <?php  }?>
                                                                </td>
                                                                <td  width="240px" style="padding-top:5px;display:none;" index="2"    class="years">
                                                                    <?php $i2=date('Y',time())-20;
                                                                    for($i=$i2;$i>$i2-20;$i--){?>
                                                                        <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yeas"><?php  echo $i;?></a>
                                                                    <?php  }?>
                                                                </td>
                                                                <td  width="240px" style="padding-top:5px;display: none;" index="3"   class="years" >
                                                                    <?php $i3=date('Y',time())-40;
                                                                    for($i=$i3;$i>$i3-20;$i--){?>
                                                                        <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yeas"><?php  echo $i;?></a>
                                                                    <?php  }?>
                                                                </td>
                                                                <td   width="30px"><img src="images/4.png" class="nexts" style="display:none;cursor: pointer;"></td>
                                                            </tr>
                                                        </table>
                                                    </div>

                                                    <!-- 月-->

                                                    <input   type="text" value="7月" name="endmonth" class="endmonth" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;"  readonly>
                                                    <div style="margin-left:328px;z-index:2;position: absolute;width:130px;height:100px;background:white;border:1px black solid;display:none;" class="tan-months" >
                                                        <table >
                                                            <tr>
                                                                <td  style="padding-top:5px;">
                                                                    <?php $i=12;
                                                                    for($i=12;$i>0;$i--){?>
                                                                        <a href="javascript:;"  style="padding:3px;cursor:pointer;width:20px;height: 20px;display: inline-table"  class="mons"  ><?php  echo $i;?></a>
                                                                    <?php  }?>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                    </div>

                                                </div>
                                                <!-- 至今-->
                                                &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                <input type="checkbox" name="todate" class="todate" value="1"  >至今<br>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td width="85"></td>
                                            <td>
                                                <input type="submit" value="保存" style="font-size: 16px;width:100px;height:40px;color:white;cursor: pointer;border:1px solid black;background:lawngreen;" class="bao">&nbsp;&nbsp;&nbsp;
                                                <input type="button" value="取消" style="font-size: 16px;width:100px;height:40px;color:white;cursor: pointer;border:1px solid black;background:gray;"  class="qu">

                                            </td>
                                        </tr>
                                    </table>
                                    <?=Html::endForm()?>


                                    <?=Html::beginForm(['person/aeducation_update'],'post')?>
                                    <table  class="aeducations"  id="<?php echo @$_GET['id'] ?>" style="display:block;"  >
                                        <?php foreach($edu as $kk=>$vv){  ?>
                                            <?php  if($vv['id']==@$_GET['id']){?>
                                                <tr>
                                                    <input type="hidden" value="<?php  echo $_GET['id'];?>" name="id">
                                                    <input type="hidden" value="<?php  echo $vv['pid'];?>" name="pid">

                                                    <td><span class="redstar">*</span></td>
                                                    <td width="85"><span >学校名称：</span></td>
                                                    <td >
                                                        <input type="text"  name="school"  value="<?php echo $vv['school'] ?>"    style="font-size: 16px;width:230px;color:gray;" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="redstar">*</span></td>
                                                    <td width="85"><span >专业名称：</span></td>
                                                    <td >
                                                        <input type="text"  name="speciality"  value="<?php echo $vv['speciality'] ?>"   style="font-size: 16px;width:230px;color:gray;" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="redstar">*</span></td>
                                                    <td width="85"><span >学历：</span></td>
                                                    <td >
                                                        <input type="hidden" name="education_cn"   class="ed_cn">
                                                        <select name="education"    style="font-size:14px;width:255px;height:40px;color:gray;" >
                                                            <option value="0">请选择</option>
                                                            <?php foreach($education as $v){ ?>
                                                                <?php if($vv['education']==$v['c_id']){ ?>
                                                                    <option value="<?php echo $v['c_id']?>"  selected class="ed"><?php echo $v['c_name'] ?></option>
                                                                <?php }else{ ?>
                                                                    <option value="<?php echo $v['c_id']?>"  class="ed"><?php echo $v['c_name'] ?></option>

                                                                <?php }?>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><span class="redstar">*</span></td>
                                                    <td width="85"><span >就读时间：</span></td>
                                                    <td >
                                                        <!--                                年-->
                                                        <input type="text"  name="startyear"  value="<?php echo $vv['startyear'] ?>"    class="startyear" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;" readonly >
                                                        <div style="position: absolute;z-index:3;width:300px;height:150px;background:white;border:1px black solid;display: none;" class="tan-year" >
                                                            <table >
                                                                <tr>
                                                                    <td width="50px"><img src="images/3.png" style="cursor: pointer" class="prev"></td>
                                                                    <td  width="240px" style="padding-top:5px;display:inline;" index="1"  class="year" >
                                                                        <?php $i1=date('Y',time());
                                                                        for($i=$i1;$i>$i1-20;$i--){?>
                                                                            <a href="javascript:;"  style="padding:3px;cursor: pointer;" class="yea" ><?php  echo $i;?></a>
                                                                        <?php  }?>
                                                                    </td>
                                                                    <td  width="240px" style="padding-top:5px;display:none;" index="2"    class="year">
                                                                        <?php $i2=date('Y',time())-20;
                                                                        for($i=$i2;$i>$i2-20;$i--){?>
                                                                            <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yea"><?php  echo $i;?></a>
                                                                        <?php  }?>
                                                                    </td>
                                                                    <td  width="240px" style="padding-top:5px;display: none;" index="3"   class="year" >
                                                                        <?php $i3=date('Y',time())-40;
                                                                        for($i=$i3;$i>$i3-20;$i--){?>
                                                                            <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yea"><?php  echo $i;?></a>
                                                                        <?php  }?>
                                                                    </td>
                                                                    <td   width="30px"><img src="images/4.png" class="next" style="display:none;cursor: pointer;"></td>
                                                                </tr>
                                                            </table>
                                                        </div>

                                                        <!--                                月-->

                                                        <input   type="text" value="<?php echo $vv['startmonth'] ?>"  name="startmonth" class="startmonth" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;"  readonly>
                                                        <div style="margin-left: 103px;z-index:2;position: absolute;width:130px;height:100px;background:white;border:1px black solid;display:none;" class="tan-month" >
                                                            <table >
                                                                <tr>
                                                                    <td  style="padding-top:5px;">
                                                                        <?php $i=12;
                                                                        for($i=12;$i>0;$i--){?>
                                                                            <a href="javascript:;"  style="padding:3px;cursor:pointer;width:20px;height: 20px;display: inline-table"  class="mon"  ><?php  echo $i;?></a>
                                                                        <?php  }?>
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </div>
                                                        至

                                                        <?php   if($vv['todate']!=1){?>

                                                        <!--- 年---->
                                                        <div style="display:inline;" class="end">
                                                            <input type="text" value="<?php echo $vv['endyear'] ?>"  name="endyear" class="endyear" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;"  readonly>
                                                            <div style="position: absolute;z-index:3;margin-left:225px;width:300px;height:150px;background:white;border:1px black solid;display: none;" class="tan-years" >
                                                                <table >
                                                                    <tr>
                                                                        <td width="50px"><img src="images/3.png" style="cursor: pointer" class="prevs"></td>
                                                                        <td  width="240px" style="padding-top:5px;display:inline;" index="1"  class="years">
                                                                            <?php $i1=date('Y',time());
                                                                            for($i=$i1;$i>$i1-20;$i--){?>
                                                                                <a href="javascript:;"  style="padding:3px;cursor: pointer;" class="yeas" ><?php  echo $i;?></a>
                                                                            <?php  }?>
                                                                        </td>
                                                                        <td  width="240px" style="padding-top:5px;display:none;" index="2"    class="years">
                                                                            <?php $i2=date('Y',time())-20;
                                                                            for($i=$i2;$i>$i2-20;$i--){?>
                                                                                <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yeas"><?php  echo $i;?></a>
                                                                            <?php  }?>
                                                                        </td>
                                                                        <td  width="240px" style="padding-top:5px;display: none;" index="3"   class="years" >
                                                                            <?php $i3=date('Y',time())-40;
                                                                            for($i=$i3;$i>$i3-20;$i--){?>
                                                                                <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yeas"><?php  echo $i;?></a>
                                                                            <?php  }?>
                                                                        </td>
                                                                        <td   width="30px"><img src="images/4.png" class="nexts" style="display:none;cursor: pointer;"></td>
                                                                    </tr>
                                                                </table>
                                                            </div>

                                                            <!-- 月-->

                                                            <input   type="text" value="<?php echo $vv['endmonth'] ?>"  name="endmonth" class="endmonth" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;"  readonly>
                                                            <div style="margin-left:328px;z-index:2;position: absolute;width:130px;height:100px;background:white;border:1px black solid;display:none;" class="tan-months" >
                                                                <table >
                                                                    <tr>
                                                                        <td  style="padding-top:5px;">
                                                                            <?php $i=12;
                                                                            for($i=12;$i>0;$i--){?>
                                                                                <a href="javascript:;"  style="padding:3px;cursor:pointer;width:20px;height: 20px;display: inline-table"  class="mons"  ><?php  echo $i;?></a>
                                                                            <?php  }?>
                                                                        </td>
                                                                    </tr>
                                                                </table>

                                                            </div>

                                                        </div>
                                                        <!-- 至今-->
                                                        &nbsp;  &nbsp;  &nbsp;  &nbsp;

                                                            <input type="checkbox" name="todate" class="todate" value="1"  >至今<br>
                                                            <br>
                                                        <?php }else{?>
                                                            <!--- 年---->
                                                            <div style="display:inline;" class="end">
                                                                <input type="text" value="年份"  name="endyear" class="endyear" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;"  readonly>
                                                                <div style="position: absolute;z-index:3;margin-left:225px;width:300px;height:150px;background:white;border:1px black solid;display: none;" class="tan-years" >
                                                                    <table >
                                                                        <tr>
                                                                            <td width="50px"><img src="images/3.png" style="cursor: pointer" class="prevs"></td>
                                                                            <td  width="240px" style="padding-top:5px;display:inline;" index="1"  class="years">
                                                                                <?php $i1=date('Y',time());
                                                                                for($i=$i1;$i>$i1-20;$i--){?>
                                                                                    <a href="javascript:;"  style="padding:3px;cursor: pointer;" class="yeas" ><?php  echo $i;?></a>
                                                                                <?php  }?>
                                                                            </td>
                                                                            <td  width="240px" style="padding-top:5px;display:none;" index="2"    class="years">
                                                                                <?php $i2=date('Y',time())-20;
                                                                                for($i=$i2;$i>$i2-20;$i--){?>
                                                                                    <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yeas"><?php  echo $i;?></a>
                                                                                <?php  }?>
                                                                            </td>
                                                                            <td  width="240px" style="padding-top:5px;display: none;" index="3"   class="years" >
                                                                                <?php $i3=date('Y',time())-40;
                                                                                for($i=$i3;$i>$i3-20;$i--){?>
                                                                                    <a href="javascript:;"   style="padding:3px;cursor: pointer;"   class="yeas"><?php  echo $i;?></a>
                                                                                <?php  }?>
                                                                            </td>
                                                                            <td   width="30px"><img src="images/4.png" class="nexts" style="display:none;cursor: pointer;"></td>
                                                                        </tr>
                                                                    </table>
                                                                </div>

                                                                <!-- 月-->

                                                                <input   type="text" value="7月"  name="endmonth" class="endmonth" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer;border:1px solid black;"  readonly>
                                                                <div style="margin-left:328px;z-index:2;position: absolute;width:130px;height:100px;background:white;border:1px black solid;display:none;" class="tan-months" >
                                                                    <table >
                                                                        <tr>
                                                                            <td  style="padding-top:5px;">
                                                                                <?php $i=12;
                                                                                for($i=12;$i>0;$i--){?>
                                                                                    <a href="javascript:;"  style="padding:3px;cursor:pointer;width:20px;height: 20px;display: inline-table"  class="mons"  ><?php  echo $i;?></a>
                                                                                <?php  }?>
                                                                            </td>
                                                                        </tr>
                                                                    </table>

                                                                </div>

                                                            </div>
                                                            <!-- 至今-->
                                                            &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                            <input type="checkbox" name="todate" class="todate" value="1" checked >至今<br>

                                                        <?php }?>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td width="85"></td>
                                                    <td>
                                                        <input type="submit" value="保存" style="font-size: 16px;width:100px;height:40px;color:white;cursor: pointer;border:1px solid black;background:lawngreen;" class="bao">&nbsp;&nbsp;&nbsp;
                                                        <input type="button" value="取消" style="font-size: 16px;width:100px;height:40px;color:white;cursor: pointer;border:1px solid black;background:gray;"  class="qus">

                                                    </td>
                                                </tr>
                                            <?php }?>
                                        <?php  }?>
                                    </table>
                                    <?=Html::endForm()?>
                            </div>
                                <?php  }?>
                    </table>
                    <div class="con" align="center" style="margin-top:20px;">

                        <a href="<?php echo Url::toRoute(['person/resume_finish','id'=>$info['id']]) ?>"><input type="button" value="发布简历" style="width:150px;height:50px;background:#ff8c00;color:white;font-size: 16px;"  ></a>
                    </div>
    </div>



            </dd>
        </dl>
    </div>

<!--    开始-->







    <?php  include('footer.php')?>
</div>
</body>
</html>

<script>

    //学历赋值
    $(document).on('click','.ed',function(){
        var ed_cn=$(this).text();
        $('.ed_cn').val(ed_cn);


    })

    //点击年份的左边
    $(document).on('click','.prev',function(){

       //现在显示的是20条数据，其实是4页的数据也就是1977-2017的数据都需要循环出来，只是显示出来的是20条数据
       //点击上一页的时候
        //首先循环接收到当前的index值，然后在这个值的基础上加1赋值给全局变量，再次判断index值为indexs的显示出来
        var obj=$('.year');
        for(var i=0;i<obj.length;i++){
            if(obj.eq(i).css('display')=="inline"){

                 index=obj.eq(i).attr('index');
                 indexs=parseInt(index)+1;

                $('.next').css('display','inline');
                $('.next').attr('index',indexs);

                 if(indexs==3){
                     $(this).css('display','none');
                 }else{
                      $('.prev').css('display','inline');
                 }

            }

             if(obj.eq(i).attr('index')==indexs){
                   obj.eq(i).css('display','inline');
               }else{
                   obj.eq(i).css('display','none');
               }
        }
   })

    //点击年份的右边
    $(document).on('click','.next',function(){

        var index=$(this).attr('index');
        var indexs=parseInt(index)-1;
        var obj=$('.year');
        $('.prev').css('display','inline');

        if(indexs==1){
            $(this).css('display','none');
        }

            $(this).attr('index',indexs);
            for(var i=0;i<obj.length;i++) {
                if (obj.eq(i).attr('index') == indexs) {
                    obj.eq(i).css('display', 'inline');
                }else{
                    obj.eq(i).css('display', 'none');
                }

        }


    })

    //鼠标滑过时间内容的时候：背景颜色变色；
    $(document).on('mouseenter','.yea',function(){
        $(this).css('background','lightcyan');
    })
    $(document).on('mouseleave','.yea',function(){
        $(this).css('background','white');
    })
    //点击时间内容的时候，把值赋给按钮
    $(document).on('click','.yea',function(){
      var year=$(this).text();
      $('.startyear').val(year);
        $('.tan-year').hide();

    })
    //点击开始时间弹出时间插件
    $(document).on('click','.startyear',function(){
        $('.tan-year').toggle();

    })


    //月

    //鼠标滑过时间内容的时候：背景颜色变色；
    $(document).on('mouseenter','.mon',function(){
        $(this).css('background','lightcyan');
    })
    $(document).on('mouseleave','.mon',function(){
        $(this).css('background','white');
    })
    //点击时间内容的时候，把值赋给按钮
    $(document).on('click','.mon',function(){
        var year=$(this).text();
        $('.startmonth').val(year);
        $('.tan-month').hide();

    })
    //点击开始时间弹出时间插件
    $(document).on('click','.startmonth',function(){
        $('.tan-month').toggle();

    })

    //年22222

    //点击年份的左边
    $(document).on('click','.prevs',function(){

        //现在显示的是20条数据，其实是4页的数据也就是1977-2017的数据都需要循环出来，只是显示出来的是20条数据
        //点击上一页的时候
        //首先循环接收到当前的index值，然后在这个值的基础上加1赋值给全局变量，再次判断index值为indexs的显示出来
        var obj=$('.years');
        for(var i=0;i<obj.length;i++){
            if(obj.eq(i).css('display')=="inline"){

                index=obj.eq(i).attr('index');
                indexs=parseInt(index)+1;

                $('.nexts').css('display','inline');
                $('.nexts').attr('index',indexs);

                if(indexs==3){
                    $(this).css('display','none');
                }else{
                    $('.prev').css('display','inline');
                }

            }

            if(obj.eq(i).attr('index')==indexs){
                obj.eq(i).css('display','inline');
            }else{
                obj.eq(i).css('display','none');
            }
        }
    })

    //点击年份的右边
    $(document).on('click','.nexts',function(){

        var index=$(this).attr('index');
        var indexs=parseInt(index)-1;
        var obj=$('.years');
        $('.prevs').css('display','inline');

        if(indexs==1){
            $(this).css('display','none');
        }

        $(this).attr('index',indexs);
        for(var i=0;i<obj.length;i++) {
            if (obj.eq(i).attr('index') == indexs) {
                obj.eq(i).css('display', 'inline');
            }else{
                obj.eq(i).css('display', 'none');
            }

        }


    })

    //鼠标滑过时间内容的时候：背景颜色变色；
    $(document).on('mouseenter','.yeas',function(){
        $(this).css('background','lightcyan');
    })
    $(document).on('mouseleave','.yeas',function(){
        $(this).css('background','white');
    })
    //点击时间内容的时候，把值赋给按钮
    $(document).on('click','.yeas',function(){
        var year=$(this).text();
        $('.endyear').val(year);
        $('.tan-years').hide();

    })
    //点击开始时间弹出时间插件
    $(document).on('click','.endyear',function(){
        $('.tan-years').toggle();

    })


    //月

    //鼠标滑过时间内容的时候：背景颜色变色；
    $(document).on('mouseenter','.mons',function(){
        $(this).css('background','lightcyan');
    })
    $(document).on('mouseleave','.mons',function(){
        $(this).css('background','white');
    })
    //点击时间内容的时候，把值赋给按钮
    $(document).on('click','.mons',function(){
        var month=$(this).text();
        $('.endmonth').val(month);
        $('.tan-months').hide();

    })
    //点击开始时间弹出时间插件
    $(document).on('click','.endmonth',function(){
        $('.tan-months').toggle();

    })

//接收至今的值  如果至今选中的话，endyear和endmonth
    $(document).on('click','.todate',function(){
        if($(this).prop('checked')==true){
            $('.end').hide();
        }else{
            $('.end').show();
        }

    })


    $(document).on('click','.add-education',function(){

        $('.aeducation').fadeIn('slow');
        $('.btms').fadeOut('slow');

    })

    $(document).on('click','.qu',function(){

        $('.aeducation').fadeOut('slow');
        $('.btms').fadeIn('slow');

    })

    //点击添加显示出添加表单
    $(document).on('click','.edu_add',function(){

        $('.aeducation').toggle();
    })

    //学历修改的收回去  即后退一步
    $(document).on('click','.qus',function(){

       $('.aeducations').toggle();
        history.go(-1);
    })

    //学历修改的删除
    $(document).on('click','.edu_del',function(){
        var id=$(this).parent().parent().attr('id');
        var pid=$(this).parent().parent().attr('pid');
        var obj=$(this);
        $.ajax({
            url:"index.php?r=person/aducation_del",
            type:'post',
            data:{id:id,pid:pid},
            success:function(msg){
               if(msg==1){
                   obj.parent().parent().remove();
               }else{
                   alert('删除失败');
               }
            }
        })

    })

</script>

<script>
    //文件选择了之后进行预览
    $(document).on('change','#img',function(){
        var url=window.URL.createObjectURL(this.files[0]);
        if(url){

            $('.imgs').attr("src",url);

        }
    })

</script>

