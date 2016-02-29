<?php
use Illuminate\Contracts\Container\Container;

// Database information
 $settings = array(
       'driver' => 'pgsql',
       'host' => getenv('DB_HOST'),
       'port' => getenv('DB_PORT'),
       'database' => getenv('DB_NAME'),
       'username' => getenv('DB_USER'),
       'password' => getenv('DB_PASS'),
       'collation' => 'utf8_general_ci',
       'prefix' => getenv('DB_SCHEMA')
 );
 // Bootstrap Eloquent ORM
 use Illuminate\Database\Capsule\Manager as Capsule;
 $capsule = new Capsule;
 $capsule->addConnection($settings);
 $capsule->bootEloquent();


// // Database information
// $settings = array(
//     'driver' => 'pgsql',
//     'host' => getenv('DB_HOST'),
//     'port' => getenv('DB_PORT'),
//     'database' => getenv('DB_NAME'),
//     'username' => getenv('DB_USER'),
//     'password' => getenv('DB_PASS'),
//     'collation' => 'utf8_general_ci',
//     'prefix' => getenv('DB_SCHEMA')
// );
//
// // Bootstrap Eloquent ORM
// $connFactory = new \Illuminate\Database\Connectors\ConnectionFactory();
// $conn = $connFactory->make($settings);
// $resolver = new \Illuminate\Database\ConnectionResolver();
// $resolver->addConnection('default', $conn);
// $resolver->setDefaultConnection('default');
// \Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);

// namespace AGHUReport\Services;
// use \PDO;
//
// class DBConnect {
//
//   function __construct() {
//
//   }
//
//     public function getConnection() {
//       $dbh = new PDO("pgsql:host=" .getenv('DB_HOST'). ";port=" .getenv('DB_PORT'). ";dbname=" . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS')); //variaves de ambiente
//       $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//       return $dbh;
//     }
//
//     public function queryIndicadores ( $sql ){
//       try {
//         $db = $this->getConnection();
//         $stmt = $db->query($sql);
//         $result = $stmt->fetchAll(PDO::FETCH_OBJ);
//         return $result;
//       }
//       catch(PDOException $e) {
//         echo ( $e->getMessage() );
//       }
//     }
// }
