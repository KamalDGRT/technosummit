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


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => [
            'id' => 'regtable',
            'class' => 'table table-striped table-bordered'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id',
                'content' => function ($model) {
                    return $this->render('_image_item', ['model' => $model]);
                }
            ],

            'r_name',
            'r_email:email',
            'r_phone',
            [
                'attribute' => 'r_event',
                'content' => function ($model) {
                    return $model->getEventLabels()[$model->r_event];
                }
            ],
            //'r_college',
            //'r_year',
            //'r_city',
            //'r_state',
            //'r_event',
            [
                'attribute' => 'status',
                'content' => function ($model) {
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