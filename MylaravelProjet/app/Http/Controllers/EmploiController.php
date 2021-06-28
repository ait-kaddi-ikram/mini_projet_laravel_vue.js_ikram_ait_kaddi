<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmploiController extends Controller
{
    public function index()
    {
        return new PlayerCollection(Player::all());
    }

    public function show($id)
    {
        return new PlayerResource(Player::findOrFail($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $player = Player::create($request->all());

        return (new PlayerResource($player))
                ->response()
                ->setStatusCode(201);
    }


    public function delete($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();

        return response()->json(null, 204);
    }



}
