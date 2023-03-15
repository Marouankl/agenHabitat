<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Inspection extends Model
{


    protected $table='inspection';
    protected $primaryKey='NumInspection';
    protected $fillable=[
        'NumInspection','InfoCalendrier','TypeBatiment','AnneeConstruction','SurFaceHabitable','ReleveConsChauffage',
        'ReleveConsoEau','ReleveConsoRefroidissement','ReleveGES','Id_utilisateur','Id_Tournee'
    ];




    public function rapport(){
        return $this->hasMany(Rapport::class,'NumInspection');
    }
    public function utilisateur(){
        return $this->hasOne(Utilisateur::class,'Id');
    }
    public function tournee(){
        return $this->hasOne(Tournee::class,'Id');
    }

}
