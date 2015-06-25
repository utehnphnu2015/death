
<?php
$this->registerJsFile(Yii::$app->request->baseUrl . '/js/dashboard2.js', [
    'depends' => [\yii\web\JqueryAsset::className()]
]);
/* @var $this yii\web\View */
$this->title = 'Death Cause';

//use miloschuman\highcharts\Highcharts;
use dosamigos\chartjs\ChartJs;
?>

<div class="site-index">
<div class="row">
    <?php
    $url1 = Yii::$app->urlManager->createUrl(['occupation/index']);
    $url2 = Yii::$app->urlManager->createUrl(['disease/index']);
    $url3 = Yii::$app->urlManager->createUrl(['sex/index']);
    $url4 = Yii::$app->urlManager->createUrl(['year/index']);
    ?>
    
                    <?php 
                        //$command = Yii::$app->db->createCommand("SELECT SUM(total)as tt FROM temp_disease");
                        //$sum = $command->queryScalar();        
                        //echo $sum;
                    ?>
    
    <div class="col-md-3 col-sm-6 col-xs-12" style="cursor: pointer" onclick="window.location='<?=$url1?>'">
        
        <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-comments-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">กลุ่มโรค</span>
                <span class="info-box-number">
                    <?php echo app\models\Disease::find()->count(); ?>
                    
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
       
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12" style="cursor: pointer" onclick="window.location='<?=$url2?>'">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-building-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">อาชีพ</span>
                <span class="info-box-number">
                    <?php echo app\models\Occupation::find()->count(); ?>
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div><!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12" style="cursor: pointer" onclick="window.location='<?=$url3?>'">
        <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="fa fa-comments-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">เพศ</span>
                <span class="info-box-number">
                    <?php echo app\models\Sex::find()->count(); ?>
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12" style="cursor: pointer" onclick="window.location='<?=$url4?>'">
        <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-star-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">รายปี</span>
                <span class="info-box-number">
                    <?php echo app\models\Year::find()->count(); ?>
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
       
    </div><!-- /.col -->
</div><!-- /.row -->

<?php // echo ChartJs::widget([
//    'type' => 'Line',
//    'options' => [
//        'height' => 400,
//        'width' => 800
//    ],
//    'data' => [
//        'labels' => ["2006","2007", "2008", "2009","2010", "2011", "2012", "2013", "2014"],
//        'datasets' => [
//            [
//                'fillColor' => "rgba(220,220,220,0.5)",
//                'strokeColor' => "rgba(220,220,220,1)",
//                'pointColor' => "rgba(220,220,220,1)",
//                'pointStrokeColor' => "#fff",
//                'series'=>'เพศชาย',
//                'data' => [823, 3220, 3218, 3229, 3300, 3302, 3555,3586,2633]
//            ],
//            [
//                'fillColor' => "rgba(151,187,205,0.5)",
//                'strokeColor' => "rgba(151,187,205,1)",
//                'pointColor' => "rgba(151,187,205,1)",
//                'pointStrokeColor' => "#fff",
//                'data' => [639, 2441, 2460, 2467, 2644, 2596, 2746,2730,2050]
//            ],
//           
//        ]
//    ]
//]);
?>

<?=
\dosamigos\highcharts\HighCharts::widget([
    
    'clientOptions' => [
        'chart' => [
                'type' => 'line'
        ],
        'title' => [
             'text' => 'จำนวนการตายแยกตามเพศ/ปี'
             ],
        'xAxis' => [
            'categories' => [
                '2006',
                '2007',
                '2008',
                '2009',
                '2010',
                '2011',
                '2012',
                '2013',
                '2014'
                
            ]
        ],
        'yAxis' => [
            'title' => [
                'text' => '',           
            ]
        ],
        'series' => [
            ['name' => 'เพศชาย', 'data' => [823, 3220, 3218, 3229, 3300, 3302, 3555,3586,2633]],
            ['name' => 'เพศหญิง', 'data' => [639, 2441, 2460, 2467, 2644, 2596, 2746,2730,2050]]
        ]
    ]
]);?>

    <div class="jumbotron">
        <h3>สาเหตุการตาย</h3>        
    </div>
    <div class="body-content">

    </div>
</div>
<?php
$js = <<< JS
        
     //alert('ddd');  
        
JS;

$this->registerJs($js);

?>