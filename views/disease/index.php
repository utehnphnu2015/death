<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\Pjax;
use kartik\dynagrid\DynaGrid;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DiseaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Diseases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disease-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Disease', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?php Pjax::begin();?> 
    <?php
    $gridColumns = [
    ['class'=>'kartik\grid\SerialColumn'],

            //'id',
            //'amphur',
            //'tumbon',
            
            [
            'attribute' => 'ampurname',
            'header'=>'อำเภอ',    
            'filter' => app\models\Disease::$campur,
            'filterType'=>GridView::FILTER_SELECT2,
             'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],    
            'width'=>'180px',
            'value' => function($data) {
                return app\models\Disease::$campur[$data->ampurname];
                     },     
            'headerOptions' => ['class'=>'text-center'],   
            'filterInputOptions'=>['placeholder'=>'เลือก อำเภอ'],
            'format'=>'raw'
            ],           
             [
                'attribute'=>'tambonname',
                'header'=>'ตำบล',
                'filter'=>ArrayHelper::map(\app\models\Disease::find()->orderBy('tambonname')->asArray()->all(), 'tambonname', 'tambonname'),  
                'vAlign'=>'middle',
                'width'=>'50px',
                'filterType'=>GridView::FILTER_SELECT2,           
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'headerOptions' => ['class'=>'text-center'],
                'filterInputOptions'=>['placeholder'=>'เลือก ตำบล'],
                'format'=>'raw'
            ],
            [
                'attribute'=>'dyear',
                'header'=>'ปี',
                'filter'=>ArrayHelper::map(\app\models\Disease::find()->orderBy('dyear')->asArray()->all(), 'dyear', 'dyear'),  
                'vAlign'=>'middle',
                'width'=>'180px',
                'filterType'=>GridView::FILTER_SELECT2,           
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'headerOptions' => ['class'=>'text-center'],
                'contentOptions' => ['class'=>'text-center'],
                'filterInputOptions'=>['placeholder'=>'เลือก ปี'],
                'format'=>'raw'
            ],                 
            [
                'attribute'=>'ncause',
                'header'=>'ICD10',
                'filter'=>ArrayHelper::map(\app\models\Disease::find()->orderBy('ncause')->asArray()->all(), 'ncause', 'ncause'),  
                'vAlign'=>'middle',
                'width'=>'180px',
                'filterType'=>GridView::FILTER_SELECT2,           
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'headerOptions' => ['class'=>'text-center'],
                'contentOptions' => ['class'=>'text-center'],
                'filterInputOptions'=>['placeholder'=>'เลือก ICD10'],
                'format'=>'raw'
            ],                   
            [        
               'attribute' => 'diseasethai',
               'header'=>'โรค',
               'pageSummary' => 'รวมจำนวนราย ',
                'filter'=>ArrayHelper::map(\app\models\Disease::find()->orderBy('diseasethai')->asArray()->all(), 'diseasethai', 'diseasethai'),
                'filterType'=>GridView::FILTER_SELECT2,           
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'headerOptions' => ['class'=>'text-center'],
                'filterInputOptions'=>['placeholder'=>'เลือก ชื่อโรค'],
                'format'=>'raw'
            ], 
            [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => 'total',
            'header'=>'จำนวน',    
            'filter'=>FALSE,   
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
    //      'beforeHeader'=>[
//                [
//                    'columns'=>[
//                        ['content'=>'ลำดับที่', 'options'=>['colspan'=>1, 'class'=>'text-center warning']], 
//                        ['content'=>'', 'options'=>['colspan'=>1, 'class'=>'text-center warning']], 
//                        ['content'=>'', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
//                        ['content'=>'', 'options'=>['colspan'=>1, 'class'=>'text-center warning']],
//                    ],
//                    'options'=>['class'=>'skip-export'] // remove this row from export
//                ]
//                     ],
        'panel' => [           
            'type' => GridView::TYPE_INFO,
            'heading' => 'สาเหตุการตาย : แยกตามกลุ่มโรค ',
        ],
    ]);
    ?>
<?php Pjax::end();?>
</div>
