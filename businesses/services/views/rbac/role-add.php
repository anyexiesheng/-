<div class="site-login">
    <h3 style="color:cornflowerblue"><?=$model->scenario==\services\models\RoleForm::SCENARIO_ADD?'添加':'修改'?>角色</h3>
    <div class="show-img-box">
<?php
$form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,'name')->textInput(['readonly'=>$model->scenario!=\services\models\RoleForm::SCENARIO_ADD]);
echo $form->field($model,'description');
echo $form->field($model,'permission',['inline'=>1])->checkboxList(\yii\helpers\ArrayHelper::map(Yii::$app->authManager->getPermissions(),'name','description'));
echo \yii\bootstrap\Html::submitButton($model->scenario==\services\models\RoleForm::SCENARIO_ADD?'立即添加':'立即修改',['class'=>'btn btn-sm btn-success']);
\yii\bootstrap\ActiveForm::end();
?>
    </div>
</div>
