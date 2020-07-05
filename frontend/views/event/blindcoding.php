<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\EventAsset;
use yii\helpers\Url;

$this->title = 'Blind Coding';
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
                            <a class="mu-logo" href="../../index.html">TECHNOSUMMIT</a>
                            <!-- image based logo -->
                            <!-- <a class="mu-logo" href="#"><img src="assets/images/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- End center Logo -->

                        <div class="mu-hero-featured-content animated slideInDown">

                            <h1>BLIND CODING</h1>
                            <h2>MICROSOFT CLUB </h2>
                            <br><br>
                            <a href="../../about.html" class="btn btn-first">BACK</a>
                            <a href="../../registration.php" class="btn btn-nav">REGISTER</a>
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
                                <div class="col-md-6">
                                    <div class="mu-about-left">
                                        <img class="animated slideInLeft" src="<?php echo Yii::$app->params['frontendUrl'] . 'event/images/event_blindcoding.png';?>" alt="Men Speaker">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-about-right animated slideInRight">
                                        <h2 style="text-decoration: underline;">Introduction</h2>

                                        <p>The eyes are said to be the most important sensory organ because we perceive so much through them; but have you ever thought about how the blind perceives them?
                                        </p><br><p>Welcome to blind coding, yes, you heard that right! In this event, you'll be placed outside your comfort zone and must display your natural ability to code without any help from your eyes.
                                        </p>
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


        <!-- Start Sponsors -->
        <section id="mu-sponsors">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-sponsors-area">

                            <div class="mu-title-area">
                                <h2 class="mu-title animated flipInX" style="text-decoration: underline;">Rules and Regulations</h2>
                                <div class="row">



                                    <h2 style="text-decoration: underline;"></h2>

                                    <p>●	The event consists of 4 rounds, and each round lasts for 30 minutes.</p>

                                    <p>●	First Two rounds consist of MCQs.</p>

                                    <p>●	Last Two rounds consist of Coding questions.</p>

                                    <p>●	Scores will be given by the judges.</p>
                                    <p>●	Winners will be declared based on marks scored.</p>

                                </div>
                            </div>

                            <!-- End spnonsors brand logo -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Sponsors -->


        <!-- Start FAQ -->
        <section id="mu-faq">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-faq-area">

                            <div class="mu-title-area">
                                <h2 class="mu-title" style="text-decoration: underline;">FAQ(COMING SOON)</h2>
                                <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint assumenda ut molestias doloremque ipsam, fugit laborum totam, pariatur est cumque at, repudiandae officia ex dolores quas minus optio, iusto soluta?</p>
                            </div>

                            <div class="mu-faq-content">

                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default animated zoomInLeft">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">
                                            <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet.
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                      </div>
                                    </div>

                                    <div class="panel panel-default animated slideInLeft">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                      </div>
                                    </div>

                                    <div class="panel panel-default animated slideInRight">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet, consectetur.
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                      </div>
                                    </div>

                                    <div class="panel panel-default animated slideInLeft">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                            <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet, consectetur adipisicing.
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                      </div>
                                    </div>

                                    <div class="panel panel-default animated slideInRight">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                            <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet, consectetur.
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseFive" class="panel-collapse collapse ">
                                        <div class="panel-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                      </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
         End FAQ -->


    </main>

    <!-- End main content -->



    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>