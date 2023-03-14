<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
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
    if($this->checkIfExists($idOferta, session('id'))){ //Si el usuario ya está inscrito a la oferta
      return to_route('indiceUsuarios');
    }

    else{ //Si no está inscrito
      try{
        $inscripcion = new Inscripcion([
          'idOferta' => $idOferta,
          'usuario' =>  session('id')
        ]);
        $inscripcion->save();
        return to_route('indiceUsuarios');
      }
      catch(\Exception $e){
        return to_route('login'); //TODO: decidir a donde retorna en caso que haya error al guardar el usuario
        // return response()->json(['message' => $e->getMessage(), 500]); 
      }
    }
  }
}
