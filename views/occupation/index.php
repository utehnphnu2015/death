<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\Pjax;
use kartik\dynagrid\DynaGrid;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\OccupationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Occupations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="occupation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Occupation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?php Pjax::begin();?> 
    <?php
    $gridColumns = [
    ['class'=>'kartik\grid\SerialColumn'],

            //'id',
            'dyear',
            //'amphur',
            'tumbon',
            [
            'attribute' => 'ampurname',
            'filter' => app\models\Disease::$campur,
            'value' => function($data) {
                return app\models\Disease::$campur[$data->ampurname];
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
            ],
             'tambonname',
             'occu',
             'name',       
             'ncause',
             'diseasethai',
             [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => 'total',
            'pageSummary' => true,
            'vAlign' => 'middle',
            'contentOptions' => ['class'=>'text-center'],
             ], 
         ];           
            echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'responsive' => true,
        'hover' => true,
        'floatHeader' => true,        
        'showPageSummary' => true,
//        'beforeHeader'=>[
//                [
//                    'columns'=>[
//                        ['content'=>'ลำดับที่', 'options'=>['colspan'=>1, 'class'=>'text-center warning']], 
//                        ['content'=>'', 'options'=>['colspan'=>1, 'class'=>'text-center warning']], 
//                        ['content'=>'ระยะเวลาที่ประชุม', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
//                        ['content'=>'', 'options'=>['colspan'=>1, 'class'=>'text-center warning']],
//                    ],
//                    'options'=>['class'=>'skip-export'] // remove this row from export
//                ]
//                     ],
        'panel' => [           
            'type' => GridView::TYPE_INFO,
            'heading' => 'สาเหตุการตาย : จากอาชีพ ',
        ],
    ]);
    ?>
<?php Pjax::end();?>
</div>
