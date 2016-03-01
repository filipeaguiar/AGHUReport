<?php

$app->get('/', function(\Slim\Http\Request $req, \Slim\Http\Response $res){
    return $res->write(file_get_contents(__DIR__ . '/../Templates/index.html'));
});

$app->get('/permanencia', function(\Slim\Http\Request $req, \Slim\Http\Response $res){
  $permanencia = AGHUReport\Models\Permanencia::where('tipo_indicador', 'G')->get();
  return $res->write($permanencia->toJson())->withHeader('Content-Type', 'application/json');
});
