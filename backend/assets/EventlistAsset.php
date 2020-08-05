<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class EventlistAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css',
        'https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css',
    ];
    public $js = [
        'https://code.jquery.com/jquery-3.5.1.js',
        'https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js',
        'https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js',
        'https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js',
        'https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js',
        'https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js',
        'js/eventlist.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
