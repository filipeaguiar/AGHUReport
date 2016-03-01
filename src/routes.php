<?php

$app->get('/', function(\Slim\Http\Request $req, \Slim\Http\Response $res){
    return $res->write(file_get_contents(__DIR__ . '/../Templates/index.html'));
});

$app->get('/permanencia/{inicio}/{fim}', function(\Slim\Http\Request $req, \Slim\Http\Response $res, $args){
  $permanencia = new AGHUReport\Models\Permanencia;
  $permanencia = $permanencia->where('tipo_indicador', 'G')->whereBetween('competencia_internacao', [$args['inicio'], $args['fim']])->orderBy('competencia_internacao', 'asc')->get();
  return $res->write($permanencia->toJson())->withHeader('Content-Type', 'application/json');
});

$app->get('/mortalidade/{inicio}/{fim}', function(\Slim\Http\Request $req, \Slim\Http\Response $res, $args){
  $mortalidade = new AGHUReport\Models\Mortalidade;
  $mortalidade = $mortalidade->where('tipo_indicador', 'G')->whereBetween('competencia_internacao', [$args['inicio'], $args['fim']])->orderBy('competencia_internacao', 'asc')->get();
  return $res->write($mortalidade->toJson())->withHeader('Content-Type', 'application/json');
});

$app->get('/indicador/{tipo}/{inicio}/{fim}', function(\Slim\Http\Request $req, \Slim\Http\Response $res, $args){
  $indicador = new AGHUReport\Models\Indicador;
  $indicador = $indicador->where('tipo_indicador', $args['tipo'])->whereBetween('competencia_internacao', [$args['inicio'], $args['fim']])->orderBy('competencia_internacao', 'asc')->get();
  return $res->write($indicador->toJson())->withHeader('Content-Type', 'application/json');
});
