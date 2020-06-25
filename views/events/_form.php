<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Events */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'club')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <label><?php echo $model->getAttributeLabel('image_name') ?></label>
        <div class="custom-file">
            <input type="file" class="custom-file-input"
                   id="image_name" name="image_name">
            <label class="custom-file-label" for="image_name">Choose file</label>
        </div>
    </div>


    <?= $form->field($model, 'status')->dropDownList($model->getStatusLabels()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
