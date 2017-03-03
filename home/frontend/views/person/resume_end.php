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

        .content{
            background-color: #fff;
            border: 1px solid #ccc;
            min-height: 500px;
            padding: 20px 20px 0;
            width: 710px;
            float: left;
            font-size: 12px;
        }
        .head{
            border-color: transparent #ebd9c3 #ebd9c3 transparent;
            border-style: dashed solid solid dashed;
            border-width: 3px;
            left: -6px;
            width: 690px;
            height:30px;
            background: lightcoral;
            color:white;
            padding-left: 10px;;
            font-size: 14px;;

        }
        .heads{
            border-color: transparent lavender lavender transparent;
            border-style: dashed solid solid dashed;
            border-width: 3px;
            left: -6px;
            width: 690px;
            height:20px;
            background:#add8e6;
            color:black;
            padding-left: 10px;;
            font-size: 14px;;

        }
        .content table tr td{
            line-height: 30px;;
        }

       .left{
         /*//#e7e7e7*/
           background-color:#fffacd;
           color: #333;
           display: block;
           font-size: 14px;
           height: 40px;
           line-height: 40px;
           margin-bottom: 5px;
           text-align: center;
           width: 200px;
           float: right;
           min-height: 400px;
           padding-top: 100px;
       }
        .text{
            background: rgba(0, 0, 0, 0) ;
            height: 35px;
            margin-top: 12px;
            width: 100px;
            margin-left: 50px;;
        }
        .cao{
            background-color: #e7e7e7;
            color: #333;
            display: block;
            font-size: 14px;
            height: 40px;
            line-height: 40px;
            margin-bottom: 5px;
            text-align: center;
            width: 127px;
            margin-left: 35px;;
        }




    </style>
    <script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>

<div id="container">
    <!-- end .sidebar -->
    <div class="content">
        <dl class="company_center_content">
            <dt><h1><em></em>简历show</h1></dt>
            <dd>
<!--基本介绍-->
                <table>
                    <tr>
                        <td class="head">
                            简历名称：<?php  echo $info['title']?>&nbsp;&nbsp;&nbsp;
                            公开状态：
                            <?php if($info['display']==1){?>公开
                            <?php  }else{?>不公开
                            <?php }?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td rowspan="3"  style="padding-left: 10px;width:100px;">
                                        <?php  if($info['photo']==0){?>
                                            <img src="images/1.png"  style="width:80px;height:auto;" class="imgs" >
                                        <?php  }else{?>
                                            <img src="uploads/<?php  echo $info['photo_img']?>" style="width:80px;height:auto;" class="imgs">
                                        <?php  }?>
                                    </td>
                                    <td style="width: 400px;"><b><span style="font-size: 16px;"><?php echo $info['fullname'] ?></span>&nbsp;</b>(<?php echo $info['sex_cn'] ?>,<?php echo (date('Y',time())-$info['birthdate'])?>岁)</td>
                                    <td style="float: right;"><?php echo date('Y-m-d H:i:s',$info['refreshtime']); ?></td>
                                </tr>
                                <tr><td>
                                    最高学历：<?php echo $info['education_cn'] ?>&nbsp;|&nbsp;
                                    工作经验：<?php  echo $info['experience_cn']?>&nbsp;|&nbsp;
                                    专业：<?php  echo $info['major_cn']?><br>

                                        婚姻状况：<?php echo $info['marriage_cn'] ?>&nbsp;|&nbsp;
                                        身高：<?php  echo $info['height']?>&nbsp;cm<br>
                                        籍贯：<?php echo $info['householdaddress'] ?>&nbsp;|&nbsp;
                                        现居住地：<?php  echo $info['residence']?><br>
                                        求职状态：<?php echo $info['current_cn'] ?>
                                </td>
                                <td></td>
                                </tr>
                                <tr>
                                    <td style="color:orangered;">
                                       <b><?php  echo str_replace(",",'&nbsp;&nbsp;&nbsp;',$info['tag_cn']);?></b>
                                    </td>
                                    <td></td>
                                </tr>
                            </table>




                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;"><br>
                            联系方式：&nbsp;<span style="color: red;font-size: 16px;"><?php  echo $info['telephone']?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php  echo $info['email']?></span></td>
                    </tr>
                </table>

<!-- 求职意向-->
                <table>
                    <tr>
                        <td class="heads">
                            <b>求职意向</b>
                        </td>
                    </tr>
                    <tr><td>
                            期望月薪：<?php echo $info['wage_cn'] ?>&nbsp;|&nbsp;
                            工作性质：<?php  echo $info['nature_cn']?><br>
                            期望地区：<?php  echo str_replace(',','&nbsp;&nbsp;',$info['district_cn'])?><br>
                            期望行业：<?php  echo $info['trade_cn']?><br>
                            期望岗位：<?php  echo $info['intention_jobs']?><br>

                        </td></tr>
                </table>
<!--自我描述-->
                <?php if(isset($info['specialty'])&&!empty($info['specialty'])){ ?>
                    <table>
                        <tr>
                            <td class="heads">
                                <b>自我描述</b>
                            </td>
                        </tr>
                        <tr><td>
                                <?php  echo $info['specialty'];?>
                            </td></tr>
                    </table>
                <?php  }?>
<!--教育经历-->
                <?php if(isset($edu)&&!empty($edu)){ ?>
                    <table>
                        <tr>
                            <td class="heads">
                                <b>教育经历</b>
                            </td>
                        </tr>
                        <?php foreach($edu as $kk=>$vv){?>
                        <tr><td>
                                <?php  echo $vv['startyear']?>年<?php  echo $vv['startmonth']?>月-
                                <?php if($vv['todate']==1){ ?>
                                    <?php echo date('Y-m',time()) ?>
                                <?php }else{  ?>
                                    <?php  echo $vv['endyear']?>年<?php  echo $vv['endmonth']?>月
                                <?php }?>
                                &nbsp;|&nbsp;
                                <?php echo $vv['school'] ?>
                                &nbsp;|&nbsp;
                                <?php echo $vv['speciality'] ?>
                                &nbsp;|&nbsp;
                                <?php echo $vv['education_cn'] ?>
                            </td></tr>
                        <?php }?>
                    </table>
                <?php  }?>
<!--工作经历-->
                <?php if(isset($work)&&!empty($work)){ ?>
                    <table>
                        <tr>
                            <td class="heads">
                                <b>工作经历</b>
                            </td>
                        </tr>
                        <?php foreach($work as $kk=>$vv){?>
                            <tr><td>
                                    <?php  echo $vv['startyear']?>年<?php  echo $vv['startmonth']?>月-
                                    <?php if($vv['todate']==1){ ?>
                                        <?php echo date('Y-m',time()) ?>
                                    <?php }else{  ?>
                                        <?php  echo $vv['endyear']?>年<?php  echo $vv['endmonth']?>月
                                    <?php }?>
                                    &nbsp;|&nbsp;
                                    <?php echo $vv['jobs'] ?>
                                    &nbsp;|&nbsp;
                                    <?php echo $vv['companyname'] ?>
                                    <br>
                                    <?php echo $vv['achievements'] ?>
                                </td></tr>
                        <?php }?>
                    </table>
                <?php  }?>

<!--语言能力-->

                <?php if(isset($language)&&!empty($language)){ ?>
                    <table>
                        <tr>
                            <td class="heads">
                                <b>语言能力</b>
                            </td>
                        </tr>
                        <?php  foreach($language as $vv){?>
                            <tr><td>
                                    <?php echo $vv['language'] ?>
                                    &nbsp;|&nbsp;
                                    <?php echo $vv['language_level'] ?>

                                </td></tr>
                        <?php }?>
                    </table>
               <?php }?>
<!--获得证书-->
                <?php if(isset($credent)&&!empty($credent)){ ?>
                    <table>
                        <tr>
                            <td class="heads">
                                <b>获得证书</b>
                            </td>
                        </tr>
                        <?php foreach($credent as $v){?>
                        <tr><td>
                                <?php echo $v['credent'] ?>
                                &nbsp;|&nbsp;
                                <?php echo $v['credent_year'] ?>年<?php echo $v['credent_month'] ?>月

                            </td></tr>
                        <?php }?>
                    </table>
                <?php }?>

<!--附件上传-->
                <?php if(isset($img)&&!empty($img)){ ?>
                    <table>
                        <tr>
                            <td class="heads">
                                <b>附件</b>
                            </td>
                        </tr>
                        <?php foreach($img as $v){?>
                            <tr><td>
                                    <img src="uploads/"<?php echo $v['img'] ?>  style="width:200px;height:auto;"  >

                                </td></tr>
                        <?php }?>
                    </table>
                <?php }?>




            </dd>
        </dl>
    </div>


    <div class="left">
        <img src="style/images/qr_resume.png" width="100" height="auto">
        <div class="text">—操作—</div>
        <div class="cao"  ><a href="javascript:window.print();">简历打印</a></div>
        <div class="cao">导出word简历</div>
        <div class="cao">隐私设置</div>
        <div class="cao" ><a href="" id="prevv">返回</a></div>

    </div>


    <?php  include('footer.php')?>
</div>
</body>
</html>





