<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Producto $model */

$this->title = $model->productoid;
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="producto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'productoid' => $model->productoid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'productoid' => $model->productoid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'productoid',
            'proveedorid',
            'categoriaid',
            'descripcion',
            'preciounit',
            'existencia',
        ],
    ]) ?>

</div>
