<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\BugReport4;

/**
 * bugreport4Search represents the model behind the search form of `backend\models\BugReport4`.
 */
class bugreport4Search extends BugReport4
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rstat', 'forder'], 'integer'],
            [['title', 'detail', 'date_start'], 'safe'],
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
        $query = BugReport4::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'rstat' => $this->rstat,
            'date_start' => $this->date_start,
            'forder' => $this->forder,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'detail', $this->detail]);

        return $dataProvider;
    }
}
