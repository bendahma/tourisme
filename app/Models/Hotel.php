<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Abonne ;
use App\Models\Chambre ;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = [] ;

    public function abonne(){
        return $this->belongsTo('App\Abonne');
    }

    public function chambres(){
        return $this->hasMany(Chambre::class) ;
    }
    

}
