<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return new UserCollection(User::all());
    }

    public function logout(){
        return response()->json(['message' => 'Successfully logged out']);
    }
    public function login(Request $request)
    {  
        $User=User::where('email', '=', $request->email )
        ->where('fonction', '=', $request->fonction )
        ->where('mot_Passe', '=', $request->mot_Passe)
        ->first();
        if ($User){ 
              return response()->json(['object'=> $User]);
            //return respondWithToken($user);
       }
        return response()->json(['error' => 'Unauthorized'], 401);
    }


    public function show($id)
    {
        return new UserResource(User::findOrFail($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        return (new UserResource($User))
                ->response()
                ->setStatusCode(201);
    }



    public function delete($id)
    {
        $User = User::findOrFail($id);
        $User->delete();

        return response()->json(null, 204);
    }


}
