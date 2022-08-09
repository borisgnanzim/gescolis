<?php

namespace App\Http\Controllers;

use App\Models\Colis;
use Illuminate\Http\Request;

class ColisController extends Controller
{
    //
    //getColis
    public function getColis(){
        return response()->json(Colis::all(), 200);
    }
    //getColisById
    public function getColisById($id){
        $colis = Colis::find($id);
        if (is_null($colis)) {
            return response()->json(['message' =>'Colis introuvable'],404);
        }
        return response()->json(Colis::find($id), 200);
    }
    //add Colis
    public function addColis(Request $request){
        $colis = Colis::create($request->all());
        return response($colis,201); 
    }
    // update Colis
    public function updateColis(Request $request, $id){
        $colis = Colis::find($id);
        if (is_null($colis)) {
            return response()->json(['message' =>'Colis introuvable'],404);
        }
        $colis->update($request->all());
        return response($colis, 200);
    }
    // delete Colis
    public function deleteColis(Request $request, $id){
        $colis = Colis::find($id);
        if (is_null($colis)) {
            return response()->json(['message' =>'Colis introuvable'],404);
        }
        $colis->delete();
        return response(null, 204);
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required',
            'image_colis' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);

    }
}