<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\Pjax;
use kartik\dynagrid\DynaGrid;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SexSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Sexes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sex-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Sex', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?php Pjax::begin();?> 
    <?php
    $gridColumns = [
    ['class'=>'kartik\grid\SerialColumn'],

           // 'id',
            //'tumbon',
            //'amphur',
            [
            'attribute' => 'sex',
            'header'=>'เพศ',
            'width'=>'50px',   
            'filter' => app\models\Sex::$dsex,
            'filterType'=>GridView::FILTER_SELECT2,
             'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],    
            'width'=>'180px',
            'value' => function($data) {
                return app\models\Sex::$dsex[$data->sex];
                     },     
            'headerOptions' => ['class'=>'text-center'],   
            'filterInputOptions'=>['placeholder'=>'เลือก เพศ'],
            'format'=>'raw'
            ],
            [
            'attribute' => 'ampurname',
            'header'=>'อำเภอ',    
            'filter' => app\models\Sex::$campur,
            'filterType'=>GridView::FILTER_SELECT2,
             'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],    
            'width'=>'150px',
            'value' => function($data) {
                return app\models\Sex::$campur[$data->ampurname];
                     },     
            'headerOptions' => ['class'=>'text-center'],   
            'filterInputOptions'=>['placeholder'=>'เลือก อำเภอ'],
            'format'=>'raw'
            ],
            
            [
                'attribute'=>'tambonname',
                'header'=>'ตำบล',
                'filter'=>ArrayHelper::map(\app\models\Sex::find()->orderBy('tambonname')->asArray()->all(), 'tambonname', 'tambonname'),  
                'vAlign'=>'middle',
                'width'=>'120px',
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
                'pageSummary' => 'รวมจำนวนราย ',
                'filter'=>ArrayHelper::map(\app\models\Sex::find()->orderBy('dyear')->asArray()->all(), 'dyear', 'dyear'),  
                'vAlign'=>'middle',
                'width'=>'50px',
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
            'class' => 'kartik\grid\DataColumn',
            'attribute' => 'total',
            'header'=>'จำนวน',
            'width'=>'50px',    
            'filter'=>FALSE,   
            'pageSummary' => true,
            'vAlign' => 'middle',
            'headerOptions' => ['class'=>'text-center'],    
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
            'type' => GridView::TYPE_WARNING,
            'heading' => 'สาเหตุการตาย : แยกตามเพศ ',
        ],
    ]);
    ?>
<?php Pjax::end();?>
</div>