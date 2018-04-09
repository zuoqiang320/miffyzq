<?php
/**
 * Created by PhpStorm.
 * User: miffy
 * Date: 2017/8/29
 * Time: 下午1:18
 * Desc:
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/miffy/miffyzq/static');
?>
<script>if(window.top !== window.self){ window.top.location = window.location;}</script>

<div class="signinpanel ms-signinpanel">
    <div style="background: url('<?= $directoryAsset?>/img/background_new.jpg');
            background-size: cover;width: 100%;height: 100%">
        <div class="bg-blur " style="width: 100%;height: 100%;position: absolute;background-color: white; opacity: 0.4"></div>

        <div class="login-box animated fadeInRight">
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false,
                'class' => 'm-t', 'options' => [
                    'style' => 'border-radius: 1rem;height: auto;box-shadow: 3px 3px 2px #cccccc;'
                ]]); ?>
            <p class="center"><?= (isset($banner) ? $banner : "欢迎使用 <strong>管理后台</strong>")?></p>
            <p class="login-text">登录中心</p>
            <?= $form
                ->field($model, 'username')
                ->label(false)
                ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

            <?= $form
                ->field($model, 'password')
                ->label(false)
                ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

            <!--        <div class="row" style="text-align: left; margin-left: 20px;">-->
            <!--            --><?//= $form->field($model, 'rememberMe')->label("记住我")->checkbox() ?>
            <!--        </div>-->

            <?= Html::submitButton('登录', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>

            <p class="text-muted text-center" style="margin-top: 10px"> <a href="login.html#"><small>忘记密码了？</small></a> | <a href="register.html">注册一个新账号</a>
            </p>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

