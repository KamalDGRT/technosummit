<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\EventRegistration */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="event-registration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_college')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_year')->textInput() ?>

    <?= $form->field($model, 'r_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_event')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'has_image')->textInput() ?>

    <?= $form->field($model, 'image_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_transaction_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
