<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Oferta;



class InscripcionesController extends Controller
{

  //Función que comprueba si el usuario está inscrito a la oferta
  public function checkIfExists($idOferta, $user){
    if(DB::table('inscripciones')->where([['idOferta', '=', $idOferta],['usuario', '=', $user]])->count() > 0){
      return true;
    }
    return false;
  }
  public function addInscription($idOferta)
  {
    echo $this->checkIfExists($idOferta, session('id')) ? "true" : "false";
    echo $idOferta, session('id');
  
  }
}
