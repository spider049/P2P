<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OrdertaskTranCompleted */

$this->title = 'Create Ordertask Tran Completed';
$this->params['breadcrumbs'][] = ['label' => 'Ordertask Tran Completeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordertask-tran-completed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
