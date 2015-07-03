<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\Pjax;
use kartik\dynagrid\DynaGrid;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\YearSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Years';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="year-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Year', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?php Pjax::begin();?> 
    <?php
    $gridColumns = [
    ['class'=>'kartik\grid\SerialColumn'],

            //'id',
           [
                'attribute'=>'ncause',
                'header'=>'ICD10',
                'filter'=>ArrayHelper::map(\app\models\Year::find()->orderBy('ncause')->asArray()->all(), 'ncause', 'ncause'),  
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
                'filter'=>ArrayHelper::map(\app\models\Year::find()->orderBy('diseasethai')->asArray()->all(), 'diseasethai', 'diseasethai'),
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
            'attribute' => '2006',
            'header'=>'2006',    
            'pageSummary' => true,
            'filter'=>FALSE,    
            'vAlign' => 'middle',
            'contentOptions' => ['class'=>'text-center'],
             ],
            [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => '2007',
            'header'=>'2007',    
            'pageSummary' => true,
            'filter'=>FALSE,    
            'vAlign' => 'middle',
            'contentOptions' => ['class'=>'text-center'],
             ],
             [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => '2008',
            'header'=>'2008',    
            'pageSummary' => true,
            'filter'=>FALSE,    
            'vAlign' => 'middle',
            'contentOptions' => ['class'=>'text-center'],
             ],
             [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => '2009',
            'header'=>'2009',    
            'pageSummary' => true,
            'filter'=>FALSE,    
            'vAlign' => 'middle',
            'contentOptions' => ['class'=>'text-center'],
             ],
             [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => '2010',
            'header'=>'2010',    
            'pageSummary' => true,
            'filter'=>FALSE,    
            'vAlign' => 'middle',
            'contentOptions' => ['class'=>'text-center'],
             ],
             [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => '2011',
            'header'=>'2011',    
            'pageSummary' => true,
            'filter'=>FALSE,    
            'vAlign' => 'middle',
            'contentOptions' => ['class'=>'text-center'],
             ],
             [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => '2012',
            'header'=>'2012',    
            'pageSummary' => true,
            'filter'=>FALSE,    
            'vAlign' => 'middle',
            'contentOptions' => ['class'=>'text-center'],
             ],
             [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => '2013',
            'header'=>'2013',    
            'pageSummary' => true,
            'filter'=>FALSE,    
            'vAlign' => 'middle',
            'contentOptions' => ['class'=>'text-center'],
             ],
             [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => '2014',
            'header'=>'2014',    
            'pageSummary' => true,
            'filter'=>FALSE,    
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
            'floatHeader' => FALSE,        
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
            'type' => GridView::TYPE_PRIMARY,
            'heading' => 'สาเหตุการตาย : รายปี ',
        ],
    ]);
    ?>
<?php Pjax::end();?>
</div>