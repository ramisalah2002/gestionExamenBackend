<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request){
        
    }
    public function login(Request $request){

    }
    public function index()
    {
        $users = User::all();

        return response()->json([
            'users' => $users
        ], 200);
    }

    public function showAllUsers(){
        $users = User::All(); //select * from users;
        //$users = User::orderBy('nom')->get(); // select * from users order by nom;
        //$users = User::orderBy('nom','desc')->get(); select * from users order by nom desc
        //$users = User::where('id','1')->get();//select * from users where id=1;
        return response()->json($users);
        //return view("users.index",['users' => $users]);
    }
    public function show($id)
    {
        $user = User::findOrFail($id);

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }
    public function create(){
        return view("users.create");
    }
}
