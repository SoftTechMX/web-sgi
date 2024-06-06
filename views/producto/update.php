<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Producto $model */

$this->title = 'Update Producto: ' . $model->productoid;
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->productoid, 'url' => ['view', 'productoid' => $model->productoid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="producto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
