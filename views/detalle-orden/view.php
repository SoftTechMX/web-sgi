<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\DetalleOrden $model */

$this->title = $model->ordenid;
$this->params['breadcrumbs'][] = ['label' => 'Detalle Ordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detalle-orden-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ordenid' => $model->ordenid, 'detalleid' => $model->detalleid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ordenid' => $model->ordenid, 'detalleid' => $model->detalleid], [
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
            'ordenid',
            'detalleid',
            'productoid',
            'cantidad',
        ],
    ]) ?>

</div>
