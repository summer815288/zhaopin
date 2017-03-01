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

            <dd style="padding:30px 0px;">
                <div class="ji"><h2><span style="color:red">*</span>基本信息</h2></div>
                <div class="con">
                    <table class="btm" style="width:100%" >
                        <tr>
                            <td colspan="3" >简历名称：<b><?php echo $info['title'] ?></b></td>
                        </tr>
                        <tr>
                            <td>姓名：<?php  echo  $info['fullname']?></td>
                            <td>出生年份：<?php echo $info['birthdate']?></td>
                            <td rowspan="7" style="border:1px solid #ccc;padding:3px;width:80px;bgcolor:#FFFFFF;">
                                <?php  if($info['photo']==0){?>
                                    <img src="images/1.png"  style="width:80px;height:auto;">

                                <?php  }else{?>
                                    <img src="../../public/uploads/<?php  echo $info['photo_img']?>" style="width:80px;height:auto;">
                                <?php  }?>
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
<!--                **************************************************************************-->
                <div class="ji"><h2><span style="color:red">*</span>教育经历</h2></div>
                <div class="con">
                    <table>
                    <tr>
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
                                <input type="hidden" name="education_cn"   >
                                <select name="education"  style="font-size:14px;width:255px;height:40px;color:gray;" >
                                    <option value="0">请选择</option>
                                    <?php foreach($education as $v){ ?>
                                        <option value="<?php echo $v['c_id']?>"><?php echo $v['c_name'] ?></option>
                                    <?php }?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><span class="redstar">*</span></td>
                            <td width="85"><span >就读时间：</span></td>
                            <td >
                                <input type="button" value="年份" name="startyear" class="startyear" style="font-size: 16px;background:#ffffff url('images/2.png') no-repeat right center;width:100px;height:40px;color:gray;cursor: pointer"  >
                                <div style="position: absolute;width:250px;height:150px;background: #ffff00;">
                                    

                                </div>

                            </td>
                        </tr>


                    </table>
                    <table class="btm" style="width:100%" >
                        <tr style="line-height: 40px;margin: 5px;">
                            <td  style="text-align: center;" >
                                教育经历最能体现您的学历和专业能力，快来完成它吸引企业和HR的青睐吧！<br>
                                <input type="button" value="+添加经历" style="width:100px;height:30px;background:blue;color:white;" >
                            </td>
                        </tr>
                    </table>
                </div>


            </dd>
        </dl>
    </div>

    <?php  include('footer.php')?>
</div>
</body>
</html>



