<?php
use yii\helpers\Html;
?>
<style>
    .li{
        list-style-type: none;
        display: inline-table;
        padding: 5px; 10px;
        cursor: pointer;
    }
</style>
<script>
    $(document).ready(function(){
        $(".li").hover(function(){
            //鼠标放上去执行某动作
            $(this).attr("style",'border-bottom: 3px solid #0000ff;');
        },function(){
            //鼠标移开的时候执行某个动作
            $(this).attr("style",'border-bottom: none;');
        });
        $(".div").hover(function(){
            //鼠标放上去执行某动作
            $(this).attr("style",'background-color:greenyellow;width: 100%;height: 125px');
        },function(){
            //鼠标移开的时候执行某个动作
            $(this).attr("style",'background-color:none;width: 100%;height: 125px');
        });
        $("ul li").click(function(){
            $(this).addClass('selecteds').siblings().removeClass('selecteds');
            var index=$(this).index();
            $(".table").eq(index).show().siblings().hide()

        })
    })


</script>
<div id="container">
    <?php include"left.php";?>
    <div class="content">
        <dl class="company_center_content" >
            <dt><h1><em></em>管理职位</h1></dt>
            <dd  style="background-color: #fafafa;height: 1000px">
                <div>
                    <ul>
                        <li class="li selecteds">
                            发布中职位</li>
                        <li class="li">审核中职位</li>
                        <li class="li">未显示职位</li>
                        <li class="li">全部职位</li>
                    </ul>
                </div>
                <div>
                    <div class="table">
                        <div>
                            <div>
                                <div style="background: #dcdcdc;padding: 15px;">
                                    <span><input type="checkbox" class="check" />职位名称</span>
                                    <span style="float: right"><select name="" id="">
                                            <option value="">推广状态</option>
                                            <option value="">全部</option>
                                            <option value="">置顶</option>
                                            <option value="">套色</option>
                                            <option value="">紧急</option>
                                            <option value="">推荐</option>
                                        </select></span>
                                </div>
                                <?php foreach($jobs as $item){?>
                                <div  class="div">
                                    <div style="margin-left: 15px;width: 500px;float: left">
                                        <p><input type="checkbox" class="checks"/><?php if($item['highlight']==''){echo $item['jobs_name'];}else{echo"<font color=\"$item[highlight]\">$item[jobs_name]</font>";}?></p>
                                        <p style="margin-left: 15px;">应聘简介：2 | 更新时间: <?=date('Y-m-d',$item['refreshtime'])?> [刷新]</p>
                                        <p style="margin-left: 15px;">修改  匹配  关闭  删除 </p>
                                    </div>
                                    <div style="float: right;display: inline;margin-right: 15px;">
                                        <p></p>
                                        <p><input type="button" style="background-color: #fafafa" value="置顶"/> <?php if($item['highlight']==''){echo'<input type="button" class="right_color" style="background-color: #fafafa" pid="'.$item['id'].'" value="套色"/>';}else{echo "<font style='margin-left: 5px;' color='#808080'>套色</font>";}?></p>
                                        <p><input type="button" style="background-color: #fafafa" value="紧急"/>  <input type="button" style="background-color: #fafafa" value="推荐"/></p>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
<!--        职业推广-->
<!--             套色-->
                            <?=Html::beginForm('index.php?r=company/jobs_color','post')?>
                            <table id="right_color"  style="left:25%;top:25%;margin-left:-50px;margin-top:-50px;position: absolute;background-color: #ffffff;width: 400px;height: 300px;display: none">
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="button" class="cancel" style="float: right;margin-right: 8px;" value="×"/>
                                        <div style="float: left;margin-left: 8px;">
                                            <b>职业推广</b>
                                        </div>
                                    </td>
                                </tr>
                                <tr><td><font style="margin-left: 100px">推广职位：产品经理</font></td></tr>
                                <tr><td><font style="margin-left: 100px">推广方案：职位变色</font></td></tr>
                                <tr><td height="30"><font style="margin-left: 100px">推广期限：<input type="text" style="width: 40px;height: 20px"/>天</font></td></tr>
                                <tr><td><span style="margin-left: 100px">选择颜色：<div style="display: inline-block;;width: 173px;height: 30px;cursor: pointer;border: 1px solid #008000" readonly id="c_color"></div><input type="hidden" name="highlight"/>
                                            <?php foreach($color as $item){?><div style="background-color:<?=$item['value']?>;position:relative;width: 173px;margin-left: 170px;;height: 30px;display: none;cursor: pointer" class="c_color" value="<?=$item['value']?>" ></div><?php }?></span></td></tr>
                                <tr>
                                    <td>
                                    <font style="margin-left: 100px">
                                    <input type="submit" style="padding: 5px 8px;background-color: orange" value="确 定"/>
                                    <input type="button" class="cancel" style="padding: 5px 8px;background-color: #dcdcdc;margin-left: 20px;" value="取 消"/>
                                    </font>
                                    </td>
                                </tr>
                                <input type="hidden" name="id"/>
                                </tbody>
                            </table>
                            <?=Html::endForm();?>
                            <script>
                                //点击显示桃色
                                $(".right_color").click(function(){
                                    var pid=$(this).attr('pid');
                                    $("input[name='id']").val(pid);
                                    $("#right_color").toggle('show');
                                })
                                //点击取消所有
                                $(document).on('click',".cancel",function(){
                                    $("#right_color").hide();
                                })
                                //点击显示颜色
                                $(document).on('click','#c_color',function(){
                                    $(".c_color").toggle("10000")
                                })
                                //赋值
                                $(document).on('click','.c_color',function(){
                                    var value=$(this).attr('value');
                                    $("#c_color").attr('style',"position: absolute;display:inline-block;width:150px;height:30px;cursor:pointer;border:1px solid #008000;background-color:"+value+"");
                                    $("input[name='highlight']").val(value);
                                    $(".c_color").hide();
                                })
                            </script>
<!--                置顶-->

<!--                紧急-->

<!--                推荐-->

<!--     职业推广-->
                            <div style="margin-left: 30px;clear: both;">
                                <input type="checkbox"/>&nbsp;
                                <a href="#" onclick="js_method();return false;">sdsdsdsd</a>
                                <input type="button" style="padding: 5px;background-color: #0000ff;color: #ffffff" value="刷新职位"/>&nbsp;&nbsp;&nbsp;
                                <input type="button" style="padding: 5px;background-color: #0000ff;color: #ffffff" value="关闭"/>&nbsp;&nbsp;&nbsp;
                                <input type="button" style="padding: 5px;background-color: #0000ff;color: #ffffff" value="删除"/>
                            </div>
                        </div>
                    </div>
                    <div class="table" style="display: none">2</div>
                    <div class="table" style="display: none">3</div>
                    <div class="table" style="display: none">4</div>
                </div>
            </dd>
        </dl>
    </div>
</div>
<script>
    //全选
    $(document).on('click','.check',function(){
        $(".checks").prop("checked",$('.check').prop('checked'));
    })
</script>