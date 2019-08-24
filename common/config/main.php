<?php

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // ทีม common AdminLTE begin
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@common/themes/adminlte'
                ],
            ],
        ],
        // ทีม common AdminLTE end
    ],
    // add kartik->gridview
    'modules' => [        
        'gridview' => [
            'class' => 'kartik\grid\Module'
        ],
        'detailview' => [
            'class' => 'kartik\DetailView'
        ],
    ],
];
