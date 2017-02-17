<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>后台欢迎页</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/content.css" />
    <script type="text/javascript" charset="utf-8" src="editor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="editor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="editor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
    <style>
        .public-content-cont p{
            padding-top: 10px;
            padding-left40px;
            padding-bottom:10px;
            border-bottom:1px #CCCCCC dashed;
        }
    </style>
</head>
<body marginwidth="0" marginheight="0">
<div class="container">
    <div class="public-nav">您当前的位置：<a href="">企业管理</a>><a href="">管理企业</a>><a href="">管理企业</a></div>
    <div class="public-content">
        <div class="public-content-header">
            <p style="font-weight: normal">修改企业资料- <font color="blue">北京企业</font></p>
        </div>
        <div class="public-content-cont"style="background-color: #ddebff">

            <?=Html::beginForm("index.php?r=company/company_edit_add",'post',['id'=>'form','class'=>'form','data'=>'myself']);?>
            <form action="">
                <table>
                    <input type="hidden" name="uid" value="<?php echo $members['uid']?>"/>
                    <p>所属会员：&nbsp;&nbsp;&nbsp;<?php echo $members['username']?></p>
                    <p>添加时间：&nbsp;&nbsp;&nbsp;<?php echo $members['addtime']?></p>
                    <p>添加方式：&nbsp;&nbsp;&nbsp;人工</p>
                    <p>营业执照：&nbsp;&nbsp;&nbsp;<?php if($members['certificate_img']){echo"<a href='../data/certificate/$members[certificate_img]' target='_blank' title='点击查看'>已上传</a>";}else{echo"<font color='#7fff00'>未上传</font>";}?></p>
                    <p>认证状态：<input type="radio" name="audit" <?php if($members['audit']==1){echo "checked";}?> value="1"/>认证通过
                        <input type="radio" name="audit" <?php if($members['audit']==2){echo "checked";}?> value="2"/>等待认证
                        <input type="radio" name="audit" <?php if($members['audit']==3){echo "checked";}?> value="3"/>认证未通过
                        <input type="radio"  name="audit"<?php if($members['audit']==0){echo "checked";}?> value="0"/>未认证</p>
                    <p>公司名称：<input type="text" name="companyname" value="<?php echo $members['companyname']?>"/></p>
                    <p>企业性质：
                        <select name="nature"  class="nature" >
                            <?php foreach($company_nature as $nature){?>
                                <option   class="nature_cn" value="<?=$nature['c_id']?>" selected="" ><?=$nature['c_name']?></option>
                            <?php } ?>
                        </select></p>
                    <input type="hidden" name="nature_cn"  class="natures">
                    <script>
                        $(".nature").change(function(){
                            var nature=$(this).val();
                            var obj=$(".nature_cn");

                            for(var i=0;i<obj.length;i++){
                                if(obj.eq(i).val()==nature){
                                    var nature_cn=obj.eq(i).text();
                                    $(".natures").val(nature_cn);
                                }
                            }
                        })
                    </script>
                    <p>所属行业：
                        <select class="trade" name="trade" id="">
                            <?php foreach($vocation as $v){?>
                                <option class="trade_cn" value="<?=$v['c_id']?>"><?=$v['c_name']?></option>
                            <?php }?>
                        </select></p>
                    <input type="hidden" name="trade_cn" class="trades"/>
                    <script>
                        $(".trade").change(function(){
                            var trade=$(this).val();
                            var obj=$(".trade_cn");
                            for(var i=0;i<obj.length;i++){
                                if(obj.eq(i).val()==trade){
                                    var trade_cn=obj.eq(i).text();
                                    $(".trades").val(trade_cn);
                                }
                            }
                        })
                    </script>
                    <p>所在地区：
                        <select class="district" name="district" id="ul">
                            <?php foreach($country as $k=>$v){?>
                                <?php if($v['parentid']==0){?>
                                <option class="district_cn"  value="<?=$v['id']?>"><?=$v['categoryname']?></option>
                                    <?php }else{?>
                                    <option class="district_cn" id="<?=$v['parentid']?>" value="<?=$v['id']?>"><span class="cate"></span><?=$v['categoryname']?></option>
                                    <?php }?>
                            <?php } ?>
                        </select></p>
                    <input type="hidden" name="district_cn" class="districts"/>
                    <script>
                        $(".district").change(function(){
                            var district=$(this).val();
                            var obj=$(".district_cn");
                            for(var i=0;i<obj.length;i++){
                                if(obj.eq(i).val()==district){
                                    var district_cn=obj.eq(i).text();
                                    $(".districts").val(district_cn);
                                }
                            }
                        })

                    </script>
                    <p>公司规模：
                        <select class="scale" name="scale" >
                            <?php foreach($scale as $v){?>
                                <option class="scale_cn" value="<?=$v['c_id']?>"><?=$v['c_name']?></option>
                            <?php }?>
                        </select></p>
                    <input type="hidden" name="scale_cn" class="scales"/>
                    <script>
                        $(".scale").change(function(){
                            var scale=$(this).val();
                            var obj=$(".scale_cn");

                            for(var i=0;i<obj.length;i++){
                                if(obj.eq(i).val()==scale){
                                    var scale_cn=obj.eq(i).text();
                                    $(".scales").val(scale_cn);
                                }
                            }
                        })
                    </script>
                    <p>注册资金：<input type="text" size="10" name="registered" value="<?php echo $members['registered']?>"/><input type="radio" name="currency" value="人民币"/>人民币 <input type="radio" name="currency" value="美元"/>美元</p>
                    <p>联系人：<input type="text" name="contact" value="<?php echo $members['contact']?>"/><input type="checkbox" name="contact_show" value="1"/><font color="green">联系人在职位详细页中显示</font></p>
                    <p>联系电话：<input type="text" name="telephone" value="<?php echo $members['telephone']?>"/><input type="checkbox" name="telephone_show" value="1"/><font color="green">联系电话在职位详细页中显示</font></p>
                    <p>联系邮箱：<input type="text" name="email" value="<?php echo $members['email']?>"/><input type="checkbox" name="email_show" value="1"/><font color="green">联系邮箱在职位详细页中显示</font></p>
                    <p>公司网址：<input type="text" name="website" value="<?php echo $members['website']?>"/></p>
                    <p>通讯地址：<input type="text" name="address" value="<?php echo $members['address']?>"/></p>
                    <p>公司介绍：<div id=""></div>
                    <textarea name="" id="editor" name="contents" cols="30" rows="10"><?php echo $members['contents']?></textarea></p>
                    <p><input type="submit" value="提 交"/></p>
                </table>
            </form>
            <?=Html::endForm();?>
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

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    $(document).ready(function(){
        function insertHtml() {
            var value = prompt('插入html代码', 'sdasdasd');
            UE.getEditor('editor').execCommand('insertHtml', value)
        }
    })

    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>
