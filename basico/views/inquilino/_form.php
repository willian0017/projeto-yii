<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use function PHPSTORM_META\type;

/* @var $this yii\web\View */
/* @var $model app\models\InquilinoModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inquilino-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idNome')->textInput(['maxlength' => true]) ->label('Nome') ?>

    <?= $form->field($model, 'idade')->textInput() ?>

    <?= $form->field($model, 'telefone')->textInput()?>

    <?= $form->field($model, 'sexo')->dropDownList([ 'masculino' => 'Masculino', 'feminino' => 'Feminino', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'email')->input('email') ->label('E-mail')?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
