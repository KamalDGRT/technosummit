<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\RegistrationAsset;

RegistrationAsset::register($this);
$this->title = 'Technosummit Registration';
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

    <h1 class="logo">Technosummit Registration</h1>

    <center><a href="nav.html" class="home">Home</a></center>
    <form id="msform" method="post" enctype="multipart/form-data" action="registration.php">

        <ul id="progressbar">
            <li class="active">Contact Info</li>
            <li>College Details</li>
            <li>Location Details</li>
            <li>Payment Details</li>
        </ul>

        <fieldset>
            <h2 class="fs-title">Contact Info</h2>
            <h3 class="fs-subtitle">This is to send certifcates. All the fields are required.</h3>
            <input type="text" name="r_name" placeholder="Name" required />
            <input type="email" name="r_email" placeholder="Email Address" required />
            <input type="text" name="r_phone" placeholder="Phone Number" minlength="10" maxlength="10" required />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>

        <fieldset>
            <h2 class="fs-title">College Details</h2><br>
            <input type="text" name="r_college" placeholder="College" required />
            <select name="r_year" required>
                <option>Select Year </option>
                <option value="1">First Year </option>
                <option value="2">Second Year</option>
                <option value="3">Third Year</option>
                <option value="4">Fourth Year</option>
            </select>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>

        <fieldset>
            <h2 class="fs-title">Location Details</h2><br>
            <input type="text" name="r_city" placeholder="City" required />
            <input type="text" name="r_state" placeholder="State" required />
            <select name="r_event" required>
                <option>Select Event</option>
                <option value="1">ROBOKART</option>
                <option value="2">BLIND CODING</option>
                <option value="3">Math-Mania</option>
                <option value="4">Eco-Topia</option>
                <option value="5">CIRCUITRONICS</option>
                <option value="6">SCIENTIA</option>
                <option value="7">Code-Vita</option>
                <option value="8">CONCEPT</option>
                <option value="9">SEED YOUR STARTUP</option>
                <option value="10">COVID-A-THON</option>
                <option value="11">D & D</option>
                <option value="12">SKETCH</option>
                <option value="13">WEB WORLD</option>
                <option value="14">COMIC CRUSADERS</option>
                <option value="15">TECHIE DEB</option>
                <option value="16">EX-QUIZ ME</option>
                <option value="17">5 MT</option>
                <option value="18">FILMINA</option>
                <option value="19">AERO ZONE</option>
                <option value="20">AI WORKSHOP</option>
                <option value="21">DA VINCI CODE</option>
            </select>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>

        <fieldset>
            <h2 class="fs-title">Payment Details</h2>
            <h3 class="fs-subtitle">Attach the Screenshot of the Payment and Enter the Transaction ID</h3>
            <input type="file" name="r_screenshot" placeholder="Attach payment Screenshot" required />
            <input type="text" name="r_trn_id" placeholder="Transaction ID" required />
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
        </fieldset>

    </form>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>