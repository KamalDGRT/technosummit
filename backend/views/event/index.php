<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Event', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id',
                'content' => function ($model) {
                    return $this->render('_image_item', ['model' => $model]);
                }
            ],
            //'id',
            //'image_id',
            'name',
            //'short_description:ntext',
            'club',
            [
                'attribute' => 'status',
                'content' => function ($model) {
                    return $model->getStatusLabels()[$model->status];
                }
            ],
            //'has_image',
            //'image_name',
            'created_at:datetime',
            'updated_at:datetime',
            [
                'attribute' => 'created_by',
                'content' => function ($model) {
                    return $model->createdBy->username;
                }
            ],

            [
                'attribute' => 'updated_by',
                'content' => function ($model) {
                    return $model->updatedBy->username;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
