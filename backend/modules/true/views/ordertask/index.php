<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\true\models\OrdertaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordertask Tran Completeds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordertask-tran-completed-index">

  

    <p>
        <?= Html::a('Create Ordertask Tran Completed', ['create'], ['class' => 'btn btn-success']) ?>
        
        <a href="/p2p/common/excelfiles//ordertask_tran_completed.xlsx"><i class="fa fa-circle text-success"></i> Download File Excel สำหรับนำเข้าฐานข้อมูล</a>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'panel' => [
            'before' => 'รายงาน',
            'after' => 'ประมวลผล ณ ' . date('Y-m-d H:i:s')
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Ordertask_Tran_Completed_ID',
            //'Technician_ID',
            'AppointmentDate',
            //'AppointmentTimeslot',
            'ServiceAccessNo',
            'CustomerName',
            'Handler',
            //'ProductName',
            //'Address',
            'InstallFlag',
            //'Area',
            'OperationStatus',
            //'Event',
            //'Remark',
            //'SN_Device',
            //'FiberWireLength_zum',
            //'CATV_WireLength_zum',
            //'Price_fiber_this_Length',
            //'comment_frm_admin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
