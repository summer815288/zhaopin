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


        form tr td {
            font-size:14px;
        }


        form select{
            font-size: 16px;width:255px;height:40px;color:gray;
        }
        .xuan{
            background:lightcyan;cursor: pointer;
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
            <dt><h1><em></em>创建简历</h1></dt>

            <dd style="padding:30px 0px;">
               <div class="ji"><h2><span style="color:red">*</span>求职意向</h2></div>
                <div class="con">
                    <?=Html::beginForm(['person/resume_creat'],'post')?>

                    <table class="btm" >
                        <tbody>
                        <tr>
                            <td width="25"><span class="redstar">*</span></td>
                            <td width="85">简历名称：</td>
                            <td >
                                <input type="text"  placeholder="请填写简历名称" name="title" style="font-size: 16px;width:230px;color:gray;"  >

                            </td>
                        </tr>
                        <tr>
                            <td width="25"><span class="redstar">*</span></td>
                            <td width="85">目前状态：</td>
                            <td >
                                <input type="hidden" name="current_cn"  id="current_cn"  style="font-size:14px;width:230px;">
                                <select name="current" >
                                    <option value="0">请选择</option>
                                    <?php foreach($current as $v){ ?>
                                        <option value="<?php echo $v['c_id']?>" class="current"><?php echo $v['c_name'] ?></option>
                                    <?php }?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="redstar">*</span><div  class="tian"></div></td>
                            <td width="85"><span >期望行业：</span><div class="tian" style="display: none;"></div></td>
                            <td  style="position:relative;z-index:3;">
                                <input type="hidden" value="" name="trade" class="trade">
                                <input type="text"  placeholder="请选择" name="trade_cn" class="trade_cn" style="font-size: 16px;width:230px;color:gray;cursor: pointer" readonly >
                                <!--                                弹出的分类框-->
                                <div style="position:absolute;top:60px;left:0px;width:1200px;height:150px;background: lightcyan;border:1px lightgoldenrodyellow solid;display: none;" class="tan_trade">
                                    <table style="border: 1px #00528c solid;">
                                        <tr style="height:40px;background:lightgoldenrodyellow;width:1200px;">
                                            <td style="width:1180px;font-size: 16px;" align="left">行业选择
                                                <div style="float:right;"><input type="button" value="确定" class="yes"></div>
                                            </td>
                                            <td style="width:20px;font-size: 18px;padding-right: 20px;cursor: pointer" align="right" id="close">×</td>
                                        </tr>
                                        <tr style="height:40px;background:white;width:1200px;border-bottom: 1px #00528c solid">
                                            <td  class="trade_xuan">
                                                最多选<span style="color:red;">3</span>项&nbsp;&nbsp;已选<span class="num" style="color:red;">0</span>项
                                            </td>
                                            <td class="all_closes" style="display:none;">
                                                <input type="button" value="清除" class="all_close" style="background: #eef8ff;font-size: 12px;">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td colspan="2" style="background:white;" class="trade_one">
                                                <?php  foreach($trade as $t){?>
                                                    <font class="fon" style="display: inline-block;width:150px;font-size: 12px;"><input type="checkbox" class="check" id="<?php  echo $t['c_id']?>" value="<?php  echo $t['c_name']?>"><?php  echo $t['c_name']?></font>
                                                <?php }?>

                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="25"><span class="redstar">*</span></td>
                            <td width="85">工作性质：</td>
                            <td>
                                <input type="hidden" value="" name="nature">
                                <input type="hidden" value="" name="nature_cn">
                                <div  align="center" class="xuan" id="q" >全职</div>
                                <div  align="center" class="xuan" id="j">兼职</div>
                                <div  align="center" class="xuan" id="s">实习</div>

                            </td>
                        </tr>
                        <tr>
                            <td width="25"><span class="redstar">*</span></td>
                            <td width="85">期望薪资：</td>
                            <td >
                                <input type="hidden"  name="wage_cn"  id="wage_cn"  style="font-size:14px;width:230px;">
                                <select name="wage" >
                                    <option value="0">请选择</option>
                                    <?php foreach($wage as $v){ ?>
                                        <option value="<?php echo $v['c_id']?>" class="wages"><?php echo $v['c_name'] ?></option>
                                    <?php }?>
                                </select>
                            </td>
                        </tr>
<!--                        **************************************工作地区**********************************************************************-->
                        <tr>
                            <td><span class="redstar">*</span><div class="tiand" ></div></td>
                            <td width="85"><span >工作地区：</span><div class="tiand" ></div></td>
                            <td  style="position:relative;z-index:2;">
                                <input type="hidden" value="" name="district" >
                                <input type="text"  placeholder="请选择" name="district_cn" class="district_cn" style="font-size: 16px;width:230px;color:gray;cursor: pointer" readonly >
                                <!--                                弹出的分类框-->
                                <div style="position:absolute;top:60px;left:0px;width:750px;height:150px;display:none;background: lightcyan;border:1px lightgoldenrodyellow solid;" class="tan_district">
                                    <table style="border: 1px #00528c solid;">
                                        <tr style="height:40px;background:lightgoldenrodyellow;width:750px;">
                                            <td style="width:730px;font-size: 16px;" align="left">地区选择
                                                <div style="float:right;"><input type="button" value="确定" class="yesd"></div>
                                            </td>
                                            <td style="width:20px;font-size: 18px;padding-right: 20px;cursor: pointer" align="right" id="closed">×</td>
                                        </tr>
                                        <tr style="height:40px;background:white;width:750px;border-bottom: 1px #00528c solid">
                                            <td  class="trade_xuand">
                                                最多选<span style="color:red;">3</span>项&nbsp;&nbsp;已选<span class="numd" style="color:red;">0</span>项

                                            </td>
                                            <td class="all_closesd" style="display:none;">
                                                <input type="button" value="清除" class="all_closed" style="background: #eef8ff;font-size: 12px;">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td colspan="2" style="background:white;" class="trade_oned">
                                                <?php  foreach($district as $d){?>
                                                    <div class="all_d" style="display:inline;"></div>
                                                    <font class="fon" style="display: inline-block;width:100px;font-size: 12px;" >
                                                        <span  class="checks"  style="border:1px #000000 solid;cursor: pointer" id="<?php  echo $d['id']?>" name="<?php  echo $d['categoryname']?>">＋</span><?php  echo $d['categoryname']?>

                                                    <div style="position:absolute;width:300px;background:#add8e6;" class="dis"></div>
                                                    </font>
                                                <?php }?>

                                            </td>
                                        </tr>

                                    </table>



                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="redstar">*</span><div class="tianj" ></div></td>
                            <td width="85"><span >期望职位：</span><div class="tianj" ></div></td>
                            <td  style="position:relative;z-index:1;">
                                <input type="text"  placeholder="请选择" name="intention_jobs" class="intention_jobs" style="font-size: 16px;width:230px;color:gray;cursor: pointer" readonly >
                                <!--                                弹出的分类框-->
                                <div style="position:absolute;top:60px;left:0px;width:750px;height:150px;display:none;background: lightcyan;border:1px lightgoldenrodyellow solid;" class="tan_job">
                                    <table style="border: 1px #00528c solid;">
                                        <tr style="height:40px;background:lightgoldenrodyellow;width:750px;">
                                            <td style="width:730px;font-size: 16px;" align="left">职位选择
                                                <div style="float:right;"><input type="button" value="确定" class="yesj"></div>
                                            </td>
                                            <td style="width:20px;font-size: 18px;padding-right: 20px;cursor: pointer" align="right" id="closej">×</td>
                                        </tr>
                                        <tr style="height:40px;background:white;width:750px;border-bottom: 1px #00528c solid">
                                            <td  class="trade_xuanj">
                                                最多选<span style="color:red;">3</span>项&nbsp;&nbsp;已选<span class="numj" style="color:red;">0</span>项

                                            </td>
                                            <td class="all_closesj" style="display:none;">
                                                <input type="button" value="清除" class="all_closej" style="background: #eef8ff;font-size: 12px;">
                                            </td>

                                        </tr>
                                        <tr style="background:white;" >
                                            <td colspan="2">
                                                <table>
                                                <?php  foreach($job as $j){?>
                                                    <tr style="font-size: 12px;">
                                                        <td  class="trade_onej" width="23%" style=""><b><?php echo $j['categoryname']  ?></b></td>
                                                        <td>
                                                        <?php foreach($job_all as $b){?>
                                                          <?php  if($b['parentid']==$j['id']){?>

                                                                <div class="all_j" style="display:inline;"></div>
                                                                <font class="fonj" style="display: inline-block;width:100px;font-size: 12px;" >
                                                                    <span  class="checksj"  style="border:1px #000000 solid;cursor: pointer" id="<?php  echo $b['id']?>" name="<?php  echo $b['categoryname']?>">＋</span><?php  echo $b['categoryname']?>

                                                                    <div style="position:absolute;width:300px;background:#add8e6;display:none;" class="disj" >

                                                                        <?php foreach($job_all as $bb){?>
                                                                  <?php  if($bb['parentid']==$b['id']){?>

                                                                        <font  class="foj" style="display:inline-table;width:130px;font-size: 12px;"><input type="checkbox" class="chej" id="<?php echo $bb['id'] ?>" value="<?php  echo $bb['categoryname']?>"><?php echo $bb['categoryname'] ?></font>
                                                              <?php }?>

                                                              <?php }?>
                                                                    </div>
                                                                    <div class="al" style="display:inline;"></div>
                                                                </font>




                                                              <?php }?>
                                                        <?php }?>
                                                        </td>

                                                    </tr>
                                                <?php }?>
                                            </table>
                                            </td>
                                        </tr>

                                    </table>



                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="25"></td>
                            <td width="85"></td>
                            <td >
                                <input type="submit"   value="保存"     style="font-size: 16px;width:250px;color:white;height:40px;margin-top:10px;background: #00ff00"   >

                            </td>
                        </tr>
                        </tbody>

                    </table>
                    <?=Html::endForm()?>
                </div>
            </dd>
        </dl>
    </div>

    <?php  include('footer.php')?>
</div>
</body>
</html>

<script>
    //期望职位
    //点击加号展示出来，点击减号收回去
    $(document).on('click','.checksj',function(){

        var id=$(this).attr('id');
        var name=$(this).attr('name');
        var add=$(this).text();

        var strs='<input type="checkbox" class="all_j"  id="'+id+'" value="'+name+'">';

        if(add=="＋"){
            $(this).html("-").attr('style','padding:2px;border:1px black solid;cursor: pointer');
            $(this).parent().children(':last').html(strs);

        }else if(add=="-"){
            $(this).html("＋").attr('style','border:1px #000000 solid;cursor: pointer');
            $(this).parent().children(':last').html(" ");
        }


        var obj=$('.checksj');
        for(var i=0;i<obj.length;i++){
            if(obj.eq(i).attr('id')==id){
                $('.disj').eq(i).toggle();
            }
        }

    })
    //点击复选框的值，向上追加，同时计算添加的项数，传值
    $(document).on('click','.chej',function(){

        var choose=$(this).prop('checked');

        //进行判断
        if(choose==true) {
            $('.all_closesj').attr('style','display:block');
            var num=$('.job_chose').length;

            if(num<3){
                var job_id = $(this).attr('id');
                var job_cn = $(this).val();
                var str = '<div style="border:1px gray solid;width:100px;font-size: 12px;color:gray;display: inline;margin:5px;" class="job_chose"><span class="job_cns" job-id="'+job_id+'">' + job_cn + '</span><span style="padding:0 5px ;background: lightcyan;cursor: pointer" class="closesj" >×</span></div>';
                $('.trade_xuanj').append(str);
                var nums=$('.job_chose').length;
                $('.numj').html(nums);
            }else if(num==3){
                alert('最多选择3项');
                $(this).prop('checked',false);
            }
        }else{
            var job_cn = $(this).val();
            var ob=$('.job_cns');
            for(var s=0;s<ob.length;s++){
                if(ob.eq(s).text()==job_cn){
                    ob.eq(s).parent().remove();
                }
            }
            var nums=$('.job_chose').length;
            $('.numj').html(nums);
            if(nums==0){
                $('.all_closesj').attr('style','display:none');
            }
        }

    })
    //点击每个小的错号进行单个的删除
    $(document).on('click','.closesj',function(){
        //移除
        $(this).parent().remove();
        var job_cn=$(this).siblings().text();
        //设置项目数
        var num=$('.job_chose').length;

        if(num==0){
            $('.numj').html(0);
            $('.all_closesj').attr('style','display:none');
        }else{
            $('.numj').html(num);
        }
        //使复选框处于不选中状态
        var obj=$('.chej');
        for(var i=0;i<obj.length;i++){
            if(obj.eq(i).val()==job_cn){
                obj.eq(i).prop('checked',false);

            }
        }


    })
    //进行整个的删除
    $(document).on('click','.all_closej',function(){
        $('.job_chose').remove();
        $('.chej').prop('checked',false);
        $('.numj').html(0);
        $('.all_closej').attr('style','display:none');
    })

    //进行这个的选中

    //确定按钮
    //点击确定按钮进行id和文本内容的累加
    $(document).on('click','.yesj',function(){
        var obj=$('.job_cns');
        var job_cn='';
        for(var i=0;i<obj.length;i++){

            job_cn+=','+obj.eq(i).text();

        }

        job_cn=job_cn.substr(1);
        $('.intention_jobs').val(job_cn);
        $('.tan_job').hide();
        $('.tianj').hide();
    })

    //点击文本框弹出来
    $(document).on('click','.intention_jobs',function(){
        $('.tan_job').toggle();
    })
    //点击错弹框隐藏
    $(document).on('','#closej',function(){
        $('.tan_job').hide();

    })
    $(document).on('mouseleave','.disj',function(){
        $(this).hide();
       $(this).parent().children(':first').html("＋").attr('style','border:1px #000000 solid;cursor: pointer');
        $(this).parent().children(':last').hide();
    })


    $(document).on('click','#closej',function(){
        $('.tan_job').hide();

    })


</script>

<script>
/*行业开始 ****************************************************************************/
    //点击行业错号之后全部隐藏
    $(document).on('click','#close',function(){

        $('.tan_trade').attr('style','display:none');
        $('.tian').attr('style','display:none');


    })

    //点击行业文本框的时候，div显示出来
    $(document).on('click','.trade_cn',function(){
        $('.tan_trade').attr('style','display:block_row;height:150px;width:600px;');
        $('.tian').attr('style','height:150px;');
    })

    //复选框的值如果被选中，就接收他的id值和文本值；分别用逗号拼接入库；同时文本值显示在上边选项，计算class的个数，超出限制弹框
    $(document).on('click','.check',function(){

        var choose=$(this).prop('checked');
        if(choose==true) {
            $('.all_closes').attr('style','display:block');
            var num=$('.trade_chose').length;
            if(num<3){
                var trade = $(this).attr('id');
                var trade_cn = $(this).val();
                var str = '<div style="border:1px gray solid;width:100px;font-size: 12px;color:gray;display: inline;margin:5px;" class="trade_chose"><span class="trade_cns" trade="' + trade + '">' + trade_cn + '</span><span style="padding:0 5px ;background: lightcyan;cursor: pointer" class="closes" >×</span></div>';
                $('.trade_xuan').append(str);
                var nums=$('.trade_chose').length;
                $('.num').html(nums);
            }else if(num==3){
                alert('最多选择3项');
                $(this).prop('checked',false);
            }

        }else{
            var trade_cn=$(this).val();
            var ob=$('.trade_cns');
            for(var s=0;s<ob.length;s++){
                if(ob.eq(s).text()==trade_cn){
                    ob.eq(s).parent().remove();
                }
            }
            var nums=$('.trade_chose').length;  //0<num<=3
            $('.num').html(nums);
            if(nums==0){
                $('.all_closes').attr('style','display:none');
            }
        }

    })

    //每个选项点击小错号就进行单个的删除
    $(document).on('click','.closes',function(){
        //移除
        $(this).parent().remove();
        var trade_cn=$(this).siblings().text();
        //设置项目数
        var num=$('.trade_chose').length;
        if(num==0){
            $('.num').html(0);
            $('.all_closes').attr('style','display:none');
        }else{
            $('.num').html(num);
        }
        //使复选框处于不选中状态
        var obj=$('.check');
        for(var i=0;i<obj.length;i++){
            if(obj.eq(i).val()==trade_cn){
                obj.eq(i).prop('checked',false);

            }
        }


    })

    //点击清除全部选中的都消除
    $(document).on('click','.all_close',function(){
        $('.trade_chose').remove();
        $('.check').prop('checked',false);
        $('.num').html(0);
        $('.all_closes').attr('style','display:none');


    })

    //点击确定按钮进行id和文本内容的累加
    $(document).on('click','.yes',function(){
        var obj=$('.trade_cns');
        var trade='';
        var trade_cn='';
       for(var i=0;i<obj.length;i++){
           trade+=','+obj.eq(i).attr('trade');
           trade_cn+=','+obj.eq(i).text();

       }
        trade=trade.substr(1);
        trade_cn=trade_cn.substr(1);
        $('.trade_cn').val(trade_cn);
        $('.trade').val(trade);
        $('.tan_trade').hide();
        $('.tian').hide();



    })

/*行业结束****************************************************************************/


    //目前状态下拉菜单，得到id值的同时要获得文字
    $(document).on('click','.current',function(){
        var current_cn=$(this).text();
        $('#current_cn').val(current_cn);
    })
  $(document).on('click','.wages',function(){
    var wage_cn=$(this).text();
    $('#wage_cn').val(wage_cn);
 })



//公司性质  单选框的选中
    $(document).on('click','#q',function(){
        $(this).attr('style','border:2px blue solid;color:red;background:white');

        $("input[name='nature']").val('62');
        var nature_cn=$(this).text();
        $("input[name='nature_cn']").val(nature_cn);
        $('#j').attr('style','border:1px gray solid;color:gray;background:lightcyan');
        $('#s').attr('style','border:1px gray solid;color:gray;background:lightcyan');

    })
    $(document).on('click','#j',function(){
        $(this).attr('style','border:2px blue solid;color:red;background:white');
        $("input[name='nature']").val('63');
        var nature_cn=$(this).text();
        $("input[name='nature_cn']").val(nature_cn);
        $('#q').attr('style','border:1px gray solid;color:gray;background:lightcyan');
        $('#s').attr('style','border:1px gray solid;color:gray;background:lightcyan');

    })
    $(document).on('click','#s',function(){
    $(this).attr('style','border:2px blue solid;color:red;background:white');
    $("input[name='nature']").val('64');
    var nature_cn=$(this).text();
    $("input[name='nature_cn']").val(nature_cn);
    $('#q').attr('style','border:1px gray solid;color:gray;background:lightcyan');
    $('#j').attr('style','border:1px gray solid;color:gray;background:lightcyan');

})
//地区开始*****************************************************************************************


    $(document).on('click','.checks',function(){

        var id=$(this).attr('id');
        var name=$(this).attr('name');
        var add=$(this).text();

       if(add=="＋"){
           var strs='<input type="checkbox" class="all_d"  id="'+id+'" value="'+name+'">';
           $(this).parent().append(strs);
           $(this).html("-").attr('style','padding:2px;border:1px black solid;cursor: pointer');
           var str='';
           $.ajax({
               url:'index.php?r=person/district',
               type:'post',
               data:{id:id},
               dataType:"json",
               success:function(msg){
                   $.each(msg,function(k,v){
                       str+='<font  class="fo" style="display:inline-block;width:80px;font-size: 12px;"><input type="checkbox" class="che" id="'+ v.id+'" value="'+ v.categoryname+'">'+ v.categoryname+'</font>';
                   })
                   //思路成功之后，循环找到对象然后追加即可。

                   var obj=$('.checks');
                   for(var i=0;i<obj.length;i++){
                       if(obj.eq(i).attr('id')==id){
                           $('.dis').eq(i).html(str);
                       }
                   }

               }
           })

       }else if(add=="-"){
           $('.fo').hide();
           $('.all_d').hide();
           $(this).html("＋").attr('style','border:1px #000000 solid;cursor: pointer');
       }

    })


//复选框的选中
$(document).on('click','.che',function(){

    var choose=$(this).prop('checked');

    //进行判断，分为选中状态并且不可编辑的状态（这时就就接受all_d的值，进行添加）          选中状态可编辑
    if(choose==true) {
        $('.all_closesd').attr('style','display:block');
        var num=$('.district_chose').length;

          if(num<3){
          var district = $(this).attr('id');
          var district_cn = $(this).val();
          var str = '<div style="border:1px gray solid;width:100px;font-size: 12px;color:gray;display: inline;margin:5px;" class="district_chose"><span class="district_cns" district="' + district + '">' + district_cn + '</span><span style="padding:0 5px ;background: lightcyan;cursor: pointer" class="closesd" >×</span></div>';
          $('.trade_xuand').append(str);
          var nums=$('.district_chose').length;
          $('.numd').html(nums);
     }else if(num==3){
        alert('最多选择3项');
        $(this).prop('checked',false);
    }
    }else{
        var district_cn=$(this).val();
        var ob=$('.district_cns');
        for(var s=0;s<ob.length;s++){
            if(ob.eq(s).text()==district_cn){
                ob.eq(s).parent().remove();
            }
        }
        var nums=$('.district_chose').length;
        $('.numd').html(nums);
        if(nums==0){
            $('.all_closesd').attr('style','display:none');
        }
    }

})
//点击小得错号删除一个标签 同时下边的不选中
//每个选项点击小错号就进行单个的删除
    $(document).on('click','.closesd',function(){
    //移除
    $(this).parent().remove();
    var district_cn=$(this).siblings().text();
    //设置项目数
    var num=$('.district_chose').length;

    if(num==0){
        $('.numd').html(0);
        $('.all_closesd').attr('style','display:none');
    }else{
        $('.numd').html(num);
    }
    //使复选框处于不选中状态
    var obj=$('.che');
    for(var i=0;i<obj.length;i++){
        if(obj.eq(i).val()==district_cn){
            obj.eq(i).prop('checked',false);

        }
    }


})

//点击清除全部选中的都消除
    $(document).on('click','.all_closed',function(){
    $('.district_chose').remove();
    $('.che').prop('checked',false);
    $('.numd').html(0);
    $('.all_closed').attr('style','display:none');
})

//存在****************************************************************************************8bug
    //接收值 全部选中
    $(document).on('click','.all_d',function(){
        $(this).addClass('che');
        var obj=$('.che');

        for(var i=0;i<obj.length;i++){
          if($(this).prop('checked')==true){
              obj.eq(i).prop('checked',true);
              obj.eq(i).prop('disabled',true);
              $('.all_closesd').attr('style','display:block');
              var num=$('.district_chose').length;
//              if(num<3){
                  var district = $(this).attr('id');
                  var district_cn = $(this).val();
                  var str = '<div style="border:1px gray solid;width:100px;font-size: 12px;color:gray;display: inline;margin:5px;" class="district_chose"><span class="district_cns" district="' + district + '">' + district_cn + '</span><span style="padding:0 5px ;background: lightcyan;cursor: pointer" class="closesd" >×</span></div>';
                  $('.trade_xuand').append(str);
//                  var nums=$('.district_chose').length;
//                  $('.numd').html(nums);
//              }else if(num==3){
//                  alert('最多选择3项');
//                  $(this).prop('checked',false);
//              }
//**********************************************************************************************************8888


          }else{
              obj.eq(i).prop('checked',false);
              obj.eq(i).prop('disabled',false);
          }
        }



    })

    //点击确定按钮进行id和文本内容的累加
    $(document).on('click','.yesd',function(){
    var obj=$('.district_cns');
    var district='';
    var district_cn='';
    for(var i=0;i<obj.length;i++){
        district+=','+obj.eq(i).attr('trade');
        district_cn+=','+obj.eq(i).text();

    }
    district=district.substr(1);
    district_cn=district_cn.substr(1);
    $('.district_cn').val(district_cn);
    $('.district').val(district);
    $('.tan_district').hide();
    $('.tian').hide();
})
    //点击文本框弹出来
    $(document).on('click','.district_cn',function(){
        $('.tan_district').toggle();
    })
    //点击错弹框隐藏
    $(document).on('click','#closed',function(){
        $('.tan_district').hide();

})

$(document).on('mouseleave','.dis',function(){
    $(this).hide();
    $(this).parent().children(':first').html("＋").attr('style','border:1px #000000 solid;cursor: pointer');
    $(this).parent().children(':last').hide();
})



</script>