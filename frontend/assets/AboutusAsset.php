<?php


namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AboutusAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css',
        'css/style1.css',

    ];
    public $js = [
        'https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js',
        'js/aboutus.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
    ];
}
