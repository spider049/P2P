<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Payom Deemed</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Main Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'True Online,TVG Bundle', 'icon' => 'file-code-o', 'url' => ['/true/ordertask']],
                    ['label' => 'TVGCC', 'icon' => 'file-code-o', 'url' => ['/true/tvgcc']],
                    /*
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                     */
                     
                    ////////////// เมนูซ้าย
                    [
                        'label' => 'เมนูสร้างจาก Module',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'module-> true', 'icon' => 'file-code-o', 'url' => ['/true'],],
                            ['label' => 'controller testtask', 'icon' => 'dashboard', 'url' => ['/true/testtask'],],
                            [
                                'label' => 'ข้อมูลหลัก',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => '-ข้อมูลเลขสมาชิก', 'icon' => 'circle-o', 'url' => '#',],
                                    ['label' => '-ข้อมูล s/n อุปกรณ์', 'icon' => 'circle-o', 'url' => '#',],
                                    ['label' => '-ข้อมูลพนักงาน', 'icon' => 'circle-o', 'url' => '#',],
                                    
                                    
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label' => 'Report',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => '-True Online,TVG วันนี้', 'icon' => 'circle-o', 'url' => ['/true/report/rp1'],],
                                    ['label' => '-index', 'icon' => 'circle-o', 'url' => ['/true/report'],],
                                    ['label' => '-smf', 'icon' => 'circle-o', 'url' => 'http://127.0.0.1/p2p-wb/index.php',],
                                    ['label' => '-report1', 'icon' => 'circle-o', 'url' => ['/true/report/report1'],],
                                    ['label' => '-import', 'icon' => 'circle-o', 'url' => ['/true/report/import'],],
                                    
                                    
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    // เมนูซ้าย จบ
                ],
            ]
        ) ?>

    </section>

</aside>
