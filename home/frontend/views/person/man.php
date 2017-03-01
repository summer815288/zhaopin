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
                    <li  class="selected"  >基本资料</li>
                    <li ><a href="">账号安全</a></li>
                    <li>我的消息</li>
                    <li>我的头像</li>
                    <li>登录日志</li>
                    <li ><a href="<?php  echo Url::toRoute(['login/loginout'])?>">安全退出</a></li>
                </ul>
                <div class="con">

<!--                    第一个form表单-->
                <?=Html::beginForm(['person/mans'],'post')?>
                    <table class="btm" >
                        <tbody>
                        <tr>
                            <td width="25"><span class="redstar">*</span></td>
                            <td width="95">姓名：</td>
                            <td >
                                <input type="text" placeholder="请输入姓名" value=""  name="realname"  style="font-size: 16px;width:230px;color:gray;">
                            </td>
                        </tr>
                        <tr>
                            <td width="25"><span class="redstar">*</span></td>
                            <td width="85">性别：</td>
                            <td>
                                <input type="hidden" value="" name="sex">
                                <input type="hidden" value="" name="sex_cn">
                                <div  align="center" class="xuan" id="nan" >男</div>
                                <div  align="center" class="xuan" id="nv">女</div>
                            </td>

                        </tr>
                        <tr>
                            <td width="25"><span class="redstar">*</span></td>
                            <td width="85">出生年份：</td>
                            <td>
                                <select name="birthday" >

                                    <?php for($i=2017;$i>1979;$i--){?>
                                        <option value="<?php  echo $i?>"><?php echo $i; ?></option>
                                    <?php }?>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td><span class="redstar">*</span></td>
                            <td>现居住地：</td>
                            <td>
                                <input type="text" placeholder="请输入居住地" value="" name="residence" style="font-size: 16px;width:230px;color:gray;">
                            </td>
                        </tr>
                        <tr>
                            <td><span class="redstar">*</span></td>
                            <td>学历：</td>
                            <td>
                                <input   name="education_cn" type="hidden" id="education_cn">
                                <select name="education" id="education" >
                                    <option value="0">请选择</option>
                                <?php  foreach($edu as $k=>$v){?>
                                    <option value="<?php  echo $v['c_id']?>" class="educations"><?php  echo $v['c_name']?></option>
                                <?php  }?>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td><span class="redstar">*</span><div  class="tian"></div></td>
                            <td width="85"><span >所学专业：</span><div  class="tian"></div></td>
                            <td  style="position:relative;z-index:2;">
                                <input type="text"  placeholder="请选择" name="major_cn" class="major_cn" style="font-size: 16px;width:230px;color:gray;cursor: pointer" >

                                <input type="hidden" value=""  name="major" class="major">
<!--                                弹出的分类框-->
                                <div style="position:absolute;top:60px;left:0px;width:600px;height:150px;background: lightcyan;border:1px lightgoldenrodyellow solid;display: none;" class="tan_major">
                                    <table>
                                        <tr style="height:40px;background:lightgoldenrodyellow;width:500px;">
                                            <td style="width:480px;font-size: 16px;" align="left">所学专业</td>
                                            <td style="width:20px;font-size: 18px;padding-right: 20px;cursor: pointer" align="right" id="close">×</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="border-bottom: 1px #00528c solid;" class="major_one">
                                                <?php  foreach($major as $m){?>
                                                <a href="javascript:;"   style="border:1px #00528c solid;padding:1px 5px;font-size: 12px;"  id="<?php  echo $m['id']?>"><?php  echo $m['categoryname']?></a>
                                                <?php }?>
                                            </td>
                                           
                                        </tr>
                                        <tr >
                                            <td colspan="2"   class="ma" style="background-color: #ffffff;" >

                                            </td>
                                        </tr>
                                    </table>



                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="redstar">*</span></td>
                            <td>工作经验：</td>
                            <td>
                                <input   name="experience_cn" type="hidden" id="experience_cn">
                                <select name="experience" id="experience" >
                                    <option value="0">请选择</option>
                                    <?php  foreach($experience as $k=>$v){?>
                                        <option value="<?php  echo $v['c_id']?>" class="experiences"><?php  echo $v['c_name']?></option>
                                    <?php  }?>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td><span class="redstar">*</span></td>
                            <td>手机：</td>
                            <td>
                                <input   name="phone" type="text"  style="font-size: 16px;width:230px;color:gray;">
                            </td>
                        </tr>
                        <tr>
                            <td><span class="redstar">*</span></td>
                            <td>邮箱：</td>
                            <td>
                                <input   name="email" type="text" value="<?php  echo $email;?>" style="font-size: 16px;width:230px;color:gray;">
                            </td>
                        </tr>
                        <tr>
                            <td><span class="redstar">*</span></td>
                            <td>身高：</td>
                            <td>
                                <input   name="height" type="text"  style="font-size: 16px;width:180px;color:gray;">
                                <input   type="text"  style="font-size: 16px;width:30px;color:gray;" value="CM">
                            </td>
                        </tr>
                        <tr>
                            <td><span class="redstar">*</span></td>
                            <td>籍贯：</td>
                            <td>
                                <input   name="householdaddress" type="text"   style="font-size: 16px;width:230px;color:gray;">
                            </td>
                        </tr>
                        <tr>
                            <td width="25"><span class="redstar">*</span></td>
                            <td width="85">婚姻状况：</td>
                            <td>
                                <input type="hidden" value="" name="marriage">
                                <input type="hidden" value="" name="marriage_cn">
                                <div  align="center" class="xuan" id="wei" >未婚</div>
                                <div  align="center" class="xuan" id="yi">已婚</div>

                            </td>
                        </tr>
                        <tr>
                            <td><span class="redstar"></span></td>
                            <td></td>
                            <td>
                                <input   type="submit"  value="保存" style="font-size: 16px;width:250px;height:40px;color:white;background:#00ff00;">
                            </td>
                        </tr>


                        </tbody>
                    </table>
                <?=Html::endForm()?>


                    <form action="" hidden>erge</form>

<!--                    第三个form表单-->
                    <?=Html::beginForm()?>
                    <table class="btm">
                        <tbody>
                        <?php  foreach($msg as $v){ ?>
                            <tr >
                                <td width="500" ><?php echo $v['send_from']?> &nbsp;&nbsp;&nbsp;<span style="color:gray;font-size: 12px;"><?php  echo date('Y-m-d H:i:s',$v['sendtime'])?></span>
                                <br> <?php echo $v['subject']?><br><?php echo $v['content']?>
                                </td>
                               <td width="250" align="right"><a href="#" style="font-size: 12px;color:blue;">[删除]</a></td>

                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                    <?=Html::endForm()?>

<!--                    第四个表单-->
                    <?=Html::beginForm()?>
                    <table class="btm">
                        <tbody>
                        <tr><td>
                                <input type="file" name="img" id="img">
                            </td></tr>
                        <tr><td >
                                   <img src="" style="width:100px;height:100px;background:" class="imgs"  >

                            </td></tr>
                        </tbody>
                    </table>
                    <?=Html::endForm()?>

                    <?=Html::beginForm()?>
                    <table class="btm">
                        <tbody>
                        <tr>
                            <th width="250" style="background:#add8e6" >登录时间</th>
                            <th width="250" style="background:#add8e6">登录IP</th>
                            <th width="250" style="background:#add8e6">登录地点</th>
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

                    <?=Html::endForm()?>

<!--                    第六个-->
                    <form action="" hidden>正在退出中......</form>
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
       $('.con form').eq(index).show().siblings().hide();

   })

    $(document).ready(function(){
        $('.selected').attr('style','border-bottom: 2px green solid');
        var index=$(".ji .selected").index();
        $('.con form').eq(index).show().siblings().hide();

    })


    //学历下拉菜单，得到id值的同时要获得文字
    $(document).on('click','.educations',function(){
        var education_cn=$(this).text();
        $('#education_cn').val(education_cn);
    })

    //做学历一级分类之下的二级分类（店家a标签  下边框消失同时，传到后台进行查找，然后显示在前台：循环tr，如果td的数量是5的倍数就换行）
    $(document).on('click','.major_one  a',function(){

        var id=$(this).attr('id');
        var str="";
        $.ajax({
            type:'post',
            url:"index.php?r=person/major",
            data:{id:id},
           dataType:"json",
            success:function(msg){

                $.each(msg,function(k,v){

                    str+='<font style="width:300px;"><a href="javascript:;"  style="padding:3px 8px;margin:0 5px;font-size: 12px;" class="maj"  id="'+ v.id+'"  >'+ v.categoryname+'</a><font>';
                })
                $('.ma').html(str);
            }
        })


    })

    //得到二级分类之后，如果选中，就把值赋给select框，
    $(document).on('click','.maj',function(){
        var major_cn=$(this).text();
        var major=$(this).attr('id');
        $('.major').val(major);
        $('.major_cn').val(major_cn);
        $('.major_cn').text(major_cn);
        $('.tan_major').attr('style','display:none');
        $('.tian').attr('style','height:0px;');

    })
    //点击错号之后全部隐藏
    $(document).on('click','#close',function(){

        $('.tan_major').attr('style','display:none');
        $('.tian').attr('style','height:0px;');

    })
    //自动加载事件  一开始的时候是显示id=1里边的内容
    $(document).ready(function(){
        var id=1;
        var str="";
        $.ajax({
            type:'post',
            url:"index.php?r=person/major",
            data:{id:id},
            dataType:"json",
            success:function(msg){

                $.each(msg,function(k,v){

                    str+='<font style="width:300px;"><a href="javascript:;"  style="padding:3px 8px;margin:0 5px;font-size: 12px;" class="maj"  id="'+ v.id+'"  >'+ v.categoryname+'</a></font>';
                })
                $('.ma').html(str);
            }
        })


    })
    //点击学历文本框的时候，div显示出来
    $(document).on('click','.major_cn',function(){
        $('.tan_major').attr('style','display:block_row;height:150px;width:600px;');
        $('.tian').attr('style','height:150px;');
    })

    //工作下拉菜单，得到id值的同时要获得文字
    $(document).on('click','.experiences',function(){

        var experience_cn=$(this).text();
        $('#experience_cn').val(experience_cn);
    })

    //点击未婚已婚
    $(document).on('click','#wei',function(){
        $(this).attr('style','border:2px blue solid;color:red;');

        $("input[name='marriage']").val('1');
        var marriage_cn=$(this).text();
        $("input[name='marriage_cn']").val(marriage_cn);
        $('#yi').attr('style','border:1px gray solid;color:gray;');

    })
    $(document).on('click','#yi',function(){
        $(this).attr('style','border:2px blue solid;color:red;');
        $("input[name='marriage']").val('2');
        var marriage_cn=$(this).text();
        $("input[name='marriage_cn']").val(marriage_cn);
        $('#wei').attr('style','border:1px gray solid;color:gray;');


    })
    //点击男女
    $(document).on('click','#nan',function(){
        $(this).attr('style','border:2px blue solid;color:red;');

        $("input[name='sex']").val('1');
        var sex_cn=$(this).text();
        $("input[name='sex_cn']").val(sex_cn);
        $('#nv').attr('style','border:1px gray solid;color:gray;');

    })
    $(document).on('click','#nv',function(){
        $(this).attr('style','border:2px blue solid;color:red;');

        $("input[name='sex']").val('2');
        var sex_cn=$(this).text();
        $("input[name='sex_cn']").val(sex_cn);
        $('#nan').attr('style','border:1px gray solid;color:gray;');

    })

    //文件选择了之后进行预览

//    $('#img').on('change',function(){

   $(document).on('change','#img',function(){

        var url=window.URL.createObjectURL(this.files[0]);
        if(url){

            $('.imgs').attr("src",url);

        }
    })

</script>