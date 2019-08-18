<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index(){
        $user = auth()->user();
        $balances = $user->balances;
        return view('balance', compact('user','balances'));
    }



}
