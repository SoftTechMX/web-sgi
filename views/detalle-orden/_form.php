<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DetalleOrden $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detalle-orden-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ordenid')->textInput() ?>

    <?= $form->field($model, 'detalleid')->textInput() ?>

    <?= $form->field($model, 'productoid')->textInput() ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
