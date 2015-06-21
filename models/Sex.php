<?php

namespace app\models;

use Yii;

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
