<?php

namespace backend\assets\themes\adminlte;

use yii\web\AssetBundle;

/**
 * Class MainAsset
 * @package backend\assets\themes
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $css = [
        'plugins/fontawesome-free/css/all.min.css',
        'themes/admin-lte/css/adminlte.min.css',

        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
    ];

    public $js = [
        'plugins/bootstrap/js/bootstrap.bundle.min.js',
        'themes/admin-lte/js/adminlte.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];
}
