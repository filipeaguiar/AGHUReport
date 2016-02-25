<?php
namespace AGHUReport\Services;
use \PDO;

class DBConnect {

  function __construct() {

  }

    public function getConnection() {
      $dbh = new PDO("pgsql:host=" .getenv('DB_HOST'). ";port=" .getenv('DB_PORT'). ";dbname=" . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS')); //variaves de ambiente
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $dbh;
    }

    public function queryIndicadores ( $sql ){
      try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
      }
      catch(PDOException $e) {
        echo ( $e->getMessage() );
      }
    }
}
