<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>Toko</a>
    </div>

    <div class="login-box-body">
        <p class="login-box-msg">Silakan login untuk memulai sesi</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        <div class="social-auth-links mt-2">
            <p><?= Html::a('Daftar Sekarang', ['site/signup'], ['class' => 'btn btn-success']) ?></p>
        </div>
    </div>
</div>
