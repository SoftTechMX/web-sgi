<?php

use app\models\Categoria;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categorías';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoria-index">

    <div class="d-flex justify-content-end">
        <a href="/categoria/create" class="btn btn-success">
            Nueva Categoria
        </a>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute'         => 'categoriaid',
                'headerOptions'     => ['class' => 'col-1'],
                'contentOptions'    => ['class' => 'col-1'],
            ],
            [
                'attribute'         => 'nombrecat',
                'headerOptions'     => ['class' => 'col-auto'],
                'contentOptions'    => ['class' => 'col-auto'],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Categoria $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'categoriaid' => $model->categoriaid]);
                 },
                 'headerOptions'     => ['class' => 'col-1'],
                 'contentOptions'    => ['class' => 'col-1 text-center'],
            ],
        ],
    ]); ?>

</div>
