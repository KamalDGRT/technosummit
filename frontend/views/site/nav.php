<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\NavAsset;
use yii\helpers\Url;

NavAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="text"></div>
    <div id="particles-js"></div>

    <header>
        <a href="<?php echo Url::to(['/site/index']) ?>" class="Home animated slideInDown" id="abc" onmouseover="display()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            HOME
        </a>
        <a href="about us.html" class="animated slideInDown">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            ABOUT US
        </a>
        <a href="<?php echo Url::to(['/event/index']) ?>" class="animated zoomIn">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            EVENTS
        </a>
        <a href="<?php echo Url::to(['/site/registration']) ?>" class="animated slideInUp">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Register
        </a>
        <a href="contactus.html" class="animated slideInUp">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Contact us
        </a>
    </header>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>