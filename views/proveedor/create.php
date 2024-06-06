<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Proveedor $model */

$this->title = 'Create Proveedor';
$this->params['breadcrumbs'][] = ['label' => 'Proveedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
