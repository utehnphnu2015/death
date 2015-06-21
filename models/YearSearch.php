<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Year;

/**
 * YearSearch represents the model behind the search form about `app\models\Year`.
 */
class YearSearch extends Year
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ncause', 'diseasethai'], 'safe'],
            [['2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Year::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
//            '2006' => $this->2006,
//            '2007' => $this->2007,
//            '2008' => $this->2008,
//            '2009' => $this->2009,
//            '2010' => $this->2010,
//            '2011' => $this->2011,
//            '2012' => $this->2012,
//            '2013' => $this->2013,
//            '2014' => $this->2014,
        ]);

        $query->andFilterWhere(['like', 'ncause', $this->ncause])
            ->andFilterWhere(['like', 'diseasethai', $this->diseasethai]);

        return $dataProvider;
    }
}
