<?php

namespace App\Http\Controllers;
use App\Models\Suit;
use App\Http\Resources\Suit as SuitResource;
use App\Http\Resources\SuitCollection;
use Illuminate\Http\Request;

class SuitController extends Controller
{
    public function index()
    {
        return new SuitCollection(Suit::all());
    }

    public function show($id, $idd)
    {    
        $suit = Suit::where('id_etudiant', '=', $idd )
                    ->where('id_module', '=' ,$id )
                    ->get();

        return new SuitCollection($suit);
    }

    public function store(Request $request)
    {
      

        $Suit = Suit::create($request->all());

        return (new SuitResource($Suit))
                ->response()
                ->setStatusCode(201);
    }


    public function delete($id)
    {
        $Suit = Suit::findOrFail($id);
        $Suit->delete();

        return response()->json(null, 204);
    }



    public function update(Request $request){
        $Suit = Suit::where('id_module','=',$request->id_module)
                     ->where('id_etudiant','=',$request->id_etudiant)
                     ->first();
      
        $Suit->id_module = $request->id_module;
        $Suit->id_etudiant = $request->id_etudiant;
        $Suit->note = $request->note;
        $Suit->save();
        return response()->json(null, 204);
       }

}
