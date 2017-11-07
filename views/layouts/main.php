<?php
/**
 * Created by PhpStorm.
 * User: miffy
 * Date: 2017/8/3
 * Time: 上午9:27
 * Desc:
 */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

if (Yii::$app->controller->action->id === 'login') {
    /**
     * Do not use this code in your template. Remove it.
     * Instead, use the code  $this->layout = '//main-login'; in your controller.
     */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else if (Yii::$app->controller->id === 'site' && Yii::$app->controller->action->id === 'index') {
    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }
    miffy\miffyzq\assets\MiffyAsset::register($this);
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/miffy/miffyzq/static');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <?php $this->beginBody() ?>
    <div id="wrapper">
        <?= $this->render(
            'left.php',
            [
                'directoryAsset' => $directoryAsset,
                'user' => isset($user) ? $user : [
                        'headImg' => $directoryAsset . '/img/profile_small.jpg',
                        'name' => 'Miffy',
                        'role' => 'admin'
                    ]
            ]
        )
        ?>

        <?= $this->render(
            'right.php',
            [
                'directoryAsset' => $directoryAsset,
            ]
        )
        ?>

    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } else {
    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }
    miffy\miffyzq\assets\MiffyAssetForContent::register($this);
    ?>

    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <?php $this->beginBody() ?>
    <div id="wrapper">
        <?= $content?>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php }?>
