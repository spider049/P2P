<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Tvgcc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tvgcc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'WorkOrderNo')->textInput() ?>

    <?= $form->field($model, 'CustNo')->textInput() ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RegisterDatetime')->textInput() ?>

    <?= $form->field($model, 'InstallDatetime')->textInput() ?>

    <?= $form->field($model, 'CompleteDatetime')->textInput() ?>

    <?= $form->field($model, 'Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Zipcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MainPackage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DepotCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'System')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
