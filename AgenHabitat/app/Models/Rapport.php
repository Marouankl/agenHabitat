<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{

    protected $table='rapport';
    protected $primaryKey='AfficherRapport';
    protected $fillable=['AfficherRapport','Signature','NumInspection'];


    public function inspection(){
        return $this->hasOne(Inspection::class,'NumInspection');
    }

}

