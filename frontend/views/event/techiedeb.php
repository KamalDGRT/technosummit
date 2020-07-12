<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\EventAsset;
use yii\helpers\Url;

$this->title = 'TechieDeb';
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

                            <h1>TECHIE DEB</h1>
                            <h2>DEBATE CLUB &amp; ANTI HUMAN TRAFFICKING CLUB</h2>
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
                                        <img class="animated slideInLeft" src="<?php echo Yii::$app->params['frontendUrl'] . 'event/images/event_techiedeb.jpg'; ?>" alt="Techie Deb">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class=" mu-about-right animated slideInRight">
                                            <h2 style="text-decoration: underline;">Description :-</h2>
                                            <p>
                                                The debate is an indispensable characteristic of an individual that makes them put forward their
                                                perspective in analyzing a situation of social cause linked with technology, whether it is in favor
                                                or against it.
                                            </p><br>
                                            <p>Techie Deb is a debating event.</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mu-sponsors-area animated zoomInRight">
                                                <p class="myAccordion">Description of the Rounds</p>
                                                <div class="myPanel">
                                                    <div class="panel-group" id="accordion">

                                                        <div class="panel panel-default animated zoomInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseDayOne">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Day 1 - Prelims
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseDayOne" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    Each speaker will be given 3 minutes to speak and 2 minutes for the rebuttal.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseDayTwo">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Day 2 - Semi-finals
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseDayTwo" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Semi-final Round: Eight students will be qualified for this round, and each
                                                                    speaker will be given 5 minutes to speak and 3 minutes for the rebuttal.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFinals">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        FINALS (Day2):
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFinals" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Two students will be qualified for this round, and each speaker will be given
                                                                    6 minutes to speak and 4 minutes for the rebuttal.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseWinner">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        Selection of Winner
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseWinner" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    Based upon the discretion of Judges in each round, the top 4 participants will be
                                                                    qualified for the Semi-finals and the top 2 for the Finals.
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <!-- Row starts -->
                                        <div class="col-md-12">
                                            <div class="mu-sponsors-area animated zoomInRight">
                                                <p class="myAccordion">Rules and Regulations</p>
                                                <div class="myPanel">

                                                    <ul class="list-group">
                                                        <li class="list-group-item"><span> 1. The debate is based on the amended version of Lincoln- Douglas format, i.e., one to one. </span></li>
                                                        <li class="list-group-item"><span> 2. Debating ~ Only individual registrations is considered and hence no restriction on the number of registrations from a college.</span></li>
                                                        <li class="list-group-item"><span> 3. The mode of competition is online. </span></li>
                                                        <li class="list-group-item"><span> 4. Each zoom classroom would consist of 1 Judge, 2 Participants, 2 students, and Coordinators. </span></li>
                                                        <li class="list-group-item"><span> 5. As it is one to one debate, one team will speak FOR the motion, another one will speak AGAINST the motion. </span></li>
                                                        <li class="list-group-item"><span> 6. All the participants are requested to prepare for both the proposition as well as the opposition where the motion to be presented by the participant will be announced by the judge in the Zoom meeting.</span></li>
                                                        <li class="list-group-item"><span> 7. Each participant will be allotted a student coordinator from the host institution to attend the issues and doubts of the participants. </span></li>
                                                        <li class="list-group-item"><span> 8. The organizing committee would provide the participants with the Zoom ID and Password, 1 hour prior to the respective rounds, through registered mail id and registered WhatsApp numbers. </span></li>
                                                        <li class="list-group-item"><span> 9. Proper internet connection is required for participation in this competition, and in case of a blackout or improper connection, the participant may be disqualified by the organizing committee. </span></li>
                                                        <li class="list-group-item"><span> 10. The official ID card of the participant must be sent to the student coordinator allotted. </span></li>
                                                        <li class="list-group-item"><span> 11. All Participants must be in Proper formal attire during the competition. </span></li>
                                                        <li class="list-group-item"><span> 12. Participants are not allowed to interrupt the fellow participant when he or she is presenting. </span></li>
                                                        <li class="list-group-item"><span> 13. Participants are requested to be mindful of the time limit. Exceeding the time limit would result in negative marking. </span></li>
                                                        <li class="list-group-item"><span> 14. No participant will be allowed to argue with the judge, and the judge’s decision will be conclusive. </span></li>
                                                        <li class="list-group-item"><span> 15. Participants must refrain from using obscene words and are requested to maintain the dignity and decorum of the competition.</span></li>
                                                        <li class="list-group-item"><span> 16. Organizers reserve the right to alter/change the rules/ or procedure of the competition if the need so arises.</span></li>
                                                        <li class="list-group-item"><span> <b>ELIGIBILITY</b> : All Undergraduate Programmes students are eligible to register. </span></li>
                                                    </ul>

                                                </div><br>
                                            </div>
                                        </div>
                                    </div> <!-- Row ends -->

                                    <!-- FAQs -->
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