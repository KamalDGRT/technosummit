<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\EventsAsset;
use yii\helpers\Url;

$this->title = 'List of Events';
EventsAsset::register($this);
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
    <body>
    <div class="row">
        <div class="column12">
            <h1
                    style="
            font-size: 50px;
            font-family:Slippery Slime;
            color: aliceblue;
            text-shadow: #FC0 5px 0 10px;
          "
            >
                <center class="event animated bounceInLeft">EVENT'S NAME</center>
            </h1>
        </div>
        <br>
        <br>
        <a href="nav.html" class="btn btn-first">Click Here</a>
    </div>
    </div>

    <div class="text"></div>
    <div id="particles-js"></div>
    <div class="wrapper">
        <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front"
                         style="background-image: url(<?php echo Yii::$app->params['frontendUrl'] . 'img/4.jpg';?>)">
                        <div class="inner">
                            <p>ROBOKART</p>
                            <span>Robotics Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner ">
                            <p>
                                This event is all about designing a unique robot which works mechanically or electrically.
                            </p>
                            <a href="<?php echo Url::to(['/event/robokart']) ?>">
                                <button type="button" class="button">Read More!</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(img/4.jpg)">
                        <div class="inner">
                            <p>BLIND CODING</p>
                            <span>Microsoft Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Welcome to blind coding, yes, you heard that right! In this event, you'll be placed outside your comfort zone </p>
                            <a href="event/Microsoft Club/BLIND CODING.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div
                            class="front"
                            style="background-image: url(img/4.jpg)";
                    >
                        <div class="inner">
                            <p>Math-Mania</p>
                            <span>Mathematics Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Math Mania is a funtastic event for all Math Maniacs. The event involves exciting math based quizzes and puzzles.
                            </p>
                            <a href="event/Mathematics club/Math mania.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div
                            class="front"
                            style="background-image: url(img/4.jpg);";
                    >
                        <div class="inner">
                            <p>Eco-Topia</p>
                            <span>ECO Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Get the most creative and lose yourself in the green world and bring your imagination to life in the form of posters.</p>
                            <a href="event/ECO CLUB/ECO TOPIA.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div
                            class="front"
                            style="background-image: url(img/4.jpg);"
                    >
                        <div class="inner">
                            <p>CIRCUITRONICS</p>
                            <span>Hardware Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                This event is for electronics lovers. Are you a person who handles circuits and logic gates? Then you are in the right place.
                            </p>
                            <a href="event/Hardware Club/Circuitronics.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div
                            class="front"
                            style="background-image: url(img/4.jpg);"
                    >
                        <div class="inner">
                            <p>SCIENTIA</p>
                            <span>Science Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Are you a science lover? Are you ready for a test of knowledge? If yes, then this is a platform to show-off .
                            </p>
                            <a href="event/SCIENCE CLUB/Scientia.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div
                            class="front"
                            style="background-image: url(img/4.jpg);"
                    >
                        <div class="inner">
                            <p>CodeVita</p>
                            <span> Innovation Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                CodeVita is an energising event which involves solving an exciting problem allotted to the participants.
                            </p>
                            <a href="event/Innovation Club/CodeVita.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div
                            class="front"
                            style="background-image: url(img/4.jpg);"
                    >
                        <div class="inner">
                            <p>CONCEPT</p>
                            <span>Encore Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Innovation is crucial to the continuing success of an organisation.
                                This event is all about UNBOXING YOUR IDEAS.
                            </p>
                            <a href="event/ENCORE CLUB/CONCEPT.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text"></div>
    <div id="particles-js"></div>
    <div class="wrapper">
        <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(img/4.jpg);">
                        <div class="inner">
                            <p>SEED YOUR STARTUP</p>
                            <span>EDC Club </span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Everything begins with a simple seed.
                                Start-ups are the seeds and that grow into the evolution we know and witness every day.
                            </p>
                            <a href="event/Entrepreneurship Development Club/Seed your Start-up.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(img/4.jpg);">
                        <div class="inner">
                            <p>COVID-A-THON</p>
                            <span>CSE Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Do you have any technological innovation designed to save the world from the ongoing pandemic?
                            </p>
                            <a href="event/CSE Club/COVID-A-THON.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(img/4.jpg);">
                        <div class="inner">
                            <p>D & D</p>
                            <span>Dr.Kalam Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Do you have the next big idea that can make an impact on our society?
                                Here is your ultimate chance to display.
                            </p>
                            <a href="event/Dr Kalams Club/DD.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(img/4.jpg);">
                        <div class="inner">
                            <p>SKETCH</p>
                            <span> AUTO Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Are you a person who sketches down everything you see?
                                Or are you the one who masters sketching? .
                            </p>
                            <a href="event/Auto Club/SKETCH.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div
                            class="front"
                            style="background-image: url(img/4.jpg);"
                    >
                        <div class="inner">
                            <p>WEB WORLD</p>
                            <span>Mozilla Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Since its inception, websites have been the foundation of companies and organizations galore.

                            </p>
                            <a href="event/Mozilla Club/Web World.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div
                            class="front"
                            style="background-image: url(img/4.jpg);"
                    >
                        <div class="inner">
                            <p>COMIC CRUSADERS</p>
                            <span>English Club </span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                A comic book is a special part of everyone's childhood, and it is pretty sure that they hold a special place in your life
                            </p>
                            <a href="event/English Literary Club/Comic Crusaders.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div
                            class="front"
                            style="background-image: url(img/4.jpg);"
                    >
                        <div class="inner">
                            <p>TECHIE DEB</p>
                            <span>Debate and Anti Human trafficking Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                The debate is indispensable characteristics of an individual that makes them put forward their perspective in analyzing</p>
                            <a href="event/DEBATE CLUB & ANTI HUMAN TRAFFICKING/TECHIE DEB.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div
                            class="front"
                            style="background-image: url(img/4.jpg);"            >
                        <div class="inner">
                            <p>EX-QUIZ ME</p>
                            <span>CDC</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                The feast for your fastest finger tips. EX-Quiz ME is based on the main exploration of the Environmenttal Aspech and Technology.
                            </p>
                            <a href="event/Community Development Club/EX-QUIZ ME.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="cols">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front"
                         style="background-image: url(img/4.jpg);">
                        <div class="inner">
                            <p>5 MT</p>
                            <span> ROTARACT </span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Are you the kind of a person who opts for short, exciting and enlightening events.
                                Then here is your genre. .
                            </p>
                            <a href="event/Rotaract club/5MT.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(img/4.jpg);">
                        <div class="inner">
                            <p>FILMINA</p>
                            <span> Dance and Music Clubs </span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Are you an aspiring film maker? Or Are you someone who is passionate about photography and wants to put his/her skills to test?
                            </p>
                            <a href="event/DANCE AND MUSIC CLUB/FILMINA.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(img/4.jpg);">
                        <div class="inner">
                            <p>AERO ZONE</p>
                            <span>Aero Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Aerozone is an exciting event which involves modelling and designing.creativity and thinking skills of the participant.
                            </p>
                            <a href="event/Aero Club/Aerozone.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(img/4.jpg);">
                        <div class="inner">
                            <p>AI workshop</p>
                            <span>Tamil Club and Microsoft Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Artificial Intelligence  (AI) is one of the potential bi-products of the innovation revolution that the world is experiencing.
                            </p>
                            <a href="event/Microsoft Club and Tamil Club/AI WORKSHOP.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(img/4.jpg);">
                        <div class="inner">
                            <p>DAVINCI CODE</p>
                            <span>Design Club</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>
                                Are you a fan of mystery or are you someone who always looks for mysterious things to put your mind into it?
                            </p>
                            <a href="event/DESIGN CLUB/DA VINCI CODE.html"
                            ><button type="button" class="button">Read More!</button></a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>