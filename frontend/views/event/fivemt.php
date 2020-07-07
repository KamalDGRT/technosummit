<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\EventAsset;
use yii\helpers\Url;

$this->title = '5MT';
EventAsset::register($this);
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
    <!-- Start Header -->
    <header id="mu-hero" class="" role="banner">
        <!-- Start menu  -->
        <!-- End menu -->

        <div class="mu-hero-overlay">
            <div class="container">
                <div class="mu-hero-area">

                    <!-- Start hero featured area -->
                    <div class="mu-hero-featured-area">
                        <!-- Start center Logo -->
                        <div class="mu-logo-area">
                            <!-- text based logo -->
                            <a class="mu-logo" href="<?php echo Url::to(['/site/index']) ?>">TECHNOSUMMIT</a>
                            <!-- image based logo -->
                            <!-- <a class="mu-logo" href="#"><img src="assets/images/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- End center Logo -->

                        <div class="mu-hero-featured-content animated slideInDown">

                            <h1>5 MT</h1>
                            <h2>ROTORACT CLUB</h2>
                            <br><br>
                            <a href="<?php echo Url::to(['/event/index']) ?>" class="btn btn-first">BACK</a>
                            <a href="<?php echo Url::to(['/site/registration']) ?>" class="btn btn-nav">REGISTER</a>
                            <br><br>
                            <!-- <p class="mu-event-date-line">7th August 2020 || Online Event</p> -->
                        </div>
                    </div>
                    <!-- End hero featured area -->

                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Start main content -->
    <main role="main">
        <!-- Start About -->
        <section id="mu-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-about-area">
                            <!-- Start Feature Content -->
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="mu-about-left">
                                        <img class="animated slideInLeft" src="<?php echo Yii::$app->params['frontendUrl'] . 'event/images/event_fivemt.png'; ?>" alt="5 MT">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class=" mu-about-right animated slideInRight">
                                            <h2 style="text-decoration: underline;">Description :-</h2>
                                            <p>
                                                Are you the kind of person who opts for short, exciting and enlightening events? Then here is your genre.
                                                Rotaract Club of Sathyabama organises an event called “5MT”. Present a paper, within 5 minutes, on any topic you wish.
                                                Presenting paper is not so easy. And not everyone can do it, you need to research about the topic and have the skill to
                                                present it effectively with the right body language and mind-set.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mu-sponsors-area animated zoomInRight">
                                                <p class="myAccordion">Rules</p>
                                                <div class="myPanel">
                                                    <div class="panel-group" id="accordion">
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><span>There will be 3 rounds totally. </span></li>
                                                            <li class="list-group-item">
                                                                <span>
                                                                    <div class="panel panel-default animated zoomInLeft">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseRoundOne">
                                                                                    <span class="fa fa-angle-up"></span>
                                                                                    Round 1
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapseRoundOne" class="panel-collapse collapse in">
                                                                            <div class="panel-body">
                                                                                The document is analysed and further checked for plagiarism.
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default animated slideInLeft">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseRoundTwo">
                                                                                    <span class="fa fa-angle-up"></span>
                                                                                    Round 2
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapseRoundTwo" class="panel-collapse collapse">
                                                                            <div class="panel-body">
                                                                                The participant will be presenting their paper.
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default animated slideInRight">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseRoundThree">
                                                                                    <span class="fa fa-angle-up"></span>
                                                                                    Round 3
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapseRoundThree" class="panel-collapse collapse">
                                                                            <div class="panel-body">
                                                                                The topic or idea of the paper will be judged based on the implementation of the idea.
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </span>
                                                            </li>
                                                            <li class="list-group-item"><span> The winning criteria for this event is based on the percentage acquired from all the 3 rounds together. </span></li>
                                                            <li class="list-group-item"><span> Top 3 people with higher percentages will be considered to be winners. </span></li>
                                                            <li class="list-group-item"><span> Judges decision will be final. </span></li>
                                                        </ul>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- FAQs
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mu-sponsors-area animated zoomInRight">
                                                <p class="myAccordion">FAQs</p>
                                                <div class="myPanel">
                                                    <div class="panel-group" id="accordion">

                                                        <div class="panel panel-default animated zoomInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 1
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    Answer 1
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 2
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Answer 2
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 3
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Answer 3
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 4
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFour" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Answer 4
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 5
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    Answer 5
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> -->

                                </div>
                                <!-- End Feature Content -->

                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End About -->

    </main>
    <!-- End main content -->


    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>