<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

    <div class="login-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign up to start your session</p>

        <!--<form action="../../index2.html" method="post">-->
        <?php $form = ActiveForm::begin() ?>
        <div class="form-group has-feedback">
            <!--<input type="email" class="form-control" placeholder="Email">-->
            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Login'])->label(false) ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <!--<input type="password" class="form-control" placeholder="Password">-->
            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(false) ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <!--<input type="checkbox"> Remember Me-->
                        <?php //$form->field($model, 'rememberMe', ['options' => ['tag' => false]])->checkbox(['template' => '{input}']) ?>
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign up</button>
            </div>
            <!-- /.col -->
        </div>
        <!--</form>-->
        <?php ActiveForm::end(); ?>

    </div>
    <!-- /.login-box-body -->

<?php //$form = ActiveForm::begin() ?>
<?php //$form->field($model, 'username') ?>
<?php //$form->field($model, 'password')->passwordInput() ?>
    <!--
    <div class="form-group">
        <div>
            <?php //Html::submitButton('Регистрация', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    -->
<?php //ActiveForm::end() ?>