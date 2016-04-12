<?php
namespace AGHUReport\Models;
use AGHUReport\Services\DBConnect as DBConnect;
use Illuminate\Database\Eloquent\Model;

class IndicadorPolimorfico extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ain_ind_hospitalar_resumido';
    protected $primaryKey = 'seq';

    protected $visible = ['competencia_internacao', 'taxa_ocupacao', 'taxa_mortalidade', 'esp_seq'];
    const CREATED_AT = 'competencia_internacao';
    const UPDATED_AT = 'data_alteracao';

    protected function getDateFormat() {
      return 'm/Y';
    }

    function getIndicadores(){
        return $this->morphTo();
    }
}
