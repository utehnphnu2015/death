<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sex;

/**
 * SexSearch represents the model behind the search form about `app\models\Sex`.
 */
class SexSearch extends Sex
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'total'], 'integer'],
            [['dyear'], 'number'],
            [['amphur', 'tumbon', 'ampurname', 'tambonname', 'sex'], 'safe'],
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
        $query = Sex::find();

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
            'dyear' => $this->dyear,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'amphur', $this->amphur])
            ->andFilterWhere(['like', 'tumbon', $this->tumbon])
            ->andFilterWhere(['like', 'ampurname', $this->ampurname])
            ->andFilterWhere(['like', 'tambonname', $this->tambonname])
            ->andFilterWhere(['like', 'sex', $this->sex]);

        return $dataProvider;
    }
}