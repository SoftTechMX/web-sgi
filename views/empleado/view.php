<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Empleado $model */

$this->title = $model->empleadoid;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="empleado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'empleadoid' => $model->empleadoid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'empleadoid' => $model->empleadoid], [
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
            'empleadoid',
            'nombre',
            'apellido',
            'fecha_nac',
            'reporta_a',
            'extension',
        ],
    ]) ?>

</div>
