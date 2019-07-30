<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\tickets */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tickets-form box box-primary">
    <div class="box-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <div class="box-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'row')->textInput() ?>

        <?= $form->field($model, 'place')->textInput() ?>

        <?= $form->field($model, 'status')->dropDownList([
            'free' => 'Свободный',
            'booked' => 'Забронированный',
            'bought' => 'Продан',
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
