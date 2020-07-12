<?php

/** @var $model \common\models\Event */

use \yii\helpers\StringHelper;
use yii\helpers\Url;

?>

<div class="media">
    <a href="<?php echo Url::to(['/event/update', 'id' => $model->id]) ?>">
        <div class="embed-responsive embed-responsive-16by9 mr-2"
             style="width: 120px">
            <img class="embed-responsive-item"
                   src="<?php echo $model->getImageLink() ?>">
        </div>
    </a>
</div>
