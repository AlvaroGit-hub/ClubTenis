<?php
use yii\grid\GridView;
use yii\helpers\Url;

// ...
$this->title = 'Torneos';
$this->params['breadcrumbs'][] = $this->title;
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'codigo_t',
        'nombre',
        'organizadores',
        'numero_p',
        'fecha',
        [
            'class' => 'yii\grid\ActionColumn',
            'urlCreator' => function ($action, $model, $key, $index) {
                /** @var \app\models\Torneos $model */
                return $model->getUrl($action);
            }
        ],
    ],
]);
