<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TaskMornitor */

//$this->title = $model->task_mornitor_id;
$this->title=$model->CustomerName;

$this->params['breadcrumbs'][] = ['label' => 'Task Mornitors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="task-mornitor-view">

    <!--ไม่ใช้งาน <h1><?= Html::encode($this->title) ?></h1>-->

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->task_mornitor_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->task_mornitor_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'task_mornitor_id',
            'CustomerOrderNo',
            'WorkOrderNo',
            'ServiceAccessNo',
            'AccessNumber',
            'ProductName',
            'InstallFlag',
            'Area',
            'OperationStatus',
            'Address',
            'CustomerName',
            'ContactName',
            'CustomerContactPhone',
            'AppointmentDate',
            'AppointmentTimeslot',
            'SubmittedDate',
            'Subcontractor',
            'Team',
            'Handler',
            'RejectReasonTH',
            'RejectReason',
            'ReturnReasonTH',
            'ReturnReason',
            'ConfirmedCompleteTime',
            'ConfirmedBeginTime',
            'Latitude',
            'Longitude',
            'WOCreateTime',
            'TimeoutDate',
            'CustomerContactPhone2',
            'AccessMode',
            'Event',
            'InstallationTypefortechnician',
            'Remark',
            'BlackWireLength',
            'WhiteWireLength',
            'AcceptRemark',
            'Province',
            'District',
            'EntryFee',
            'SubDistrict',
            'ZoneArea',
            'dropwire_mark_id',
        ],
    ]) ?>

</div>
