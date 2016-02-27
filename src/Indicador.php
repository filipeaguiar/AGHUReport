<?php
namespace AGHUReport;
use AGHUReport\Services\DBConnect as DBConnect;
/**
 *
 */
class Indicador
{
  function __construct()
  {

  }

  function getGeral(){
    $geral = "SELECT * FROM ". getenv('DB_SCHEMA') .".ain_ind_hospitalar_resumido WHERE tipo_indicador = 'G'";
    $db = new DBConnect();
    $indicadores = $db->queryIndicadores( $geral );
    print_r (json_encode($indicadores));
  }

  function getIndicadores() {
    $sql = "SELECT * FROM ". getenv('DB_SCHEMA') .".ain_ind_hospitalar_resumido";
    $db = new DBConnect();
    $indicadores = $db->queryIndicadores( $sql );
    print_r ( ($indicadores) );
  }
}
