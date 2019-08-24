<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\true\models\TvgccSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tvgcc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tvgcc_id') ?>

    <?= $form->field($model, 'WorkOrderNo') ?>

    <?= $form->field($model, 'CustNo') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'RegisterDatetime') ?>

    <?php // echo $form->field($model, 'InstallDatetime') ?>

    <?php // echo $form->field($model, 'CompleteDatetime') ?>

    <?php // echo $form->field($model, 'Type') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'Zipcode') ?>

    <?php // echo $form->field($model, 'Reason') ?>

    <?php // echo $form->field($model, 'MainPackage') ?>

    <?php // echo $form->field($model, 'DepotCode') ?>

    <?php // echo $form->field($model, 'Company') ?>

    <?php // echo $form->field($model, 'System') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
