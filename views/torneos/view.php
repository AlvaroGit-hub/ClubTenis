<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Torneos $model */

$this->title = $model->codigo_t;
$this->params['breadcrumbs'][] = ['label' => 'Torneos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="torneos-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if (!Yii::$app->user->isGuest) : ?>
            <?= Html::a('Register', ['register', 'codigo_t' => $model->codigo_t], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
        <?= Html::a('Actualizar', ['update', 'codigo_t' => $model->codigo_t], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'codigo_t' => $model->codigo_t], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codigo_t',
            'nombre',
            'organizadores',
            'numero_p',
            'fecha',
        ],
    ]) ?>

</div>
