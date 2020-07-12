<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\EventAsset;
use yii\helpers\Url;

$this->title = 'Ex-Quiz-Me';
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

                            <h1>EX-QUIZ-ME</h1>
                            <h2>COMMUNITY DEVELOPMENT CLUB</h2>
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
                                        <img class="animated slideInLeft" src="<?php echo Yii::$app->params['frontendUrl'] . 'event/images/event_exquizme.png'; ?>" alt="Ex-Quiz-Me">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class=" mu-about-right animated slideInRight">
                                            <h2 style="text-decoration: underline;">Description :-</h2>

                                            <p>
                                                The feast for your fastest finger tips. EX-Quiz ME is based on the main exploration of the “Environmental Aspects and Technology”.
                                                This event also allows the candidates to know more about the on-going pandemic happenings, and also the things which we do without
                                                the actual knowledge. The Environment should be protected by advanced technologies rather than deploying. The questions make us think
                                                and also help us in technological implementations against the odds.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Row starts -->
                                        <div class="col-md-12">
                                            <div class="mu-sponsors-area animated zoomInRight">
                                                <p class="myAccordion">Rules and Regulations</p>
                                                <div class="myPanel">
                                                    <ul class="list-group">
                                                        <li class="list-group-item"><span> Two sets of quizzes on the respective days. </span></li>
                                                        <li class="list-group-item"><span> The quiz will be set for about 15-20 minutes. </span></li>
                                                        <li class="list-group-item"><span> Only the scores will be displayed at the end of the Quiz, and the answers will not be displayed. </span></li>
                                                        <li class="list-group-item"><span> Certain mandatory login credentials are required before joining the quiz such as Name, e-mail of the candidate, University /College they study etc for the purpose of generation of the certificate. </span></li>
                                                        <li class="list-group-item"><span> The participant should attain a minimum of 80% to acquire the certificate. </span></li>
                                                        <li class="list-group-item"><span> One should take the Quiz using a single login ID. </span></li>
                                                        <li class="list-group-item"><span> The Awarded members will receive their E-Certificates through their login ID. </span></li>
                                                        <li class="list-group-item"><span> Judges decision will be final. </span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Row ends -->

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
                                                                        1. What are the required percentage/eligibility criteria for clearing the quiz?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    The candidate requires 80% for clearing the quiz session.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        2. Is there any time limit?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    The Quiz is programmed for about 20 minutes.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        3. When does the timer start?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    The timer starts once the form in the quiz page is opened.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInLeft">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        4. How are the members selected?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFour" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    The members are chosen on the eligibility criteria of the quiz.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        5. This quiz session based on what?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFive" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    The quiz is based on Environmental aspects and Technology.
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        6. When will we get the Google form link?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseSix" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    The form will be available in your registered mail ID before the beginning of the session.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        7. What is the procedure for registrations?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseSeven" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    The candidate will be provided a registration link
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        8. Can we attend the quiz with a team or an individual login is needed?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseEight" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    Mostly, individual login is preferred.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        9. How will we be notified about the results?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseNine" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    You will be notified with your respective scores at the end of the session.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        10. Can the quiz be used for the entire day?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTen" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    Based on this session, the timing is scheduled and will be sent along with a link to your registered mail ID.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        11. Is this quiz only for students?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseEleven" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    The quiz session is set on the target for everyone to know much about our environment.
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        12. What are the login details needed?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwelve" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    The candidate is required to enter the correct E-mail and the necessary info for registering.
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        13. What if the link does not work?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThirteen" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    The link is designed for every individual on the specific time limits. Beyond the scheduled timing, the committee is not responsible for that.
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        14. Will the quiz get auto-submitted?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFourteen" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    The quiz gets submitted once the timer ends.
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="panel panel-default animated slideInRight">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen">
                                                                        <span class="fa fa-angle-up"></span>
                                                                        15. What is the procedure to end the quiz?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseFifteen" class="panel-collapse collapse ">
                                                                <div class="panel-body">
                                                                    The candidate is requested to click the submit option which is provided at the bottom of the page to end the quiz.
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