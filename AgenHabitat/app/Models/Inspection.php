<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inspection';

    /**
     * The primary key associated with the table.
     *
     * @var int
     */
    protected $primaryKey = 'NumInspection';

    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    // Empty constructor for an Inspection
    public function __construct(){
        // assign some important stuff even for an empty Inspection
    }
   
    // Sets all attributes of an Inspection
    public static function initialMandatory(String $date, int $idInspecteur, int $idTournee){
        $instance = new self();
        $instance->InfoCalendrier = $date;
        $instance->Id_Utilisateur = $idInspecteur;
        $instance->Id_Tournee = $idTournee;
        return $instance;
    }


}
