<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/dataTables.bootstrap.min.css',
        'css/site.css',
    ];
    public $js = [
        'js/jquery.dataTables.min.js',
        'js/dataTables.bootstrap.min.js',
        'app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
