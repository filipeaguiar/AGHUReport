<?php

$indicadores = new Indicador;

$app->get('/indicadores', $indicadores->getIndicadores());

$app->get('/info', function(){
  return phpinfo();
});
