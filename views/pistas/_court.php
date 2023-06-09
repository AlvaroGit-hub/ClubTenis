<?php
use yii\helpers\Html;
?>

<div class="court-item">
    <h2><?= Html::encode($model->nombre) ?></h2>
    <div class="court-image">
        <?= Html::img($model->imageUrl, ['class' => 'img-fluid']) ?>
    </div>
    <p><?= Html::encode($model->ubicacion) ?></p>
</div>
