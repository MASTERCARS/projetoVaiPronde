<?php 

declare(strict_types=1);
use ProjetoVaiPronde\core\Router;


require __DIR__. "/vendor/autoload.php";
require __DIR__. "/app/config.php";
require __DIR__. "/app/rotas.php";



function css(string $arquivo) :string 
{
    return URL_BASE."public/css/{$arquivo}.css";
}
function componente(string $componente)
{
    require PASTA_VIEW . "componentes/{$componente}.view.php";
}

function linkrota($rota = "")
{
    return URL_BASE . "{$rota}";
}

$url = $_GET['url'] ?? "";


//vizualizar no git hub

Router::exec($url);




