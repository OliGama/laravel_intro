<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('users.create');
    }
    public function index(){
        $users = User::all();
        return view('users.index', [
            'users' =>$users
        ]);
    }
    public function store(Request $request){
        User::create($request->all());

        return redirect()->route('users.index');
    }
}
