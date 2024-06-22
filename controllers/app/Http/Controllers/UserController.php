<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create(){
        $user = new User;
        $user->name = "Juanjo";
        $user->email = "demo@demo.com";
        $user->password = Hash::make('123456');
        $user->age = 25;
        $user->adress = "calle 23 15-50";
        $user->zip_code = 290909;
        $user->save();

    User::create([
        "name" => "maria",
        "email" => "maria@prueba.com",
        "password" => Hash::make('654321'),
        "age" => 29,
        "adress" => "calle 21 41-48",
        "zip_code" => 280808
    ]);

    User::create([
        "name" => "luisa",
        "email" => "luisa@prueba.com",
        "password" => Hash::make('654321'),
        "age" => 27,
        "adress" => "calle 21 47-12",
        "zip_code" => 250505
    ]);

    return redirect()->route('user.index');
}
}
