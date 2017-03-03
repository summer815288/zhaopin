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
                                    <td rowspan="3">
                                        <?php  if($info['photo']==0){?>
                                            <img src="images/1.png"  style="width:80px;height:auto;" class="imgs" >
                                        <?php  }else{?>
                                            <img src="uploads/<?php  echo $info['photo_img']?>" style="width:80px;height:auto;" class="imgs">
                                        <?php  }?>
                                    </td>
                                    <td><b><span style="font-size: 16px;"><?php echo $info['fullname'] ?></span>/b>(<?php echo $info['sex_cn'] ?>,<?php echo date('Y',(time()-$info['birthdate'])) ?>岁)</td>
                                    <td rowspan="3"><?php echo date('Y-m-d H:i:s',$info['refreshtime']); ?></td>
                                </tr>
                                <tr><td>
                                    最高学历：<?php echo $info['education_cn'] ?>&nbsp;|&nbsp;
                                    工作经验：<?php  echo $info['experience_cn']?>&nbsp;|&nbsp;
                                    专业：<?php  echo $info['major_cn']?><br>

                                        婚姻状况：<?php echo $info['marriage_cn'] ?>&nbsp;|&nbsp;
                                        身高：<?php  echo $info['height']?>&nbsp;cm<br>
                                        籍贯：<?php echo $info['education_cn'] ?>&nbsp;|&nbsp;
                                        现居住地：<?php  echo $info['experience_cn']?>&nbsp;|&nbsp;<br>
                                        求职状态：<?php echo $info['education_cn'] ?>&nbsp;|&nbsp;



                                </td></tr>
                                <tr>
                                    <td></td>

                                </tr>

                            </table>




                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>

            </dd>
        </dl>
    </div>






    <?php  include('footer.php')?>
</div>
</body>
</html>



