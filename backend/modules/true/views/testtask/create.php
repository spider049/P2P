<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TaskMornitor */

$this->title = 'Create Task Mornitor';
$this->params['breadcrumbs'][] = ['label' => 'Task Mornitors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-mornitor-create">

    <!-- ไม่ใช้งาน <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
