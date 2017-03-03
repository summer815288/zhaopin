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
              <br>
                <div class="publish_tip">
                    <h2>恭喜您，简历发布成功啦！</h2>
               </div>
                <div class="con" align="center" style="margin-top:20px;">
                    <a href=""><input type="button" value="匹配职位" style="width:100px;height:30px;background:#ff8c00;color:white;font-size: 16px;text-decoration: none;"  ></a>
                    <a href="<?php  echo Url::toRoute(['person/resume_end','id'=>$id]);?>"><input type="button" value="预览简历" style="width:100px;height:30px;background:#ff8c00;color:white;font-size: 16px;text-decoration: none;"  ></a>
                    <a href=""><input type="button" value="管理简历" style="width:100px;height:30px;background:#ff8c00;color:white;font-size: 16px;text-decoration: none;"  ></a>
                </div>

            </dd>
        </dl>
    </div>

    <!--    开始-->





    <?php  include('footer.php')?>
</div>
</body>
</html>



