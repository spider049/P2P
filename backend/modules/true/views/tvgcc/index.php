<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\true\models\TvgccSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tvgccs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tvgcc-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tvgcc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'panel' => [
            'before' => 'รายงาน',
            'after' => 'ประมวลผล ณ ' . date('Y-m-d H:i:s')
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'tvgcc_id',
            'WorkOrderNo',
            'CustNo',
            'Name',
            'RegisterDatetime',
            //'InstallDatetime',
            //'CompleteDatetime',
            //'Type',
            //'Status',
            //'Zipcode',
            //'Reason',
            //'MainPackage',
            //'DepotCode',
            //'Company',
            //'System',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
