<div class="site-login">
    <div class="show-img-box">
<?php
$form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,'username');
echo $form->field($model,'password')->passwordInput();
echo $form->field($model,'tel');
echo $form->field($model,'role',['inline'=>1])->checkboxList(\yii\helpers\ArrayHelper::map(Yii::$app->authManager->getRoles(),'name','name'));
echo \yii\bootstrap\Html::submitButton('提交',['class'=>'btn btn-sm btn-success']);
echo '&nbsp;',\yii\bootstrap\Html::a('取消',['admin/index'],['class'=>"btn btn-sm btn-danger"]);
\yii\bootstrap\ActiveForm::end();
?>
    </div>
</div>
