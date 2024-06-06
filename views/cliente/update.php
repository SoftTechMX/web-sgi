<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cliente $model */

$this->title = 'Update Cliente: ' . $model->clienteid;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->clienteid, 'url' => ['view', 'clienteid' => $model->clienteid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cliente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
