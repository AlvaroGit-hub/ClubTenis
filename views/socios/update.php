<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Socios $model */

$this->title = 'Update Socios: ' . $model->codigo_s;
$this->params['breadcrumbs'][] = ['label' => 'Socios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo_s, 'url' => ['view', 'codigo_s' => $model->codigo_s]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="socios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
