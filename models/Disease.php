<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "temp_disease".
 *
 * @property integer $id
 * @property double $dyear
 * @property string $amphur
 * @property string $tumbon
 * @property string $ampurname
 * @property string $tambonname
 * @property string $ncause
 * @property string $diseasethai
 * @property string $total
 */
class Disease extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'temp_disease';
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
            [['ampurname', 'tambonname', 'ncause', 'diseasethai'], 'string', 'max' => 255]
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
            'total' => 'Total',
        ];
    }
}
