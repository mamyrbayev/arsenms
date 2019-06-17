<?php

namespace App\Http\Controllers\API;

use http\Client\Response;
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

        $sender = User::find(Input::get('sender_id'));

                if(Hash::check(Input::get('password'), $sender->password) == false){
                    $error['418'] =  'I am a teapot';
                    return response()->json(['error'=>$error], 418);
                }
        $receiver = User::find(Input::get('receiver_id'));
        if(Input::get('amount') < 0){
                if($sender->balance < Input::get('amount')){
                    return response()->json('Not enough balance');
                }
            return response()->json('Only positive amount');
        }

        $sender->balance = $sender->balance - Input::get('amount');
        $receiver->balance = $receiver->balance + Input::get('amount');
        $sender->save();
        $receiver->save();



//        $sender = User::where('id','=',Input::get('sender_id'));
//        if(){}

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



    public function dealsByUser(Request $request){
        $deals = Deal::all();
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

//        $users = User::all();

        $mydeals = collect(new Deal());

        foreach ($deals as $deal){
            if($request->id == $deal->sender_id || $request->id == $deal->receiver_id){
                $mydeals->add($deal);
            }
        }

        $success['deals'] =  $mydeals;
        return response()->json(['success'=>$success]);

    }


}
