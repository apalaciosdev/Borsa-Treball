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
    if(DB::table('inscripciones')->where([['idOferta', '=', $idOferta],['idUsuario', '=', $user]])->count() > 0){
      return true;
    }
    return false;
  }

  public function getUserIdDB($email){
      return Usuario::where('email', '=', $email)->value('id');
  }


  public function updateContadorInscripciones($idOferta, $type){
    $numeroInscritos = intval(DB::table('ofertas')->select('numeroInscritos')->first()->numeroInscritos);
    $type == 'sum' ? $numeroInscritos += 1 : $numeroInscritos -= 1;
    
    DB::table('ofertas') -> where('id', $idOferta) -> update(['numeroInscritos' => $numeroInscritos]);
  }

  public function addInscription($idOferta){
    $idUser = $this->getUserIdDB(session('id'));

    if($this->checkIfExists($idOferta, $idUser)){ //Si el usuario ya está inscrito a la oferta
      DB::table('inscripciones')->where('idOferta', $idOferta)->delete();
      $this -> updateContadorInscripciones($idOferta, 'rest');
      return to_route('indiceUsuarios');                                                                                                                                                                                                                                                                                                                                 
    }

    else{ //Si no está inscrito
      try{
        echo session('idUserDB');
        $inscripcion = new Inscripcion([
          'idOferta' => $idOferta,
          'idUsuario' => $idUser
        ]);
        $inscripcion->save();

        $this -> updateContadorInscripciones($idOferta, 'sum');
        return to_route('indiceUsuarios');
      }
      catch(\Exception $e){
        echo $e;
        // return to_route('login'); //TODO: decidir a donde retorna en caso que haya error al guardar el usuario
        // return response()->json(['message' => $e->getMessage(), 500]); 
      }
    }
  }
}
