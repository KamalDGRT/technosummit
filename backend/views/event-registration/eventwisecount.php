<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\EventRegistration;
use yii\data\ActiveDataProvider;

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
            'class' => 'table table-striped'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'r_event',
                'content' => function ($model) {
                    return $model->getEventLabels()[$model->r_event];
                }
            ],

            [
                'attribute' => 'count',
                'content' => function ($model) {
                    $event = new ActiveDataProvider([
                        'query' => EventRegistration::find()->where(['r_event' => $model->r_event]),
                    ]);
                    $eventCount = $event->getCount();
                    return $eventCount;
                }
            ],

            [
                'attribute' => 'confirmed',
                'content' => function ($model) {
                    $event = new ActiveDataProvider([
                        'query' => EventRegistration::find()->where(['r_event' => $model->r_event, 'status' => 1]),
                    ]);
                    $eventCount = $event->getCount();
                    return $eventCount;
                }
            ],

            [
                'attribute' => 'not confirmed',
                'content' => function ($model) {
                    $event = new ActiveDataProvider([
                        'query' => EventRegistration::find()->where(['r_event' => $model->r_event, 'status' => 0]),
                    ]);
                    $eventCount = $event->getCount();
                    return $eventCount;
                }
            ]

            // [
            //     'attribute' => 'status',
            //     'content' => function($model){
            //         return $model->getStatusLabels()[$model->status];
            //     }
            // ],
        ],
    ]); ?>


</div>