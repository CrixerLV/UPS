<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Uzdevums;

/**
 * UzdevumsSearch represents the model behind the search form of `app\models\Uzdevums`.
 */
class UzdevumsSearch extends Uzdevums
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'statuss'], 'integer'],
            [['nosaukums', 'termins'], 'safe'],
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = Uzdevums::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'termins' => $this->termins,
            'statuss' => $this->statuss,
        ]);

        $query->andFilterWhere(['like', 'nosaukums', $this->nosaukums]);

        return $dataProvider;
    }
}
