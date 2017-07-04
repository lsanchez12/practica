<?php
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">SCA</span><span class="logo-lg">Sistemakata C.A</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $items[0]->user->profile_picture ?>" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><?= $items[0]->user->full_name?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= $items[0]->user->profile_picture ?>" class="img-circle"
                                 alt="User Image"/>

                            <p>
                                <?= $items[0]->user->full_name?>
                                <small>Programador Junior</small>
                            </p>
                        </li>
                      
                        <!-- Menu Footer-->
                        <!--<li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                            </div>
                        </li>-->
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
