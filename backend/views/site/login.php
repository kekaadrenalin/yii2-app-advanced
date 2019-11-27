<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model common\models\LoginForm */

$this->title = 'Войти';
?>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Необходимо авторизоваться</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <div class="row">
            <div class="col-8">
                <?= Html::activeHiddenInput($model, 'rememberMe', [
                    'id'    => false,
                    'value' => 0,
                ]) ?>
                <div class="icheck-primary">
                    <?= Html::activeInput('checkbox', $model, 'rememberMe') ?>
                    <?= Html::activeLabel($model, 'rememberMe') ?>
                </div>
            </div>
            <div class="col-4">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
