<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Deal;
use Illuminate\Support\Facades\Input;
use Validator;
use Hash;
class ApiDealsController extends Controller
{
    //
    public function deal(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sender_id' => 'required',
            'receiver_id' => 'required',
            'amount' => 'required',
            'type' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }


        $input = $request->all();
//        $idik = Input::get('sender_id');
//        $user = User::where('id','=',$idik)->first();
        $pass = bcrypt($input['password']);
//        if($user->password != $input){
//            $error['418'] =  'I am a teapot';
//            return response()->json(['error'=>$error], 418);
//        }

        $users = User::all();

        foreach ($users as $user){
            if($user->id == $input['sender_id']){
                if(Hash::check(Input::get('password'), $user->password) == false){
                    $error['418'] =  'I am a teapot';
                    return response()->json(['error'=>$error], 418);
                }

            }

        }

        $deal = Deal::create([
            'sender_id' => $request->sender_id,
            'receiver_id' => $request->receiver_id,
            'amount' => $request->amount,
            'type'=>$request->type
        ]);
//        $success['token'] =  $user->createToken('MyApp')-> accessToken;
        $success['type'] =  $deal->type;
        return response()->json(['success'=>$success]);
    }
}
