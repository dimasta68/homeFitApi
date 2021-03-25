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

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
