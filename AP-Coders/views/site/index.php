<?php

/* @var $this yii\web\View */

$this->title = 'CondoControl';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Mais <span class="span_h1"></span></h1>
        <p class="lead">O seu sistema para controle de condomínios.</p>
    </div>
    <div>
        <p class="info">Tenha um controle maior sobre os condomínios que você administra. <br/> Acesse a área de <span class="blue">inquilinos</span>, <span class="blue">despesas</span> e <span class="blue">unidades</span>.
        </p>
    </div>
</div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,500&family=Outfit:wght@200&display=swap');    
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,600&display=swap');
.display-4 {
        margin-top: 100px;
        color: white;
        font-size: 4.8em;
        font-family: 'Nunito Sans', sans-serif;
        text-shadow: 1px 1px 20px #444444;
    }
    .span_h1:before{
        content: '';
        animation: animate infinite 8s
    }
    @keyframes animate{
        0%{
            content:'agilidade.'
        }
        25%{
            content:'segurança.'
        }
        50%{
            content:'confiabilidade.'
        }
        75%{
            content:'assertividade.'
        }
        100%{
            content:'controle!'
        }
    }
    .lead {
        font-size: 1.5em;
        color: white;
        font-family: 'Open Sans', sans-serif;
        text-shadow: 2px 2px 20px #444444;
    }
    .info{
        font-family: 'Outfit', sans-serif;
        font-size: 1.2em;
        text-align: center;
        color: white;
        text-shadow: 5px 5px 20px black;
    }
    body{
        background-image: linear-gradient(254deg, rgba(255,255,255,0) 0%, rgba(0,0,0,0.32394956273525033) 100%), url(https://149349019.v2.pressablecdn.com/wp-content/uploads/2020/12/raja-sen-cidade-frankfurt.png);
    }
    .blue{
        color: #007bff
    }
</style>
</div>