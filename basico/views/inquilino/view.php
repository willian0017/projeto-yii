<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InquilinoModel */

$this->title = $model->idNome;
$this->params['breadcrumbs'][] = ['label' => 'Inquilinos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inquilino-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idNome' => $model->idNome], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idNome' => $model->idNome], [
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
            'idNome',
            'idade',
            'telefone:ntext',
            'sexo',
            'email:ntext',
        ],
    ]) ?>

</div>
