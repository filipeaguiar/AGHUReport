<?php
namespace AGHUReport;
use AGHUReport\Services\DBConnect as DBConnect;
/**
 *
 */
class Ocupacao
{
  function __construct()
  {

  }

  function getTaxaOcupacao(){
    $especialidade = "SELECT "
    .getenv('DB_SCHEMA').'.ain_ind_hospitalar_resumido.competencia_internacao AS "Competência", '
    .getenv('DB_SCHEMA').'.ain_ind_hospitalar_resumido.taxa_ocupacao AS "Taxa de Ocupação" '
    .'FROM '
    .getenv('DB_SCHEMA').'.ain_ind_hospitalar_resumido '
    .'WHERE '
    .getenv('DB_SCHEMA').".ain_ind_hospitalar_resumido.tipo_indicador = 'G' AND "
    .getenv('DB_SCHEMA').".ain_ind_hospitalar_resumido.competencia_internacao BETWEEN '2015-03-01' AND  '2016-03-01' "
    .'ORDER BY '
    .getenv('DB_SCHEMA').'.ain_ind_hospitalar_resumido.competencia_internacao ASC';
    $db = new DBConnect();
    $indicadores = $db->queryIndicadores( $especialidade );
    return (json_encode($indicadores));
    // echo $especialidade;

  }

  function getIndicadores() {
    $sql = "SELECT * FROM ". getenv('DB_SCHEMA') .".ain_ind_hospitalar_resumido";
    $db = new DBConnect();
    $indicadores = $db->queryIndicadores( $sql );
    print_r ( ($indicadores) );
  }
}
