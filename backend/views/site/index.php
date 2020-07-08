<?php
$this->title = 'Home';
?>
<div class="site-index d-flex">

    <div class="card m-2" style="width: 14rem;">
        <div class="card-body">
            <h6 class="card-title">Total Participants</h6>
            <p class="card-text" style="font-size: 48px">
                <?php echo $totalParticipants ?>
            </p>
        </div>
    </div>

    <div class="card m-2" style="width: 14rem;">
        <div class="card-body">
            <h6 class="card-title">Total Registrations</h6>
            <p class="card-text" style="font-size: 48px">
                <?php echo $numberOfRegistrations ?>
            </p>
        </div>
    </div>

    <div class="card m-2" style="width: 14rem;">
        <div class="card-body">
            <h6 class="card-title">Total Number of Unique Colleges</h6>
            <p class="card-text" style="font-size: 48px">
                <?php echo $totalColleges ?>
            </p>
        </div>
    </div>

</div>
