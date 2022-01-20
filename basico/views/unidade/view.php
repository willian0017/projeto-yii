<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UnidadeModel */

$this->title = $model->identificacao;
$this->params['breadcrumbs'][] = ['label' => 'Unidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="unidade-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'identificacao' => $model->identificacao], ['class' => 'btn btn-outline-info']) ?>
        <?= Html::a('Delete', ['delete', 'identificacao' => $model->identificacao], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja excluir?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'identificacao',
            'proprietario',
            'condominio',
            'endereco',
        ],
    ]) ?>

</div>
