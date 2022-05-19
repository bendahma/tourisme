<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Voyage ;
use App\Models\Vol ;
use App\Models\Hotel ;
use App\Models\Chambre ;
// use App\Models\Bateau as B;
use App\Models\Bateau ;


class IndexController extends Controller
{
    public function index(){
        // Selectionné les 10 derniers record de chaque model : Voyage,Vol,Chambre,Bateau 
        // pour affiche dans l'acceuil
        $dernier_voyages = Voyage::orderBy('created_at','DESC')->take(10)->get(); 
        $dernier_vol = Vol::orderBy('created_at','DESC')->take(10)->get(); 
        $dernier_chambre = Chambre::orderBy('created_at','DESC')->take(10)->get(); 
        $dernier_bateaux = Bateau::orderBy('created_at','DESC')->take(10)->get(); 
       
        $data = [
            'dernier_voyages' => $dernier_voyages ,
            'dernier_vol' => $dernier_vol ,
            'dernier_chambre' => $dernier_chambre ,
            'dernier_bateaux' => $dernier_bateaux ,
        ] ;

        
        return view('accueil',compact('data'));
    }

    public function vols(){
        $vols = Vol::orderBy('created_at','DESC')->paginate(10) ;
        return view('vols',compact('vols'));
    }
    
    public function voyages(){
        $voyages = Voyage::orderBy('created_at','DESC')->paginate(10) ;
        return view('voyages',compact('voyages'));
    }
    
    public function hotels(){
        $hotels = Hotel::orderBy('created_at','DESC')->paginate(10) ;
        return view('hotels',compact('hotels'));
    }

    public function chambres(Hotel $hotel){
        $chambres = Chambre::where('hotel_id',$hotel->id)->orderBy('created_at','DESC')->paginate(10) ;
        return view('chambres',compact('chambres'));
    }
    
    public function bateaux(){
        $bateaux = Bateau::orderBy('created_at','DESC')->paginate(10) ;
        return view('bateaux',compact('bateaux'));
    }
    
    public function reservation($reservation){
        dd($reservation) ;
    }


}
