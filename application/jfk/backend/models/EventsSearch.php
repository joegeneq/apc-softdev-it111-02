<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Events;

/**
 * EventsSearch represents the model behind the search form about `backend\models\Events`.
 */
class EventsSearch extends Events
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eventID'], 'integer'],
            [['eventName', 'eventDesc', 'eventLocation', 'eventDate'], 'safe'],
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
        $query = Events::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'eventID' => $this->eventID,
        ]);

        $query->andFilterWhere(['like', 'eventName', $this->eventName])
            ->andFilterWhere(['like', 'eventDesc', $this->eventDesc])
            ->andFilterWhere(['like', 'eventLocation', $this->eventLocation])
            ->andFilterWhere(['like', 'eventDate', $this->eventDate]);

        return $dataProvider;
    }
}
