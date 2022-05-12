<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonne extends Model
{
    use HasFactory;

    protected $guarded = [] ;

    public function voyages(){
     return $this->hasMany('App\Voyage');
    }
    public function bateaux(){
        return $this->hasMany('App\Bateau');
       }
     public function hotels(){
        return $this->hasMany('App\Hotel');
       }  
    public function vols(){
        return $this->hasMany('App\Vol');
    } 
    
}
