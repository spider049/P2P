<?php

use kartik\grid\GridView;
        
echo GridView::widget([
    'dataProvider' => $dataProvider,   
    //'filterModel' => $searchModel,
        'panel' => [
        'before' => 'รายงานแฟ้มข้อมูล Archived Zsmart',
        'after' => 'ประมวลผล ณ ' . date('Y-m-d H:i:s')
    ]
    ]
);
?>

