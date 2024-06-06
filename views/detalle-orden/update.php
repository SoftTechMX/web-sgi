<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DetalleOrden $model */

$this->title = 'Update Detalle Orden: ' . $model->ordenid;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Ordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ordenid, 'url' => ['view', 'ordenid' => $model->ordenid, 'detalleid' => $model->detalleid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalle-orden-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
