<?php

use app\models\Proveedor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProveedorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Proveedors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedor-index">

    <div class="d-flex justify-content-end">
        <a href="/proveedor/create" class="btn btn-success">
            Nuevo Proveedor
        </a>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute'         => 'proveedorid',
                'headerOptions'     => ['class' => 'col-1'],
                'contentOptions'    => ['class' => 'col-1'],
            ],
            [
                'attribute'         => 'nombreprov',
                'headerOptions'     => ['class' => 'col-3'],
                'contentOptions'    => ['class' => 'col-3'],
            ],
            [
                'attribute'         => 'contacto',
                'headerOptions'     => ['class' => 'col-3'],
                'contentOptions'    => ['class' => 'col-3'],
            ],
            [
                'attribute'         => 'celuprov',
                'headerOptions'     => ['class' => 'col-2'],
                'contentOptions'    => ['class' => 'col-2'],
            ],
            [
                'attribute'         => 'fijoprov',
                'headerOptions'     => ['class' => 'col-2'],
                'contentOptions'    => ['class' => 'col-2'],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Proveedor $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'proveedorid' => $model->proveedorid]);
                 },
                 'headerOptions'     => ['class' => 'col-1'],
                 'contentOptions'    => ['class' => 'col-1 text-center'],
            ],
        ],
    ]); ?>


</div>
