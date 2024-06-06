<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProveedorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="proveedor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'proveedorid') ?>

    <?= $form->field($model, 'nombreprov') ?>

    <?= $form->field($model, 'contacto') ?>

    <?= $form->field($model, 'celuprov') ?>

    <?= $form->field($model, 'fijoprov') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
