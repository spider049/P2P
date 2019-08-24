<?php

namespace backend\modules\true\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tvgcc;

/**
 * TvgccSearch represents the model behind the search form of `common\models\Tvgcc`.
 */
class TvgccSearch extends Tvgcc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tvgcc_id'], 'integer'],
            [['WorkOrderNo', 'CustNo'], 'number'],
            [['Name', 'RegisterDatetime', 'InstallDatetime', 'CompleteDatetime', 'Type', 'Status', 'Zipcode', 'Reason', 'MainPackage', 'DepotCode', 'Company', 'System'], 'safe'],
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
        $query = Tvgcc::find();

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
            'tvgcc_id' => $this->tvgcc_id,
            'WorkOrderNo' => $this->WorkOrderNo,
            'CustNo' => $this->CustNo,
            'RegisterDatetime' => $this->RegisterDatetime,
            'InstallDatetime' => $this->InstallDatetime,
            'CompleteDatetime' => $this->CompleteDatetime,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Type', $this->Type])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Zipcode', $this->Zipcode])
            ->andFilterWhere(['like', 'Reason', $this->Reason])
            ->andFilterWhere(['like', 'MainPackage', $this->MainPackage])
            ->andFilterWhere(['like', 'DepotCode', $this->DepotCode])
            ->andFilterWhere(['like', 'Company', $this->Company])
            ->andFilterWhere(['like', 'System', $this->System]);

        return $dataProvider;
    }
}
