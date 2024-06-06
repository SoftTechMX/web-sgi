<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetalleOrden;

/**
 * DetalleOrdenSearch represents the model behind the search form of `app\models\DetalleOrden`.
 */
class DetalleOrdenSearch extends DetalleOrden
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ordenid', 'detalleid', 'productoid', 'cantidad'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = DetalleOrden::find();

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
            'ordenid' => $this->ordenid,
            'detalleid' => $this->detalleid,
            'productoid' => $this->productoid,
            'cantidad' => $this->cantidad,
        ]);

        return $dataProvider;
    }
}
