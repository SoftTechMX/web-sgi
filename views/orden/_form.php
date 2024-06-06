<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Orden $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="orden-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ordenid')->textInput() ?>

    <?= $form->field($model, 'empleadoid')->textInput() ?>

    <?= $form->field($model, 'clienteid')->textInput() ?>

    <?= $form->field($model, 'fechaorden')->textInput() ?>

    <?= $form->field($model, 'descuento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
