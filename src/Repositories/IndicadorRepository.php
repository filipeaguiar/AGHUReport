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
    $query = $this->newQuery();
    $query->where('esp_seq', $id);

    return $this->doQuery($query);
  }
}
