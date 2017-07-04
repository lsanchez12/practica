<?php
use yii\helpers\Html;
use michaeldomo\instashow\Instagram;
/* @var $this \yii\web\View */
/* @var $content string */
    dmstr\web\AdminLteAsset::register($this);
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    $instagram = new Instagram();
    $channel='mj_ruiz_11'; $limit=1;
    $items = $instagram->get($channel, $limit);
    if (!isset($items[0])) {
        $name='User';
        $img=$directoryAsset."/img/avatar5.png"; 
    }
    else{
        $name=$items[0]->user->full_name;
        $img=$items[0]->user->profile_picture;
    }
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="hold-transition skin-red sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render(
            'header.php',
            ['directoryAsset' => $directoryAsset,
              'name'=>$name, 
              'img'=>$img, 
            ]
        ) ?>

        <?= $this->render(
            'left.php',
            ['directoryAsset' => $directoryAsset,
            'name'=>$name, 
            'img'=>$img,
            ]
        )
        ?>

        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
