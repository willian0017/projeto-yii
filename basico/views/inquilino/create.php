<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InquilinoModel */

$this->title = 'Novo inquilino';
$this->params['breadcrumbs'][] = ['label' => 'Inquilinos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inquilino-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
