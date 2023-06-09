<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Organizan $model */

$this->title = 'Update Organizan: ' . $model->codigo_o;
$this->params['breadcrumbs'][] = ['label' => 'Organizans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo_o, 'url' => ['view', 'codigo_o' => $model->codigo_o]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="organizan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
