<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class datosController extends Controller
{
     
    public function edit(User $user){

  //      $this->authorize('update', $user->datos);

        return view('datos.edit', compact('user'));
    }



    public function update(Request $request, User $user){
        ;
       $validatedData = $request->validate([
        'name' => 'max:50',
        'lastname' => 'max:50',
        'dni' => 'digits_between:5,8|numeric',
        'codpostal' =>'nullable',
        'address' => 'nullable',
        'email' => 'email',
        'birthdate' => 'date'
        ]);

        auth()->user()->update($validatedData);
        return redirect()->route('home');

    }

}
