<?php

$app->get('/', function(\Slim\Http\Request $req, \Slim\Http\Response $res){
    return $res->write(file_get_contents(__DIR__ . '/../Templates/index.html'));
});

$app->get('/indicadores', function(\Slim\Http\Request $req, \Slim\Http\Response $res){
    $indicadores = new AGHUReport\Indicador();
    return $res->withJson($indicadores->getGeral());
});
