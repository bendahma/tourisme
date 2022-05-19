<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Hotel ;

class Chambre extends Model
{
    use HasFactory;

    protected $guarded = [] ;

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }

    public function min_prix(){
        return $this->orderBy('prix','ASC')->take(1)->get() ;
    }
}
