<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{

    protected $table='utilisateur';
    protected $primaryKey='Id';
    protected $fillable=['Id','Nom','PassWord','Id_Role'

    ];
    public function inspection(){
        return $this->hasMany(Inspection::class,'Id');
    }


}
