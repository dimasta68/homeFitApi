<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<?php $form=ActiveForm::begin()?>
<?= $form->field($model,'username')?>
<?= $form->field($model,'password')->passwordInput()?>
<div class="form-group">
    <div >
        <?= Html::submitButton('Регистрация', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
    </div>
</div>
<?php ActiveForm::end()?>
