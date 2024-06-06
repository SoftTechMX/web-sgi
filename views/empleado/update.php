<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Empleado $model */

$this->title = 'Update Empleado: ' . $model->empleadoid;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->empleadoid, 'url' => ['view', 'empleadoid' => $model->empleadoid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empleado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
