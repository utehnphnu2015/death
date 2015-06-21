<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Year */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="year-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ncause')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diseasethai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '2006')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '2007')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '2008')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '2009')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '2010')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '2011')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '2012')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '2013')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '2014')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
