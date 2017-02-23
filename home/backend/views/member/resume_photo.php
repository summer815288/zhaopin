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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href=" css/content.css" />
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(function () {
            $("[data-toggle='popover']").popover();
        });
    </script>

    <style>
        #win{
            /*边框*/
            border:2px white solid;
            /*窗口的高度和宽度*/
            width : 84px;
            height: 260px;
            /*窗口的位置*/
            position : absolute;
            top : 80px;
            left: 150px;
            /*开始时窗口不可见*/
            display :none;
        }

        .sea table tr th {
            width:150px;border:1px #add8e6 solid;padding:10px;vertical-align:top;margin-left:10px;;
        }
        .sea table tr th a {
            font-size: 12px;font-family:'微软雅黑';
        }
        .sea a{
            /*background-color: #f0f8fd;*/
            color: #009900;
            font-size: 12px;
            line-height: 21px;
        }
        .sea a span{

            color: #999999;


        }
        strong{
            color: #006699;
            font-size: 14px;

        }

        .pre a{
            border:1px black solid;display: inline;padding:3px;font-size:12px;cursor: pointer;text-decoration: underline;
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
        .bus{
            background:#ff8c00;
            border: 0 none;
            font-size: 14px;
            height: 27px;
            line-height: 27px;
            text-align: center;
            width: 85px;
        }

        .box{
            width:330px;
            height:230px;
            position: absolute;
            top:40%;
            left:40%;
            background-color: white;
            border:1px black solid;
            display:none;

        }
        .boxs{
            width:330px;
            height:230px;
            position: absolute;
            top:40%;
            left:40%;
            background-color: white;
            border:1px black solid;
            display:none;

        }

        .boxss{
            width:330px;
            height:230px;
            position: absolute;
            top:40%;
            left:40%;
            background-color: white;
            border:1px black solid;
            display:none;

        }

        .title{
            color: #333333;
            height: 35px;
            font-size: 12px;
            background-color: ghostwhite;
        }


        .key {
            background:#ffffff url('admin/images/search.gif') no-repeat 2px;
            border: 0 none;
            cursor: pointer;
            height: 27px;
            line-height: 27px;
            padding-left: 17px;
            width: 150px;
        }


    </style>

</head>
<body marginwidth="0" marginheight="0">
<div class="container">
    <div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">个人管理</a></div>
    <div class="public-content">

        <!--            进行全文搜索的展示-->

        <div class="sea" style="margin-left: 15px"  >
            <table >
                <tr >
                    <th colspan="6" style="background-color: #f0f8fd;border-right:none">
                        <strong>简历列表</strong>&nbsp;&nbsp;&nbsp;
                        <span style=" color: #999999;font-size: 12px;">(共找到0条)</span>&nbsp;&nbsp;&nbsp;
                        <a href="?r=member/resume_list" style=" color: #003399;text-decoration: none;display: inline">[恢复默认]</a>
                    </th>
                    <th  class="pre" style="background-color: #f0f8fd;border-left:none;font-size:12px;">每页显示：
                        <a href="" >1</a>
                        <a href=""  >2</a>
                        <a href="" >3</a>
                    </th>

                </tr>
                <tr   >
                    <th >
                        <span  ><b>可见状态</b></span>
                        <a href="">可见简历<span>(0)</span></a>
                        <a href="">不可见简历<span>(0)</span></a>
                    </th>
                    <th>
                        <span  ><b>简历等级</b></span>
                        <a href="">不限<span>(0)</span></a>
                        <a href="">普通人才<span>(0)</span></a>
                        <a href="">高级人才<span>(0)</span></a>
                        <a href="">待开发高级人才<span>(0)</span></a>
                    </th>
                    <th>
                        <span  ><b>照片可见</b></span>
                        <a href="">不限<span>(0)</span></a>
                        <a href="">可见<span>(0)</span></a>
                        <a href="">不可见<span>(0)</span></a>
                    </th>

                    <th>
                        <span  ><b>照片审核</b></span>
                        <a href="">不限<span>(0)</span></a>
                        <a href="">照片审核通过<span>(0)</span></a>
                        <a href="">照片待审核<span>(0)</span></a>
                        <a href="">照片审核未通过<span>(0)</span></a>
                    </th>
                    <th>
                        <span  ><b>添加时间</b></span>
                        <a href="">不限<span>(0)</span></a>
                        <a href="">三天内<span>(0)</span></a>
                        <a href="">一周内<span>(0)</span></a>
                        <a href="">一月内<span>(0)</span></a>
                    </th>

                    <th>
                        <span  ><b>刷新时间</b></span>
                        <a href="">不限<span>(0)</span></a>
                        <a href="">三天内<span>(0)</span></a>
                        <a href="">一周内<span>(0)</span></a>
                        <a href="">一月内<span>(0)</span></a>
                    </th>
                    <th></th>

                </tr>


            </table>
        </div>










        <div class="public-content-cont">
            <table class="public-cont-table">
                <tr>
                    <th style="width:25%"><input type="checkbox" class="all">姓名</th>
                    <th >完整指数</th>
                    <th >联系方式</th>
                    <th >审核状态</th>
                    <th >照片</th>
                    <th >人才等级</th>
                    <th >公开</th>
                    <th>添加时间</th>
                    <th >刷新时间</th>
                    <th >操作</th>
                </tr>
                <?php  foreach($member as $k=>$v){?>
                    <tr>
                        <td><input type="checkbox" id="<?php  echo $v['id']?>" class="check">
                            <?php  echo $v['realname']?>

                            <?php  if($v['photo']>0){?>

                                <img src="../../public/uploads/<?php  echo $v['photo_img']?>"  class="photo_img"   width="50" height="50" style="cursor:pointer" >
                                <div id="win">
                                    <img src="../../public/uploads/<?php  echo $v['photo_img']?>"     style="width:80px;height:auto;" >
                                </div>

                            <?php  }else{?>

                                <div  class="" title="温馨提示" style="height:28px;background-color: wheat;width:80px;color:#009900;display:inline;cursor: pointer"
                                      data-container="body" data-toggle="popover" data-placement="right"
                                      data-content="用户还没有添加图片哦" >
                                    [照片]
                                </div >

                            <?php  }?>
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
                            <a href="<?php echo Url::toRoute(['member/email','email'=>$v['email']])?>">
                                <img src="../../public/backend/email.gif" style="height:15px;">
                            </a>

                            <img src="../../public/backend/sms.gif"
                                 title="用户手机号" style="height:22px;background-color: wheat;cursor: pointer"
                                 data-container="body" data-toggle="popover" data-placement="right"
                                 data-content="<?php  echo $v['phone']?>"          >

                        </td>
                        <td>
                            <?php  if($v['audit']==1){?>
                                <span style="green">审核通过</span>
                            <?php  }else if($v['audit']==2){?><span style="color:red;"> 待审核中</span>
                            <?php }else{ ?><span style="color:gray;">×审核未通过</span> <?php }?>
                        </td>
                        <td>
                            <?php  if($v['photo_audit']==1){?>
                                <span style="green">审核通过</span>
                            <?php  }else if($v['photo_audit']==2){?><span style="color:red;"> 待审核中</span>
                            <?php }else{ ?><span style="color:gray;">×审核未通过</span> <?php }?>

                        </td>
                        <td>
                            <?php  if($v['talent']==1){?>
                                <span style="green">普通</span>
                            <?php  }else if($v['talent']==2){?><span style="color:green;">高级</span>
                            <?php }else{ ?><span style="color:red;">待开通</span> <?php }?>
                        </td>

                        <td><?php if($v['display']==1){?>公开
                            <?php  }else{?>不公开
                            <?php }?>
                        </td>
                        <td><?php echo date("Y-m-d H:i:s",$v['addtime']) ?></td>
                        <td><?php echo date("Y-m-d H:i:s", $v['refreshtime']) ?></td>

                        <td>
                            <div class="table-fun">
                                <a href="<?php echo Url::toRoute(['member/members_log','uid'=>$v['uid']])?>">日志</a>
                                <a href="<?php echo Url::toRoute(['member/members_show','uid'=>$v['uid'],'id'=>$v['id']])?>">查看</a>

                            </div>
                        </td>
                    </tr>
                <?php  }?>
            </table>
            <table class="public-cont-table">
                <tr>
                    <th width="60%" >
                        <input type="button" value="审核简历"  class="bu" id="audit">
                        <input type="button" value="人才等级" class="bu" id="talent">
                        <input type="button" value="审核照片" class="bu"  id="photo_audit">
                        <input type="button" value="刷新" class="bu" id="flush">
                        <input type="button" value="删除" class="bu" id="del">
                    </th>
                    <th width="40%">
                        <div style="float:right">
                            <?=Html::beginForm(['member/resume_talent'],'get')?>
                            <input name="key" value="" type="text"  class="key"
                                ><select name="keyup_id" style="border: none;height:27px;background:#ffffff url('admin/images/1.png') no-repeat 2px;padding-left: 17px;-moz-appearance: none;cursor: pointer" id="" class="keyup_id" >
                                <option value="1">姓名</option>
                                <option value="2">ID</option>
                                <option value="3">UID</option>
                                <option value="4">电话</option>
                                <option value="5">地址</option>
                            </select
                                ><input  value="搜索" type="submit" style="display:inline;height:28px;color:white;"  class="bus">

                            <?=Html::endForm()?>
                        </div>

                    </th>
                </tr>
            </table>




        </div>


        <div class="page">
            <form action="" method="get">
                共<span>42</span>个站点
                <a href="">首页</a>
                <a href="">上一页</a>
                <a href="">下一页</a>
                第<span style="color:red;font-weight:600">12</span>页
                共<span style="color:red;font-weight:600">120</span>页
                <input type="text" class="page-input">
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>
<div class="box">
    <div class="title">
        <h5 style="display:inline;float:left;font-family: '微软雅黑';">请选择</h5>
        <h5  id="close" style="display:inline;float:right;font-size: 18px;background-color: #d3d3d3;cursor: pointer">×</h5>
    </div>
    <?= Html::beginForm(['member/audit'], 'post') ?>
    <table width="100%" cellspacing="6" cellpadding="0" border="0" align="center">
        <input type="hidden" name="ids" class="hid" >
        <input type="hidden" name="win" value="resume_talent">
        <tr>
            <td height="30"> </td>
            <td height="30">
                <strong style="color:#0066CC; font-size:14px;">将所选简历设置为：</strong>
            </td>
        </tr>
        <tr>
            <td width="40" height="25"> </td>
            <td>
                <label style="color: rgb(0, 153, 0);">
                    <input id="success" name="audit" value="1" checked="checked" type="radio">
                    审核通过
                </label>
            </td>
        </tr>
        <tr>
            <td width="40" height="25"> </td>
            <td width="400">
                <label style="color: rgb(102, 102, 102);">
                    <input id="fail" name="audit" value="3" type="radio">
                    审核未通过
                </label>
            </td>
        </tr>

        <tr id="reason"  style="display:none">
            <td width="40" height="25">理由：</td>
            <td>
                <textarea id="reason" name="reason" cols="40" style="font-size:12px"></textarea>
            </td>
        </tr>
        <tr>
            <td height="25"> </td>
            <td><input class="bu" value="确定" type="submit" ></td>
        </tr>
    </table>
    <?= Html::endForm() ?>
</div>

<!--人才等级-->
<div class="boxs">
    <div class="title">
        <h5 style="display:inline;float:left;font-family: '微软雅黑';">请选择</h5>
        <h5  id="closes" style="display:inline;float:right;font-size: 18px;background-color: #d3d3d3;cursor: pointer">×</h5>
    </div>
    <?= Html::beginForm(['member/talent'], 'post') ?>
    <table width="100%" cellspacing="6" cellpadding="0" border="0" align="center">
        <input type="hidden" name="ids" class="hid" >
        <input type="hidden" name="win" value="resume_photo">
        <tr>
            <td height="30"> </td>
            <td height="30">
                <strong style="color:#0066CC; font-size:14px;">将所选简历设置为：</strong>
            </td>
        </tr>
        <tr>
            <td width="40" height="25"> </td>
            <td>
                <label style="color: rgb(0, 153, 0);">
                    <input id="successs" name="talent" value="1" checked="checked" type="radio">
                    普通人才
                </label>
            </td>
        </tr>
        <tr>
            <td width="40" height="25"> </td>
            <td width="400">
                <label style="color: rgb(102, 102, 102);">
                    <input id="fails" name="talent" value="2" type="radio">
                    高级人才
                </label>
            </td>
        </tr>

        <tr>
            <td height="25"> </td>
            <td><input class="bu" value="确定" type="submit" ></td>
        </tr>
    </table>
    <?= Html::endForm() ?>
</div>

<!--审核照片-->
<div class="boxss">
    <div class="title">
        <h5 style="display:inline;float:left;font-family: '微软雅黑';">请选择</h5>
        <h5  id="closess" style="display:inline;float:right;font-size: 18px;background-color: #d3d3d3;cursor: pointer">×</h5>
    </div>
    <?= Html::beginForm(['member/photo_audit'], 'post') ?>
    <table width="100%" cellspacing="6" cellpadding="0" border="0" align="center">
        <input type="hidden" name="ids" class="hid" >
        <input type="hidden" name="win" value="resume_photo">
        <tr>
            <td height="30"> </td>
            <td height="30">
                <strong style="color:#0066CC; font-size:14px;">将所选简历设置为：</strong>
            </td>
        </tr>
        <tr>
            <td width="40" height="25"> </td>
            <td>
                <label style="color: rgb(0, 153, 0);">
                    <input id="successss" name="photo_audit" value="1" checked="checked" type="radio">
                    照片审核通过
                </label>
            </td>
        </tr>
        <tr>
            <td width="40" height="25"> </td>
            <td width="400">
                <label style="color: rgb(102, 102, 102);">
                    <input id="failss" name="photo_audit" value="3" type="radio">
                    照片审核未通过
                </label>
            </td>
        </tr>

        <tr>
            <td height="25"> </td>
            <td><input class="bu" value="确定" type="submit" ></td>
        </tr>
    </table>
    <?= Html::endForm() ?>
</div>
<!--搜索下拉框的展示-->


<script>
    //鼠标移上图片让其缩略图显示出来//鼠标移下图片，让其隐藏
    $(document).on("mouseover",".photo_img",function(){

        $("#win").css("display", "block");
    })
    $(document).on("mouseout",".photo_img",function(){
        $("#win").css("display", "none");
    })


    //点击显示出方框来 同时还需要把值传过去，然后批量进行修改；
    $(document).on("click",'#audit',function(){
        $(".box").toggle();
        obj=$(".check");
        var ids="";
        for(var i=0;i<obj.length;i++){
            if(obj.eq(i).prop('checked')==true){
                ids+=","+obj.eq(i).attr("id");

            }
        }
        ids=ids.substr(1);
        $(".hid").val(ids);


    })
    $(document).on("click",'#close',function(){
        $(".box").hide();
    })
    //在审核简历的时候，如果一开始是审核已经通过，现在要改成审核不通过
    $(document).on("click",'#fail',function(){

        $(this).parent().attr('style','color:rgb(0, 153, 0)');
        $('#success').parent().attr('style','color: rgb(102, 102, 102);');
        $("#reason").attr('style','display:table_row');

    })
    $(document).on("click",'#success',function(){
        $("#reason").attr('style','display:none');
        $(this).parent().attr('style','color:rgb(0, 153, 0)');
        $('#fail').parent().attr('style','color: rgb(102, 102, 102);');

    })
    //一个页面加载事件，使批量进行修改的时候，可以一开始是在审核通过的状态
    $(document).ready(function(){
        $('#success').parent().attr('style','color:rgb(0, 153, 0)');
        $('#success').attr("checked")==true;

    })

    //人才等级的修改
    //点击显示出方框来 同时还需要把值传过去，然后批量进行修改；
    $(document).on("click",'#talent',function(){
        $(".boxs").toggle();
        obj=$(".check");
        var ids="";
        for(var i=0;i<obj.length;i++){
            if(obj.eq(i).prop('checked')==true){
                ids+=","+obj.eq(i).attr("id");

            }
        }
        ids=ids.substr(1);
        $(".hid").val(ids);


    })
    $(document).on("click",'#closes',function(){
        $(".boxs").hide();
    })
    //在审核简历的时候，如果一开始是审核已经通过，现在要改成审核不通过
    $(document).on("click",'#fails',function(){

        $(this).parent().attr('style','color:rgb(0, 153, 0)');
        $('#successs').parent().attr('style','color: rgb(102, 102, 102);');


    })
    $(document).on("click",'#successs',function(){
        $(this).parent().attr('style','color:rgb(0, 153, 0)');
        $('#fails').parent().attr('style','color: rgb(102, 102, 102);');

    })
    //一个页面加载事件，使批量进行修改的时候，可以一开始是在审核通过的状态
    $(document).ready(function(){
        $('#successs').parent().attr('style','color:rgb(0, 153, 0)');
        $('#successs').attr("checked")==true;

    })

    //照片审核的修改
    //点击显示出方框来 同时还需要把值传过去，然后批量进行修改；
    $(document).on("click",'#photo_audit',function(){
        $(".boxss").toggle();
        obj=$(".check");
        var ids="";
        for(var i=0;i<obj.length;i++){
            if(obj.eq(i).prop('checked')==true){
                ids+=","+obj.eq(i).attr("id");

            }
        }
        ids=ids.substr(1);
        $(".hid").val(ids);


    })
    $(document).on("click",'#closess',function(){
        $(".boxss").hide();
    })
    //在审核简历的时候，如果一开始是审核已经通过，现在要改成审核不通过
    $(document).on("click",'#failss',function(){

        $(this).parent().attr('style','color:rgb(0, 153, 0)');
        $('#successss').parent().attr('style','color: rgb(102, 102, 102);');


    })
    $(document).on("click",'#successss',function(){
        $(this).parent().attr('style','color:rgb(0, 153, 0)');
        $('#failss').parent().attr('style','color: rgb(102, 102, 102);');

    })
    //一个页面加载事件，使批量进行修改的时候，可以一开始是在审核通过的状态
    $(document).ready(function(){
        $('#successss').parent().attr('style','color:rgb(0, 153, 0)');
        $('#successss').attr("checked")==true;

    })




    //点击进行全选的操作
    $(document).on("click",".all",function(){
        if($(this).prop("checked")==true){
            $(".check").prop("checked",true);
        }else{
            $(".check").prop("checked",false);
        }
    })

    //刷新的展示
    $(document).on("click","#flush",function(){

        window.location="index.php?r=member/resume_photo";
    })

    //ajax删除
    $(document).on("click","#del",function(){
        obj=$(".check");
        var ids="";
        for(var i=0;i<obj.length;i++){
            if(obj.eq(i).prop('checked')==true){
                ids+=","+obj.eq(i).attr("id");

            }
        }
        ids=ids.substr(1);
        $.ajax({
            url:"index.php?r=member/del",
            type:"post",
            data:{ids:ids},
            success:function(msg){
                if(msg==1){
                    alert('批量删除成功');window.location='index.php?r=member/resume_photo';
                }
            }

        })


    })

</script>