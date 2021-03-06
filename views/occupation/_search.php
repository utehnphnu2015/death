<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OccupationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="occupation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dyear') ?>

    <?= $form->field($model, 'amphur') ?>

    <?= $form->field($model, 'tumbon') ?>

    <?= $form->field($model, 'ampurname') ?>

    <?php // echo $form->field($model, 'tambonname') ?>

    <?php // echo $form->field($model, 'ncause') ?>

    <?php // echo $form->field($model, 'diseasethai') ?>

    <?php // echo $form->field($model, 'occu') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
