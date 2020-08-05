<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\EventRegistration;
use yii\data\ActiveDataProvider;
use backend\assets\EventwiseAsset;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

EventwiseAsset::register($this);
$this->title = $pageTitle;
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

            'r_name',
            'r_email',
            'r_phone',
            'r_year',
            'r_college',
            //'r_city',
            //'r_state',
            //'has_image',
            //'image_name',
            //'r_transaction_id',
            //'created_at',
            //'created_by',
        ],
    ]); ?>


</div>