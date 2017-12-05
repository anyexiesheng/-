<h1 style="color: #960a0b" class="text-center">用户列表</h1>
<style>
    th{text-align: center}
    td{text-align: center}
</style>
<?=\yii\bootstrap\Html::a('添加新用户',['admin/add'],['class'=>'btn btn-sm btn-success'])?>
<table class="table table-bordered">
    <tr>
        <th>用户名</th>
        <th>手机号</th>
        <th>最后登陆时间</th>
        <th>最后登录IP</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
    <?php foreach ($models as $model):?>
    <tr>
        <td><?=$model->username?></td>
        <td><?=$model->tel?></td>
        <td><?=$model->last_login_time?date('Y-m-d H:i:s',$model->last_login_time):''?></td>
        <td><?=$model->last_login_ip?></td>
        <td><?=$model->status==0?'已禁用':'已启用'?></td>
        <td>
            <?=\yii\bootstrap\Html::a($model->status==1?'禁用':'启用',['admin/delete','id'=>$model->id,'status'=>$model->status==1?0:1],['class'=>'btn btn-sm btn-warning'])?>
            <?=\yii\bootstrap\Html::a('修改',['admin/edit','id'=>$model->id],['class'=>'btn btn-sm btn-info'])?>
            <a href="#" class="btn btn-sm btn-danger shanchu" title="/businesses/services/index/admin/del?id=<?=$model->id?>">删除</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>
<?php
//分页工具条
echo \yii\widgets\LinkPager::widget(['pagination'=>$pager,'lastPageLabel'=>'末页','nextPageLabel'=>'下一页','prevPageLabel'=>'上一页','firstPageLabel'=>'首页']);


