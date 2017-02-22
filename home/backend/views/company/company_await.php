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
    <style>
        .button{

            padding: 5px 10px;
        }
        #win{
            /*边框*/
            border:1px red solid;
            /*窗口的高度和宽度*/
            width : 300px;
            height: 200px;
            /*窗口的位置*/
            position : absolute;
            top : 100px;
            left: 350px;
            /*开始时窗口不可见*/
            display : none;
        }
    </style>
</head>
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
                    <th style="width:10%"><input type="checkbox" class="all_del"/>公司名称</th>
                    <th style="width:10%">所属会员</th>
                    <th style="width:10%">营业执照</th>
                    <th style="width:10%">认证状态</th>
                    <th style="width:10%">创建时间</th>
                    <th style="width:10%">刷新时间</th>
                    <th style="width:10%">目前积分</th>
                    <th style="width:10%">收到简历</th>
                    <th style="width:20%">操作</th>
                </tr>
                <?php foreach($companyManage as $item){?>
                    <tr>
                        <td><input type="checkbox" class="uid" id="<?=$item['uid']?>" /><?=$item['companyname']?></td>
                        <td><?=$item['username']?>
                            <a  style="display: inline" href="index.php?r=company/company_email&email=<?php echo $item['email']?>&uid=<?php echo$item['uid']?>">
                                <img src="../web/admin/images/email.gif" title="发送邮件">
                            </a>
                        </td>
                        <td><?php if($item['certificate_img']!=''){echo "<a href='' title='点击查看' style='color: #0000cc'>已上传</a>";}else{echo "<font color='#a9a9a9'>未上传</font>";}?></td>
                        <td><?php if($item['audit']==1){echo "<font color=green>认证通过</font>";}elseif($item['audit']==2){echo "<font color='red'>等待认证</font>";}elseif($item['audit']==3){echo"<font color='gray'>认证未通过</font>";}?></td>
                        <td><?=date('Y-m-d',$item['addtime'])?></td>
                        <td><?=date('Y-m-d',$item['refreshtime'])?></td>
                        <td><?=$item['points']?>积分</td>
                        <td>(0/<?=$item['personal_look']?>)</td>
                        <td>
                            <div class="table-fun">
                                <a href="<?php echo Url::to(['company/company_log'])?>">日志</a>
                                <a href='<?php echo Url::toRoute(["company/company_edit",'uid'=>$item['personal_uid']])?>'>修改</a>
                                <a href="">管理</a>
                            </div>
                        </td>
                    </tr>
                <?php }?>
            </table>
            <table style="line-height: 50px" width="100%" class="public-cont-table">
                <tr>
                    <th align="left">
                        <input style="background-color: #f6fffd;cursor: pointer;margin-left: 10px" type="button" class="button" value="认证企业"/>
                    </th>
                    <th align="right">
                        <?=Html::beginForm('index.php?r=company/manage_search','post')?>
                        <div class="seh">
                            <div class="keybox" style="display: inline">
                                <input name="key" class="sbt" style='height: 30px;background: #edf9ff url("../web/admin/images/search.gif") no-repeat scroll 4px;border: 1px solid #1B242F;border-right-style: none;padding-left: 20px' value="" type="text"
                                    ></div
                                ><div class="selbox" style="display: inline;"
                                ><select name="search_where" class="sbt" style="height: 33px;border: 1px solid #1B242F;background-color:#edf9ff ;border-left-style: none;border-right-style: none">
                                    <option value="companyname">公司名</option>
                                    <option value="username">会员名</option>
                                    <option value="street_cn">地址</option>
                                    <option value="telephone">电话</option>
                                </select
                                    ></div
                                ><div class="sbtbox" style="display: inline;"
                                ><input id="sbt" class="sbt" name="" style="height: 33px;padding-top:1px;border: 1px solid #1B242F;background-color:#f6fffd ;border-left-style: none;" value="搜索" type="submit">
                            </div>
                        </div>
                        <?=Html::endForm();?>
                    </th>
                </tr>
            </table>
            <!--            <div class="page">-->
            <!--                <form action="" method="get">-->
            <!--                    共<span>42</span>个站点-->
            <!--                    <a href="">首页</a>-->
            <!--                    <a href="">上一页</a>-->
            <!--                    <a href="">下一页</a>-->
            <!--                    第<span style="color:red;font-weight:600">12</span>页-->
            <!--                    共<span style="color:red;font-weight:600">120</span>页-->
            <!--                    <input type="text" class="page-input">-->
            <!--                    <input type="submit" class="page-btn" value="跳转">-->
            <!--                </form>-->
            <!--            </div>-->
        </div>
    </div>
</div>
</body>
</html>

<div id="win" style="background-color: #f1fffd;width:400px;height: 250px;display: none; ">
    <div class="Box">
        <div>
            <h4 style="margin:10px 10px">将所选企业设置为：<span style="float: right;cursor: pointer" id="hide" title="关闭">X</span></h4>
        </div>
        <div>
            <?=Html::beginForm('index.php?r=company/get_user_info',"post")?>
            <table cellpadding="6">
                <tr>
                    <td width="150"> </td>
                    <td height="30" style="color: rgb(0,153,0);"><input type="radio" class="audit" name="audits" checked="" value="1"/>认证通过</td>
                </tr>
                <tr>
                    <td width="150"> </td>
                    <td height="30" ><input type="radio"  class="audit"  checked="" name="audits" value="3"/>认证未通过</td>
                </tr>
                <tr>
                    <td width="150"> </td>
                    <td height="30"><input type="radio" class="audit"  checked="" name="audits" value="2"/>等待认证</td>
                </tr>
                <tr>
                    <td width="150"> </td>
                    <td height="30" style="color: rgb(0,153,0);"><input type="checkbox" class="pms_notice" name="pms_notice" value="1"/>站内信通知</td>
                </tr>
                <tr>
                    <td width="150"> </td>
                    <td height="50"><input type="submit" class="submits" style="background-color: #f6fffd;padding: 5px 10px;cursor:pointer" value="确 定"/></td>
                </tr>
                <input type="hidden" name="uid" id="u_id"/>
            </table>
            <?=Html::endForm();?>
        </div>
    </div>
</div>
<script>
    //点击弹框出现和获取企业id
    $(".button").click(function(){
        /*找到div节点并返回*/
        var winNode = $("#win");
        //方法一：利用js修改css的值，实现显示效果
        // winNode.css("display", "block");
        //方法二：利用jquery的show方法，实现显示效果
        winNode.toggle("slow");
        //方法三：利用jquery的fadeIn方法实现淡入
//                    winNode.fadeIn("slow");
        var obj=$(".uid");
        var ids='';
        for(var i=0;i<obj.length;i++){
            if(obj.eq(i).prop("checked")==true){
                ids+=','+obj.eq(i).attr("id");
            }
        }
        ids=ids.substr(1);
        $("#u_id").val(ids);
    });
    //取消弹框
    $("#hide").click(function(){
        var winNode = $("#win");
        winNode.toggle();
    })
    //全选
    $(".all_del").click(function(){
        var obj=$(".uid");
        for(var i=0;i<obj.length;i++){
            obj.eq(i).prop('checked',true);
            if($(this).prop('checked')==false){
                obj.eq(i).prop('checked',false);
            }
        }
    })

</script>