<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Event Registrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-registration-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Event Registration', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'image_id',
            'r_name',
            'r_email:email',
            'r_phone',
            //'r_college',
            //'r_year',
            //'r_city',
            //'r_state',
            //'r_event',
            //'status',
            //'has_image',
            //'image_name',
            //'r_transaction_id',
            //'created_at',
            //'created_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
