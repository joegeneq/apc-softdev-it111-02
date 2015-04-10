<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Productdetails;

/**
 * ProductdetailsSearch represents the model behind the search form about `frontend\models\Productdetails`.
 */
class ProductdetailsSearch extends Productdetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'products_id', 'productsize_id', 'productcolor_id', 'unitCost', 'itemsOnHand'], 'integer'],
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
        $query = Productdetails::find();

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
            'category_id' => $this->category_id,
            'products_id' => $this->products_id,
            'productsize_id' => $this->productsize_id,
            'productcolor_id' => $this->productcolor_id,
            'unitCost' => $this->unitCost,
            'itemsOnHand' => $this->itemsOnHand,
        ]);

        return $dataProvider;
    }
}
