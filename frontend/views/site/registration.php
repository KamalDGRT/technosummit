<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use backend\assets\RegistrationAsset;
use yii\widgets\ActiveForm;

RegistrationAsset::register($this);
$this->title = 'Technosummit Registration';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <h1 class="logo">Technosummit</h1>
    <h1 class="logo">Registration</h1>

    <div class="account">
        <h2 class="fs-title" style="text-align:center;">Account Details for Payment</h2>
        <table style="border: black 1px solid; margin: 0 auto;">
            <tr style="border: black 1px solid; padding:5px;">
                <th style="border-right: black 1px solid;  padding:5px;">Name</th>
                <td style="padding:5px;">DEAN&nbsp;STUDENT&nbsp;-&nbsp;SATHYABAMA</td>
            </tr>
            <tr style="border: black 1px solid; padding:5px;">
                <th style="border-right: black 1px solid;  padding:5px;">Account Number</th>
                <td style="padding:5px;">6624554163</td>
            </tr>
            <tr style="border: black 1px solid; padding:5px;">
                <th style="border-right: black 1px solid;  padding:5px;"> IFSC Code </th>
                <td style="padding:5px;"> IDIB000S201 </td>
            </tr>
            <tr style="border: black 1px solid; padding:5px;">
                <th style="border-right: black 1px solid;  padding:5px;"> Branch </th>
                <td style="padding:5px;"> Sathyabama University </td>
            </tr>
            <tr style="border: black 1px solid; padding:5px;">
                <th style="border-right: black 1px solid;  padding:5px;"> Branch Code </th>
                <td style="padding:5px;"> 02189 </td>
            </tr>
            <tr style="border: black 1px solid; padding:5px;">
                <th style="border-right: black 1px solid;  padding:5px;"> UPI ID </th>
                <td style="padding:5px;"> jayakrishna.adc5@okicici </td>
            </tr>
        </table>
        <br>
        While making the payment mention your name, college and event name.
    </div><br>

    <center><a href="<?php echo \yii\helpers\Url::to(['/event/index']) ?>" class="home">Events</a></center>
    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
        'id' => 'msform'
    ]); ?>

    <p class="myAccordion">List of events day-wise</p>
    <div class="myPanel">
        <div class="row">
            <div class="column" style="background-color:#fff;">
                <?= Html::img('event/images/day1.jpeg', 
                                ['alt'=>'some', 
                                'class'=>'responsive'
                                ]
                            );?>
            </div>

            <div class="column" style="background-color:#fff;">
                <?= Html::img('event/images/day2.jpeg', 
                                ['alt'=>'some', 
                                'class'=>'responsive'
                                ]
                            );?>
            </div>
        </div>

    </div>

    <fieldset>

        <div style="background:pink;color:blue;">
            <?php echo $form->errorSummary($model) ?>
        </div>

        <h2 class="fs-title">Contact Info</h2>
        <h3 class="fs-subtitle">This is to send certifcates. All the fields are required.</h3>
        <h4 class="fs-subtitle bold"><b>Note: Attach Payment Screenshot of each event separately.</b></h4>

        <?= $form->field($model, 'r_salutation')->dropDownList($model->getSalutationLabels())->label(false) ?>

        <?= $form->field($model, 'r_name')->textInput([
            'maxlength' => true,
            'onkeypress' => 'return allowOnlyAlphabets(event)',
            'placeholder' => "Name"
        ])->label(false) ?><br>

        <?= $form->field($model, 'r_email')->textInput([
            'maxlength' => true,
            'type' => 'email',
            'placeholder' => "Email Address"
        ])->label(false) ?><br>

        <?= $form->field($model, 'r_phone')->textInput([
            'maxlength' => 10,
            'onkeypress' => 'return restrictAlphabets(event)',
            'placeholder' => "Phone Number"
        ])->label(false) ?><br>
        <br>

        <h2 class="fs-title">College Details</h2><br>

        <?= $form->field($model, 'r_college')->textInput([
            'maxlength' => true,
            'onkeypress' => 'return allowAlphabets(event)',
            'placeholder' => "College/Institution"
        ])->label(false) ?><br>

        <?= $form->field($model, 'r_year')->dropDownList($model->getYearLabels())->label(false) ?>
        <br>
        <h2 class="fs-title">Location Details</h2><br>

        <?= $form->field($model, 'r_city')->textInput([
            'maxlength' => true,
            'onkeypress' => 'return allowOnlyAlphabets(event)',
            'placeholder' => "City"
        ])->label(false) ?><br>

        <?= $form->field($model, 'r_state')->textInput([
            'maxlength' => true,
            'onkeypress' => 'return allowOnlyAlphabets(event)',
            'placeholder' => "State"
        ])->label(false) ?><br>

        <?= $form->field($model, 'r_event')->dropDownList($model->getEventLabels())->label(false) ?>
        <br>
        <h2 class="fs-title">Payment Details</h2>
        <h3 class="fs-subtitle">Attach the Screenshot of the Payment and Enter the Transaction ID</h3>


        <?= $form->field($model, 'r_payment')->dropDownList($model->getPaymentLabels())->label(false) ?>

        <div class="custom-file">
            <input type="file" class="custom-file-input" id="r_screenshot" name="r_screenshot" required>
        </div>

        <?= $form->field($model, 'r_transaction_id')->textInput([
            'maxlength' => true,
            'placeholder' => "Transaction ID"
        ])->label(false) ?><br>
        <?= Html::submitButton('Submit', ['class' => 'submit action-button']) ?>
    </fieldset>

    <?php ActiveForm::end(); ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>