<?php

/**
 *
 */
class Indicador
{
  function __construct()
  {
    # code...
  }

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
    header("Content-Type: application/json");
  	echo ( json_encode( $indicadores ) );
  }
}

function getConnection() {
  $dbh = new PDO("pgsql:host=" .getenv('DB_HOST'). ";port=" .getenv('DB_PORT'). ";dbname=" . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS')); //variaves de ambiente
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $dbh;
}
