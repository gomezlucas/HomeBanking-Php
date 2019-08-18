@extends('layouts.app2', ['services' => 'active'])

@section('title', 'Lk - Pago de Servicios')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
            <h1 class="display-4">Pago de Servicios</h1>
            <p class="lead">Paga todo lo que necesites desde la comodidad de tu casa</p>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-end ">
    <p class="pr-5"><strong>Saldo CA: $</strong> {{$user->total}}  </p>
    </div>
    <form action="/services" method="POST" class="pb-5">
    @csrf
    <div class="form-row ">
    <div class="col-6 mx-auto">
    <label for="inputService"> Nombre del Servicio</label>
    <input type="text" class="form-control @error('nameService') is-invalid @enderror" id="inputService" value="{{old('nameService')}}"  name="nameService">
    @error('nameService')
    <div class="invalid-feedback">
    {{$message}}
    </div>
    @enderror
    </div>
    </div>
    <div class="form-row">
    <div class="col-6 mx-auto">
    <label for="inputNumber">Número de referencia</label>
    <input type="number" class="form-control @error('codeService') is-invalid @enderror" id="inputNumber" value="{{old('codeService')}}" name="codeService">
    @error('codeService')
    <div class="invalid-feedback">
    {{$message}}
    </div>
    @enderror
    </div>
    </div>
    <div class="form-row">
    <div class="col-6 mx-auto">
    <label for="inputImport">Importe</label>
    <input type="number" class="form-control @error('totalService') is-invalid @enderror" id="inputImport" value="{{old('totalService')}}" name="totalService">
    @error('totalService')
    <div class="invalid-feedback">
    {{$message}}
    </div>
    @enderror
    </div>
    </div>
    <div class="form-row mt-4">
    <div class="col-6 mx-auto">
    <button type="submit" class="btn btn-primary">Pagar Servicio</button>
    </div>
    </div>
    </div>
    @csrf
    </form>
    


    <div class="container">
    <table class="table">
    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Nombre del Servicio</th>
    <th scope="col">Codigo de Pago</th>
    <th scope="col">Monto</th>
    </tr>
    </thead>
    @foreach ($services as $service)
    <tr>
    <th scope="row" > {{$counter++}}</td>
    <td> {{$service->name}}</td>
    <td> {{$service->code}}</td>
    <td> {{$service->total}}</td>

    </tr>

    @endforeach



     </table>

 @endsection
