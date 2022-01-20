<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DespesaModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="despesa-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_despesa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valor')->textInput() ?>

    <?= $form->field($model, 'vencimento_fatura')->textInput() ?>

    <?= $form->field($model, 'status_pagamento')->dropDownList([ 'pago' => 'Pago', 'pendente' => 'Pendente', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
