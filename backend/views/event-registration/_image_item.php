<?php

/** @var $model \common\models\Event */

use yii\bootstrap4\Html;
use \yii\helpers\StringHelper;
use yii\helpers\Url;

?>

<div class="media">
    <a href="<?php echo Url::to(['/event-registration/update', 'id' => $model->id]) ?>">
        <div class="embed-responsive embed-responsive-16by9 mr-2"
             style="width: 120px">
            <?= Html::img($model->getImageLink(), ['alt'=> 'No Image', 'class'=>'embed-responsive-item']);?>
<!--            <img class=""-->
<!--                 src="--><?php //echo  ?><!--"-->
<!--                 alt="--><?php //echo $model->id?><!--">-->
        </div>
    </a>
</div>
