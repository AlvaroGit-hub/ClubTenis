<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Reservas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="reservas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'quien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuando')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pista')->textInput() ?>

    <?= $form->field($model, 'codigo_a')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
