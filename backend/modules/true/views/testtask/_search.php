<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\true\models\TestteskSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-mornitor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'task_mornitor_id') ?>

    <?= $form->field($model, 'CustomerOrderNo') ?>

    <?= $form->field($model, 'WorkOrderNo') ?>

    <?= $form->field($model, 'ServiceAccessNo') ?>

    <?= $form->field($model, 'AccessNumber') ?>

    <?php // echo $form->field($model, 'ProductName') ?>

    <?php // echo $form->field($model, 'InstallFlag') ?>

    <?php // echo $form->field($model, 'Area') ?>

    <?php // echo $form->field($model, 'OperationStatus') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'CustomerName') ?>

    <?php // echo $form->field($model, 'ContactName') ?>

    <?php // echo $form->field($model, 'CustomerContactPhone') ?>

    <?php // echo $form->field($model, 'AppointmentDate') ?>

    <?php // echo $form->field($model, 'AppointmentTimeslot') ?>

    <?php // echo $form->field($model, 'SubmittedDate') ?>

    <?php // echo $form->field($model, 'Subcontractor') ?>

    <?php // echo $form->field($model, 'Team') ?>

    <?php // echo $form->field($model, 'Handler') ?>

    <?php // echo $form->field($model, 'RejectReasonTH') ?>

    <?php // echo $form->field($model, 'RejectReason') ?>

    <?php // echo $form->field($model, 'ReturnReasonTH') ?>

    <?php // echo $form->field($model, 'ReturnReason') ?>

    <?php // echo $form->field($model, 'ConfirmedCompleteTime') ?>

    <?php // echo $form->field($model, 'ConfirmedBeginTime') ?>

    <?php // echo $form->field($model, 'Latitude') ?>

    <?php // echo $form->field($model, 'Longitude') ?>

    <?php // echo $form->field($model, 'WOCreateTime') ?>

    <?php // echo $form->field($model, 'TimeoutDate') ?>

    <?php // echo $form->field($model, 'CustomerContactPhone2') ?>

    <?php // echo $form->field($model, 'AccessMode') ?>

    <?php // echo $form->field($model, 'Event') ?>

    <?php // echo $form->field($model, 'InstallationTypefortechnician') ?>

    <?php // echo $form->field($model, 'Remark') ?>

    <?php // echo $form->field($model, 'BlackWireLength') ?>

    <?php // echo $form->field($model, 'WhiteWireLength') ?>

    <?php // echo $form->field($model, 'AcceptRemark') ?>

    <?php // echo $form->field($model, 'Province') ?>

    <?php // echo $form->field($model, 'District') ?>

    <?php // echo $form->field($model, 'EntryFee') ?>

    <?php // echo $form->field($model, 'SubDistrict') ?>

    <?php // echo $form->field($model, 'ZoneArea') ?>

    <?php // echo $form->field($model, 'dropwire_mark_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
