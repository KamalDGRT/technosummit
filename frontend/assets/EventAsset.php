<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class EventAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
        'event/css/bootstrap.min.css',
        'event/css/slick.css',
        'event/css/theme-color/default-theme.css',
        'event/style.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800',
        'https://fonts.googleapis.com/css?family=Montserrat'
    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
        'event/js/bootstrap.min.js',
        'event/js/slick.min.js',
        'event/js/jquery.countdown.min.js',
        'event/js/app.js',
        'event/js/custom.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
    ];
}
