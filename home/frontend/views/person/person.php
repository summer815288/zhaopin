<?php use yii\helpers\Url;?>
<div id="container">
<?php  include('left.php')?>
    <!-- end .sidebar -->
            <div class="content">
            	<dl class="company_center_content">
                    <dt><h1><em></em>发布新职位</h1></dt>
                    <dd>
                    	<div class="ccc_tr">今日已发布 <span>0</span> 个职位   还可发布 <span>5</span> 个职位</div>
                    	<form action="http://www.lagou.com/corpPosition/preview.html" method="post" id="jobForm">
                            <input type="hidden" value="" name="id">
                            <input type="hidden" value="create" name="preview">
                            <input type="hidden" value="25927" name="companyId">
                            <input type="hidden" value="c29d4a7c35314180bf3be5eb3f00048f" name="resubmitToken">
                            <dt class="redstar">职位信息:</dt>
                            <table class="btm">
                            	<tbody>
                                    <tr>
                                        <td width="25"><span class="redstar">*</span></td>
                                        <td width="95">职位名称：</td>
                                        <td>
                                            <input type="text" placeholder="请输入职位名称，如：产品经理" value="" name="jobs_name" id="positionName">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25"><span class="redstar">*</span></td>
                                        <td width="85">职业性质</td>
                                        <td>
                                            <ul class="profile_radio clearfix reset">
                                                <li>
                                                    全职<em></em>
                                                    <input type="radio" name="jobNature" value="62">
                                                </li>
                                                <li>
                                                    兼职<em></em>
                                                    <input type="radio" name="jobNature" value="63">
                                                </li>
                                                <li>
                                                    实习<em></em>
                                                    <input type="radio" name="jobNature" value="64">
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="25"><span class="redstar">*</span></td>
                                        <td width="85">职位类别</td>
                                        <td>
                                            <input type="hidden" id="positionType" value="" name="positionType">
                                            <input type="button" value="请选择职位类别" id="select_category" class="selectr selectr_380">
                                            <div class="dn" id="box_job" style="display: none;">
                                                <dl>
                                                    <dt>技术</dt>
                                                    <dd>
                                                        <ul class="reset job_main">
                                                            <li>
                                                                <span>后端开发</span>
                                                                <ul class="reset job_sub dn">
                                                                    <li>Java</li>
                                                                    <li>C++</li>
                                                                    <li>PHP</li>
                                                                    <li>数据挖掘</li>
                                                                    <li>C</li>
                                                                    <li>C#</li>
                                                                    <li>.NET</li>
                                                                    <li>Hadoop</li>
                                                                    <li>Python</li>
                                                                    <li>Delphi</li>
                                                                    <li>VB</li>
                                                                    <li>Perl</li>
                                                                    <li>Ruby</li>
                                                                    <li>Node.js</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>移动开发</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -160px;">
                                                                    <li>HTML5</li>
                                                                    <li>Android</li>
                                                                    <li>iOS</li>
                                                                    <li>WP</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>前端开发</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -310px;">
                                                                    <li>web前端</li>
                                                                    <li>Flash</li>
                                                                    <li>html5</li>
                                                                    <li>JavaScript</li>
                                                                    <li>U3D</li>
                                                                    <li>COCOS2D-X</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>测试</span>
                                                                <ul class="reset job_sub dn">
                                                                    <li>测试工程师</li>
                                                                    <li>自动化测试</li>
                                                                    <li>功能测试</li>
                                                                    <li>性能测试</li>
                                                                    <li>测试开发</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>运维</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -160px;">
                                                                    <li>运维工程师</li>
                                                                    <li>运维开发工程师</li>
                                                                    <li>网络工程师</li>
                                                                    <li>系统工程师</li>
                                                                    <li>IT支持</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>DBA</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -310px;">
                                                                    <li>MySQL</li>
                                                                    <li>SQLServer</li>
                                                                    <li>Oracle</li>
                                                                    <li>DB2</li>
                                                                    <li>MongoDB</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>项目管理</span>
                                                                <ul class="reset job_sub dn">
                                                                    <li>项目经理</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>高端技术职位</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -160px;">
                                                                    <li>技术经理</li>
                                                                    <li>技术总监</li>
                                                                    <li>测试经理</li>
                                                                    <li>架构师</li>
                                                                    <li>CTO</li>
                                                                    <li>运维总监</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt>产品</dt>
                                                    <dd>
                                                        <ul class="reset job_main">
                                                            <li>
                                                                <span>产品经理</span>
                                                                <ul class="reset job_sub dn">
                                                                    <li>产品经理</li>
                                                                    <li>网页产品经理</li>
                                                                    <li>移动产品经理</li>
                                                                    <li>产品助理</li>
                                                                    <li>数据产品经理</li>
                                                                    <li>电商产品经理</li>
                                                                    <li>游戏策划</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>产品设计师</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -160px;">
                                                                    <li>网页产品设计师</li>
                                                                    <li>无线产品设计师</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>高端产品职位</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -310px;">
                                                                    <li>产品部经理</li>
                                                                    <li>产品总监</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt>设计</dt>
                                                    <dd>
                                                        <ul class="reset job_main">
                                                            <li>
                                                                <span>视觉设计</span>
                                                                <ul class="reset job_sub dn">
                                                                    <li>视觉设计师</li>
                                                                    <li>网页设计师</li>
                                                                    <li>Flash设计师</li>
                                                                    <li>APP设计师</li>
                                                                    <li>UI设计师</li>
                                                                    <li>平面设计师</li>
                                                                    <li>美术设计师（2D/3D）</li>
                                                                    <li>广告设计师</li>
                                                                    <li>多媒体设计师</li>
                                                                    <li>原画师</li>
                                                                    <li>游戏特效</li>
                                                                    <li>游戏界面设计师</li>
                                                                    <li>游戏场景</li>
                                                                    <li>游戏角色</li>
                                                                    <li>游戏动作</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>交互设计</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -160px;">
                                                                    <li>交互设计师</li>
                                                                    <li>无线交互设计师</li>
                                                                    <li>网页交互设计师</li>
                                                                    <li>硬件交互设计师</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>用户研究</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -310px;">
                                                                    <li>数据分析师</li>
                                                                    <li>用户研究员</li>
                                                                    <li>游戏数值策划</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>高端设计职位</span>
                                                                <ul class="reset job_sub dn">
                                                                    <li>设计经理/主管</li>
                                                                    <li>设计总监</li>
                                                                    <li>视觉设计经理/主管</li>
                                                                    <li>视觉设计总监</li>
                                                                    <li>交互设计经理/主管</li>
                                                                    <li>交互设计总监</li>
                                                                    <li>用户研究经理/主管</li>
                                                                    <li>用户研究总监</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt>运营</dt>
                                                    <dd>
                                                        <ul class="reset job_main">
                                                            <li>
                                                                <span>运营</span>
                                                                <ul class="reset job_sub dn">
                                                                    <li>用户运营</li>
                                                                    <li>产品运营</li>
                                                                    <li>数据运营</li>
                                                                    <li>内容运营</li>
                                                                    <li>活动运营</li>
                                                                    <li>商家运营</li>
                                                                    <li>品类运营</li>
                                                                    <li>游戏运营</li>
                                                                    <li>网络推广</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>编辑</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -160px;">
                                                                    <li>副主编</li>
                                                                    <li>内容编辑</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>客服</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -310px;">
                                                                    <li>售前咨询</li>
                                                                    <li>售后客服</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>高端运营职位</span>
                                                                <ul class="reset job_sub dn">
                                                                    <li>主编</li>
                                                                    <li>运营总监</li>
                                                                    <li>COO</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt>市场与销售</dt>
                                                    <dd>
                                                        <ul class="reset job_main">
                                                            <li>
                                                                <span>市场/营销</span>
                                                                <ul class="reset job_sub dn">
                                                                    <li>市场营销</li>
                                                                    <li>市场策划</li>
                                                                    <li>市场顾问</li>
                                                                    <li>市场推广</li>
                                                                    <li>SEO</li>
                                                                    <li>SEM</li>
                                                                    <li>商务渠道</li>
                                                                    <li>商业数据分析</li>
                                                                    <li>活动策划</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>公关</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -160px;">
                                                                    <li>媒介经理</li>
                                                                    <li>广告协调</li>
                                                                    <li>品牌公关</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>销售</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -310px;">
                                                                    <li>销售专员</li>
                                                                    <li>销售经理</li>
                                                                    <li>客户代表</li>
                                                                    <li>大客户代表</li>
                                                                    <li>BD经理</li>
                                                                    <li>商务渠道</li>
                                                                    <li>渠道销售</li>
                                                                    <li>代理商销售</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>高端市场职位</span>
                                                                <ul class="reset job_sub dn">
                                                                    <li>市场总监</li>
                                                                    <li>销售总监</li>
                                                                    <li>商务总监</li>
                                                                    <li>CMO</li>
                                                                    <li>公关总监</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt>职能</dt>
                                                    <dd>
                                                        <ul class="reset job_main">
                                                            <li>
                                                                <span>人力资源</span>
                                                                <ul class="reset job_sub dn">
                                                                    <li>人力资源</li>
                                                                    <li>招聘</li>
                                                                    <li>HRBP</li>
                                                                    <li>人事/HR</li>
                                                                    <li>培训经理</li>
                                                                    <li>薪资福利经理</li>
                                                                    <li>绩效考核经理</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>行政</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -160px;">
                                                                    <li>助理</li>
                                                                    <li>前台</li>
                                                                    <li>法务</li>
                                                                    <li>行政</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>财务</span>
                                                                <ul class="reset job_sub dn" style="margin-left: -310px;">
                                                                    <li>会计</li>
                                                                    <li>出纳</li>
                                                                    <li>财务</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <span>高端职能职位</span>
                                                                <ul class="reset job_sub dn">
                                                                    <li>行政总监/经理</li>
                                                                    <li>财务总监/经理</li>
                                                                    <li>HRD/HRM</li>
                                                                    <li>CFO</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="redstar">*</span></td>
                                        <td>招聘人数：</td>
                                        <td>
                                            <input type="text" placeholder="请输入职位名称，如：产品经理" value="" name="amount">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="redstar">*</span></td>
                                        <td>工作城市</td>
                                        <td>
                                            <input type="text" placeholder="请输入工作城市，如：北京" value="" name="district_cn">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="redstar">*</span></td>
                                        <td width="85">薪资待遇：</td>
                                        <td>
                                            <select name="wage_cn" id=""></select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="redstar">*</span></td>
                                        <td width="85">薪资待遇：</td>
                                        <td>
                                            <button>+</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <table class="btm">
                            	<tbody>
                                <dt class="redstar">职位要求:</dt>
                                <tr>
                                    <td width="25"><span class="redstar">*</span></td>
                                    <td width="95">性别要求：</td>
                                    <td>
                                        <ul class="profile_radio clearfix reset">
                                            <li>
                                                不限<em></em>
                                                <input type="radio" name="jobNature" value="3">
                                            </li>
                                            <li>
                                                男<em></em>
                                                <input type="radio" name="jobNature" value="1">
                                            </li>
                                            <li>
                                                女<em></em>
                                                <input type="radio" name="jobNature" value="2">
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="25"><span class="redstar">*</span></td>
                                    <td width="85">学历要求：</td>
                                    <td>
                                        <select name="education_cn" id=""></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="25"><span class="redstar">*</span></td>
                                    <td width="85">工作经验：</td>
                                    <td>
                                        <select name="experience_cn" id=""></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="25"><span class="redstar">*</span></td>
                                    <td width="85">年龄要求：</td>
                                    <td>
                                        <select name="maxage" id=""></select>至
                                    </td>
                                    <td><select name="maxage" id=""></select></td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="btm">
                                <dt class="redstar">职位描述:</dt>
                            	<tbody>
                                <tr>
                                	<td width="25"><span class="redstar">*</span></td>
                                	<td width="85">职位描述:</td>
                                	<td>
                                        <textarea name="" id="" cols="30" rows="10"></textarea>
                                    </td>
                                </tr>
                            </tbody></table>
                           
                            <table class="btm">
                                <dt class="redstar">联系方式:</dt>
                            	<tbody>
                                        <tr>
                                            <td width="25"><span class="redstar">*</span></td>
                                            <td width="95">联系人：</td>
                                            <td>
                                                <input type="text" name="contact">
                                            </td>
                                            <td><input type="checkbox" value="1" name="contact_show"/>对外公开联系人</td>
                                        </tr>
                                        <tr>
                                            <td width="25"><span class="redstar">*</span></td>
                                            <td width="95">联系手机：</td>
                                            <td>
                                                <input type="text" name="telephone">
                                            </td>
                                            <td><input type="checkbox" value="1" name="telephone_show"/>对外公开联系人</td>
                                        </tr>
                                        <tr>
                                            <td width="25"><span class="redstar">*</span></td>
                                            <td width="95">联系邮箱：</td>
                                            <td>
                                                <input type="text" name="email">
                                            </td>
                                            <td><input type="checkbox" value="1" name="email_show"/>对外公开联系人</td>
                                        </tr>
                                        <tr>
                                            <td width="25"><span class="redstar">*</span></td>
                                            <td width="95">联系地址：</td>
                                            <td>
                                                <input type="text" name="address">
                                            </td>
                                        </tr>
                            </tbody>
                            </table>
                            
                            <table>
                                <dt class="redstar">高级设置:</dt>
                            	<tbody>
                                <tr>
                                	<td width="25"><span class="redstar">*</span></td>
                                	<td colspan="2">
                                    	接收简历邮箱： <span id="receiveEmailVal">admin@admin.com</span>
                                        <input type="hidden" name="email_two">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                    	简历短信通知：
                                    </td>
                                    <td><input type="text" name="telephone_two"></td>
                                </tr>
                                <tr>
                                	<td width="25"></td>
                                	<td colspan="2">
                                    	<input type="submit" value="预览" id="jobPreview" class="btn_32">
                                    	<input type="button" value="发布" id="formSubmit" class="btn_32">
                                    </td>
                                </tr>
                         	</tbody></table>
                        </form>
                    </dd>
                </dl>
            </div><!-- end .content -->


<?php  include('footer.php')?>
</div>




