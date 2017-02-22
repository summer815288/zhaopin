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
            width:500px;
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
                    <th style="width:15%;" ><input type="checkbox" class="all">用户名</th>
                    <th >email</th>
                    <th >手机</th>
                    <th >注册时间</th>
                    <th>注册IP</th>
                    <th >最后登录时间</th>
                    <th >操作</th>
                </tr>
                <?php  foreach($member as $k=>$v){?>
                    <tr>
                        <td><input type="checkbox" id="<?php  echo $v['uid']?>" class="check">
                            <?php  echo $v['username']?>
                        </td>
                        <td>
                            <?php echo $v['email'] ?>
                            <a href="<?php echo Url::toRoute(['member/email','email'=>$v['email']])?>" style="display:inline;">
                                <img src="../../public/backend/email.gif" style="height:15px;">
                            </a>
                        </td>
                        <td>
                            <?php  echo $v['mobile']?>
                        </td>
                        <td>
                            <?php  echo date("Y-m-d H:i:s",$v['reg_time'])?>
                        </td>
                        <td>
                            <?php  echo $v['reg_ip']?>
                        </td>

                        <td>
                            <?php  echo date("Y-m-d H:i:s",$v['last_login_time'])?>
                        </td>
                        <td>
                            <div class="table-fun">
                                <a href="<?php echo Url::toRoute(['member/members_logs','uid'=>$v['uid']])?>">日志</a>
                                <a href="<?php echo Url::toRoute(['member/members_update','uid'=>$v['uid']])?>">修改</a>

                            </div>
                        </td>
                    </tr>
                <?php  }?>
            </table>
            <table class="public-cont-table">
                <tr>
                    <th width="60%" >
                        <a href="<?php echo Url::to(['member/members_add']);?>" style="display:inline;color:black;"><input type="button" value="添加会员"  class="bu" ></a>
                        <input type="button" value="删除会员" class="bu" id="dels">
                    </th>
                    <th width="40%">
                        <div style="float:right">
                            <?=Html::beginForm(['member/members_info'],'get')?>
                            <input name="key" value="" type="text"  class="key"
                                ><select name="keyup_id" style="border: none;height:27px;background:#ffffff url('admin/images/1.png') no-repeat 2px;padding-left: 17px;-moz-appearance: none;cursor: pointer" id="" class="keyup_id" >
                                <option value="1">用户名</option>
                                <option value="2">UID</option>
                                <option value="3">email</option>
                                <option value="4">手机号</option>

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
    <?= Html::beginForm(['member/dels'], 'post') ?>
    <table width="100%" cellspacing="6" cellpadding="0" border="0" align="center">
        <input type="hidden" name="ids" class="hid" >
        <tr>
            <td height="30"> </td>
            <td height="30">
                <strong style="color:#0066CC; font-size:14px;">你确定要删除吗？</strong>
            </td>
        </tr>
        <tr>
            <td width="40" height="25"> </td>
            <td>
                <label style="color: rgb(102, 102, 102);">
                    <input  id="success"  name="dels_user" value="1"  type="checkbox" checked="checked">
                    删除此会员
                </label><span style="color:gray;font-size: 12px;">（删除后此会员将无法登录，无法管理已发布的信息等）</span>
            </td>
        </tr>
        <tr>
            <td width="40" height="25"> </td>
            <td width="400">
                <label style="color: rgb(102, 102, 102);">
                    <input id="fail" name="dels_resume" value="2" type="checkbox" checked="checked">删除此会员发布的简历
                </label>
            </td>
        </tr>
        <tr>
            <td height="25"> </td>
            <td><input class="bu" value="确定删除" type="submit" ></td>
        </tr>
    </table>
    <?= Html::endForm() ?>
</div>
<script>
    //点击显示出方框来 同时还需要把值传过去，然后批量进行修改；
    $(document).on("click",'#dels',function(){
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
    //如果选中的时候变色
    $(document).on("click",'#fail',function(){
        if($(this).prop("checked")==true){
            $(this).parent().attr('style','color:rgb(0, 153, 0)');
        }else{
            $(this).parent().attr('style','color: rgb(102, 102, 102);');
        }
    })
    $(document).on("click",'#success',function(){
        if($(this).prop("checked")==true){
            $(this).parent().attr('style','color:rgb(0, 153, 0)');
        }else{
            $(this).parent().attr('style','color: rgb(102, 102, 102);');
        }


    })
    //一个页面加载事件，使批量进行删除的时候，复选框一开始是选中的状态
    $(document).ready(function(){
        $('#success').parent().attr('style','color:rgb(0, 153, 0)');
        $('#success').prop("checked")==true;
        $('#fail').parent().attr('style','color:rgb(0, 153, 0)');
        $('#fail').prop("checked")==true;

    })
    //点击进行全选的操作
    $(document).on("click",".all",function(){
        if($(this).prop("checked")==true){
            $(".check").prop("checked",true);
        }else{
            $(".check").prop("checked",false);
        }
    })
</script>