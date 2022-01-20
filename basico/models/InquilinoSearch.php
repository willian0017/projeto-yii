<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InquilinoModel;

/**
 * InquilinoSearch represents the model behind the search form of `app\models\InquilinoModel`.
 */
class InquilinoSearch extends InquilinoModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idNome', 'telefone', 'sexo', 'email'], 'safe'],
            [['idade'], 'integer'],
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
        $query = InquilinoModel::find();

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
            'idade' => $this->idade,
        ]);

        $query->andFilterWhere(['like', 'idNome', $this->idNome])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
