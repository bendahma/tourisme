<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Abonne ;
use App\Models\Client ;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function factures(){
        return $this->hasMany('App\Facture');
    }

   // Users type relationships

    public function abonnes(){
       return $this->hasMany(Abonnee::class) ;
    }

    public function clients(){
       return $this->hasMany(Clients::class) ;
    }

    // Function to check the logged in user type

    public function is_admin(){
      return $this->user_type == 'super_admin' ? true : false ;
   }

   public function is_abonne(){
      return $this->user_type == 'abonne' ? true : false ;
   }

   public function is_client(){
      return $this->user_type == 'client' ? true : false ;
   }
}
