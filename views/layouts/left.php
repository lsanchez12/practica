<?php
use michaeldomo\instashow\Instagram;
$instagram = new Instagram();
$channel='luis.sanchez.13'; $limit=1;
$items = $instagram->get($channel, $limit);
//print_r($items);

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                
            <?php
            echo"<img class='img-circle' src='".$items[0]->user->profile_picture."'/>"; 
            ?>
            </div>
            <div class="pull-left info">
                <?= '<p>'.$items[0]->user->full_name.'</p>'?>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'Usuarios', 'url' => ['/user']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    /* [
                        'label' => 'Same tools',
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
                    ],*/
                ],
            ]
        ) ?>

    </section>

</aside>