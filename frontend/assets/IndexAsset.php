<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/entreprenuer.css',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css',
        'https://fonts.googleapis.com/css2?family=Flamenco&display=swap',
        'css/timer.css'

    ];
    public $js = [
        'https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js',
        'https://cdn.logwork.com/widget/countdown.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
    ];
}
