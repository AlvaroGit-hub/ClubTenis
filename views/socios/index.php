<?php

use app\models\Socios;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Club Barcenilla';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="socios-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Socios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codigo_s',
            'dni',
            'nombre',
            'apellidos',
            'saldo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Socios $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'codigo_s' => $model->codigo_s]);
                 }
            ],
        ],
    ]); ?>


</div>
