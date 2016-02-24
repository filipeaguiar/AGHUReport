<?php

$indicadores = new Indicador;

$app->get('/indicadores', $indicadores->getIndicadores());

$app->get('/indicadores/geral', $indicadores->getGeral("",""));
