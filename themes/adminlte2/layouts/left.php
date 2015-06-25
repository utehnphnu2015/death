<?php
use yii\bootstrap\Nav;
use yii\helpers\Url;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        
        <ul class="sidebar-menu">


            <li class="header"><h5><div class="label label-default"> เมนู</div></h5></li>
            <li><a href="<?php echo Url::to(['disease/index']); ?>"><i class="fa fa-circle text-aqua"></i> <span> แยกตามกลุ่มโรค</span><small class="label pull-right bg-red"></small></a></li>

            <li><a href="<?php echo Url::to(['occupation/index']); ?>"><i class="fa fa-circle text-green"></i> <span> แยกตามกลุ่มอาชีพ</span> <small class="label pull-right bg-blue"></small></a> </li>
            <li><a href="<?php echo Url::to(['sex/index']); ?>"><i class="fa fa-circle text-red"></i> <span> แยกตามเพศ</span><small class="label pull-right bg-aqua"></small></a></li>
            <li><a href="<?php echo Url::to(['year/index']); ?>"><i class="fa fa-circle text-orange"></i> <span> แยกปี</span><small class="label pull-right bg-orange"></small></a></li>
            
             


        </ul>
    </section>

</aside>
