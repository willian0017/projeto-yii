<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UnidadeModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unidade-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'identificacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proprietario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'condominio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>

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
