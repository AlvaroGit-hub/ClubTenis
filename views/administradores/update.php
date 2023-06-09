<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Administradores $model */

$this->title = 'Update Administradores: ' . $model->codigo_a;
$this->params['breadcrumbs'][] = ['label' => 'Administradores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo_a, 'url' => ['view', 'codigo_a' => $model->codigo_a]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="administradores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
