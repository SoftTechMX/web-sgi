<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Producto $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="producto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'productoid')->textInput() ?>

    <?= $form->field($model, 'proveedorid')->textInput() ?>

    <?= $form->field($model, 'categoriaid')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preciounit')->textInput() ?>

    <?= $form->field($model, 'existencia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
