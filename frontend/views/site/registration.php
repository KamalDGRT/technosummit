<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use backend\assets\RegistrationAsset;
use yii\bootstrap4\ActiveForm;

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

    <center><a href="<?php echo \yii\helpers\Url::to(['/event/index']) ?>" class="home">Events</a></center>
    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
        'id' => 'msform'
    ]); ?>
        <fieldset>

            <?php echo $form->errorSummary($model) ?>

            <h2 class="fs-title">Contact Info</h2>
            <h3 class="fs-subtitle">This is to send certifcates. All the fields are required.</h3>

            <?= $form->field($model, 'r_name')->textInput([
                    'maxlength' => true,
                    'placeholder' => "Name"])->label(false) ?><br>

            <?= $form->field($model, 'r_email')->textInput([
                'maxlength' => true,
                'type' => 'email',
                'placeholder' => "Email Address"])->label(false) ?><br>

            <?= $form->field($model, 'r_phone')->textInput([
                'maxlength' => true,
                'placeholder' => "Phone Number"])->label(false) ?><br>
            <br>

            <h2 class="fs-title">College Details</h2><br>

            <?= $form->field($model, 'r_college')->textInput([
                'maxlength' => true,
                'placeholder' => "College/Institution"])->label(false) ?><br>

            <?= $form->field($model, 'r_year')->dropDownList($model->getYearLabels())->label(false) ?>
            <br>
            <h2 class="fs-title">Location Details</h2><br>

            <?= $form->field($model, 'r_city')->textInput([
                'maxlength' => true,
                'placeholder' => "City"])->label(false) ?><br>

            <?= $form->field($model, 'r_state')->textInput([
                'maxlength' => true,
                'placeholder' => "State"])->label(false) ?><br>

            <?= $form->field($model, 'r_event')->dropDownList($model->getEventLabels())->label(false) ?>
            <br>
            <h2 class="fs-title">Payment Details</h2>
            <h3 class="fs-subtitle">Attach the Screenshot of the Payment and Enter the Transaction ID</h3>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="r_screenshot" name="r_screenshot">
            </div>

            <?= $form->field($model, 'r_transaction_id')->textInput([
                'maxlength' => true,
                'placeholder' => "Transaction ID"])->label(false) ?><br>
            <?= Html::submitButton('Submit', ['class' => 'submit action-button']) ?>
        </fieldset>

    <?php ActiveForm::end(); ?>

    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>