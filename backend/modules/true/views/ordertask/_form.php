<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OrdertaskTranCompleted */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordertask-tran-completed-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Technician_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppointmentDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AppointmentTimeslot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ServiceAccessNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CustomerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Handler')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'InstallFlag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OperationStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Event')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SN_Device')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FiberWireLength_zum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CATV_WireLength_zum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Price_fiber_this_Length')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment_frm_admin')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('<span class="glyphicon glyphicon-floppy-disk"></span> Save', ['class' => 'btn btn-success']) ?>
        
      
        
    </div>

    <?php ActiveForm::end(); ?>

</div>

