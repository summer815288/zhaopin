<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台欢迎页</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
<div class="container">
    <div class="public-nav">您当前的位置：<a href="">首页</a>><a href="">管理员列表</a></div>
    <div class="public-content">
        <div class="public-content-header">
            <!-- <h3>修改网站配置</h3> -->
        </div>
        <div class="public-content-cont">
            <table class="public-cont-table">
                <tr>
                    <th style="width:5%">选择</th>
                    <th style="width:10%">控制器</th>
                    <th style="width:10%">方法</th>
                </tr>
                <tbody id="tbody">
                <?php foreach($list as $k=>$v){?>
                    
                    <tr>
                    <?php if(in_array($v['p_id'],$p_id)){?>
                        <td><input type="checkbox"  class="box" checked value="<?= $v['p_id']?>"></td>
                    <?php }else {?>
                        <td><input type="checkbox"  class="box" value="<?= $v['p_id']?>"></td>
                    <?php }?>
                        <td><?php echo $v['p_controller']?></td>
                        <td><?php echo $v['p_action']?></td>
                    </tr>
                <?php }?>
                <tr>
                    <button class="but">修改</button>
                    <input type="text" value="<?= $rid?>" style="display: none">
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
    $(".but").click(function(){

        var rid = $(this).next().val();
        // alert(rid);

        var id = "";
       $(".box").each(function(){
        if(this.checked == true){
            id += $(this).val()+",";
        }
       })

       $.ajax({
          type: "POST",
          url: "?r=rbac/updatepower",
          data: {id:id,rid:rid},
          success: function(msg){
            // alert( "Data Saved: " + msg );
          }
       });

    })
</script>