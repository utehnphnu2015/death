<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Disease */

$this->title = 'Create Disease';
$this->params['breadcrumbs'][] = ['label' => 'Diseases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disease-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
