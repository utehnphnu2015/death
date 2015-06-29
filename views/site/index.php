
<?php

//$this->registerJsFile(Yii::$app->request->baseUrl . '/js/dashboard.js', [
//    'depends' => [\yii\web\JqueryAsset::className()]
//]);
/* @var $this yii\web\View */
$this->title = 'Death Cause';

//use miloschuman\highcharts\Highcharts;
use assets\DashboardAsset;
use dosamigos\chartjs\ChartJs;
use miloschuman\highcharts\Highcharts;
use scotthuangzl\googlechart\GoogleChart;
use yii\helpers\Url;


//DashboardAsset::register($this);
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
                <span class="info-box-text">อาชีพ</span>
                <span class="info-box-number">
                    <?php echo app\models\Occupation::find()->count(); ?>
                    
                </span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
       
    </div><!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12" style="cursor: pointer" onclick="window.location='<?=$url2?>'">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-building-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">กลุ่มโรค</span>
                <span class="info-box-number">
                    <?php echo app\models\Disease::find()->count(); ?>
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

</div><p>

<div class="row">
    <!-- Left col -->
    <div class="col-md-8">
        <!-- MAP & BOX PANE -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">การตายแยกตามกลุ่มโรค(5อันดับแรก)</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                </div>
            </div><!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <div class="pad">
                            <!-- Map will be created here -->
                            <div id="world-map-markers" style="height: 200px;">
                                
                                <?php 
                        echo GoogleChart::widget(array('visualization' => 'PieChart',
                            'data' => array(
                                array('Task', 'Hours per Day'),
                                array('R99', 10707),
                                array('A419', 5089),
                                array('R54', 3788),
                                array('J189', 1786),
                                array('Y349', 1590)
                                    ),
                                    'options' => array('title' => '')));
                                ?>
                            </div>
                        </div>
                    </div><!-- /.col -->
                    
                </div><!-- /.row -->
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    

        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">สาเหตุการตาย</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo Url::to(['occupation/index']); ?>">สาเหตุการตายแยกตามกลุ่มอาชีพ</a></td>
                                <td>สาเหตุการตายแยกตามกลุ่มอาชีพ</td>
                                <td><span class="label label-success">Occupation</span></td>                                
                            </tr>
                            <tr>
                                <td><a href="<?php echo Url::to(['disease/index']); ?>">สาเหตุการตายแยกตามกลุ่มโรค</a></td>
                                <td>สาเหตุการตายแยกตามกลุ่มโรค</td>
                                <td><span class="label label-warning">Disease</span></td> 
                                
                            </tr>
                            <tr>
                                <td><a href="<?php echo Url::to(['sex/index']); ?>">สาเหตุการตายแยกตามเพศ</a></td>
                                <td>สาเหตุการตายแยกตามเพศ</td>
                                <td><span class="label label-danger">Sex</span></td>
                                
                            </tr>
                            <tr>
                                <td><a href="<?php echo Url::to(['year/index']); ?>">สาเหตุการตายแยกรายปี</a></td>
                                <td>สาเหตุการตายแยกรายปี</td>
                                <td><span class="label label-info">Year</span></td>
                                
                            </tr>
                            
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </div><!-- /.col -->

    <div class="col-md-4">
        <!-- Info Boxes Style 2 -->
        <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Disease</span>
                <span class="info-box-number">21,348</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
                
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
        <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Occupation</span>
                <span class="info-box-number">31,680</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 20%"></div>
                </div>
                
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
        <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Sex</span>
                <span class="info-box-number">1,675</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Year</span>
                <span class="info-box-number">742</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 40%"></div>
                </div>
                
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
       
    </div><!-- /.col -->
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