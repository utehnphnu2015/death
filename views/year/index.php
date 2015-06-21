<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\Pjax;
use kartik\dynagrid\DynaGrid;

/* @var $this yii\web\View */
/* @var $searchModel app\models\YearSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Years';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="year-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Year', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?php Pjax::begin();?> 
    <?php echo \kartik\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel'=>$searchModel,    
    'responsive' => TRUE,
    'hover' => true,
    'floatHeader' => true,
    'panel' => [
        'before' => '',
        'type' => \kartik\grid\GridView::TYPE_SUCCESS,        
    ],
    
    'columns' => [

            //'id',
            'ncause',
            'diseasethai',
            '2006',
            '2007',
             '2008',
             '2009',
             '2010',
             '2011',
             '2012',
             '2013',
             '2014',

            //            [
//                'class' => 'yii\grid\ActionColumn',
//                'options'=>['style'=>'width:90px;'],
//                'template'=>'<div class="btn-group btn-group-sm" role="group" aria-label="...">{update}{view}{delete}</div>',
//                'buttons'=>[
//                    'view'=>function($url,$model,$key){
//                        return Html::a('<i class="glyphicon glyphicon-eye-open"></i>',$url,['class'=>'btn btn-default']);
//                    },                    
//                   'update'=>function($url,$model,$key){                        
//                       return  Html::a('<i class="glyphicon glyphicon-pencil"></i> Approve', ['occupation/update', 'id' => $model->id], ['class' => 'btn btn-success']);
//                    
//                   },                  
//                            
//                    'delete'=>function($url,$model,$key){
//                         return Html::a('<i class="glyphicon glyphicon-trash"></i>  Delete !?', $url,[
//                               'title' => Yii::t('yii', 'Delete'),
//                                'data-confirm' => Yii::t('yii', 'คุณต้องการลบไฟล์นี้?'),
//                                'data-method' => 'post',
//                                'data-pjax' => '0',
//                                'class'=>'btn btn-danger'
//                                ]);
//                    }
//                ]
//            ], 
        ]
    ]); ?>
<?php Pjax::end();?>
</div>
