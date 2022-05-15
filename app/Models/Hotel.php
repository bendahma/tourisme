<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = [] ;

    public function abonne(){
        return $this->belongsTo('App\Abonne');
    }
    public function galeries(){
        return $this->hasMany('App\Galerie');
    }
    public function hotels()
    {
        return $this->belongsToMany(Hotel::class);
    }
}
