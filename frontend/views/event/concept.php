<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\EventAsset;
use yii\helpers\Url;

$this->title = 'Concept';
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

                            <h1>CONCEPT IDEA BOX</h1>
                            <h2>ENCORE CLUB</h2>
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
                                        <img class="animated slideInLeft" src="<?php echo Yii::$app->params['frontendUrl'] . 'event/images/event_concept.png'; ?>" alt="Concept"> </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class=" mu-about-right animated slideInRight">
                                            <h2 style="text-decoration: underline;">Description :-</h2>
                                            <p>
                                                Innovation is crucial to the continuing success of an organisation. This event is all
                                                about UNBOXING YOUR IDEAS in this perfect platform. The concept gives you a platform to
                                                showcase your ideas for making a better community for better tomorrow.
                                            </p><br>
                                            <p>
                                                <b>Number of Rounds : 1</b>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Row starts -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mu-sponsors-area animated zoomInRight">
                                                <p class="myAccordion">Round Description</p>
                                                <div class="myPanel">
                                                    <ul class="list-group">
                                                        <li class="list-group-item"><span> The participants, once registered, are ready to begin with.</span></li>
                                                        <li class="list-group-item"><span> Since the topic is COVID-19, the participants are supposed to represent an idea, which can be useful in a pandemic like the current situation.</span></li>
                                                        <li class="list-group-item"><span> The participants have to submit their entries via a short video of around 1 to 2 minutes. </span></li>
                                                        <li class="list-group-item"><span> A drawing can also be made along with the video, which is optional</span></li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Row ends -->

                                    <!-- Row starts -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mu-sponsors-area animated zoomInRight">
                                                <p class="myAccordion">Rules and Regulations</p>
                                                <div class="myPanel">
                                                    <ul class="list-group">
                                                        <li class="list-group-item"><span> The topic is COVID-19, and the participants should make a product which can be developed and can get commercialized that helps the community. </span></li>
                                                        <li class="list-group-item"><span> The event consists of only one round, and it is an individual event. </span></li>
                                                        <li class="list-group-item"><span> Submission of videos is compulsory. </span></li>
                                                        <li class="list-group-item"><span> The length of the video can be around 1 to 2 minutes. </span></li>
                                                        <li class="list-group-item"><span> An additional source of project depiction such as posters or drawing can also be submitted. (optional) </span></li>
                                                        <li class="list-group-item"><span> The deadline to submit the video (compulsory) and drawings (optional) is on or before 05-08-2020. </span></li>
                                                        <li class="list-group-item"><span> The top 10 to 15 submissions will be considered by the jury and will be displayed on the day of the event. </span></li>
                                                        <li class="list-group-item"><span> A mail will be sent to the students who get selected. </span></li>
                                                        <li class="list-group-item"><span> The selected students will be asked to present their project for 3-4 minutes. </span></li>
                                                        <li class="list-group-item"><span> The winners will be decided on the basis of their project's value.</span></li>
                                                        <li class="list-group-item"><span> Judges decision will be final. </span></li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Row ends -->

                                    <!-- Row starts -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mu-sponsors-area animated zoomInRight">
                                                <p class="myAccordion">Analysing the Project</p>
                                                <div class="myPanel">
                                                    <ul class="list-group">
                                                        <li class="list-group-item"><span> The novelty of the product (30 marks) </span></li>
                                                        <li class="list-group-item"><span> Usefulness to the community (20 marks) </span></li>
                                                        <li class="list-group-item"><span> Presentation of the product (20 marks) </span></li>
                                                        <li class="list-group-item"><span> Commercialization of the product (30 marks) </span></li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Row ends -->

                                    After evaluating the videos, the best ten concepts of the participants will be present on the day of TECHNO SUMMIT 2020 on 07-08-2020.

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
                                                                        Question 1
                                                                        What should be the size of the video file?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    Answer 1
                                                                    Anything but nothing above HD since file size gets too large otherwise.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 2
                                                                        What should be the video format?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Answer 2
                                                                    Anything but nothing above HD since file size gets too large otherwise.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 3
                                                                        How long should the description of the product be?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Answer 3
                                                                    Not more than 100 words.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 4
                                                                        Does the concepts apart from developing the community be applied?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFour" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Answer 4
                                                                    Yes, definitely.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Question 5
                                                                        Can there be more than one participant in the video?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    Answer 5
                                                                    Yes, sure. Participation can be done as an individual or in a pair.
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