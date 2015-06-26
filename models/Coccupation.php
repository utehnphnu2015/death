<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coccupation".
 *
 * @property string $occupation
 * @property string $name
 */
class Coccupation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'coccupation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['occupation'], 'required'],
            [['occupation'], 'string', 'max' => 4],
            [['name'], 'string', 'max' => 50],
            [['name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'occupation' => 'Occupation',
            'name' => 'Name',
        ];
    }
    public function getOccupations(){
        return $this->hasMany(Occupation::className(), ['occu'=>'occupation']);
    }
}
