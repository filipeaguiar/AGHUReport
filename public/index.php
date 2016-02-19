<?php
require __DIR__ . '/../vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App();

$app->get('/', function () {
  echo "Hello World";
});

$app->get('/indicadores', 'getIndicadores');

$app->get('/info', function(){
  return phpinfo();
});

$app->run();


function getIndicadores() {
  echo "<h1>Indicadores</h1>";
  $sql = "SELECT * FROM ain_indicadores_hospitalares";
  try {
    $db = getConnection();
    $stmt = $db->query($sql);
    $indicadores = $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  catch(PDOException $e) {
    echo '"Erro":{"text":'. $e->getMessage() .'}}';
  }
}

function getConnection() {
  require_once( "config.php" );
  $dbh = new PDO("pgsql:host=$dbhost;port=$dbport;dbname=$dbname", $dbuser, $dbpass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $dbh;
}
