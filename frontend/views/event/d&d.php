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

                            <h1>D & D – Design and Demo of prototype models </h1>
                            <h2>Dr. Kalam’s Club</h2>
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

                                            <p>

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
                                                                    <li class="list-group-item"><span>1. The abstract and description of the developed technology has to be submitted to the contact mail ID.</span></li>
                                                                    <li class="list-group-item"><span>2. The submissions undergo technical screening by experts.</span></li>
                                                                    <li class="list-group-item"><span>3. The selection is based on technical content, the novelty of the idea, and how it is beneficial to the society.</span></li>
                                                                    <li class="list-group-item"><span>4. The selected candidates will be communicated via Email </span></li>
                                                                    <li class="list-group-item"><span>5. These selected teams should register for the event. </span></li>
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
                                                                    <li class="list-group-item"><span>1. The technical presentation is via the online platform.</span></li>
                                                                    <li class="list-group-item"><span>2. Each presentation will be given 10 minutes of time (8 minutes for the presentation + 2 minutes for q & A)</span></li>
                                                                    <li class="list-group-item"><span>3. Points are based on technical content, the novelty of the idea, and how it is beneficial to the society </span></li>

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
                                                                        Should each team member register individually? Or a single team member can register for the entire team to participate?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    Answer 1
                                                                    Each team member should register individually for the event but can represent a single prototype together as a team.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 2
                                                                        What is an abstract?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Answer 2
                                                                    The abstract is an overview of the prototype that should consist of objective, method, result & conclusion. The abstract should also contain all the team-mates' details.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 3
                                                                        How to submit the abstract?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Answer 3
                                                                    The abstract should be e-mailed to the mail id which will be provided to the participants after registration
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 4
                                                                        When to submit the abstract?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFour" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Answer 4
                                                                    The Abstract should be submitted asap after registration. Selected candidates will then be notified via email so that they can start working on their prototype. The prototype should be ready before the final date of the event.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 5
                                                                        On what basis will the abstract be selected?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    Answer 5
                                                                    Selection is purely based on technical content, the novelty of the idea, and how it will be beneficial to society.
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 6
                                                                        Can we use a mobile phone for the presentation (video conference)?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    Answer 6
                                                                    It is preferred to have a laptop, but if not, then you can use a mobile. </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 7
                                                                        On which platform will the event be held?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    Answer 7
                                                                    Most probably, Zoom platform. The final meeting details will be shared with all teams prior to the event via their registered mail ids. </div>
                                                            </div>





                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 8
                                                                        What if I need more time to finish the prototype?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    Answer 8
                                                                    No delay will be appreciated. If the prototype is incomplete, it will be graded accordingly.</div>
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