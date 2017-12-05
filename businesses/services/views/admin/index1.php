<!DOCTYPE html>
<html>
<head>
</head>
<body data-type="index">
<!--主要内容-->
<div class="tpl-content-wrapper">
    <div class="container-fluid am-cf">
        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 狼义文化欢迎您 <small></small></div>
    </div>
    <!--<div class="container-fluid am-cf">
        <div class="row">

            <div class="am-u-lg-3 tpl-index-settings-button">
                <button type="button" class="page-header-button"><span class="am-icon-paint-brush"></span> 设置</button>
            </div>
        </div>
    </div>-->
    <div class="admin-index">
        <dl data-am-scrollspy="{animation: 'slide-right', delay: 100}">
            <dt class="qs"><i class="am-icon-users"></i></dt>
            <dd><?=\common\models\Member::find()->where(['identity'=>3])->count()?></dd>
            <dd class="f12">美导人数</dd>
        </dl>
        <dl data-am-scrollspy="{animation: 'slide-right', delay: 300}">
            <dt class="cs"><i class="am-icon-users""></i></dt>
            <dd><?=\common\models\Member::find()->where(['identity'=>2])->count()?></dd>
            <dd class="f12">店家人数</dd>
        </dl>
        <dl data-am-scrollspy="{animation: 'slide-right', delay: 900}">
            <dt class="ls"><i class="am-icon-users""></i></dt>
            <dd><?=\common\models\Member::find()->where(['in','identity',[1,4]])->count()?></dd>
            <dd class="f12">美容师和顾客人数</dd>
        </dl>
        <dl data-am-scrollspy="{animation: 'slide-right', delay: 600}">
            <dt class="hs"><i class="am-icon-shopping-cart"></i></dt>
            <dd><?=\common\models\OrderLogistics::find()->where(['>=','time',mktime(0,0,0,date('m'),date('d'),date('Y'))])->andWhere(['<=','time',time()])->count()?></dd>
            <dd class="f12">今日订单</dd>
        </dl>
    </div>

<!--    <div class="row-content am-cf">-->
<!---->
<!--        <div class="am-u-sm-12 am-u-md-6 my-table-mytab">-->
<!--            <div class="admin-biaoge">-->
<!--                <table class="am-table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>团队统计</th>-->
<!--                        <th>全部会员</th>-->
<!--                        <th>全部未激活</th>-->
<!--                        <th>今日新增</th>-->
<!--                        <th>今日未激活</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    <tr>-->
<!--                        <td>团队1</td>-->
<!--                        <td>20人</td>-->
<!--                        <td><a href="#">4534</a></td>-->
<!--                        <td>+20</td>-->
<!--                        <td> 4534 </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>团队1</td>-->
<!--                        <td>20人</td>-->
<!--                        <td><a href="#">4534</a></td>-->
<!--                        <td>+20</td>-->
<!--                        <td> 4534 </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>团队1</td>-->
<!--                        <td>20人</td>-->
<!--                        <td><a href="#">4534</a></td>-->
<!--                        <td>+20</td>-->
<!--                        <td> 4534 </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>团队1</td>-->
<!--                        <td>20人</td>-->
<!--                        <td><a href="#">4534</a></td>-->
<!--                        <td>+20</td>-->
<!--                        <td> 4534 </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>合计</td>-->
<!--                        <td>合计</td>-->
<!--                        <td>4534</td>-->
<!--                        <td>+50</td>-->
<!--                        <td> 4534 </td>-->
<!--                    </tr>-->
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="row am-cf">-->
<!--            <div class="am-u-sm-12 am-u-md-6"">-->
<!--            <div class="widget am-cf">-->
<!--                <div class="widget-head am-cf">-->
<!--                    <div class="widget-title am-fl">月度财务收支计划</div>-->
<!--                    <div class="widget-function am-fr">-->
<!--                        <a href="javascript:;" class="am-icon-cog"></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="widget-body-md widget-body tpl-amendment-echarts am-fr" id="tpl-echarts">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->


<!--    <div class="row am-cf">-->
<!---->
<!--        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 widget-margin-bottom-lg">-->
<!---->
<!--            <div class="widget am-cf widget-body-lg">-->
<!---->
<!--                <div class="widget-body  am-fr">-->
<!--                    <div class="am-scrollable-horizontal ">-->
<!--                        <table width="100%" class="am-table am-table-compact am-text-nowrap tpl-table-black " id="example-r">-->
<!--                            <thead>-->
<!--                            <tr>-->
<!--                                <th>文章标题</th>-->
<!--                                <th>作者</th>-->
<!--                                <th>时间</th>-->
<!--                                <th>操作</th>-->
<!--                            </tr>-->
<!--                            </thead>-->
<!--                            <tbody>-->
<!--                            <tr class="gradeX">-->
<!--                                <td>新加坡大数据初创公司 Latize 获 150 万美元风险融资</td>-->
<!--                                <td>张鹏飞</td>-->
<!--                                <td>2016-09-26</td>-->
<!--                                <td>-->
<!--                                    <div class="tpl-table-black-operation">-->
<!--                                        <a href="javascript:;">-->
<!--                                            <i class="am-icon-pencil"></i> 编辑-->
<!--                                        </a>-->
<!--                                        <a href="javascript:;" class="tpl-table-black-operation-del">-->
<!--                                            <i class="am-icon-trash"></i> 删除-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr class="even gradeC">-->
<!--                                <td>自拍的“政治角色”：观众背对希拉里自拍合影表示“支持”</td>-->
<!--                                <td>天纵之人</td>-->
<!--                                <td>2016-09-26</td>-->
<!--                                <td>-->
<!--                                    <div class="tpl-table-black-operation">-->
<!--                                        <a href="javascript:;">-->
<!--                                            <i class="am-icon-pencil"></i> 编辑-->
<!--                                        </a>-->
<!--                                        <a href="javascript:;" class="tpl-table-black-operation-del">-->
<!--                                            <i class="am-icon-trash"></i> 删除-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr class="gradeX">-->
<!--                                <td>关于创新管理，我想和你当面聊聊。</td>-->
<!--                                <td>王宽师</td>-->
<!--                                <td>2016-09-26</td>-->
<!--                                <td>-->
<!--                                    <div class="tpl-table-black-operation">-->
<!--                                        <a href="javascript:;">-->
<!--                                            <i class="am-icon-pencil"></i> 编辑-->
<!--                                        </a>-->
<!--                                        <a href="javascript:;" class="tpl-table-black-operation-del">-->
<!--                                            <i class="am-icon-trash"></i> 删除-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr class="even gradeC">-->
<!--                                <td>究竟是趋势带动投资，还是投资引领趋势？</td>-->
<!--                                <td>着迷</td>-->
<!--                                <td>2016-09-26</td>-->
<!--                                <td>-->
<!--                                    <div class="tpl-table-black-operation">-->
<!--                                        <a href="javascript:;">-->
<!--                                            <i class="am-icon-pencil"></i> 编辑-->
<!--                                        </a>-->
<!--                                        <a href="javascript:;" class="tpl-table-black-operation-del">-->
<!--                                            <i class="am-icon-trash"></i> 删除-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr class="even gradeC">-->
<!--                                <td>Docker领域再添一员，网易云发布“蜂巢”，加入云计算之争</td>-->
<!--                                <td>醉里挑灯看键</td>-->
<!--                                <td>2016-09-26</td>-->
<!--                                <td>-->
<!--                                    <div class="tpl-table-black-operation">-->
<!--                                        <a href="javascript:;">-->
<!--                                            <i class="am-icon-pencil"></i> 编辑-->
<!--                                        </a>-->
<!--                                        <a href="javascript:;" class="tpl-table-black-operation-del">-->
<!--                                            <i class="am-icon-trash"></i> 删除-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
</div>
</body>
</html>
