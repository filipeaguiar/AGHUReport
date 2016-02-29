<?php

$app->get('/', function(\Slim\Http\Request $req, \Slim\Http\Response $res){
    return $res->write(file_get_contents(__DIR__ . '/../Templates/index.html'));
});

$app->get('/indicadores', function(\Slim\Http\Request $req, \Slim\Http\Response $res){
    $indicadores = new AGHUReport\Indicador();
    return $res->write( $indicadores->getGeral() );
});

$app->get('/ocupacao', function(\Slim\Http\Request $req, \Slim\Http\Response $res){
    $indicadores = new AGHUReport\Ocupacao();
    return $res->withJson( $indicadores->getTaxaOcupacao() );
});

$app->get('/permanencia', function(){
  $permanencia = AGHUReport\Models\Permanencia::all();
  echo $permanencia->toJson();
});
