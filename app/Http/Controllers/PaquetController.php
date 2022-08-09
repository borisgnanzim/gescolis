<?php

namespace App\Http\Controllers;

use App\Models\Paquet;
use Illuminate\Http\Request;

class PaquetController extends Controller
{
    //
    //getPaquet
    public function getPaquet(){
        return response()->json(Paquet::all(), 200);
    }
    //getPaquetById
    public function getPaquetById($id){
        $paquet = Paquet::find($id);
        if (is_null($paquet)) {
            return response()->json(['message' =>'Paquet introuvable'],404);
        }
        return response()->json(Paquet::find($id), 200);
    }
    //add Paquet
    public function addPaquet(Request $request){
        $paquet = Paquet::create($request->all());
        return response($paquet,201); 
    }
    // update Paquet
    public function updatePaquet(Request $request, $id){
        $paquet = Paquet::find($id);
        if (is_null($paquet)) {
            return response()->json(['message' =>'Paquet introuvable'],404);
        }
        $paquet->update($request->all());
        return response($paquet, 200);
    }
    // delete Paquet
    public function deletePaquet(Request $request, $id){
        $paquet = Paquet::find($id);
        if (is_null($paquet)) {
            return response()->json(['message' =>'Paquet introuvable'],404);
        }
        $paquet->delete();
        return response(null, 204);
    }
}
