<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pistas $model */

$this->title = 'Update Pistas: ' . $model->codigo_p;
$this->params['breadcrumbs'][] = ['label' => 'Pistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo_p, 'url' => ['view', 'codigo_p' => $model->codigo_p]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pistas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
