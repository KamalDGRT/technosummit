<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\EventRegistration */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Event Registrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="event-registration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'image_id',
            'r_name',
            'r_email',
            'r_transaction_id',
            'created_at:datetime',
            'r_phone',
            'r_college',
            'r_year',
            'r_city',
            'r_state',
            'r_event',
            'status',
            'has_image',
            'image_name',
            'created_by',
        ],
    ]) ?>

</div>