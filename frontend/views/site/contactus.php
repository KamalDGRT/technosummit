<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\ContactAsset;
use yii\helpers\Url;

ContactAsset::register($this);
$this->title = 'Contact Us';
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

    <center>
        <h1  style=" font-size: 100px; color: rgb(243, 245, 247); text-shadow: 1px 4px rgb(29, 185, 42);">CONTACT US</h1>
    </center>

    <center>
        <a role="button" class="btn btn-first1"  href="tel:+91 8939224200 ">
            <i class="fa fa-phone" ></i>Call
        </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a role="button" class="btn btn-first1" href="mailto:info@technosummit.in">
            <i class="fa fa-envelope-o"></i> Email
        </a>
    </center>

    <center>
        <address style="font-size: 100%">
            <h1> <i class="fa fa-fax"></i>:PRASHANT +918939224200</h1>
            <h1><i class="fa fa-fax"></i>:ISSAC +917702633448<h1>
                    <h1><i class="fa fa-envelope"></i>:info@technosummit.in</a></h1>
        </address>
    </center>

    <center>
        <a href="<?php echo Url::to(['/site/nav']) ?>" class="button button-first">Click Here</a>
    </center>

    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>