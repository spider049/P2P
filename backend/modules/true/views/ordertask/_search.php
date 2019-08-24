<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\true\models\OrdertaskSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordertask-tran-completed-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Ordertask_Tran_Completed_ID') ?>

    <?= $form->field($model, 'Technician_ID') ?>

    <?= $form->field($model, 'AppointmentDate') ?>

    <?= $form->field($model, 'AppointmentTimeslot') ?>

    <?= $form->field($model, 'ServiceAccessNo') ?>

    <?php // echo $form->field($model, 'CustomerName') ?>

    <?php // echo $form->field($model, 'Handler') ?>

    <?php // echo $form->field($model, 'ProductName') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'InstallFlag') ?>

    <?php // echo $form->field($model, 'Area') ?>

    <?php // echo $form->field($model, 'OperationStatus') ?>

    <?php // echo $form->field($model, 'Event') ?>

    <?php // echo $form->field($model, 'Remark') ?>

    <?php // echo $form->field($model, 'SN_Device') ?>

    <?php // echo $form->field($model, 'FiberWireLength_zum') ?>

    <?php // echo $form->field($model, 'CATV_WireLength_zum') ?>

    <?php // echo $form->field($model, 'Price_fiber_this_Length') ?>

    <?php // echo $form->field($model, 'comment_frm_admin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
