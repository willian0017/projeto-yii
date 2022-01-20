<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InquilinoModel */

$this->title = 'Atualizar inquilino: ' . $model->idNome;
$this->params['breadcrumbs'][] = ['label' => 'Inquilinos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idNome, 'url' => ['view', 'idNome' => $model->idNome]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inquilino-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Outfit:wght@200&display=swap');    
    h1{
        font-family: 'Outfit', sans-serif;
        text-transform: uppercase;
    }
</style>
