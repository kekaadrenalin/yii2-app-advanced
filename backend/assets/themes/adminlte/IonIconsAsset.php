<?php

namespace backend\assets\themes\adminlte;

use yii\web\AssetBundle;

/**
 * Class IonIconsAsset
 * @package backend\assets\themes\adminlte
 */
class IonIconsAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $css = [
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
    ];

    public $js = [
    ];

    public $depends = [
    ];
}
