<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台欢迎页</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href=" css/content.css" />
    <script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
</head>
<style type="text/css">
    select {
        /*很关键：将默认的select选择框样式清除*/
        appearance:none;
        -moz-appearance:none;
        -webkit-appearance:none;
        /*将背景改为绿色*/
        background:green;
        /*留出一点位置，避免被文字覆盖*/
        padding-right: 14px;
        background: url("../web/admin/images/left_d.gif") no-repeat 45px 10px;
    }

</style>
<body marginwidth="0" marginheight="0">
<div class="container">
    <div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">企业管理</a>><a href="">待认证企业</a></div>
    <div class="public-content">
        <div class="public-content-header">
            <h3>修改网站配置</h3>
        </div>
        <div class="public-content-cont">
            <table class="public-cont-table">
                <tr>
                    <th style="width:20%"><input type="checkbox" class="all_check"/>用户名</th>
                    <th style="width:10%">email</th>
                    <th style="width:10%">手机</th>
                    <th style="width:10%">企业信息</th>
                    <th style="width:10%">注册时间</th>
                    <th style="width:10%">注册IP</th>
                    <th style="width:10%">最新登录时间</th>
                    <th style="width:20%">操作</th>
                </tr>
                <?php foreach($members as $item){?>
                    <tr class="uid" id="<?php echo$item['uid']?>">
                        <td>
                            <input type="checkbox" class="check_id" value="<?php echo$item['uid']?>"/><?=$item['username']?>
                            <a  style="display: inline" href="index.php?r=company/company_email&email=<?php echo $item['email']?>&uid=<?php echo$item['uid']?>">
                                <img src="../web/admin/images/email.gif" title="发送邮件">
                            </a>
                        </td>
                        <td><?=$item['email']?></td>
                        <td><?php if($item['mobile']!=''){echo$item['mobile'];}else{echo"未填写";}?></td>
                        <td><?php if(!isset($item['audit'])){echo "未完善企业资料";}elseif($item['audit']==1){echo "<a href=''><font color='red'>".$item['companyname']."</font></a>";}elseif($item['audit']==2){echo"等待认证";}elseif($item['audit']==3){echo"认证未通过";}elseif($item['audit']==0){echo"未认证";}?></td>
                        <td><?=date('Y-m-d',$item['reg_time'])?></td>
                        <td><?=$item['reg_ip']?></td>
                        <td><?php if($item['last_login_time']==0){echo "从未登录";}else{echo date('Y-m-d',$item['last_login_time']);}?></td>
                        <td>
                            <div class="table-fun">
                                <a href="">日志</a>
                                <a href=''>修改</a>
                                <a href="">管理</a>
                            </div>
                        </td>
                    </tr>
                <?php }?>

            </table>
            <table style="line-height: 50px" width="100%" class="public-cont-table">
                <tr>
                    <th align="left">
                        <input style="background-color: #f6fffd;cursor: pointer;margin-left: 25px;padding: 8px 10px" type="button" id="company_member_add" class="button" value='添加会员'/>
                        <script>$("#company_member_add").click(function(){window.location='index.php?r=company/company_member_add'})</script>
                        <input style="background-color: #f6fffd;cursor: pointer;margin-left: 25px;padding: 8px 10px" type="button" id="del" class="button" value="删除会员"/>
                    </th>
                    <th align="right">
                        <?=Html::beginForm('index.php?r=company/company_search','post')?>
                        <div class="seh">
                            <div class="keybox" style="display: inline">
                                <input name="key" class="sbt" style='height: 30px;background: #edf9ff url("../web/admin/images/search.gif") no-repeat scroll 4px;border: 1px solid #1B242F;border-right-style: none;padding-left: 20px' value="" type="text"
                                    ></div
                                ><div class="selbox" style="display: inline;"
                                ><select name="search_where" class="sbt" style="height: 34px;border: 1px solid #1B242F;background-color:#edf9ff ;border-left-style: none;border-right-style: none">
                                    <option value="username">用户名</option>
                                    <option value="uid">UID</option>
                                    <option value="email">email</option>
                                    <option value="mobile">手机号</option>
                                    <option value="companyname">公司名</option>
                                </select
                                    ></div
                                ><div class="sbtbox" style="display: inline;"
                                ><input id="sbt" class="sbt" name="" style="height: 34px;padding-top: 1px;border: 1px solid #1B242F;background-color:#f6fffd ;border-left-style: none;" value="搜索" type="submit">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <?=Html::endForm();?>
                    </th>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
<!--<table style="border-bottom: 0 none;line-height: 50px" width="100%">-->
<!--    <tr>-->
<!--        <td width="60px;">-->
<!--            <input style="background-color: #f6fffd;cursor: pointer;margin-left: 25px;padding: 8px 10px" type="button" id="company_member_add" class="button" value='添加会员'/>-->
<!--            <script>$("#company_member_add").click(function(){window.location='index.php?r=company/company_member_add'})</script>-->
<!--            <input style="background-color: #f6fffd;cursor: pointer;margin-left: 25px;padding: 8px 10px" type="button" id="del" class="button" value="删除会员"/>-->
<!--        </td>-->
<!--        <td align="right" width="40px">-->
<!--            --><?//=Html::beginForm('index.php?r=company/company_search','post')?>
<!--            <div class="seh">-->
<!--                <div class="keybox" style="display: inline">-->
<!--                    <input name="key" class="sbt" style='background: #edf9ff url("../web/admin/images/search.gif") no-repeat scroll 4px;border: 1px solid #1B242F;border-right-style: none;padding-left: 20px' value="" type="text"-->
<!--                        ></div-->
<!--                    ><div class="selbox" style="display: inline;"-->
<!--                    ><select name="search_where" class="sbt" style="border: 1px solid #1B242F;background-color:#edf9ff ;border-left-style: none;border-right-style: none">-->
<!--                        <option value="username">用户名</option>-->
<!--                        <option value="uid">UID</option>-->
<!--                        <option value="email">email</option>-->
<!--                        <option value="mobile">手机号</option>-->
<!--                        <option value="companyname">公司名</option>-->
<!--                    </select-->
<!--                        ></div-->
<!--                    ><div class="sbtbox" style="display: inline;"-->
<!--                    ><input id="sbt" class="sbt" name="" style="border: 1px solid #1B242F;background-color:#f6fffd ;border-left-style: none;" value="搜索" type="submit">-->
<!--                </div>-->
<!--                <div class="clear"></div>-->
<!--            </div>-->
<!--            --><?//=Html::endForm();?>
<!--        </td>-->
<!--    </tr>-->
<!--</table>-->



<script>
    //全选
    $(".all_check").click(function(){
        var obj=$(".check_id");
        for(var i=0;i<obj.length;i++){
            obj.eq(i).prop('checked',true);
            if($(this).prop('checked')==false){
                obj.eq(i).prop('checked',false);
            }
        }
    });
//    $(".all_check").change(function(){
//        $('.check_children').prop("checked",this.checked);
//    });
    //删除
    $(document).on('click','#del',function(){
        var obj=$(".check_id");
        var ids='';
        for(var i=0;i<obj.length;i++){
//            alert(obj.eq(i).attr('id'));
            if(obj.eq(i).prop('checked')==true){
                ids+=','+obj.eq(i).val()
            }
        }
        ids= ids.substr(1);
        $.ajax({
            type:"get",
            url:"index.php?r=company/del",
            data:{uid:ids},
            success:function(msg){
                if(msg==1){
                    alert('删除成功');window.location='index.php?r=company/company_member'
                }else{
                    alert('删除失败');window.location='index.php?r=company/company_member'
                }
            }
        })
    })
</script>

