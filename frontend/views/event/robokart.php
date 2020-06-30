<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\EventAsset;
use yii\helpers\Url;

$this->title = 'Robokart';
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
                            <a class="mu-logo" href="#">TECHNOSUMMIT</a>
                            <!-- image based logo -->
                            <!-- <a class="mu-logo" href="#"><img src="assets/images/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- End center Logo -->

                        <div class="mu-hero-featured-content animated slideInDown">

                            <h1>ROBOKART</h1>
                            <h2>ROBOTICS club</h2>
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
                                <div class="col-md-6">
                                    <div class="mu-about-left">
                                        <img class="animated slideInLeft" src="<?php echo Yii::$app->params['frontendUrl'] . 'event/images/about.jpg';?>" alt="Men Speaker">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-about-right animated slideInRight">
                                        <h2 style="text-decoration: underline;">Introduction</h2>
                                        <p>Do you agree with the fact that: Each one of us made some toys in our childhood days. Some might have forgotten it as they grow, but there are a few exceptional people who still design toys and make them their passion. And as they grow, the toy also grows and is called Robots.
                                            And this event is exclusively for those creators.  </p>



                                        <p>As the name says, the event is all about designing a unique robot which works mechanically or electrically.
                                            It should be related to robotics and mechatronics.
                                            Your design will be judged on the basis of its efficiency and Algorithm with reliability, cost efficiency.
                                            You can use any software to show the design of the machine. Participate and prove your ability with your creative MIND. </p>
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
                                    <div class="col-md-6">
                                        <div class="mu-about-left">
                                            <div class="mu-about-right animated slideInRight" style="justify-content: left;">
                                                <h2 style="text-decoration: underline;">ROUND 1</h2>
                                                <ul >
                                                    <li>The idea should be unique </li><br>
                                                    <li>And it is practically possible.</li><br>
                                                    <li>The idea should be framed in 3D design.</li><br>
                                                    <li>With proper algorithm</li><br>
                                                    <li>Other than Robotics Electronics, Electrical & Mechanical are welcome. <br\ >
                                                        The time limit per participant is minimum two minutes, maximum four minutes</li>
                                                </ul></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mu-about-right animated slideInRight">
                                            <h2 style="text-decoration: underline;">ROUND 2</h2>
                                            <ul><li>The idea should be unique </li><br>
                                                <li>And it is practically possible.</li><br>
                                                <li>The idea should be framed in 3D design.</li><br>
                                                <li>With proper algorithm</li>
                                            </ul></div>
                                    </div>
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