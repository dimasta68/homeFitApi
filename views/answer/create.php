<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnswerInterview */

$this->title = 'Create Answer Interview';
$this->params['breadcrumbs'][] = ['label' => 'Answer Interviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="answer-interview-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
