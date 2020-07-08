<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\assets\DatafilterAsset;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

DatafilterAsset::register($this);
$this->title = 'Event Registrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-registration-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => [
                'id' => 'example',
                'class' => 'table table-bordered'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'r_name',
            'r_email',
            'r_phone',
            'r_year',
            'r_college',
            //'r_city',
            //'r_state',
            [
                'attribute' => 'r_event',
                'content' => function($model){
                    return $model->getEventLabels()[$model->r_event];
                }
            ],
            [
                'attribute' => 'status',
                'content' => function($model){
                    return $model->getStatusLabels()[$model->status];
                }
            ],
            //'has_image',
            //'image_name',
            //'r_transaction_id',
            //'created_at',
            //'created_by',
        ],
    ]); ?>


</div>
