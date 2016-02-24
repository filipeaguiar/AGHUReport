<?php

/**
 *
 */
// class indicadores
// {
//   function __construct()
//   {
//
//   }

  function getGeral($inicio, $fim){
    $geral = "SELECT * FROM ". getenv('DB_SCHEMA') .".ain_ind_hospitalar_resumido WHERE tipo_indicador = 'G'";
    $indicadores = queryIndicadores( $geral );
    echo ( $indicadores );
  }

  function getIndicadores() {
    $sql = "SELECT * FROM ". getenv('DB_SCHEMA') .".ain_ind_hospitalar_resumido";
    $indicadores = queryIndicadores( $sql );
    echo ( $indicadores );
  }
// }

function getConnection() {
  $dbh = new PDO("pgsql:host=" .getenv('DB_HOST'). ";port=" .getenv('DB_PORT'). ";dbname=" . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS')); //variaves de ambiente
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $dbh;
}

function queryIndicadores ( $sql ){
  try {
    $db = getConnection();
    $stmt = $db->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }
  catch(PDOException $e) {
    echo ( $e->getMessage() );
  }
}
