<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\editable\Editable;
use app\models\Ctambon;
use kartik\grid\GridView;



/* @var $this yii\web\View */
/* @var $searchModel app\models\DiseaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Diseases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disease-index">
    <a href="../../config/web.php"></a>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Disease', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?php Pjax::begin();?> 
    <?php
    $gridColumns = [
    ['class'=>'kartik\grid\SerialColumn'],

           // 'id',
           // 'dyear',
            //'amphur',
           // 'tumbon',
           //'ampurname',
            [
            'attribute' => 'ampurname',
            'filter' => app\models\Disease::$campur,
            'value' => function($data) {
                return app\models\Disease::$campur[$data->ampurname];
            },
            'headerOptions' => ['class'=>'text-center'],
            //'contentOptions' => ['class'=>'text-center'],
            ],  
            'tumbon',        
            'tambonname',            
            'dyear',     
                    
            [
                'attribute'=>'tambonname', 
                'vAlign'=>'middle',
                'width'=>'180px',
                'value'=>function ($model, $key, $index, $widget) { 
//                    return Html::a($model->tumbon->tambonname,  
//                        '#', 
//                        ['title'=>'View author detail', 'onclick'=>'alert("This will open the author page.\n\nDisabled for this demo!")']);
                },
                'filterType'=>GridView::FILTER_SELECT2,
               // 'filter'=>ArrayHelper::map(Ctambon::find()->orderBy('tambonname')->asArray()->all(), 'tambonname', 'tambonname'), 
                'filter'=>ArrayHelper::map(\app\models\Ctambon::find()->orderBy('tambonname')->asArray()->all(), 'tambonname', 'tambonname'),        
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'Any tambonname'],
                'format'=>'raw'
            ],      
//           [
//                'attribute'=>'tambonname', 
//                'vAlign'=>'middle',
//                'width'=>'180px',
//                'value'=>function ($model, $key, $index, $widget) { 
////                    return Html::a($model->tumbon->tambonname,  
////                        '#', 
////                        ['title'=>'View author detail', 'onclick'=>'alert("This will open the author page.\n\nDisabled for this demo!")']);
//                },
//                'filterType'=>GridView::FILTER_SELECT2,
//               // 'filter'=>ArrayHelper::map(Ctambon::find()->orderBy('tambonname')->asArray()->all(), 'tambonname', 'tambonname'), 
//                'filter'=>ArrayHelper::map(\app\models\Disease::find()->orderBy('tambonname')->asArray()->all(), 'tambonname', 'tambonname'),        
//                'filterWidgetOptions'=>[
//                    'pluginOptions'=>['allowClear'=>true],
//                ],
//                'filterInputOptions'=>['placeholder'=>'Any tambonname'],
//                'format'=>'raw'
//            ],         
              
                        
        [        
        'attribute' => 'diseasethai',
        'pageSummary' => 'รวมจำนวนราย ',
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kv-sticky-column'],
        'contentOptions'=>['class'=>'kv-sticky-column'],        
        ],       
                    
             
             'ncause',
             //'diseasethai',
            //'total',
           [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => 'total',
            'pageSummary' => true,
            'vAlign' => 'middle',
            'contentOptions' => ['class'=>'text-center'],
        ],         
//[
//        'class'=>'kartik\grid\ActionColumn',
//        'template'=>'<div class="btn-group btn-group-sm" role="group" aria-label="...">{view}</div>',
//                'buttons'=>[
//                    'view'=>function($url,$model,$key){
//                        return Html::a('<i class="glyphicon glyphicon-search"></i> รายละเอียด',$url,['class'=>'btn btn-info']);
//                    }, 
//           ]                 
//    ],
        
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
            'type' => GridView::TYPE_PRIMARY,
            'heading' => 'สาเหตุการตาย : ',
        ],
    ]);
    ?>
<?php Pjax::end();?>
</div>
