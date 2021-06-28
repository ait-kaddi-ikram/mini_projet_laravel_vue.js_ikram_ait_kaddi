<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function index()
    {
        return new SalleCollection(Salle::all());
    }

    public function show($id)
    {
        return new SalleResource(Salle::findOrFail($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $Salle = Salle::create($request->all());

        return (new SalleResource($Salle))
                ->response()
                ->setStatusCode(201);
    }

    

    public function delete($id)
    {
        $Salle = Salle::findOrFail($id);
        $Salle->delete();

        return response()->json(null, 204);
    }

   

}
