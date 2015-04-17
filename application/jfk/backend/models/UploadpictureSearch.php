<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Uploadpicture;

/**
 * UploadpictureSearch represents the model behind the search form about `backend\models\Uploadpicture`.
 */
class UploadpictureSearch extends Uploadpicture
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'events_eventID'], 'integer'],
            [['picture'], 'safe'],
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
        $query = Uploadpicture::find();

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
            'id' => $this->id,
            'events_eventID' => $this->events_eventID,
        ]);

        $query->andFilterWhere(['like', 'picture', $this->picture]);

        return $dataProvider;
    }
}
