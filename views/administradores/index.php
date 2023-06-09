<?php

use app\models\Administradores;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Administradores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administradores-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Administradores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codigo_a',
            'nombre',
            'apellidos',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Administradores $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'codigo_a' => $model->codigo_a]);
                 }
            ],
        ],
    ]); ?>


</div>
