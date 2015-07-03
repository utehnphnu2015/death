
<?php 
use scotthuangzl\googlechart\GoogleChart;
use miloschuman\highcharts\Highcharts;
use yii\helpers\Html;

   echo Highcharts::widget([
    'options'=>[
        'title'=>['text'=>'จำนวนผู้ป่วยในแยกรายเดือน'],
        'xAxis'=>[
            'categories'=>['']
        ],
        'yAxis'=>[
            'title'=>['text'=>'จำนวน(คน)']
        ],
        'series'=>[
            ['type'=>'pie',
                'name'=>'จำนวนผู้ป่วยใน',
                'data'=>$dataProvider,
            ],
            
        ]
    ]
]);
