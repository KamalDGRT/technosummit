<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\imagine\Image;

/* @var $this yii\web\View */
/* @var $model common\models\EventRegistration */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="event-registration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model) ?>

    <?= $form->field($model, 'image_id')->textInput(['maxlength' => true, 'readonly' =>'readonly']) ?>

    <?= $form->field($model, 'r_name')->textInput(['maxlength' => true, 'readonly' =>'readonly']) ?>

    <?= $form->field($model, 'r_email')->textInput(['maxlength' => true, 'readonly' =>'readonly']) ?>

    <?= $form->field($model, 'r_phone')->textInput(['maxlength' => true, 'readonly' =>'readonly']) ?>

    <?= $form->field($model, 'r_college')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_year')->textInput([ 'readonly' =>'readonly']) ?>

    <?= $form->field($model, 'r_city')->textInput(['maxlength' => true, 'readonly' =>'readonly']) ?>

    <?= $form->field($model, 'r_state')->textInput(['maxlength' => true, 'readonly' =>'readonly']) ?>

    <?= $form->field($model, 'r_event')->textInput(['readonly' =>'readonly']) ?>
    <?= $form->field($model, 'r_event')->dropDownList($model->getEventLabels(), ['readonly' => 'readonly']) ?>

    <div class="embed-responsive embed-responsive-16by9 mb-3">
        <img class="embed-responsive-item"
               src="<?php echo $model->getImageLink() ?>">
    </div>

    <?= $form->field($model, 'r_transaction_id')->textInput(['maxlength' => true, 'readonly' =>'readonly']) ?>

    <?= $form->field($model, 'status')->dropDownList($model->getStatusLabels()) ?><br><br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-lg form-control']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
