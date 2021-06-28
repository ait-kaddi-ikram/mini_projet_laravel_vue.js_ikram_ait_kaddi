<?php

namespace App\Http\Controllers;
use App\Models\Prof;
use App\Models\Etudiant;
use App\Models\Suit;
use App\Http\Resources\Module as ModuleResource;
use App\Http\Resources\ModuleCollection;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        return new ModuleCollection(Module::all());
    }

    public function show($id)
    {
        return new ModuleResource(Module::findOrFail($id));
    }

    public function showList($id)
    {     
        $Module = Module::where('semestre', '=',$id ) ->get();
        return new ModuleCollection($Module);
    }
    
    public function showListModule($id)
    {     
        $Prof = Prof::where('email', '=',$id)->first();
        $Module = Module::where('id_prof', '=',$Prof->id)->get();
        return new ModuleCollection($Module);
    }
     
    public function showListModuleEtu($id)
    {     
        $Etudiant = Etudiant::where('email', '=',$id)->first();
        $Module = Module::where('semestre', '=',$Etudiant->semestre)->get();
        return new ModuleCollection($Module);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:255',
        ]);

        $Module = Module::create($request->all());

        return (new ModuleResource($Module))
                ->response()
                ->setStatusCode(201);
    }

 

    public function delete($id)
    {
        $Module = Module::findOrFail($id);
        $Module->delete();

        return response()->json(null, 204);
    }



}
