<div class="site-login">
    <h3 style="color:cornflowerblue"><?=$model->scenario==\services\models\PermissionFrom::SCENARIO_ADD?'添加':'修改'?>权限</h3>
    <div class="show-img-box">
<?php
$form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,'name')->textInput(['readonly'=>$model->scenario!=\services\models\PermissionFrom::SCENARIO_ADD]);
echo $form->field($model,'description');
echo \yii\bootstrap\Html::submitButton($model->scenario==\services\models\PermissionFrom::SCENARIO_ADD?'立即添加':'立即修改',['class'=>'btn btn-sm btn-success']);
\yii\bootstrap\ActiveForm::end();
?>
    </div>
</div>

