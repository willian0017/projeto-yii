<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DespesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Despesas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="despesa-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nova despesa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => "",
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'descricao',
            'tipo_despesa',
            'valor',
            'vencimento_fatura',
            'status_pagamento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\DespesaModel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'descricao' => $model->descricao]);
                 }
            ],
        ],
    ]); ?>


</div>
