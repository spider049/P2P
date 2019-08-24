<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TaskMornitor */

//$this->title = 'Update Task Mornitor: ' . $model->task_mornitor_id;
$this->title = 'Update: ' . $model->CustomerName;

$this->params['breadcrumbs'][] = ['label' => 'Task Mornitors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CustomerName, 'url' => ['view', 'id' => $model->task_mornitor_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-mornitor-update">

    <!--ไม่ใช้งาน <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
