<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form of `app\models\Cliente`.
 */
class ClienteSearch extends Cliente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clienteid'], 'integer'],
            [['cedula_ruc', 'nombrecia', 'nombrecontacto', 'direccioncli', 'fax', 'email', 'celular', 'fijo'], 'safe'],
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
        $query = Cliente::find();

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
            'clienteid' => $this->clienteid,
        ]);

        $query->andFilterWhere(['ilike', 'cedula_ruc', $this->cedula_ruc])
            ->andFilterWhere(['ilike', 'nombrecia', $this->nombrecia])
            ->andFilterWhere(['ilike', 'nombrecontacto', $this->nombrecontacto])
            ->andFilterWhere(['ilike', 'direccioncli', $this->direccioncli])
            ->andFilterWhere(['ilike', 'fax', $this->fax])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'celular', $this->celular])
            ->andFilterWhere(['ilike', 'fijo', $this->fijo]);

        return $dataProvider;
    }
}
