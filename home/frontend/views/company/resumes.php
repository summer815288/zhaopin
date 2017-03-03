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
            $(this).attr("style",'background-color:greenyellow;width: 100%;height: 50px');
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
            <dt><h1><em></em>收到的简历</h1></dt>
            <dd  style="background-color: #fafafa;height: 1000px">
                <div>
                    <ul>
                        <li class="li selecteds">
                            所有简历</li>
                        <li class="li">未查看</li>
                        <li class="li">已查看</li>
                    </ul>
                </div>
                <div>
                    <div class="table">
                        <div>
                            <div>
                                <div style="background: #dcdcdc;padding: 15px;display: inline-block;width: 920px;">
                                    <table>
                                        <th style="display: inline;margin-right: 10px;"><input type="checkbox"/>&nbsp;<select name="" id="">
                                                <option value="">标签</option>
                                                <option value="">全部</option>
                                                <option value="">合适</option>
                                                <option value="">不合适</option>
                                                <option value="">待定</option>
                                                <option value="">未接通</option>
                                            </select></th>
                                        <th style="display: inline;margin-right: 50px;">姓名</th>
                                        <th style="display: inline;margin-right: 50px;">基本信息</th>
                                        <th style="display: inline;margin-right: 60px;"><select name="" id="">
                                                <option value="">应聘职位</option>
                                                <option value="">全部职位</option>
                                                <option value="">发布职位</option>
                                                <option value="">产品经理</option>
                                            </select></th>
                                        <th style="display: inline;margin-right: 60px;">申请时间</th>
                                        <th style="display: inline;margin-right: 75px;"><select name="" id="">
                                                <option value="">来源</option>
                                                <option value="">全部</option>
                                                <option value="">委托投递</option>
                                                <option value="">主动投递</option>
                                            </select></th>
                                        <th style="display: inline;margin-right: 90px;">操作</th>
                                    </table>
                                </div>
                                    <div  class="div">
                                        <div style="margin-left: 15px;width: 948px;padding: 10px;;">
                                            <table>
                                                <th style="display: inline;margin-right: 10px;"><input type="checkbox"/>&nbsp;<input type="button" value="+"/></th>
                                                <th style="display: inline;margin-right: 50px;">456</th>
                                                <th style="display: inline;margin-right: 50px;">16岁/大专/10年以上</th>
                                                <th style="display: inline;margin-right: 60px;">发布职位</th>
                                                <th style="display: inline;margin-right: 60px;">2017-02-22</th>
                                                <th style="display: inline;margin-right: 75px;">主动投递</th>
                                                <th style="display: inline;margin-right: 90px;">邀请面试 删除</th>
                                            </table>
                                        </div>

                                    </div>
                            </div>
                            <div style="margin-left: 30px;clear: both;">
                                <input type="checkbox"/>&nbsp;
                                <input type="button" style="padding: 5px;background-color: #0000ff;color: #ffffff" value="设为已查看"/>&nbsp;&nbsp;&nbsp;
                                <input type="button" style="padding: 5px;background-color: #0000ff;color: #ffffff" value="删除"/>&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                    <div class="table" style="display: none">2</div>
                    <div class="table" style="display: none">3</div>
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