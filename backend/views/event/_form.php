<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]) ?>

    <?php echo $form->errorSummary($model) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_description')->textarea(['rows' => 4]) ?>

    <?= $form->field($model, 'club')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <label>Image</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input"
                   id="image" name="image">
            <label class="custom-file-label" for="image">Choose file</label>
        </div>
    </div>

    <?= $form->field($model, 'status')->dropDownList($model->getStatusLabels()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
