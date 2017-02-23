<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\web\View;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台欢迎页</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href=" css/content.css" />
    <script src="js/jquery-3.1.1.min.js"></script>
    <style>
        .jiben {
            background-color: #e0f1f9;height:20px;padding-top: 10px;margin:10px;
        }
        .tab table tr td{
            border-bottom:1px #CCCCCC dashed;
            width:300px;
            height:30px;
            bgcolor:#FFFFFF;
            align:left;
        }

        .tabs table tr td{
            border-bottom:1px #CCCCCC dashed;
            width:900px;
            height:30px;
            bgcolor:#FFFFFF;
            align:left;
        }
        .tab table {
        margin:10px;
        }
        .tabs table {
            margin:10px;
        }

    </style>

</head>
<body marginwidth="0" marginheight="0">
<div class="container">
<div style="height:40px;color:midnightblue;font-family:'微软雅黑';border-top:1px  #d3d3d3 solid;padding-top: 26px; margin:10px;">
    <h2>查看简历</h2>
    <br>
</div>
<!--    基本设置-->
<div   class="jiben" ><h3 >基本设置</h3></div>
<div class="tab">
    <table>
        <tr>
            <td >简历名称：<?php  echo $info['title']?></td>
            <td>公开设置：
                <?php if($info['display']==1){?>
                    公开
                <?php }else{?>
                    不公开
                <?php }?>
            </td>
            <td>姓名：<?php  echo $info['realname']?></td>
        </tr>
        <tr>
            <td>简历完整度：<?php  echo $info['complete_percent']?>%</td>
            <td>简历审核：
                <?php if($info['audit']==1){?>
                    公开
                <?php }else{?>
                    不公开
                <?php }?>
            </td>
            <td>照片审核状态：
            <?php if($info['photo_audit']==1){?>
                公开
            <?php }else{?>
                不公开
            <?php }?>
            </td>
        </tr>
        <tr>
            <td>创建时间：<?php  echo date("Y-m-d H:i:s",$info['addtime'])?></td>
            <td>刷新时间：<?php  echo date("Y-m-d H:i:s",$info['refreshtime'])?></td>
            <td>点击次数：<?php  echo $info['click']?></td>
        </tr>

    </table>
</div>
<!--基本信息-->

    <div   class="jiben" ><h3 >基本信息</h3></div>
    <div class="tab"  >
        <table>
            <tr>
                <td>姓名：<?php  echo $info['fullname']?></td>
                <td>性别：<?php  echo $info['sex_cn']?></td>
                <td>年龄：<?php echo date("Y",time())-$info['birthday']+1;?></td>
                <td rowspan="3" style="border:1px solid #ccc;padding:3px;width:80px;bgcolor:#FFFFFF;">
                    <?php  if($info['photo']==0){?>
                    <span style="font-size:12px;color:green;">用户暂时没有上传图片</span>
                    <?php  }else{?>
                    <img src="../../public/uploads/<?php  echo $info['photo_img']?>" style="width:80px;height:auto;">
                    <?php  }?>
                </td>
            </tr>
            <tr>
                <td>身高：<?php echo $info['height']?></td>
                <td>学历：<?php echo $info['education_cn']?></td>
                <td>婚姻状况：<?php echo $info['marriage_cn']?></td>
            </tr>
            <tr>

                <td>工作经验：<?php echo $info['experience_cn']?></td>
                <td colspan="2">特长标签：<?php  echo $info['tag_cn']?></td>
            </tr>
        </table>
    </div>



<!--求职意向-->

    <div   class="jiben" ><h3 >求职意向</h3></div>
    <div class="tabs">
        <table>
            <tr>
                <td  >期望岗位性质：<?php  echo $info['nature_cn'] ?></td>
            </tr>
            <tr>
                <td>期望工作地：<?php  echo $info['district_cn'] ?></td>
            </tr>
            <tr>
                <td >期望月薪：<?php  echo $info['wage_cn'] ?></td>
            </tr>
            <tr>
                <td>期望从事的岗位：<?php  echo $info['intention_jobs'] ?></td>
            </tr>
            <tr>
                <td >期望从事的行业：<?php  echo $info['trade_cn'] ?></td>
            </tr>
        </table>
    </div>



<!--个人简介-->
    <div   class="jiben" ><h3 >个人简介</h3></div>
    <div  class="tabs">
        <table>
            <tr>
                <td>个人简介：<?php  echo $info['specialty']?></td>
            </tr>
        </table>
    </div>

    <!--教育经历-->
    <div   class="jiben" ><h3 >教育经历</h3></div>
    <div  class="tabs">
        <?php
        if(empty($work)||!isset($work)){

            echo "<table><tr><td>您没有填写教育经历</td></tr></table>";
        }
        else{
        ?>

        <table>
            <tr>
                <td style="color:#0000ff;">起止年月</td>
                <td style="color:#0000ff;">学校名称</td>
                <td style="color:#0000ff;">专业名称</td>
                <td style="color:#0000ff;">学历</td>
            </tr>
            <?php  foreach($education as $v){?>
            <tr>
                <td>
                    <?php  echo $v['startyear'] ?>年<?php  echo $v['startmonth']?>月
                    至<?php  echo $v['endyear'] ?>年<?php  echo $v['endmonth']?>月
                </td>
                <td><?php  echo $v['school'] ?></td>
                <td><?php  echo $v['speciality'] ?></td>
                <td><?php  echo $v['education_cn'] ?></td>
            </tr>
            <?php  }?>
        </table>
        <?php  }?>
    </div>

    <!--工作经历-->
    <div   class="jiben" ><h3 >工作经历</h3></div>
    <div  class="tabs">
        <?php
        if(empty($education)||!isset($education)){

            echo "<table><tr><td>您没有填写培训经历</td></tr></table>";
        }
        else{
        ?>

        <table>
            <tr>
                <td style="color:#0000ff;">起止年月</td>
                <td style="color:#0000ff;">公司名称</td>
                <td style="color:#0000ff;">职位名称</td>
            </tr>
            <?php  foreach($work as $v){?>
                <tr>
                    <td>
                        <?php  echo $v['startyear'] ?>年<?php  echo $v['startmonth']?>月
                        至<?php  echo $v['endyear'] ?>年<?php  echo $v['endmonth']?>月
                    </td>
                    <td><?php  echo $v['companyname'] ?></td>
                    <td><?php  echo $v['jobs'] ?></td>
                </tr>
            <?php  }?>
        </table>
        <?php  }?>

    </div>
    <!--联系方式-->
    <div   class="jiben" ><h3 >联系方式</h3></div>
    <div  class="tabs">
        <table>
            <tr>
                <td>联系电话：<?php  echo $info['phone'] ?></td>
            </tr>
            <tr>
                <td>联系邮箱：<?php  echo $info['email'] ?></td>
            </tr>
            <tr>
                <td>户籍所在地：<?php  echo $info['householdaddress'] ?></td>
            </tr>
        </table>
    </div>

    <a href="<?php echo Url::to(['member/resume'])?>"><input type="button" value="返&nbsp;&nbsp;回"  style="width:100px;background-color:#e0f1f9;border:1px #ffffff solid;"></a>
</div>
</body>
</html>


