<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Administradores $model */

$this->title = 'Create Administradores';
$this->params['breadcrumbs'][] = ['label' => 'Administradores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administradores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
