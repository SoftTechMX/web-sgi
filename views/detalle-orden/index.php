<?php

use app\models\DetalleOrden;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DetalleOrdenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detalle Ordens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-orden-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detalle Orden', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ordenid',
            'detalleid',
            'productoid',
            'cantidad',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetalleOrden $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ordenid' => $model->ordenid, 'detalleid' => $model->detalleid]);
                 }
            ],
        ],
    ]); ?>


</div>
