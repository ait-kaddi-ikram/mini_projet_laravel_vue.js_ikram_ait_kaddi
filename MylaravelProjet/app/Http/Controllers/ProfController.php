<?php

namespace App\Http\Controllers;
use App\Models\Prof;
use App\Models\Module;
use App\Models\User;
use App\Http\Resources\Prof as ProfResource;
use App\Http\Resources\ProfCollection;
use App\Http\Resources\Module as ModuleResource;
use App\Http\Resources\ModuleCollection;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    public function index()
    {
      return new ProfCollection(Prof::all());
       // return response()->json(Prof::all());
    }

    public function show($id)
    {
        $Prof = Prof::where('email', '=',$id)->first();
        return new ProfResource($Prof);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
        ]);
        $User = User::create($request->all());
        $Prof = Prof::create($request->all());

        return (new ProfResource($Prof))
                ->response()
                ->setStatusCode(201);
    }

    

    public function delete($id)
    {
        $prof = Prof::findOrFail($id);
        $prof->delete();

        return response()->json(null, 204);
    }

   public function update(Request $request){
    $Prof = Prof::findOrFail($request->id); 
    $User = User::where('email','=',$Prof->email)->first();
    $User->fonction="proffesseur";
    $User->email= $request->email;
    $User->mot_Passe= $request->mot_Passe;
    $User->save();
    $Prof->nom= $request->nom;
    $Prof->prenom= $request->prenom;
    $Prof->email= $request->email;
    $Prof->mot_Passe= $request->mot_Passe;
    $Prof->save();
    return response()->json(null, 204);
   }

   public function updatInfo(Request $request){
   
    $User = User:: findOrFail($request->id); 
    $Prof = Prof::where('email','=',$User->email)->first();
    $User->fonction="proffesseur";
    $User->email= $request->email;
    $User->mot_Passe= $request->mot_Passe;
    $User->save();
    $Prof->nom=  $Prof->nom;
    $Prof->prenom=  $Prof->prenom;
    $Prof->email= $request->email;
    $Prof->mot_Passe= $request->mot_Passe;
    $Prof->save();
    return response()->json(null, 204);
   }

   public function getModule($id){
   $prof = Prof::where('email','=',$id)->first();
   $modules = Module::find($prof->id)->getModule;
        return new ModuleResource($modules);
   }

}
