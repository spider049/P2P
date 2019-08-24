<?php

use yii\helpers\Html;
//use yii\widgets\DetailView;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Tvgcc */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Tvgccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tvgcc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tvgcc_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tvgcc_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tvgcc_id',
            'WorkOrderNo',
            'CustNo',
            'Name',
            'RegisterDatetime',
            'InstallDatetime',
            'CompleteDatetime',
            'Type',
            'Status',
            'Zipcode',
            'Reason',
            'MainPackage',
            'DepotCode',
            'Company',
            'System',
        ],
    ]) ?>

</div>
