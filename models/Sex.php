<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\Json;
use yii\db\Expression;

/**
 * This is the model class for table "temp_sex".
 *
 * @property integer $id
 * @property double $dyear
 * @property string $amphur
 * @property string $tumbon
 * @property string $ampurname
 * @property string $tambonname
 * @property string $sex
 * @property string $total
 */
class Sex extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    const AMPUR_A = 01;
    const AMPUR_B = 02;
    const AMPUR_C = 03;
    const AMPUR_D = 04;
    const AMPUR_E = 05;
    const AMPUR_F = 06;
    const AMPUR_G = 07;
    const AMPUR_H = 08;
    const AMPUR_I = 09;
    
    const SEX_M = 1;
    const SEX_F = 2;
    
    public static $campur = ['เมืองพิษณุโลก' => 'เมืองพิษณุโลก','นครไทย' => 'นครไทย', 'ชาติตระการ' => 'ชาติตระการ',
        'บางระกำ' => 'บางระกำ', 'บางกระทุ่ม' => 'บางกระทุ่ม', 'พรหมพิราม' => 'พรหมพิราม','วัดโบสถ์'=>'วัดโบสถ์', 'วังทอง' => 'วังทอง', 'เนินมะปราง'=> 'เนินมะปราง'];
    
    public static  $dsex = [ '1'=>'ชาย','2'=>'หญิง' ];

        public static function tableName()
    {
        return 'temp_sex';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dyear'], 'number'],
            [['total'], 'integer'],
            [['amphur', 'tumbon'], 'string', 'max' => 2],
            [['ampurname', 'tambonname', 'sex'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dyear' => 'Dyear',
            'amphur' => 'Amphur',
            'tumbon' => 'Tumbon',
            'ampurname' => 'Ampurname',
            'tambonname' => 'Tambonname',
            'sex' => 'Sex',
            'total' => 'Total',
        ];
    }
}
