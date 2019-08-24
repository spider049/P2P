<?php

use kartik\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,    
    'panel' => [
        'before' => 'รายงานเมื่อวาน',
        'after' => 'ประมวลผล ณ ' . date('Y-m-d H:i:s')
    ]
    ]
);
?>