<?php

namespace App\Http\Controllers;

use Validator;
use Session;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = User::all();
        return view('users.index', compact("users"));
    }

    public function edit(Request $request, $id){
        $user = User::findOrFail($id);

//        dd($user);
//        $validator = Validator::make($request->all(), User::$validatesAll);
//        if ($validator->fails()) {
//            Session::flash('error', 'Ошибка!');
//            return redirect()->back()->withErrors($validator);
//        } else {
            $user->fill($request->all());
            $user->save();
//        }

        return redirect()->route('users.index');
    }

    public function addToBalance(Request $request, $id){
        $user = User::findOrFail($id);

        $balance = $request->balance;
        if($balance > 0) {
            $user->balance = $user->balance + $balance;
            $user->save();
        }

        return redirect()->route('users.index');
    }

    public function withdrawFromBalance(Request $request, $id){
        $user = User::findOrFail($id);

        $balance = $request->balance;

        if($user->balance >= $balance){
            $user->balance = $user->balance - $balance;
            $user->save();
        }
        return redirect()->route('users.index');
    }
}
