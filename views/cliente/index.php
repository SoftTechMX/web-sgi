<?php

use app\models\Cliente;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ClienteSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <div class="d-flex justify-content-end">
        <a href="/cliente/nuevo" class="btn btn-success">
            Nuevo Cliente
        </a>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute'         => 'clienteid',
                'headerOptions'     => ['class' => 'col-1'],
                'contentOptions'    => ['class' => 'col-1'],
            ],
            [
                'attribute'         => 'cedula_ruc',
                'headerOptions'     => ['class' => 'col-1'],
                'contentOptions'    => ['class' => 'col-1'],
            ],
            [
                'attribute'         => 'nombrecia',
                'headerOptions'     => ['class' => 'col-3'],
                'contentOptions'    => ['class' => 'col-2'],
            ],
            [
                'attribute'         => 'nombrecontacto',
                'headerOptions'     => ['class' => 'col-3'],
                'contentOptions'    => ['class' => 'col-2'],
            ],
            [
                'attribute'         => 'direccioncli',
                'headerOptions'     => ['class' => 'col-auto'],
                'contentOptions'    => ['class' => 'col-auto'],
            ],
            //'fax',
            //'email:email',
            //'celular',
            //'fijo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Cliente $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'clienteid' => $model->clienteid]);
                 },
                 'headerOptions'     => ['class' => 'col-1'],
                 'contentOptions'    => ['class' => 'col-1 text-center'],
            ],
        ],
    ]); ?>


</div>
