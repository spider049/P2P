<?php

namespace backend\modules\true\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TaskMornitor;

/**
 * TestteskSearch represents the model behind the search form of `common\models\TaskMornitor`.
 */
class TestteskSearch extends TaskMornitor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_mornitor_id', 'dropwire_mark_id'], 'integer'],
            [['CustomerOrderNo', 'WorkOrderNo', 'ServiceAccessNo', 'AccessNumber', 'ProductName', 'InstallFlag', 'Area', 'OperationStatus', 'Address', 'CustomerName', 'ContactName', 'CustomerContactPhone', 'AppointmentDate', 'AppointmentTimeslot', 'SubmittedDate', 'Subcontractor', 'Team', 'Handler', 'RejectReasonTH', 'RejectReason', 'ReturnReasonTH', 'ReturnReason', 'ConfirmedCompleteTime', 'ConfirmedBeginTime', 'Latitude', 'Longitude', 'WOCreateTime', 'TimeoutDate', 'CustomerContactPhone2', 'AccessMode', 'Event', 'InstallationTypefortechnician', 'Remark', 'BlackWireLength', 'WhiteWireLength', 'AcceptRemark', 'Province', 'District', 'EntryFee', 'SubDistrict', 'ZoneArea'], 'safe'],
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
        $query = TaskMornitor::find();

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
            'task_mornitor_id' => $this->task_mornitor_id,
            'AppointmentDate' => $this->AppointmentDate,
            'dropwire_mark_id' => $this->dropwire_mark_id,
        ]);

        $query->andFilterWhere(['like', 'CustomerOrderNo', $this->CustomerOrderNo])
            ->andFilterWhere(['like', 'WorkOrderNo', $this->WorkOrderNo])
            ->andFilterWhere(['like', 'ServiceAccessNo', $this->ServiceAccessNo])
            ->andFilterWhere(['like', 'AccessNumber', $this->AccessNumber])
            ->andFilterWhere(['like', 'ProductName', $this->ProductName])
            ->andFilterWhere(['like', 'InstallFlag', $this->InstallFlag])
            ->andFilterWhere(['like', 'Area', $this->Area])
            ->andFilterWhere(['like', 'OperationStatus', $this->OperationStatus])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'CustomerName', $this->CustomerName])
            ->andFilterWhere(['like', 'ContactName', $this->ContactName])
            ->andFilterWhere(['like', 'CustomerContactPhone', $this->CustomerContactPhone])
            ->andFilterWhere(['like', 'AppointmentTimeslot', $this->AppointmentTimeslot])
            ->andFilterWhere(['like', 'SubmittedDate', $this->SubmittedDate])
            ->andFilterWhere(['like', 'Subcontractor', $this->Subcontractor])
            ->andFilterWhere(['like', 'Team', $this->Team])
            ->andFilterWhere(['like', 'Handler', $this->Handler])
            ->andFilterWhere(['like', 'RejectReasonTH', $this->RejectReasonTH])
            ->andFilterWhere(['like', 'RejectReason', $this->RejectReason])
            ->andFilterWhere(['like', 'ReturnReasonTH', $this->ReturnReasonTH])
            ->andFilterWhere(['like', 'ReturnReason', $this->ReturnReason])
            ->andFilterWhere(['like', 'ConfirmedCompleteTime', $this->ConfirmedCompleteTime])
            ->andFilterWhere(['like', 'ConfirmedBeginTime', $this->ConfirmedBeginTime])
            ->andFilterWhere(['like', 'Latitude', $this->Latitude])
            ->andFilterWhere(['like', 'Longitude', $this->Longitude])
            ->andFilterWhere(['like', 'WOCreateTime', $this->WOCreateTime])
            ->andFilterWhere(['like', 'TimeoutDate', $this->TimeoutDate])
            ->andFilterWhere(['like', 'CustomerContactPhone2', $this->CustomerContactPhone2])
            ->andFilterWhere(['like', 'AccessMode', $this->AccessMode])
            ->andFilterWhere(['like', 'Event', $this->Event])
            ->andFilterWhere(['like', 'InstallationTypefortechnician', $this->InstallationTypefortechnician])
            ->andFilterWhere(['like', 'Remark', $this->Remark])
            ->andFilterWhere(['like', 'BlackWireLength', $this->BlackWireLength])
            ->andFilterWhere(['like', 'WhiteWireLength', $this->WhiteWireLength])
            ->andFilterWhere(['like', 'AcceptRemark', $this->AcceptRemark])
            ->andFilterWhere(['like', 'Province', $this->Province])
            ->andFilterWhere(['like', 'District', $this->District])
            ->andFilterWhere(['like', 'EntryFee', $this->EntryFee])
            ->andFilterWhere(['like', 'SubDistrict', $this->SubDistrict])
            ->andFilterWhere(['like', 'ZoneArea', $this->ZoneArea]);

        return $dataProvider;
    }
}
