<?php

namespace App\Http\Controllers;

use App\Models\Gestionnaire;
use Illuminate\Http\Request;

class GestionnaireController extends Controller
{
    //
    //getGestionnaire
    public function getGestionnaire(){
        return response()->json(Gestionnaire::all(), 200);
    }
    //getGestionnaireById
    public function getGestionnaireById($id){
        $gestionnaire = Gestionnaire::find($id);
        if (is_null($gestionnaire)) {
            return response()->json(['message' =>'Gestionnaire introuvable'],404);
        }
        return response()->json(Gestionnaire::find($id), 200);
    }
    //add Gestionnaire
    public function addGestionnaire(Request $request){
        $gestionnaire = Gestionnaire::create($request->all());
        return response($gestionnaire,201); 
    }
    // update Gestionnaire
    public function updateGestionnaire(Request $request, $id){
        $gestionnaire = Gestionnaire::find($id);
        if (is_null($gestionnaire)) {
            return response()->json(['message' =>'Gestionnaire introuvable'],404);
        }
        $gestionnaire->update($request->all());
        return response($gestionnaire, 200);
    }
    // delete Gestionnaire
    public function deleteGestionnaire(Request $request, $id){
        $gestionnaire = Gestionnaire::find($id);
        if (is_null($gestionnaire)) {
            return response()->json(['message' =>'Gestionnaire introuvable'],404);
        }
        $gestionnaire->delete();
        return response(null, 204);
    }
}
