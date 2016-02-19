<?php

$app->get('/', function () {
  echo "Hello World";
});

$app->get('/indicadores', 'getIndicadores');

$app->get('/info', function(){
  return phpinfo();
});

function getIndicadores() {
  //$sql = "SELECT * FROM ". getenv('DB_SCHEMA') .".ain_indicadores_hospitalares ";
  $sql = "SELECT * FROM ". getenv('DB_SCHEMA') .".ain_ind_hospitalar_resumido WHERE competencia_internacao::date = '2015-02-01'";
  try {
    $db = getConnection();
    $stmt = $db->query($sql);
    $indicadores = $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  catch(PDOException $e) {
    echo '"Erro":{"text":'. $e->getMessage() .'}}';
  }
  print_r ( json_encode( $indicadores ) );
}

function getConnection() {
//  require_once( "config.php" );

  $dbh = new PDO("pgsql:host=" .getenv('DB_HOST'). ";port=" .getenv('DB_PORT'). ";dbname=" . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS')); //variaves de ambiente
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $dbh;
}
