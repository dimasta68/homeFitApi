<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model app\models\Task */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_task')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc_task')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
            'maxlength' => true
        ],
    ]);?>

    <?= $form->field($model, 'lavel')->dropDownList([
        '1' => 'легко',
        '2' => 'Средне',
        '3' => 'сложно',
    ]); ?>

    <?= $form->field($model, 'inactive')->dropDownList([
        '1' => 'Активно',
        '2' => 'Не активно',
        '3' => 'Приостановлено',
    ]); ?>
   <?= $form->field($model, 'period')->dropDownList([
        '1' => 'ежедневно',
        '2' => 'еженедельно',
        '3' => 'ежемесячно',
    ]); ?>
       <?= $form->field($model, 'lead_time')->dropDownList([
        '1' => 'утро',
        '2' => 'день',
        '3' => 'вечер',
    ]); ?>
           <?= $form->field($model, 'time')->dropDownList([
        '1' => '21 день',
        '2' => '12 недель',
        '3' => '24 недели',
    ]); ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
