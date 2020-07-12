<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\EventAsset;
use yii\helpers\Url;

$this->title = '';
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

                            <h1>Seed your Start-up </h1>
                            <h2>Entrepreneurship Development Club </h2>
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
                                        <img class="animated slideInLeft" src="<?php echo Yii::$app->params['frontendUrl'] . 'event/images/event_robokart.png'; ?>" alt="Men Speaker"> </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class=" mu-about-right animated slideInRight">
                                            <h2 style="text-decoration: underline;">Description :-</h2>

                                            <p>Everything begins with a simple seed. Start-ups are the seeds which grow into the evolution which we know and witness every day.
                                                Do you believe in having “that simple seed” in you? Do you believe that you can be the reason for the next big innovation which the world is waiting for? Show us the extent of your limitless imagination and bring your startup to this event!

                                            </p><br>
                                            <p>Theme of this event is <b>“Money from Machines”</b>.</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Row starts -->
                                        <div class="col-md-12">
                                            <div class="mu-sponsors-area animated zoomInRight">
                                                <p class="myAccordion">Rules and Regulations</p>
                                                <div class="myPanel">

                                                    <!-- Round1 Starts -->
                                                    <div class="panel panel-default animated zoomInLeft">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseRoundOne">
                                                                    <span class="fa fa-angle-up"></span>
                                                                    Round 1
                                                                </a>
                                                            </h4>
                                                        </div>

                                                        <div id="collapseRoundOne" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item"><span>1. Participants can either participate individually or in teams with a maximum of 4 members.</span></li>
                                                                    <li class="list-group-item"><span>2. Business Idea and Presentation should be pre-prepared. (Should not be from an existing model, it should be a new one)</span></li>
                                                                    <li class="list-group-item"><span>3. PPT can vary between min. 5 slides/ max. 8 slides.</span></li>
                                                                    <li class="list-group-item"><span>4. Business Pitch should be min. Of 3 minutes to max. 5 minutes. </span></li>
                                                                    <li class="list-group-item"><span>5. Followed by a Questionnaire </span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <!-- Round1 Ends -->

                                                    <!-- Round2 Starts -->
                                                    <div class="panel panel-default animated zoomInLeft">
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
                                                                <ul class="list-group">
                                                                    <li class="list-group-item"><span>1. Case Study: On a product/service, topics will be given on the spot. </span></li>
                                                                    <li class="list-group-item"><span>2. Discussion Time will be given to compile points.</span></li>
                                                                    <li class="list-group-item"><span>3. Then the participant should speak on How to Improvise (3 — 5 minutes). </span></li>
                                                                    <li class="list-group-item"><span>4. Followed by a Questionnaire. </span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Round2 Ends -->

                                                </div><br>

                                            </div>
                                        </div>
                                    </div> <!-- Row ends -->

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
                                                                        1. Should the model be product or service based?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    Answer 1
                                                                    Either
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 2
                                                                        2. Is there any technical description?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Answer 2
                                                                    No technical description required (as it's your trade secret).
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 3
                                                                        On what basis should the PPT be presented?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Answer 3
                                                                    Business aspects only.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 4
                                                                        How will the case study be conducted in round two?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFour" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Answer 4
                                                                    A problem statement will be given. You'll be then judged based on your Problem-Solving skills and Business-Oriented approach.
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