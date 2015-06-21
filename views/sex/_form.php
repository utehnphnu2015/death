<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sex */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sex-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dyear')->textInput() ?>

    <?= $form->field($model, 'amphur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tumbon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ampurname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tambonname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
