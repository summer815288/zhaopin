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
            width:150px;
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
            <dt><h1><em></em>面试邀请</h1></dt>

            <dd style="padding:30px 0px;">
                <ul class="ji" >
                    <li  class="selected"  >所有<span style="color:#808080">（<?=$count?>）</span></li>
                    <li >未查看<span style="color:red">（<?=$count2?>）</span></li>
                    <li>已查看<span style="color:#808080">（<?=$count3?>）</span></li>

                </ul>
                <div class="con">
                    <!--                    第一个table-->
                    <table class="btm" style="text-align:center;margin-left: 35px;" >
                        <tbody>
                        <tr>
                            <td width="100px">简历编号</td>
                            <td width="100px">简历名称</td>
                            <td width="100px">邀请职位</td>
                            <td width="100px">公司名称</td>
                            <td width="200px">邀请时间</td>
                        </tr>
                        <?php  foreach($data  as $k=>$v){ ?>
                            <tr>
                                <td><?=$v['resume_id']?></td>
                                <td><?=$v['resume_name']?></td>
                                <td><?=$v['jobs_name']?></td>
                                <td><?=$v['company_name']?></td>
                                <td><?=date('Y-m-d H:i:s',$v['interview_time'])?></td>
                            </tr>
                        <?php  }?>
                        </tbody>
                    </table>
                    <!--                    第二个form表单-->

                    <table class="btm" style="text-align:center;margin-left: 35px;" >
                        <tbody>
                        <tr>
                            <td width="100px">简历编号</td>
                            <td width="100px">简历名称</td>
                            <td width="100px">邀请职位</td>
                            <td width="100px">公司名称</td>
                            <td width="200px">邀请时间</td>
                        </tr>
                        <?php  foreach($data2  as $k=>$v){ ?>
                            <tr>
                                <td><?=$v['resume_id']?></td>
                                <td><?=$v['resume_name']?></td>
                                <td><?=$v['jobs_name']?></td>
                                <td><?=$v['company_name']?></td>
                                <td><?=date('Y-m-d H:i:s',$v['interview_time'])?></td>
                            </tr>
                        <?php  }?>
                        </tbody>
                    </table>

                    <!--                    第三个表单-->

                    <table class="btm" style="text-align:center;margin-left: 35px;" >
                        <tbody>
                        <tr>
                            <td width="100px">简历编号</td>
                            <td width="100px">简历名称</td>
                            <td width="100px">邀请职位</td>
                            <td width="100px">公司名称</td>
                            <td width="200px">邀请时间</td>
                        </tr>
                        <?php  foreach($data3  as $k=>$v){ ?>
                            <tr>
                                <td><?=$v['resume_id']?></td>
                                <td><?=$v['resume_name']?></td>
                                <td><?=$v['jobs_name']?></td>
                                <td><?=$v['company_name']?></td>
                                <td><?=date('Y-m-d H:i:s',$v['interview_time'])?></td>
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

<script>
    //点击哪个a标签,对象的下边框就会出现
    $(document).on('click','.ji  li',function(){
        $(this).attr('style','border-bottom: 2px green solid');
        $(this).addClass('selected').siblings().removeClass('selected').attr('style','border-bottom: none');
        var index=$(this).index();
        $('.con table').eq(index).show().siblings().hide();

    })

    $(document).ready(function(){
        $('.selected').attr('style','border-bottom: 2px green solid');
        var index=$(".ji .selected").index();
        $('.con table').eq(index).show().siblings().hide();

    })




</script>