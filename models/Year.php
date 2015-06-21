<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "temp_year".
 *
 * @property integer $id
 * @property string $ncause
 * @property string $diseasethai
 * @property string $2006
 * @property string $2007
 * @property string $2008
 * @property string $2009
 * @property string $2010
 * @property string $2011
 * @property string $2012
 * @property string $2013
 * @property string $2014
 */
class Year extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'temp_year';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014'], 'number'],
            [['ncause', 'diseasethai'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ncause' => 'Ncause',
            'diseasethai' => 'Diseasethai',
            '2006' => '2006',
            '2007' => '2007',
            '2008' => '2008',
            '2009' => '2009',
            '2010' => '2010',
            '2011' => '2011',
            '2012' => '2012',
            '2013' => '2013',
            '2014' => '2014',
        ];
    }
}
