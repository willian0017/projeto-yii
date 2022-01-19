<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InquilinoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inquilinos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inquilino-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Novo inquilino', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => "",
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idNome',
            'idade',
            'telefone:ntext',
            'sexo',
            'email:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\InquilinoModel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idNome' => $model->idNome]);
                 }
            ],
        ],
    ]); ?>


</div>
