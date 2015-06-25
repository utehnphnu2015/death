<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
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
    <div class="jumbotron">
        <h1>สาเหตุการตาย</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="#"></a></p>
    </div>

    <div class="body-content">

        

    </div>
</div>
