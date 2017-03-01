<?php
use yii\helpers\Html;
?>
<div id="container">
    <?php include"left.php";?>
    <div class="content">
        <dl class="company_center_content">
            <dt><h1><em></em>企业资料</h1></dt>
            <dd   style="background-color: #fafafa">
                <?=Html::beginForm('index.php?r=company/create_to','post')?>
                    <table class="btm">
                        <tbody>
                            <tr>
                                <td width="25"><span class="redstar">*</span></td>
                                <td width="95">企业名称：</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td width="85">企业性质：</td>
                                <td>
                                    <select name="wage_cn" style="border: 2px solid #f1f1f1;font-size:22px;height: 45px;margin-top: 20px;outline: medium none;padding: 6px 10px;transition: border 0.2s ease-in 0s;width: 625px;appearance:none;-moz-appearance:none;-webkit-appearance:none;cursor: pointer;">
<!--                                        --><?php //foreach($wage_cn as $item){?>
                                            <option value=""></option>
<!--                                        --><?php //}?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td width="85">所属行业：</td>
                                <td>
                                    <select name="" id="">
                                        <option value=""></option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td width="85">企业规模：</td>
                                <td>
                                    <select name="wage_cn" style="border: 2px solid #f1f1f1;font-size:22px;height: 45px;margin-top: 20px;outline: medium none;padding: 6px 10px;transition: border 0.2s ease-in 0s;width: 625px;appearance:none;-moz-appearance:none;-webkit-appearance:none;cursor: pointer;">
                                        <!--                                        --><?php //foreach($wage_cn as $item){?>
                                        <option value=""></option>
                                        <!--                                        --><?php //}?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td width="85">注册资金：</td>
                                <td>
                                    <input type="text" style="width: 100px;"/>万
                                    <select name="wage_cn" style="border: 2px solid #f1f1f1;font-size:22px;height: 45px;margin-top: 20px;outline: medium none;padding: 6px 10px;transition: border 0.2s ease-in 0s;width: 100px;appearance:none;-moz-appearance:none;-webkit-appearance:none;cursor: pointer;">
                                        <!--                                        --><?php //foreach($wage_cn as $item){?>
                                        <option value=""></option>
                                        <!--                                        --><?php //}?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="redstar">*</span></td>
                                <td>所在地区</td>
                                <td>
                                    <input type="text" class="district_cn" style="cursor: pointer" readonly placeholder="请选择城市" id="positionName" name="district_cn">
                                    <input type='hidden' name='district' />
                                    <input type='hidden' name='sdistrict' />
                                    <input type='hidden' name='district_cn' />
                                    <div id="djobs_div" style="width: 625px;height: 240px;background-color: #ffffff;display: none">
                                        <div style="height: 44px;">
                                            <span style="float: left;margin: 5px;padding: 5px"><b>城市选择</b></span>
                                            <span class="dcloses" style="float: right;margin: 5px;padding: 5px;background-color: #9900FF;cursor: pointer">×</span>
                                        </div>
                                        <div>
                                            <div style="width: 625px;background-color: #ffffff;">
                                                <ul>
                                                    <?php foreach($category_one as $v){?>
                                                        <li style="list-style-type: none;width: 100px;line-height: 22px;display: inline-table">
                                                            <input type="button" class="cate1" c_id="<?=$v['id']?>" c_name="<?=$v['categoryname']?>" style="font-weight: bold;background-color: #ffffff;color: #0000aa;border: 1px solid #0000aa;padding: 1px 2px" value="+"/><?=$v['categoryname']?>
                                                            <div class="mouse_leave" style="position: absolute;display: none;background-color: #AFAFAF;width: 400px;height: auto;z-index: 10">
                                                                <ul>
                                                                    <li class="cate2" c_id="<?=$v['id']?>" val="<?=$v['categoryname']?>" style="cursor: pointer;list-style-type: none;width: 80px;display: inline-table;font-weight: bold">不限</li><br>
                                                                    <?php foreach($category_district as $v2){?>
                                                                        <?php if($v['id']==$v2['parentid']){?>
                                                                            <li class="cate2" c_id="<?=$v2['id']?>" val="<?=$v2['categoryname']?>" style="cursor: pointer;list-style-type: none;width: 80px;display: inline-table">
                                                                                <?=$v2['categoryname']?>
                                                                            </li>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    <?php }?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <script>
                                    //点击职业类别显示
                                    $(document).on('click','.district_cn',function(){
                                        var djobs_div=$("#djobs_div");
                                        djobs_div.toggle();
                                    });
                                    //点击关闭div
                                    $('.dcloses').click(function(){
                                        $("#djobs_div").hide();
                                    });
                                    //点击让二级城市显示
                                    $(document).on('click','.cate1',function(){
                                        $(this).next().toggle()
                                    });
                                    //点击赋值
                                    $(document).on('click','.cate2',function(){
                                        var district_div=$(".district_cn");
                                        var district=$(this).parent().parent().prev().attr('c_id');//一级分类id
                                        var c_name=$(this).parent().parent().prev().attr('c_name');//一级分类name
                                        var sdistrict=$(this).attr('c_id');//二级分类id
                                        var district_cn=$(this).attr('val');//二级分类name
//                                                alert(c_name);
                                        if(district==sdistrict){
                                            district_div.val(district_cn);//赋值到文本框
                                            $("input[name='district']").val(district);
                                            $("input[name='sdistrict']").val(0);
                                            $("input[name='district_cn']").val(c_name);
                                            $("#djobs_div").hide();
                                        }else{
                                            district_div.val(c_name+'/'+district_cn);//赋值到文本框
                                            $("input[name='district']").val(district);
                                            $("input[name='sdistrict']").val(sdistrict);
                                            $("input[name='district_cn']").val(c_name+"/"+district_cn);
                                            $("#djobs_div").hide();
                                        }
                                    })
                                    //鼠标移出事件
                                    $(document).on('mouseleave','.mouse_leave',function(){
                                        $(this).hide();
                                    });
                                </script>
                            </tr>
                            <tr>
                                <td></td>
                                <td width="85">所在街道：</td>
                                <td>
                                    <select name="wage_cn" style="border: 2px solid #f1f1f1;font-size:22px;height: 45px;margin-top: 20px;outline: medium none;padding: 6px 10px;transition: border 0.2s ease-in 0s;width: 625px;appearance:none;-moz-appearance:none;-webkit-appearance:none;cursor: pointer;">
                                        <!--                                        --><?php //foreach($wage_cn as $item){?>
                                        <option value=""></option>
                                        <!--                                        --><?php //}?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="25"><span class="redstar">*</span></td>
                                <td width="95">联系人：</td>
                                <td>
                                    <input type="text" placeholder="请输入联系人" value="" name="jobs_name" id="positionName">
                                </td>
                            </tr>
                            <tr>
                                <td width="25"><span class="redstar">*</span></td>
                                <td width="95">联系手机：</td>
                                <td>
                                    <input type="text" style="width: 500px" name="email"><input type="checkbox"/>联系电话在企业介绍中显示
                                </td>
                            </tr>
                            <tr>
                                <td width="25"><span class="redstar">*</span></td>
                                <td width="95">联系邮箱：</td>
                                <td>
                                    <input type="text"style="width: 500px"  name="email"><input type="checkbox"/>联系邮箱在企业介绍中显示
                                </td>
                            </tr>
                            <tr>
                                <td width="25"><span class="redstar">*</span></td>
                                <td width="95">公司网址：</td>
                                <td>
                                    <input type="text" placeholder="请输入公司网址" value="" name="jobs_name" id="positionName">
                                </td>
                            </tr>
                            <tr>
                                <td width="25"><span class="redstar">*</span></td>
                                <td width="95">详细地址：</td>
                                <td>
                                    <input type="text" placeholder="请输入详细地址" value="" name="jobs_name" id="positionName">
                                </td>
                            </tr>
                            <tr>
                                <td width="25"><span class="redstar">*</span></td>
                                <td width="95">公司简介：</td>
                                <td>
                                    <textarea name="" id="tr" cols="30" rows="10"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td width="25"></td>
                                <td width="95"></td>
                                <td><input type="checkbox"/><font color="orange">修改联系方式同步到职位</font></td>
                            </tr>
                            <tr>
                                <td width="25"></td>
                                <td width="95"></td>
                                <td>
                                    <input type="submit" value="保存" id="jobPreview" class="btn_32">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?=Html::endForm()?>
            </dd>
        </dl>
    </div>
</div>



<div id="footer">
    <div class="wrapper">
        <a rel="nofollow" target="_blank" href="about.html">联系我们</a>
        <a target="_blank" href="http://www.lagou.com/af/zhaopin.html">互联网公司导航</a>
        <a rel="nofollow" target="_blank" href="http://e.weibo.com/lagou720">拉勾微博</a>
        <a rel="nofollow" href="javascript:void(0)" class="footer_qr">拉勾微信<i></i></a>
        <div class="copyright">&copy;2013-2014 Lagou <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP备14023790号-2</a></div>
    </div>
</div>

<script src="style/js/core.min.js" type="text/javascript"></script>
<script src="style/js/popup.min.js" type="text/javascript"></script>

<!--  -->


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>