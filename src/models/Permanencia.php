<?php
namespace AGHUReport;
use AGHUReport\Services\DBConnect as DBConnect;
use Illuminate\Database\Eloquent\Model as Model;

class Permanencia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ain_ind_hospitalar_resumido';
    protected $primaryKey = 'seq';
    public $timestamps = 'false';
}
