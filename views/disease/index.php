<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\editable\Editable;
use app\models\Ctambon;


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

           // 'id',
            'dyear',
            //'amphur',
            'tumbon',
           //'ampurname',
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
             'ncause',
             'diseasethai',
            'total',

//            [
//                'class' => 'yii\grid\ActionColumn',
//                'options'=>['style'=>'width:90px;'],
//                'template'=>'<div class="btn-group btn-group-sm" role="group" aria-label="...">{update}{view}</div>',
//                'buttons'=>[
//                    'view'=>function($url,$model,$key){
//                        return Html::a('<i class="glyphicon glyphicon-search"></i> รายละเอียด',$url,['class'=>'btn btn-info']);
//                    }, 
//                     
//                    'update'=>function($url,$model,$key){                        
//                        return  Html::a('<i class="glyphicon glyphicon-pencil"></i> Update', ['disease/update', 'id' => $model->id], ['class' => 'btn btn-success']);
//                    
//                    },
//                  
//                            
////                    'delete'=>function($url,$model,$key){
////                         return Html::a('<i class="glyphicon glyphicon-trash"></i>  Delete !?', $url,[
////                                'title' => Yii::t('yii', 'Delete'),
////                                'data-confirm' => Yii::t('yii', 'คุณต้องการลบไฟล์นี้?'),
////                                'data-method' => 'post',
////                                'data-pjax' => '0',
////                                'class'=>'btn btn-danger'
////                                ]);
////                    }
//                ]
//            ],  
        ],
    ]); ?>
<?php Pjax::end();?>

</div>
