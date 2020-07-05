<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class NavAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/neon.css',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css',
    ];
    public $js = [
        'https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js',
        'js/nav.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
    ];
}
