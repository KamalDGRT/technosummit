<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class RegistrationAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css',
        'css/registration.css',
    ];
    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
        'js/registration.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
    ];
}
