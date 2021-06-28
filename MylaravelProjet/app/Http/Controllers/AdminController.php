<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\User;
use App\Http\Resources\Admin as AdminResource;
use App\Http\Resources\AdminCollection;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return new AdminCollection(Admin::all());
    }

    public function logout(){
        return response()->json(['message' => 'Successfully logged out']);
    }
    public function login(Request $request)
    {  
        $admin=Admin::where('email', '=', $request->email )->first();
        if ($admin){ 
              return response()->json(['object'=> $admin]);
            //return respondWithToken($user);
       }
        return response()->json(['error' => 'Unauthorized'], 401);
    }


    public function show($id)
    {
        return new AdminResource(Admin::findOrFail($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $User = User::create($request->all());
        $Admin = Admin::create($request->all());

        return (new AdminResource($Admin))
                ->response()
                ->setStatusCode(201);
    }



    public function delete($id)
    {
        $Admin = Admin::findOrFail($id);
        $Admin->delete();

        return response()->json(null, 204);
    }



}
