<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DetalleOrden $model */

$this->title = 'Create Detalle Orden';
$this->params['breadcrumbs'][] = ['label' => 'Detalle Ordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-orden-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
