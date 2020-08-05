<?php

use yii\helpers\Html;
use backend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$this->title = 'Eventlist Home';

?>
<div id="wrapper">

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">

            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3>
                </div>
                <div class="row">

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/fivemt']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>5 MT</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/aerozone']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Aerozone</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/aiworkshop']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>AI Workshop</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/blindcoding']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Blind Coding</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/circuitronics']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Circuitronics</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/codevita']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Code-Vita</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/comiccrusaders']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Comic Crusaders</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/concept']) ?>">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Concept-Ideabox</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/covidathon']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Covid-a-thon</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/dandd']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>D and D</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/davincicode']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Da Vinci Code</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/ecotopia']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Eco Topia</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/exquizme']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Ex-Quiz Me</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/filmina']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Filmina</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/mathmania']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Math-Mania</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/robokart']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Robokart</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/scientia']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Scientia</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/seedyourstartup']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Seed your Startup</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/sketch']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Sketch</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/techideb']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Techie Deb</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/webworld']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Web World</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <a href="<?php echo Url::to(['/eventlist/unselected']) ?>">
                            <div class="card shadow border-left-primary py-2">

                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>Unselected Events</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-sticky-note fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>