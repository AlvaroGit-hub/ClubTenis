<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Reservas $model */

$this->title = 'Update Reservas: ' . $model->codigo_r;
$this->params['breadcrumbs'][] = ['label' => 'Reservas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo_r, 'url' => ['view', 'codigo_r' => $model->codigo_r]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reservas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
