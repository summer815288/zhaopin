<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\web\View;
use yii\helpers\Html;
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

        .tab table {
        margin:10px;
        }
        .tabs table {
            margin:10px;
        }

        .bu{
            background-image: url("admin/images/admin_submit.jpg");
            border: 0 none;
            font-size: 12px;
            height: 27px;
            line-height: 27px;
            margin-bottom: 4px;
            margin-right: 8px;
            margin-top: 4px;
            text-align: center;
            width: 85px;
        }

    </style>

</head>
<body marginwidth="0" marginheight="0">
<div class="container">
<div style="height:40px;color:midnightblue;font-family:'微软雅黑';border-top:1px  #d3d3d3 solid;padding-top: 26px; margin:10px;">
    <h2>个人会员</h2>
    <br>
</div>
<!--    基本信息-->
<div   class="jiben" ><h3 >基本信息</h3></div>
<div class="tab">
    <table>
        <tr>
            <td >注册时间：<?php  echo date("Y-m-d H:i:s",$arr['reg_time'])?></td>
            <td>最后登录时间：
                <?php if(empty($arr['last_login_time'])){?>
                    -----
                <?php }else{?>
                    <?php  echo date("Y-m-d H:i:s",$arr['last_login_time'])?>
                <?php }?>
            </td>
            <td>注册IP:
                <?php if(empty($arr['reg_ip'])){?>
                    -----
                <?php }else{?>
                    <?php  echo $arr['reg_ip']?>
                <?php }?>
            </td>
        </tr>
        <tr>
            <td>最后登录IP：
                <?php if(empty($arr['last_login_ip'])){?>
                    -----
                <?php }else{?>
                    <?php  echo $arr['last_login_ip']?>
                <?php }?>
            </td>
            <td colspan="2">个人简历：
                <?php if(!isset($arr2)||empty($arr2)){?>
                   <span style="color:gray;font-size: 12px;">未创建简历</span>
                <?php }else{?>

                   <?php  foreach($arr2 as $vv){?>
                        <span style="color:blue;font-size: 12px;"><?php  echo $vv['title']?></span>
                        <span style="color:green;font-size: 12px;">(完整指数：<?php  echo $vv['complete_percent']?>)</span>
                       &nbsp; &nbsp; &nbsp; &nbsp;
                       <?php }?>

                <?php }?>
            </td>
           <td></td>
        </tr>
    </table>
</div>
<!--基本信息-->

    <div   class="jiben" ><h3 >基本信息</h3></div>
    <div class="tab"  >
        <?=Html::beginform(['member/members_update_j'],'post')?>
        <table>
            <tr >
                <input type="hidden" name="uid" value="<?php  echo $arr['uid']?>">
                <td  aligin="right" style="margin:10px;" > 用户名：</td>
                <td ><input type="text"    name="username"  value="<?php   echo $arr['username'];?>" style="width:150px;height:20px;background-color: #eef8ff;margin:10px;" ></td>
            </tr>
            <tr >
                <td  aligin="right" style="margin:10px;" >邮箱：</td>
                <td ><input type="text"    name="email"  value="<?php   echo $arr['email'];?>" style="width:150px;height:20px;background-color: #eef8ff;margin:10px;" ></td>
            </tr>
            <tr >
                <td  aligin="right" style="margin:10px;" > 手机：</td>
                <td ><input type="text"    name="mobile"  value="<?php   echo $arr['mobile'];?>" style="width:150px;height:20px;background-color: #eef8ff;margin:10px;" ></td>
            </tr>
            <tr >
                <td  aligin="right" style="margin:10px;" > QQ绑定：</td>
                <td >
                    <?php if(empty($arr['qq_nick'])){ ?>
                    <span style="width:150px;height:20px;background-color: #eef8ff;margin:10px;">未绑定QQ账号</span>
                    <?php  }else{?>
                    <span style="width:150px;height:20px;background-color: #eef8ff;margin:10px;"><?php   echo $arr['qq_nick'];?></span></td>
                    <?php  }?>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="确定"  class="bu" >
                    <input type="button" value="返回"  class="bu" onclick="Javascript:window.history.go(-1)">
                </td>
            </tr>
        </table>
        <?=Html::endform()?>
    </div>



<!--用户状态-->

    <div   class="jiben" ><h3 >用户状态</h3></div>
    <div class="tab">

        <?=Html::beginform(['member/members_update_j'],'post')?>
        <table>
            <input type="hidden" value="<?php  echo $arr['uid']?>" name="uid">
            <tr>
                <td  aligin="right" style="margin:10px;">账号状态：</td>
                <td>
                    <label style="color: rgb(0, 153, 0);"><input type="radio" name="status" value="1"  id="success"  checked >正常</label>
                    <label style="color: rgb(102, 102, 102);"><input type="radio" name="status"  value="2"  id="fail">暂停</label>
                </td>
            </tr>
           <tr>
               <td  aligin="right" style="margin:10px;"></td>
               <td>
                   <input type="submit" value="确定"  class="bu" >
                   <input type="button" value="返回"  class="bu" onclick="Javascript:window.history.go(-1)">
               </td>
           </tr>
        </table>
        <?=Html::endform()?>

    </div>


<!--密码修改-->
    <div   class="jiben" ><h3 >密码修改</h3></div>
    <div  class="tab">
        <?=Html::beginform(['member/members_update_j'],'post')?>
        <table>
            <tr >
                <input type="hidden" name="uid" value="<?php  echo $arr['uid']?>">
                <td  aligin="right"  > 新密码：</td>
                <td ><input type="text"    name="password"  value="" style="width:150px;height:20px;background-color: #eef8ff;margin:10px;" ></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="确定"  class="bu" >
                    <input type="button" value="返回"  class="bu" onclick="Javascript:window.history.go(-1)">
                </td>
            </tr>
        </table>
        <?=Html::endform()?>
        </div>


    <!--会员积分设置-->
    <div   class="jiben" ><h3 >会员积分设置</h3></div>
    <div  class="tab">
        <?=Html::beginform(['member/members_update_ji'],'post')?>
        <table>
            <tr >
                <input type="hidden" name="log_uid" value="<?php  echo $arr['uid']?>">
                <input type="hidden" name="log_username" value="<?php  echo $arr['username']?>">
                <td  aligin="right"  > 会员积分：</td>
                <td ><span  style="width:150px;height:20px;background-color: #eef8ff;margin:10px;" ><?php  echo $sum;?></span></td>
            </tr>
            <tr >
                <td  aligin="right"  > 操作积分：</td>
                <td>
                    <label style="color: rgb(0, 153, 0);"><input type="radio" name="log_type" value="1"  id="successs"  checked >增加</label>
                    <label style="color: rgb(102, 102, 102);"><input type="radio" name="log_type"  value="2"  id="fails">减少</label>
                </td>

            </tr>
            <tr >
                <td  aligin="right"  > 增减积分：</td>
                <td ><input type="text"    name="points"  value="0" style="width:50px;height:20px;background-color: #eef8ff;margin:10px;" >点</td>
            </tr>
            <tr >
                <td  aligin="right"  > 操作说明：</td>
                <td ><input type="text"    name="log_value"  style="width:150px;height:20px;background-color: #eef8ff;margin:10px;"></td>
            </tr>
            <tr >
                <td  aligin="right" ><span style="color:red;">是否已收费：</span> </td>
                <td>
                    <label style="color: rgb(0, 153, 0);"><input type="radio" name="log_ismoney" value="1"  id="successss"  checked >是</label>
                    <label style="color: rgb(102, 102, 102);"><input type="radio" name="log_ismoney"  value="2"  id="failss">否</label>
                </td>

            <tr >
                <td  aligin="right" ><span style="color:red;">收费金额：</span> </td>
                <td ><input type="text"    name="log_amount"  style="width:150px;height:20px;background-color: #eef8ff;margin:10px;">元<span style="color:gray;font-size: 12px;">请填写收费金额</span></td>

            </tr>



            <tr>
                <td></td>
                <td>
                    <input type="submit" value="确定"  class="bu" >
                    <input type="button" value="返回"  class="bu" onclick="Javascript:window.history.go(-1)">
                </td>
            </tr>
        </table>
        <?=Html::endform()?>


    </div>

</div>
</body>
</html>

<script>

    //第一个单元框
    $(document).on("click",'#fail',function(){
        $(this).parent().attr('style','color:rgb(0, 153, 0)');
        $('#success').parent().attr('style','color: rgb(102, 102, 102);');
    })
    $(document).on("click",'#success',function(){
        $(this).parent().attr('style','color:rgb(0, 153, 0)');
        $('#fail').parent().attr('style','color: rgb(102, 102, 102);');

    })

    //第二个单选框
    $(document).on("click",'#fails',function(){
        $(this).parent().attr('style','color:rgb(0, 153, 0)');
        $('#successs').parent().attr('style','color: rgb(102, 102, 102);');
    })
    $(document).on("click",'#successs',function(){
        $(this).parent().attr('style','color:rgb(0, 153, 0)');
        $('#fails').parent().attr('style','color: rgb(102, 102, 102);');

    })

    //第三个单选框
    $(document).on("click",'#failss',function(){
        $(this).parent().attr('style','color:rgb(0, 153, 0)');
        $('#successss').parent().attr('style','color: rgb(102, 102, 102);');
    })
    $(document).on("click",'#successss',function(){
        $(this).parent().attr('style','color:rgb(0, 153, 0)');
        $('#failss').parent().attr('style','color: rgb(102, 102, 102);');

    })



</script>
