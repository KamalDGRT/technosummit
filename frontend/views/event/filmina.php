<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\EventAsset;
use yii\helpers\Url;

$this->title = 'Filmina';
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

                            <h1>Filmnina</h1>
                            <h2>DANCE CLUB AND MUSIC CLUB </h2>
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
                                        <img class="animated slideInLeft" src="<?php echo Yii::$app->params['frontendUrl'] . 'event/images/event_filmina.png'; ?>" alt="5 MT">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class=" mu-about-right animated slideInRight">
                                            <h2 style="text-decoration: underline;">Description :-</h2>
                                            <p>
                                                Are you an aspiring filmmaker? Or Are you someone who is passionate about photography and wants to put his/her skills to test?
                                                We have got you covered!
                                            </p><br>
                                            <p>
                                                Here are two events for short filmmakers and photographers who are waiting for a reliable platform and opportunity to showcase their talents.
                                                We are excited to see your creativity get sent to us!
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
                                                            <li class="list-group-item">
                                                                <span>
                                                                    Both the events have only one round. Obscene content or picture or any form of information leads to immediate disqualification.
                                                                </span>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <span>
                                                                    <div class="panel panel-default animated zoomInLeft">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseRoundOne">
                                                                                    <span class="fa fa-angle-up"></span>
                                                                                    SHORT FILM CONTEST
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapseRoundOne" class="panel-collapse collapse">
                                                                            <div class="panel-body">
                                                                                <ul class="list-group">
                                                                                    <li class="list-group-item"><span> The video should have a time limit of 10-15 minutes. </span></li>
                                                                                    <li class="list-group-item"><span> There should be subtitles in English throughout the length of the film. </span></li>
                                                                                    <li class="list-group-item"><span> The theme of the film should be comprehensible for all age groups. </span></li>
                                                                                    <li class="list-group-item"><span> The film shouldn't have any kind of vulgar content in it.</span></li>
                                                                                    <li class="list-group-item"><span> The film should reach the maximum standards of quality and presentation. </span></li>
                                                                                    <li class="list-group-item"><span> The prizes will be announced on the basis of all the points mentioned above.</span></li>
                                                                                    <li class="list-group-item"><span> Judges decision will be final.</span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="panel panel-default animated slideInLeft">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseRoundTwo">
                                                                                    <span class="fa fa-angle-up"></span>
                                                                                    PHOTOGRAPHY CONTEST
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapseRoundTwo" class="panel-collapse collapse">
                                                                            <div class="panel-body">
                                                                                <ul class="list-group">
                                                                                    <li class="list-group-item"><span> The pictures should be sent to us in .jpg format. </span></li>
                                                                                    <li class="list-group-item"><span> The picture should not be edited in any way before turning it in. </span></li>
                                                                                    <li class="list-group-item"><span> The pictures should justify the topic "minimalism". </span></li>
                                                                                    <li class="list-group-item"><span> One candidate is allowed to send only one picture and not more. </span></li>
                                                                                    <li class="list-group-item"><span> The picture shouldn't have any kind of lewd content. </span></li>
                                                                                    <li class="list-group-item"><span> The picture will be given marks according to the concept and the best ideas found.</span></li>
                                                                                    <li class="list-group-item"><span> Judges decision will be final.</span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </span>
                                                            </li>
                                                        </ul>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- FAQ -->
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
                                                                        1. What should be the theme of the short film?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    Any theme without lewd content is accepted.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        2. When is the last date of submission?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    On or before 4<sup>th</sup> August 2020.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        3. What should be the length of the film?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Strictly, it lasts less than 20 minutes.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        4. Are there any prizes?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFour" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Prize money for winners and e-certificates for all the participants will be provided.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        5. In which language should the video be made?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    All Indian languages are accepted but should contain English subtitles.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        6. What is the topic for the photography contest?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseSix" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    The topic is “minimalism”. Anything under that concept is acceptable unless the photo contains lewd content.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        7. What should be the format of the submission?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseSeven" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    Only .jpg format must be used.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        8. Should the photo be raw?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    Yes, the picture should be raw and no editing should be done. If any amount of editing is done, the contestant will be disqualified.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        9. How many pictures can be sent?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    Not more than one picture can be sent.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        10. What is the time of submission?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    The submission should be made on or before 4th August. Any submission after that will not be accepted.
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

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