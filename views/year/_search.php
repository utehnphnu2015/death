<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\YearSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="year-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ncause') ?>

    <?= $form->field($model, 'diseasethai') ?>

    <?= $form->field($model, '2006') ?>

    <?= $form->field($model, '2007') ?>

    <?php // echo $form->field($model, '2008') ?>

    <?php // echo $form->field($model, '2009') ?>

    <?php // echo $form->field($model, '2010') ?>

    <?php // echo $form->field($model, '2011') ?>

    <?php // echo $form->field($model, '2012') ?>

    <?php // echo $form->field($model, '2013') ?>

    <?php // echo $form->field($model, '2014') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
