<?php

use app\models\Orden;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\OrdenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ordens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orden-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orden', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ordenid',
            'empleadoid',
            'clienteid',
            'fechaorden',
            'descuento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Orden $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ordenid' => $model->ordenid]);
                 }
            ],
        ],
    ]); ?>


</div>
