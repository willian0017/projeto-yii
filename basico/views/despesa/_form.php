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

    <?= $form->field($model, 'vencimento_fatura')->dropDownList([ 'vencido' => 'Vencido', 'no prazo' => 'No prazo', ], ['prompt' => ''])  ?>

    <?= $form->field($model, 'status_pagamento')->dropDownList([ 'pago' => 'Pago', 'pendente' => 'Pendente', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-outline-dark']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Outfit:wght@200&display=swap');    
    label{
        font-family: 'Outfit', sans-serif;
        text-transform: uppercase;
    }
</style>
