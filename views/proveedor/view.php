<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Proveedor $model */

$this->title = $model->proveedorid;
$this->params['breadcrumbs'][] = ['label' => 'Proveedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="proveedor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'proveedorid' => $model->proveedorid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'proveedorid' => $model->proveedorid], [
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
            'proveedorid',
            'nombreprov',
            'contacto',
            'celuprov',
            'fijoprov',
        ],
    ]) ?>

</div>
