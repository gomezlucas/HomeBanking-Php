<?php

namespace App\Http\Controllers;

 use Illuminate\Support\Facades\Request;
use App\Investment;

class InvestmentController extends Controller
{
    public function index(){
        $user = auth()->user();
        $investments = $user->investments;

        return view('inversiones', compact('user', 'investments'));

    }

    public function sendInvestment(Request $request){

        $company = $request->td('company');
        $actions = $request->td('actions');
        $value = $request->td('value');

            dd($company);


    }

}
