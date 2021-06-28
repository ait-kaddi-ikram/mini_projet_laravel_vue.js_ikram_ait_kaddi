<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Http\Resources\Pfe as PfeResource;
use App\Http\Resources\PfeCollection;
use App\Models\Prof;
use App\Models\Pfe;
class PfeController extends Controller
{
    public function index()
    {
        return new PfeCollection(Pfe::all());
    }

    public function show($id)
    {
        return new PfeResource(Pfe::findOrFail($id));
    }

    public function store(Request $request)
    {
        $etudiant = Etudiant::Where('cne','=',$request->cne);
        $prof = Prof::Where('nom','=',$request->nom);

        $Pfe = Pfe::create([
             
            'sujet' => $request->sujet,
            'date_pfe' =>$request->date,
            'id_etudiant'=>$etudiant->id,
            'id_prof'=> $prof->id,
        ]);

        return (new PfeResource($Pfe))
                ->response()
                ->setStatusCode(201);
    }

  

    public function delete($id)
    {
        $Pfe = Pfe::findOrFail($id);
        $Pfe->delete();

        return response()->json(null, 204);
    }

 

}
