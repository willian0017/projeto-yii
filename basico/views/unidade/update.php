<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UnidadeModel */

$this->title = 'Update Unidade Model: ' . $model->identificacao;
$this->params['breadcrumbs'][] = ['label' => 'Unidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->identificacao, 'url' => ['view', 'identificacao' => $model->identificacao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unidade-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
