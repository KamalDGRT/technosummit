<?php
$this->title = 'Home';

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
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-danger font-weight-bold text-xs mb-1">
                                            <span>Total Participants</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $totalParticipants ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                            <span>Total Registrations (Confirmed) </span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $numberOfRegistrationsConfirmed ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                                            <span>Total Registrations (Not Confirmed) </span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $numberOfRegistrationsNotConfirmed ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            <span>Total Registrations</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $numberOfRegistrations ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div id="wrapper">

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-danger font-weight-bold text-xs mb-1">
                                            <span>Total Number of Unique Colleges</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $totalColleges ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            <span>Total Boys (Confirmed) </span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $numberOfBoys ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                            <span>Total Girls (Confirmed) </span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $numberOfGirls ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                                            <span>UPI Transactions (Confirmed) </span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $numberOfUPI ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="wrapper">

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-danger font-weight-bold text-xs mb-1">
                                            <span>Account Tranfers (Confirmed)</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $numberOfBank ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

</div>