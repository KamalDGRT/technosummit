<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\EventRegistration */

$this->title = 'Update Event Registration: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Event Registrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="event-registration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
