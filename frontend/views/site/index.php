<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\IndexAsset;

IndexAsset::register($this);
$this->title = 'TechnoSummit 2020';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <header>
        <canvas id="mainCanvas">
        </canvas>
        <nav>
            <div class="row clearfix">
                <img src="img\tsist.png" class="logo" />
                <img src="img\ts.png" class="log" />
            </div>
        </nav>
        <div class="container">
            <div id="clockdiv">
                <div>
                    <span class="days"></span>
                    <div class="smalltext">Days</div>
                </div>
                <div>
                    <span class="hours"></span>
                    <div class="smalltext">Hours</div>
                </div>
                <div>
                    <span class="minutes"></span>
                    <div class="smalltext">Minutes</div>
                </div>
                <div>
                    <span class="seconds"></span>
                    <div class="smalltext">Seconds</div>
                </div>
            </div>
        </div>
        <center><img src="img\green.png" style="width: 740px;" /></center>
        <br>
        <br>
        <center>
            <h1 id="sist">
                <!-- <span class="colorChange">TECHNOSUMMIT 2020</span><br /> -->
                SATHYABAMA INSTITUTE OF SCIENCE AND TECHNOLOGY
            </h1>
        </center>

        <center>
            <h1>(DEEMED TO BE UNIVERSITY)
        </center>
        </h1>
        <br>
        <center><img src="img\abc.png" style="width: 500px;" /></center>
        <br>
        <center><a href="http://www.sathyabama.ac.in/" style="font-size: 240%;color: white;">www.sathyabama.ac.in</a></center>
        <br>
        <center>
            <h2 class="national">
                National Level Annual Technical Fest On Virtual Platform<br />
                <h1>7<sup>th</sup> and 8<sup>th</sup> August <span style="font-size: 240%;">2020</span></h1>
            </h2>
            <center><a href="nav.html" class="btn btn-first">Click Here</a></center>
        </center>
    </header>

    <?php $this->endBody() ?>
</body>
<script src="js/index.js"></script>
<script src="js/timer.js"></script>

</html>
<?php $this->endPage() ?>