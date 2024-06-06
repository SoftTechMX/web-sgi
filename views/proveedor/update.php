<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Proveedor $model */

$this->title = 'Update Proveedor: ' . $model->proveedorid;
$this->params['breadcrumbs'][] = ['label' => 'Proveedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->proveedorid, 'url' => ['view', 'proveedorid' => $model->proveedorid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="proveedor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
