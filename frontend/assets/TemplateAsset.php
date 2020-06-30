<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class TemplateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        '',
    ];
    public $js = [
        '',
        'js/'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
    ];
}
