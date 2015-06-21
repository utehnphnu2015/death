<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Occupation */

$this->title = 'Create Occupation';
$this->params['breadcrumbs'][] = ['label' => 'Occupations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="occupation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
