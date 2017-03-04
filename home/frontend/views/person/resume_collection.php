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
        .dell{
            background-color: #e7e7e7;
            color: #333;
            display: block;
            font-size: 14px;
            height: 40px;
            line-height: 40px;
            margin-bottom: 5px;
            text-align: center;
            width: 100px;
            margin-left: 35px;;
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
            <dt><h1><em></em>职位收藏夹</h1></dt>
<br><br>
            <dd style="padding:30px 0px;">

                <div class="con">

                    <table class="btm" style="text-align:center;margin-left: 35px;" >
                        <tbody>
                        <tr>
                            <td width="100px">职位名称</td>
                            <td width="100px">公司名称</td>
                            <td width="100px">工作地区</td>
                            <td width="100px">薪资待遇</td>
                            <td width="200px">操作</td>
                        </tr>
                        <?php  foreach($data  as $k=>$v){ ?>
                            <tr>
                                <td><?=$v['jobs_name']?></td>
                                <td><?=$v['companyname']?></td>
                                <td><?=$v['district_cn']?></td>
                                <td><?=$v['wage_cn']?></td>
                                <td>
                                    <a href="#" class="dell">删除</a>

                                </td>
                            </tr>
                        <?php  }?>
                        </tbody>
                    </table>

                </div>
            </dd>
        </dl>
    </div>

    <?php  include('footer.php')?>
</div>
</body>
</html>
