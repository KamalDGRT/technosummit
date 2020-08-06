<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\assets\IndexAsset;
use common\models\User;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

IndexAsset::register($this);
$this->title = 'Event Registrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-registration-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => [
            'id' => 'regtable',
            'class' => 'table table-striped table-bordered text-nowrap'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id',
                'content' => function ($model) {
                    return $this->render('_image_item', ['model' => $model]);
                }
            ],

            [
                'attribute' => 'r_salutation',
                'content' => function ($model) {
                    return $model->getSalutationLabels()[$model->r_salutation];
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
                'attribute' => 'r_payment',
                'content' => function ($model) {
                    return $model->getPaymentLabels()[$model->r_payment];
                }
            ],

            'r_transaction_id',
            [
                'attribute' => 'status',
                'content' => function ($model) {
                    return $model->getStatusLabelsAdmin()[$model->status];
                }
            ],
            //'has_image',
            //'image_name',
            //'r_transaction_id',
            'created_at:datetime',
            [
                'attribute' => 'updated_by',
                'content' => function ($model) {
                    return $model->getUpdatedByName()[$model->updated_by];
                }
            ],
        ],
    ]); ?>


</div>