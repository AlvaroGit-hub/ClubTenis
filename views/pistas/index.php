<?php

use yii\helpers\Html;

$this->title = 'Instalaciones';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="row">
    <div class="col-md-6">
        <h2>Pistas Interior</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Ubicación</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataProvider->getModels() as $pista): ?>
                    <?php if ($pista->ubicacion === 'Interior'): ?>
                        <tr>
                            <td><?= Html::encode($pista->nombre) ?></td>
                            <td><?= Html::encode($pista->tipo) ?></td>
                            <td><?= Html::encode($pista->ubicacion) ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <h2>Pistas Exterior</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Ubicación</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataProvider->getModels() as $pista): ?>
                    <?php if ($pista->ubicacion === 'Exterior'): ?>
                        <tr>
                            <td><?= Html::encode($pista->nombre) ?></td>
                           <td><?= Html::encode($pista->tipo) ?></td>
                            <td><?= Html::encode($pista->ubicacion) ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
