<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\interview */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="interview-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_interview')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer')->dropDownList([
        '1' => 'кнопка',
        '2' => 'текстовое поле',
        '3' => 'две кнопки',
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
