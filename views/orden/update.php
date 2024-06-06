<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Orden $model */

$this->title = 'Update Orden: ' . $model->ordenid;
$this->params['breadcrumbs'][] = ['label' => 'Ordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ordenid, 'url' => ['view', 'ordenid' => $model->ordenid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="orden-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
