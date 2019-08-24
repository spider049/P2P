<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tvgcc */

$this->title = 'Create Tvgcc';
$this->params['breadcrumbs'][] = ['label' => 'Tvgccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tvgcc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
