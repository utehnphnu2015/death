<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sex */

$this->title = 'Create Sex';
$this->params['breadcrumbs'][] = ['label' => 'Sexes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sex-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
