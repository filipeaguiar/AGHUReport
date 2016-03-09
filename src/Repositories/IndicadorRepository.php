<?php
namespace AGHUReport\Repositories;

use AGHUReport\Repositories\BaseRepository;
use AGHUReport\Models\Indicador;


/**
 *
 */
class IndicadorRepository extends BaseRepository
{

  protected $modelClass = Indicador::class;

  function printOnScreen (){
    echo "hello repository";
  }

  public function getMortalidadeByEspecialidade($id)
  {
    $result = Indicador::where('esp_seq', $id);
    $array = $result->map( function($item,$key){

    });

    return $result->get();
  }
}
