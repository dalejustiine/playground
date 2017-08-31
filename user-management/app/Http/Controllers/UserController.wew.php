<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Datatables;

class UserController extends Controller
{
    public function index(){
        return view ('user.index');
    }

    public function create(){
        return view ('user.create');
    }

    public function store(UserRequest $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $result = $user->save();
        return redirect()->action('UserController@index');
    }

    public function getUsers(){
        $users = User::select('name', 'email', 'id')->get();
        return Datatables::of($users)->make();
    }

    public function showDelete($id){
        $user = User::find($id);
        return view('user.delete', ['user' => $user]);
    }

}
