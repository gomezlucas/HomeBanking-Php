<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Service;
use App\Balance;
use DateTime;

class ServicesController extends Controller
{


     public function index(){

        $user = auth()->user();
        $services = $user->services;
        $counter = 1;
         return view('services', compact('user','services', 'counter'));
     }

     public function store(Request $request){

        $user = auth()->user();
        $minimo = $user->total;

        $validatedData = $request->validate([
            'nameService' => 'required',
            'codeService' => 'required',
            'totalService' => ['required','numeric',"max:$minimo"],
            ]);

        $service = new Service();
        $service->name = request('nameService');
        $service->code = request('codeService');
        $service->total = request('totalService');
        $service->user_id = $user->id;
        $user->total = $user->total - $service->total;
        $user->save();
        $service->push();

        $balance = new Balance();
        $balance->user_id = $user->id;
        $balance->date = new DateTime();
        $balance->desc = request('nameService');
        $balance->amount = request('totalService');
        $balance->save();
        return back();

     }

    }
