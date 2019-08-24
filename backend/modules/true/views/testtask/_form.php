<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TaskMornitor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-mornitor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CustomerOrderNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WorkOrderNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ServiceAccessNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AccessNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'InstallFlag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OperationStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CustomerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ContactName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CustomerContactPhone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppointmentDate')->textInput() ?>

    <?= $form->field($model, 'AppointmentTimeslot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SubmittedDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Subcontractor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Team')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Handler')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RejectReasonTH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RejectReason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ReturnReasonTH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ReturnReason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ConfirmedCompleteTime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ConfirmedBeginTime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WOCreateTime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TimeoutDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CustomerContactPhone2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AccessMode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Event')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'InstallationTypefortechnician')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BlackWireLength')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WhiteWireLength')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AcceptRemark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'District')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EntryFee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SubDistrict')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ZoneArea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dropwire_mark_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
