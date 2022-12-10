<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\{ListarCursos,FormularioInsercao, Persistencia};

$rotas = require __DIR__ . '/../config/routes.php';

$caminho = $_SERVER['PATH_INFO'];

if(!array_key_exists($caminho, $rotas)){
    http_response_code(404);
    exit;
}


$controlador = new $rotas[$caminho]();
$controlador->processaRequisicao();