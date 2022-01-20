<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DespesaModel */

$this->title = $model->descricao;
$this->params['breadcrumbs'][] = ['label' => 'Despesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="despesa-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'descricao' => $model->descricao], ['class' => 'btn btn-outline-info']) ?>
        <?= Html::a('Delete', ['delete', 'descricao' => $model->descricao], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja excluir?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'descricao',
            'tipo_despesa',
            'valor',
            'vencimento_fatura',
            'status_pagamento',
        ],
    ]) ?>

</div>
