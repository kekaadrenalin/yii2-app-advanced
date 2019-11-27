<?php

namespace backend\assets\themes\adminlte;

use yii\web\AssetBundle;

/**
 * Class ICheckBootstrapAsset
 * @package backend\assets\themes\adminlte
 */
class ICheckBootstrapAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $css = [
        'plugins/icheck-bootstrap/icheck-bootstrap.min.css',
    ];

    public $js = [
    ];

    public $depends = [
    ];
}
