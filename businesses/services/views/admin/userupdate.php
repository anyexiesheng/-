<div class="site-login">
    <div class="show-img-box">
<?php
$form=\yii\bootstrap\ActiveForm::begin();
echo $form->field($model,'oldpassword')->passwordInput();
echo $form->field($model,'newpassword')->passwordInput();
echo $form->field($model,'surepassword')->passwordInput();

echo \yii\bootstrap\Html::submitButton('立即修改',['class'=>'btn btn-sm btn-info']);
echo '&nbsp;',\yii\bootstrap\Html::a('取消',['admin/index1'],['class'=>"btn btn-sm btn-danger"]);
\yii\bootstrap\ActiveForm::end();
?>
    </div>
</div>
