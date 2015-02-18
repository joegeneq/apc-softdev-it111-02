<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Donation;

/**
 * DonationSearch represents the model behind the search form about `app\models\Donation`.
 */
class DonationSearch extends Donation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['donation_no', 'donate_amount'], 'integer'],
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
        $query = Donation::find();

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
            'donation_no' => $this->donation_no,
            'donate_amount' => $this->donate_amount,
        ]);

        return $dataProvider;
    }
}
