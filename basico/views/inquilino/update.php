<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InquilinoModel */

$this->title = 'Update Inquilino Model: ' . $model->idNome;
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
