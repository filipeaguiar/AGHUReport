<?php
namespace AGHUReport\Models;
use AGHUReport\Services\DBConnect as DBConnect;
use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model {
  public function getByEspecialidades()
    {
        return $this->morphMany('AGHUReport\Models\IndicadorPolimorfico', 'getIndicadores');
    }
}
