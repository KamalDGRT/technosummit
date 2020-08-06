<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\ThanksAsset;

ThanksAsset::register($this);
$this->title = 'Registrations Closed';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="container">
        <h1 class="logo">Technosummit Registration</h1><br>
        <h1 class="end" style="color:aqua;"> The registrations are closed. Thank you for your interest!</h1>
        <br><br><br><br><br>
        <a href="<?php echo \yii\helpers\Url::to(['/event/index']) ?>" class="myButton">Events</a>
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>