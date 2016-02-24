<?php

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
