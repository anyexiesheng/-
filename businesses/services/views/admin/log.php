<h1  class="text-center">后台操作记录日志</h1>
<style>
    th{text-align: center}
    td{text-align: center}
</style>
<link rel="stylesheet" href="../langyi/css/flatpickr.min.css" />
<script src="../langyi/js/flatpickr.min.js"></script>
<script src="../langyi/js/flatpickr.l10n.zh.js"></script>
<form action="" method="get">
    <div class="input-group  pull-right" ><strong> </strong></div>
    <div class="input-group col-md-2 pull-left" >
        <input name="startTime" type="text" class="form-control" id="my-startDate" placeholder="请选择起始时间" />
    </div>
    <div class="input-group col-md-2 pull-left" >
        <input name="endTime" type="text" class="form-control" id="my-endDate" placeholder="请选择结束时间" / >
        <span class="input-group-btn">
           <button class="btn btn-info btn-search">查找</button>
        </span>
    </div>
    <input name="_csrf-backend" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken?>">
</form>
<table class="table table-bordered">
    <tr>
        <th>编号</th>
        <th>操作人</th>
        <th>操作详情</th>
        <th>操作时间</th>
    </tr>
    <?php foreach ($models as $model):?>
        <tr>
            <td><?=$model->id?></td>
            <td><?=$model->admin_name?></td>
            <td><?='管理员'.$model->admin_name.$model->description?></td>
            <td><?=date('Y-m-d H:i:s',$model->created_time)?></td>
        </tr>
    <?php endforeach;?>
</table>
<script>
    var time_start = $("#my-startDate").flatpickr({
        defaultDate:new Date(parseInt(<?php echo $beginTime?>) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ') || new Date(),
        time_24hr:true,
        allowInput:true,
        enableTime:true,
        enableSeconds:true,
        altFormat:"Y-m-d H:i:S",
        onChange:function(dateObject, dateString){
            var start = Date.parse(dateObject);
            var end = Date.parse($("#my-endDate").val());
            if(start > end){
                alert("开始日期不能大于结束日期")
                $("#my-startDate").val($("#my-endDate").val());
            }
        }
    });
    var time_end = $("#my-endDate").flatpickr({
        defaultDate:new Date(parseInt(<?php echo $endTime?>) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ') || new Date(),
        time_24hr:true,
        allowInput:true,
        enableTime:true,
        enableSeconds:true,
        altFormat:"Y-m-d H:i:S",
        onChange:function(dateObject, dateString){
            var start = Date.parse($("#my-startDate").val());
            var end = Date.parse(dateObject);
            if(start > end){
                alert("结束日期不能小于于开始日期")
                $("#my-endDate").val($("#my-startDate").val());
            }
        }
    });
    $(".toggle-table").on("click", function(){
        if(!$("#main").hasClass("show")){
            $("#main-table, #main").toggleClass("show1");
            setTimeout(function(){
                myChart.setOption(option);
            }, 5)
        }
        else {
            $("#main-table, #main").toggleClass("show1");
        }
    })
    //    var myChart = echarts.init(document.getElementById('main'));
</script>
<?php
//分页工具条
echo \yii\widgets\LinkPager::widget(['pagination'=>$pager,'lastPageLabel'=>'末页','nextPageLabel'=>'下一页','prevPageLabel'=>'上一页','firstPageLabel'=>'首页']);
