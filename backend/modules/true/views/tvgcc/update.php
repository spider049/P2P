<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tvgcc */

$this->title = 'Update Tvgcc: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Tvgccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->tvgcc_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tvgcc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
