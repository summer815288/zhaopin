<link rel="stylesheet" href="/74cms_v3.7_20160412/upload/templates/default/css/user_common.css">
<link rel="stylesheet" href="/74cms_v3.7_20160412/upload/templates/default/css/user_company.css">
<script type="text/javascript" src="style/js/right.js"></script>
<div id="container">
    <?php include"left.php";?>
    <div class="content">
        <dl class="company_center_content" >
            <dt><h1><em></em>面试邀请</h1></dt>
            <dd  style="background-color: #fafafa">
                <div class="bbox1">
                    <div class="topnav get_resume">
                        <div class="titleH1"><div class="h1-title">面试邀请</div></div>
                        <div class="navs link_bk">
                            <a href="?act=interview_list&amp;look=" class="se">所有简历<span class="check">(2)</span></a>
                            <a href="?act=interview_list&amp;look=1">对方未查看<span class="no_check">(0)</span></a>
                            <a href="?act=interview_list&amp;look=2">对方已查看<span class="check">(2)</span></a>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <form id="form1" name="form1" method="post" action="?act=interview_del">
                        <div class="company-data-list">
                            <div class="c-data-top interview clearfix">
                                <div class="item f-left check-item"><input name="chkAll" id="chk" class="checkbox" type="checkbox"></div>
                                <div class="item f-left top-item1">姓名</div>
                                <div class="item f-left top-item2">基本信息</div>
                                <div class="item f-left top-item3">
                                    <div class="data-filter span2">
                                        <span class="filter-span">面试职位<i class="filter-icon"></i></span>
                                        <ul class="filter-down">
                                            <li><a href="?act=interview_list&amp;jobsid=&amp;jname=&amp;look=">全部职位</a></li>
                                            <li><a href="?act=interview_list&amp;jobsid=2&amp;jname=发布职位&amp;look=">发布职位</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item f-left top-item5">
                                    <div class="data-filter span4">
                                        <span class="filter-span">查看状态<i class="filter-icon"></i></span>
                                        <ul class="filter-down">
                                            <li><a href="?act=interview_list&amp;jobsid=&amp;jname=&amp;look=">全部</a></li>
                                            <li><a href="?act=interview_list&amp;jobsid=&amp;jname=&amp;look=2">对方已查看</a></li>
                                            <li><a href="?act=interview_list&amp;jobsid=&amp;jname=&amp;look=1">对方未查看</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item f-left top-item6">邀请时间</div>
                                <div class="item f-left top-item7">操作</div>
                            </div>
                            <div class="c-data-row">
                                <div class="c-data-content interview clearfix">
                                    <div class="c-item f-left check-item"><input name="y_id[]" id="y_id" value="3" class="checkbox" type="checkbox"></div>
                                    <div class="c-item f-left content1"><a href="javascript:;" class="name-link underline">456</a></div>
                                    <div class="c-item f-left content2">16岁/大专/10年以上</div>
                                    <div class="c-item f-left content3"><a href="http://www.php9.com/74cms_v3.7_20160412/upload/jobs/jobs-show.php?id=2" class="jobs-name-link underline" target="_blank">发布职位</a></div>
                                    <div class="c-item f-left content5">
                                        对方已查看
                                    </div>
                                    <div class="c-item f-left content6"><span class="data-time">2017-02-22</span></div>
                                    <div class="c-item f-left content7">
                                        <a href="javascript:;" did="3" class="data-ctrl underline check-detail">详情</a>
                                        &nbsp;
                                        <a href="javascript:;" class="data-ctrl underline ctrl-del" url="?act=interview_del&amp;y_id=3">删除</a>
                                    </div>
                                </div>
                                <div class="data-detail">
                                    <i class="arrow"></i>
                                    <div class="detail-block clearfix">
                                        <div class="db-type f-left">求职意向：</div>
                                        <div class="db-content f-left">
                                            <div class="job-flow"><span>期望工作性质 全职</span> | <span>期望工作地区 东城区,宣武区,石景山区</span> | <span>期望薪资 <em>1万以上/月</em></span> | <span>期望职位 计算机辅助设计/CAD,动画/3D设计,智能大厦系统集成</span> | <span>期望行业 计算机软件/硬件,网络游戏,金融(投资/证券</span></div>
                                        </div>
                                    </div>
                                    <div class="detail-block clearfix">
                                        <div class="db-type f-left">&nbsp;</div>
                                        <div class="db-btn-group f-left">
                                            <a href="http://www.php9.com/74cms_v3.7_20160412/upload/resume/resume-show.php?id=3" class="db-btn btn1 f-left" target="_blank"></a>
                                            <a href="company_resume_doc.php?y_id=3" class="db-btn btn2 f-left"></a>
                                            <a href="javascript:;" class="db-btn btn3 f-left" resume_id="3" uid=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-data-row">
                                <div class="c-data-content interview clearfix">
                                    <div class="c-item f-left check-item"><input name="y_id[]" id="y_id" value="2" class="checkbox" type="checkbox"></div>
                                    <div class="c-item f-left content1"><a href="javascript:;" class="name-link underline">卜晨晖</a></div>
                                    <div class="c-item f-left content2">16岁/高中/10年以上</div>
                                    <div class="c-item f-left content3"><a href="http://www.php9.com/74cms_v3.7_20160412/upload/jobs/jobs-show.php?id=2" class="jobs-name-link underline" target="_blank">发布职位</a></div>
                                    <div class="c-item f-left content5">
                                        对方已查看
                                    </div>
                                    <div class="c-item f-left content6"><span class="data-time">2017-02-21</span></div>
                                    <div class="c-item f-left content7">
                                        <a href="javascript:;" did="2" class="data-ctrl underline check-detail">详情</a>
                                        &nbsp;
                                        <a href="javascript:;" class="data-ctrl underline ctrl-del" url="?act=interview_del&amp;y_id=2">删除</a>
                                    </div>
                                </div>
                                <div class="data-detail">
                                    <i class="arrow"></i>
                                    <div class="detail-block clearfix">
                                        <div class="db-type f-left">工作经历：</div>
                                        <div class="db-content f-left">
                                            <p class="db-info"><span>1998年12月-2003年6月</span><span>添加经历</span><span>添加经历职位</span></p>
                                        </div>
                                    </div>
                                    <div class="detail-block clearfix">
                                        <div class="db-type f-left">求职意向：</div>
                                        <div class="db-content f-left">
                                            <div class="job-flow"><span>期望工作性质 全职</span> | <span>期望工作地区 东城区,宣武区,石景山区</span> | <span>期望薪资 <em>1500~2000元/月</em></span> | <span>期望职位 计算机应用,互联网/网络,计算机软硬件</span> | <span>期望行业 计算机软件/硬件,计算机系统/维修,互联网/电子商务</span></div>
                                        </div>
                                    </div>
                                    <div class="detail-block clearfix">
                                        <div class="db-type f-left">&nbsp;</div>
                                        <div class="db-btn-group f-left">
                                            <a href="http://www.php9.com/74cms_v3.7_20160412/upload/resume/resume-show.php?id=2" class="db-btn btn1 f-left" target="_blank"></a>
                                            <a href="company_resume_doc.php?y_id=2" class="db-btn btn2 f-left"></a>
                                            <a href="javascript:;" class="db-btn btn3 f-left" resume_id="2" uid=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-data-row last">
                                <div class="c-data-content apply_jobs clearfix">
                                    <div class="c-item f-left check-item"><input name="chkAll" id="chk2" class="checkbox" type="checkbox"></div>
                                    <div class="data-last-btn f-left">
                                        <input value="删除" class="btn-65-30blue ctrl-del" act="?act=interview_del" type="button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- 这里加分页 -->
                </div>
            </dd>
        </dl>
    </div>
</div>
<script type="text/javascript">

</script>
