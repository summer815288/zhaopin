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

        .content dl dd table{
            line-height: 40px;
            font-size: 14px;
            border: 1px solid gray;
            margin-bottom: 30px;
            margin-left: 20px;

        }

        .bu{
            background-color: #e7e7e7;
            color: #333;
            display: block;
            font-size: 14px;
            height: 40px;
            line-height: 40px;
            margin-bottom: 5px;
            text-align: center;
            width: 127px;
            margin-left: 35px;
            cursor: pointer;
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
            <dt><h1><em></em>我的简历</h1></dt>
            <dd style="padding:30px 0px;width: auto">

            <?php  foreach($resume as $v){?>
                <table >
                    <tr  >
                        <td colspan="5"  style="background:lavender">
                            <h3><b><?php echo $v['title'] ?></b>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 14px;">刷新时间：
                                <?php if(empty($v['refreshtime'])||!isset($v['refreshtime'])) {?>
                                    <?php  echo date('Y-m-d H:i:s',$v['addtime']) ?>
                                <?php }else{?>
                                    <?php  echo date('Y-m-d H:i:s',$v['refreshtime']) ?>
                                <?php }?>
                                    </span >
                            </h3>

                        </td>
                    </tr>
                    <tr>
                        <td>审核状态：
                            <?php  if($v['audit']==1){?>
                                <span style="color:green">审核通过</span>
                            <?php  }else if($v['audit']==2){?><span style="color:red;"> 待审核中</span>
                            <?php }else{ ?><span style="color:gray;">×审核未通过</span> <?php }?>
                        </td>
                        <td>
                            <div   style="width:100%;border:1px #cccccc solid;padding: 1px;text-align: left;position:relative;">
                                <div style="background-color: #99cc00;height:10px;color:#990000;width:<?php  echo $v['complete_percent']?>px">
                                </div>
                                <div style="position: absolute;top:0px;left:40%;font-size: 10px;">
                                    <?php  echo $v['complete_percent']?>%
                                </div>
                            </div>
                        </td>
                        <td>
                            面试/申请：0/0
                        </td>
                        <td>
                            <div class="bu">刷新简历</div>
                        </td>
                        <td>
                            <div class="bu">修改简历</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            公开状态：
                            <?php if($v['display']==1){?>公开
                            <?php  }else{?>不公开
                            <?php }?>

                        </td>
                        <td>
                           姓名：
                            <?php if($v['display_name']==1){?>公开
                            <?php  }else{?>不公开
                            <?php }?>
                        </td>
                        <td>
                           下载/浏览：0/<?php echo $v['click'] ?>

                        </td>
                        <td><div class="bu"><a href="<?php echo Url::toRoute(['person/resume_end','id'=>$v['id']]) ?>">预览简历</a></div></td>
                        <td><div class="bu">删除简历</div></td>
                    </tr>
                </table>
            <?php }?>

            </dd>
        </dl>
    </div>

    <?php  include('footer.php')?>
</div>
</body>
</html>




