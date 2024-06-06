<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProductoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="producto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'productoid') ?>

    <?= $form->field($model, 'proveedorid') ?>

    <?= $form->field($model, 'categoriaid') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'preciounit') ?>

    <?php // echo $form->field($model, 'existencia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
