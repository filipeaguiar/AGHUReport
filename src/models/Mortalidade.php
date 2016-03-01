<?php
namespace AGHUReport\Models;
use AGHUReport\Services\DBConnect as DBConnect;
use Illuminate\Database\Eloquent\Model;

class Mortalidade extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ain_ind_hospitalar_resumido';
    protected $primaryKey = 'seq';
    public $timestamps = 'false';
    protected $visible = ['competencia_internacao', 'taxa_mortalidade'];
}
