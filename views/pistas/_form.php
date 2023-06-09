<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pistas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pistas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ubicacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->dropDownList(['Interior' => 'Interior', 'Exterior' => 'Exterior'], ['prompt' => 'Select Tipo']) ?>

    <?= $form->field($model, 'estado')->dropDownList(['Disponible' => 'Disponible', 'Ocupada' => 'Ocupada'], ['prompt' => 'Select Estado']) ?>

    <?= $form->field($model, 'imageUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigo_p')->dropDownList($pistasList, ['prompt' => 'Select Pista']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

