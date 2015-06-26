<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "temp_occupation".
 *
 * @property integer $id
 * @property double $dyear
 * @property string $amphur
 * @property string $tumbon
 * @property string $ampurname
 * @property string $tambonname
 * @property string $ncause
 * @property string $diseasethai
 * @property string $occu
 * @property string $name
 * @property string $total
 */
class Occupation extends \yii\db\ActiveRecord
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
    
    public static $campur = ['เมืองพิษณุโลก' => 'เมืองพิษณุโลก','นครไทย' => 'นครไทย', 'ชาติตระการ' => 'ชาติตระการ',
        'บางระกำ' => 'บางระกำ', 'บางกระทุ่ม' => 'บางกระทุ่ม', 'พรหมพิราม' => 'พรหมพิราม','วัดโบสถ์'=>'วัดโบสถ์', 'วังทอง' => 'วังทอง', 'เนินมะปราง'=> 'เนินมะปราง'];
    
    public static function tableName()
    {
        return 'temp_occupation';
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
            [['ampurname', 'tambonname', 'ncause', 'diseasethai', 'occu'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 50]
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
            'ncause' => 'Ncause',
            'diseasethai' => 'Diseasethai',
            'occu' => 'Occu',
            'name' => 'Name',
            'total' => 'Total',
        ];
    }
}
