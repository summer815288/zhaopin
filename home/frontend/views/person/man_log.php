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
        .ji li {
            background-color: #ffffff;
            display: inline-block;

            height:40px;
            line-height: 40px;
            margin-left: 20px;
            margin-top: 20px;
            text-align: center;
            width:60px;
            cursor: pointer;
        }

        form tr td {
            font-size:14px;
        }

        /*form保单中的input框*/
        form tr td  input{
            font-size:14px;
            width:230px;
        }

        form select{
            font-size: 16px;width:255px;height:40px;color:gray;
        }
        .xuan{
            width:35px;height:35px;border:1px gray solid;font-size: 16px;padding:5px;display: inline-block;margin-left:5px;color:gray;

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
            <dt><h1><em></em>账号管理</h1></dt>

            <dd style="padding:30px 0px;">
                <ul class="ji" >
                    <li  ><a href="<?php echo Url::toRoute(['person/man'])  ?>">基本资料</a></li>
                    <li ><a href="">账号安全</a></li>
                    <li>我的消息</li>
                    <li>基本资料</li>
                    <li  style='border-bottom: 2px green solid'><a href="<?php echo Url::toRoute(['person/man_log'])  ?>">登录日志</a></li>
                    <li ><a href="">安全退出</a></li>
                </ul>
                <br>
                <div style="width:100%;height:500px;" >
                    <table class="btm">
                        <tbody>
                        <tr>
                            <td width="25">登录时间</td>
                            <td  width="85">登录IP</td>
                            <td>登录地点</td>
                        </tr>
                        <?php  foreach($log as $v){ ?>
                            <tr>
                                <td><?php echo date('Y-m-d  H:i:s',$v['log_addtime']) ?></td>
                                <td><?php  echo $v['log_ip']?></td>
                                <td><?php echo $v['log_address'] ?></td>
                            </tr>
                        <?php }?>
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

<script>


</script>