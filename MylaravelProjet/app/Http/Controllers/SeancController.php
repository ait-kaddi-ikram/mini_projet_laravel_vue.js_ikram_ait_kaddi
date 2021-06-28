<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeancController extends Controller
{
    public function index()
    {
        return new SeancCollection(Seanc::all());
    }

    public function show($id)
    {
        return new SeancResource(Seanc::findOrFail($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $Seanc = Seanc::create($request->all());

        return (new SeancResource($Seanc))
                ->response()
                ->setStatusCode(201);
    }



    public function delete($id)
    {
        $Seanc = Seanc::findOrFail($id);
        $Seanc->delete();

        return response()->json(null, 204);
    }

 

}
