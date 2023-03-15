<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournee extends Model
{

    protected $table='tournee';
    protected $primaryKey='Id';
    protected $fillable=['Id','NomClient','DateRDV','AdresseCleint','Telephone','Mail','NumLocataire','Remarque'];


    public function inspection(){
        return $this->hasMany(Inspection::class,'Id');
    }

}
