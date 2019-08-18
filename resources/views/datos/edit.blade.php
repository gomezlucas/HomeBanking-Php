@extends('layouts.app2', ['datos' => 'active'])
@section('title','Lk - Balance financiero')
@section('content')
<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"> Datos del Cliente :</h1>
            <h3  >{{$user->name."   ".$user->lastname}}</h3>
         </div>
    </div>
    <div class="container">
    <form action="/datos/{{$user->id}}" method="POST"  enctype="multipart/form-data">
        @method('PATCH')
        @csrf
                <div class="row form-group">
            <div class="col-8 offset-2">
                <label for="name"> Nombre</label>
                <input
                    type="test"
                    class="form-control mb-2
                    @error('name')
                         is-invalid
                    @enderror"
                    name="name"
                    value={{old('name') ?? $user->name}} >
                    @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                <label for="lastname"> Apellido</label>
                <input
                    type="text"
                    class="form-control
                    @error('lastname')
                        is-invalid
                    @enderror"
                    name="lastname"
                    value={{ old('lastname') ?? $user->lastname}}>
                    @error('lastname')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                   @enderror
                <label for="dni"> Dni</label>
                <input
                    type="text"
                    class="form-control
                    @error('dni')
                        is-invalid
                    @enderror"
                    name="dni"
                    value="{{old('dni') ?? $user->dni}}">
                    @error('dni')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
               @enderror

            </div>
        </div>
        <div class="row form-group">
            <div class="col-6 offset-2 ">
                    <label for="address"> Dirección</label>
                    <input type="text" class="form-control mb-2" name="address" value={{ old('address') ??  $user->address}}>
            </div>
            <div class="col-2">
                    <label for="addressCode"> Cod. Postal</label>
                    <input type="text" class="form-control mb-2" name="codpostal" value={{old('codpostal') ?? $user->codpostal}}>
            </div>
        </div>
        <div class="row form-group">
                <div class="col-8 offset-2">
                    <label for="birthdate"> Fec de Nacimiento </label>
                    <input
                         type="date"
                         class="form-control mb-2
                         @error('birthdate')
                            is-invalid
                         @enderror"
                         name="birthdate"
                         value={{old('birthdate') ?? $user->birthdate}}>
                         @error('birthdate')
                             <div class="invalid-feedback">
                                 {{$message}}
                             </div>
                         @enderror
                </div>
            </div>
        <div class="row form-group">
            <div class="col-8 offset-2">
                <button class="btn btn-primary" type="submit"> Update Info</button>
            </div>
        </div>

    </form>

    </div>
    @endsection
