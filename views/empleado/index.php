<?php

use app\models\Empleado;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\EmpleadoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Empleados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empleado-index">

    <div class="d-flex justify-content-end">
        <a href="/empleado/create" class="btn btn-success">
            Nuevo Empleado
        </a>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute'         => 'empleadoid',
                'headerOptions'     => ['class' => 'col-1'],
                'contentOptions'    => ['class' => 'col-1'],
            ],
            [
                'attribute'         => 'nombre',
                'headerOptions'     => ['class' => 'col-2'],
                'contentOptions'    => ['class' => 'col-2'],
            ],
            [
                'attribute'         => 'apellido',
                'headerOptions'     => ['class' => 'col-2'],
                'contentOptions'    => ['class' => 'col-2'],
            ],
            [
                'attribute'         => 'fecha_nac',
                'headerOptions'     => ['class' => 'col-2'],
                'contentOptions'    => ['class' => 'col-2'],
            ],
            [
                'attribute'         => 'reporta_a',
                'headerOptions'     => ['class' => 'col-auto'],
                'contentOptions'    => ['class' => 'col-auto'],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Empleado $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'empleadoid' => $model->empleadoid]);
                 },
                 'headerOptions'     => ['class' => 'col-1'],
                 'contentOptions'    => ['class' => 'col-1 text-center'],
            ],
        ],
    ]); ?>


</div>
