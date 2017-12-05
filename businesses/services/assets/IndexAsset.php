<?php

namespace services\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/amazeui.datatables.min.css',
        'css/amazeui.min.css',
        'css/app.css',
    ];
    public $js = [
        'js/echarts.min.js',
        'js/jquery.min.js',
        'js/theme.js',
        'js/amazeui.min.js',
        'js/amazeui.datatables.min.js',
        'js/dataTables.responsive.min.js',
        'js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
