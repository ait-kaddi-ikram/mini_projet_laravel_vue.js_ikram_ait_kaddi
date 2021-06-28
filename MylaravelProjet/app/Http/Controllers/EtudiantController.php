<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\User;
use App\Http\Resources\Etudiant as EtudiantResource;
use App\Http\Resources\EtudiantCollection;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        return new EtudiantCollection(Etudiant::all());
    }

    public function show($id)
    {
        $Etudiant = Etudiant::where('email', '=',$id)->first();
        return new EtudiantResource($Etudiant);
    }

    public function showList($id)
    {     
        $etudiant = Etudiant::where('semestre', '=', $id )->get();
        return new EtudiantCollection($etudiant);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255'
        ]);

        $User = User::create($request->all());
        $Etudiant = Etudiant::create($request->all());

        return (new EtudiantResource($Etudiant))
                ->response()
                ->setStatusCode(201);
    }

    

    public function delete($id)
    {
        $Etudiant = Etudiant::findOrFail($id);
        $Etudiant->delete();

        return response()->json(null, 204);
    }
    public function update(Request $request){
        $Etudiant = Etudiant::findOrFail($request->id); 
        $User = User::where('email','=',$Etudiant->email)->first();
        $User->fonction="Etudiant";
        $User->email= $request->email;
        $User->mot_Passe= $request->mot_Passe;
        $User->save();
      //
        $Etudiant->nom= $request->nom;
        $Etudiant->prenom= $request->prenom;
        $Etudiant->email= $request->email;
        $Etudiant->mot_Passe= $request->mot_Passe;
        $Etudiant->save();
        return response()->json(null, 204);
       }
      
   public function updatInfo(Request $request){
   
    $User = User:: findOrFail($request->id); 
    $Etudiant = Etudiant::where('email','=',$User->email)->first();
    $User->fonction="Etudiant";
    $User->email= $request->email;
    $User->mot_Passe= $request->mot_Passe;
    $User->save();
    $Etudiant->cne =  $Etudiant->cne;
    $Etudiant->semestre =  $Etudiant->semestre;
    $Etudiant->nom =  $Etudiant->nom;
    $Etudiant->prenom =  $Etudiant->prenom;
    $Etudiant->email= $request->email;
    $Etudiant->mot_Passe = $request->mot_Passe;
    $Etudiant->save();
    return response()->json(null, 204);
   }
     
      
    
       
   

}
