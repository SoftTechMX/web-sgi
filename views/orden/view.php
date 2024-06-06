<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Orden $model */

$this->title = $model->ordenid;
$this->params['breadcrumbs'][] = ['label' => 'Ordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="orden-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ordenid' => $model->ordenid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ordenid' => $model->ordenid], [
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
            'empleadoid',
            'clienteid',
            'fechaorden',
            'descuento',
        ],
    ]) ?>

</div>
