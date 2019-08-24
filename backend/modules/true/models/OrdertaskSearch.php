<?php

namespace backend\modules\true\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OrdertaskTranCompleted;

/**
 * OrdertaskSearch represents the model behind the search form of `common\models\OrdertaskTranCompleted`.
 */
class OrdertaskSearch extends OrdertaskTranCompleted
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Ordertask_Tran_Completed_ID'], 'integer'],
            [['Technician_ID', 'AppointmentDate', 'AppointmentTimeslot', 'ServiceAccessNo', 'CustomerName', 'Handler', 'ProductName', 'Address', 'InstallFlag', 'Area', 'OperationStatus', 'Event', 'Remark', 'SN_Device', 'FiberWireLength_zum', 'CATV_WireLength_zum', 'Price_fiber_this_Length', 'comment_frm_admin'], 'safe'],
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
        $query = OrdertaskTranCompleted::find();

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
            'Ordertask_Tran_Completed_ID' => $this->Ordertask_Tran_Completed_ID,
        ]);

        $query->andFilterWhere(['like', 'Technician_ID', $this->Technician_ID])
            ->andFilterWhere(['like', 'AppointmentDate', $this->AppointmentDate])
            ->andFilterWhere(['like', 'AppointmentTimeslot', $this->AppointmentTimeslot])
            ->andFilterWhere(['like', 'ServiceAccessNo', $this->ServiceAccessNo])
            ->andFilterWhere(['like', 'CustomerName', $this->CustomerName])
            ->andFilterWhere(['like', 'Handler', $this->Handler])
            ->andFilterWhere(['like', 'ProductName', $this->ProductName])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'InstallFlag', $this->InstallFlag])
            ->andFilterWhere(['like', 'Area', $this->Area])
            ->andFilterWhere(['like', 'OperationStatus', $this->OperationStatus])
            ->andFilterWhere(['like', 'Event', $this->Event])
            ->andFilterWhere(['like', 'Remark', $this->Remark])
            ->andFilterWhere(['like', 'SN_Device', $this->SN_Device])
            ->andFilterWhere(['like', 'FiberWireLength_zum', $this->FiberWireLength_zum])
            ->andFilterWhere(['like', 'CATV_WireLength_zum', $this->CATV_WireLength_zum])
            ->andFilterWhere(['like', 'Price_fiber_this_Length', $this->Price_fiber_this_Length])
            ->andFilterWhere(['like', 'comment_frm_admin', $this->comment_frm_admin]);

        return $dataProvider;
    }
}
