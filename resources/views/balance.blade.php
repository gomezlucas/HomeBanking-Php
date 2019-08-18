@extends('layouts.app2', ['balance' => 'active'])
@section('title','Lk - Balance financiero')
@section('content')
<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Balance Financiero</h1>
        <h1>

            </h1>
            <p class="lead">Aca podés controlar los movimientos de tu cuenta</p>
        </div>
    </div>
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Importe</th>
                 </tr>
            </thead>
            <tbody>
                @foreach ($balances as $balance)
                    <tr>
                        <th scope="row" > {{$balance->date}}</td>
                        <td> {{$balance->desc}}</td>
                        <td> {{$balance->amount}}</td>
                      </tr>
                     @endforeach
                    <tr>
                        <td></td>
                        <th>Saldo</th>
                        <td>{{$user->total}} </td>
                        <td></td>

                    </tr>
                </tbody>

        </table>

    </div>

@endsection
