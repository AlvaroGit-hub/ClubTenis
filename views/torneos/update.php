<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Torneos $model */

$this->title = 'Update Torneos: ' . $model->codigo_t;
$this->params['breadcrumbs'][] = ['label' => 'Torneos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo_t, 'url' => ['view', 'codigo_t' => $model->codigo_t]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="torneos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
