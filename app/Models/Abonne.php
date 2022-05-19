<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User ;

class Abonne extends Model
{
    use HasFactory;

    protected $guarded = [] ;

    public function user(){
       return $this->belongsTo(User::class);
    }


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
