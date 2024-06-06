<?php

use app\models\Orden;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\OrdenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Orden';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orden-index">

    <div class="d-flex justify-content-end">
        <a href="/orden/create" class="btn btn-success">
            Nueva Orden
        </a>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute'         => 'ordenid',
                'headerOptions'     => ['class' => 'col-1'],
                'contentOptions'    => ['class' => 'col-1'],
            ],
            [
                'attribute'         => 'clienteid',
                'headerOptions'     => ['class' => 'col-1'],
                'contentOptions'    => ['class' => 'col-1'],
            ],
            [
                'attribute'         => 'nombreDelCliente',
                'headerOptions'     => ['class' => 'col-2'],
                'contentOptions'    => ['class' => 'col-2'],
            ],
            [
                'attribute'         => 'empleadoid',
                'headerOptions'     => ['class' => 'col-1'],
                'contentOptions'    => ['class' => 'col-1'],
            ],
            [
                'attribute'         => 'nombreDelEmpleado',
                'headerOptions'     => ['class' => 'col-1'],
                'contentOptions'    => ['class' => 'col-1'],
            ],
            [
                'attribute'         => 'fechaorden',
                'headerOptions'     => ['class' => 'col-1'],
                'contentOptions'    => ['class' => 'col-1'],
            ],
            [
                'attribute'         => 'descuento',
                'headerOptions'     => ['class' => 'col-1'],
                'contentOptions'    => ['class' => 'col-1'],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Orden $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ordenid' => $model->ordenid]);
                 },
                 'headerOptions'     => ['class' => 'col-1'],
                 'contentOptions'    => ['class' => 'col-1 text-center'],
            ],
        ],
    ]); ?>


</div>
