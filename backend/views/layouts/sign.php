<?php

use backend\assets\themes\adminlte\ICheckBootstrapAsset;
use backend\assets\themes\adminlte\IonIconsAsset;
use backend\assets\themes\adminlte\MainAsset;
use yii\helpers\Html;
use common\widgets\Alert;

/* @var $this yii\web\View */
/* @var $content string */

IonIconsAsset::register($this);
ICheckBootstrapAsset::register($this);
MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition login-page">
<?php $this->beginBody() ?>

<?= Alert::widget() ?>

<div class="login-box">
    <?= $content ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
