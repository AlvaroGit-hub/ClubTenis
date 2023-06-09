<?php

use app\models\Organizan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Organizans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organizan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Organizan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codigo_o',
            'codigo_t',
            'codigo_a',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Organizan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'codigo_o' => $model->codigo_o]);
                 }
            ],
        ],
    ]); ?>


</div>
