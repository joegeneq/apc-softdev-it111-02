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
            [['donationNumber', 'amount', 'Users_cus_id'], 'integer'],
            [['country', 'cardNumber', 'paymentType', 'expirationDate', 'ccv', 'firstName', 'middleName', 'lastName', 'email', 'phoneType', 'phoneNumber'], 'safe'],
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
            'donationNumber' => $this->donationNumber,
            'amount' => $this->amount,
            'expirationDate' => $this->expirationDate,
            'Users_cus_id' => $this->Users_cus_id,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'cardNumber', $this->cardNumber])
            ->andFilterWhere(['like', 'paymentType', $this->paymentType])
            ->andFilterWhere(['like', 'ccv', $this->ccv])
            ->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'middleName', $this->middleName])
            ->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phoneType', $this->phoneType])
            ->andFilterWhere(['like', 'phoneNumber', $this->phoneNumber]);

        return $dataProvider;
    }
}
