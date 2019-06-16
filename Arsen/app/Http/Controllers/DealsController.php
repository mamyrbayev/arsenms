<?php

namespace App\Http\Controllers;

use App\Deal;
use Validator;
use Session;
use App\User;
use Illuminate\Http\Request;
class DealsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $deals = Deal::all();
        $users = User::all();
        return view('deals.index', compact(['deals', 'users']));
    }
}
