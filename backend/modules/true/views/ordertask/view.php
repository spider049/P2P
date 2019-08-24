<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\dialog\DialogAsset;

/* @var $this yii\web\View */
/* @var $model common\models\OrdertaskTranCompleted */

$this->title = $model->Ordertask_Tran_Completed_ID;
$this->params['breadcrumbs'][] = ['label' => 'Ordertask Tran Completeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ordertask-tran-completed-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> Update', ['update', 'id' => $model->Ordertask_Tran_Completed_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-remove"></span> Delete', ['delete', 'id' => $model->Ordertask_Tran_Completed_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => ['โปรดตรวจสอบอีกครับ!!!! กำลังลบข้อมูล->','เลขสมาชิก->',$model->ServiceAccessNo,$model->CustomerName],
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Ordertask_Tran_Completed_ID',
            'Technician_ID',
            'AppointmentDate',
            'AppointmentTimeslot',
            'ServiceAccessNo',
            'CustomerName',
            'Handler',
            'ProductName',
            'Address',
            'InstallFlag',
            'Area',
            'OperationStatus',
            'Event',
            'Remark',
            'SN_Device',
            'FiberWireLength_zum',
            'CATV_WireLength_zum',
            'Price_fiber_this_Length',
            'comment_frm_admin',
        ],
    ]) ?>

</div>
