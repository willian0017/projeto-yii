<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UnidadeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table table-hover">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nova unidade', ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => "",
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'identificacao',
            'proprietario',
            'condominio',
            'endereco',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\UnidadeModel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'identificacao' => $model->identificacao]);
                 }
            ],
        ],
    ]); ?>


</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Outfit:wght@200&display=swap');    
    h1{
        font-family: 'Outfit', sans-serif;
        text-transform: uppercase;
    }
    p{
        text-align: right;
    }
    td, th, a{
        font-family: 'Outfit', sans-serif;
    }
    svg{
        color: #444444;
    }
    input{
        color: red;
    }
</style>
