<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DespesaModel */

$this->title = 'Update Despesa Model: ' . $model->descricao;
$this->params['breadcrumbs'][] = ['label' => 'Despesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->descricao, 'url' => ['view', 'descricao' => $model->descricao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="despesa-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
