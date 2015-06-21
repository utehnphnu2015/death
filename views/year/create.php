<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Year */

$this->title = 'Create Year';
$this->params['breadcrumbs'][] = ['label' => 'Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="year-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
