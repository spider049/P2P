<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OrdertaskTranCompleted */

$this->title = 'Update Ordertask Tran Completed: ' . $model->Ordertask_Tran_Completed_ID;
$this->params['breadcrumbs'][] = ['label' => 'Ordertask Tran Completeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Ordertask_Tran_Completed_ID, 'url' => ['view', 'id' => $model->Ordertask_Tran_Completed_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ordertask-tran-completed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
