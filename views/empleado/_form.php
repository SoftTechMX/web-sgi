<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Empleado $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="empleado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'empleadoid')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_nac')->input('date') ?>

    <?= $form->field($model, 'reporta_a')->textInput() ?>

    <?= $form->field($model, 'extension')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
