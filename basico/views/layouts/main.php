<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;


AppAsset::register($this);
?>
<?php 
if (class_exists('yii\debug\Module')) {
    $this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language = 'pt-BR'?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' href="../../web/css/site.css">
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'png', 'href' => '/favicon.png']);?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-primary fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => [
            ['label' => 'Página inicial/', 'url' => ['site/index']],
            ['label' => 'Inquilinos/', 'url' => ['inquilino/index']],
            ['label' => 'Despesas/', 'url' => ['despesa/index']],
            ['label' => 'Unidades/', 'url' => ['unidade/index']],
        ],
    ]);
    NavBar::end();
    ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Outfit:wght@200&display=swap');    
        .navbar{
            font-family: 'Outfit', sans-serif;
            text-transform: uppercase;
        }

    </style>
</header>
<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'options' => [
                'class' => 'bg-light',
            ],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<!-- <footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; Willian Tessarolo <?= date('Y') ?></p>
    </div>
</footer> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>