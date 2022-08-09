<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client ;

use function GuzzleHttp\Promise\all;

class ClientController extends Controller
{
    //getClient
    public function getClient(){
        return response()->json(Client::all(), 200);
        //
        
        
    }
    //getClientById
    public function getClientById($id){
        $client = Client::find($id);
        if (is_null($client)) {
            return response()->json(['message' =>'Client introuvable'],404);
        }
       return response()->json(Client::find($id), 200);
       
    }
    //add Client
    public function addClient(Request $request){
        $client = Client::create($request->all());
        return response($client,201); 
    }
    // update Client
    public function updateClient(Request $request, $id){
        $client = Client::find($id);
        if (is_null($client)) {
            return response()->json(['message' =>'Client introuvable'],404);
        }
        $client->update($request->all());
        return response($client, 200);
    }
    // delete Client
    public function deleteClient(Request $request, $id){
        $client = Client::find($id);
        if (is_null($client)) {
            return response()->json(['message' =>'Client introuvable'],404);
        }
        $client->delete();
        return response(null, 204);
    }
    // // find client by name 
    public function getClientByName($nom_client){
        $client = Client::where('nom_client',$nom_client)->get()->first();
        // $len = count($client) ;
        if (is_null($client)) {
            return response()->json(['message' =>'Client introuvable'],404);
        }
        // return response()->json($client,200);
        //return response()->json($client[0]->id, 200);
        return $client ;
    }

}
