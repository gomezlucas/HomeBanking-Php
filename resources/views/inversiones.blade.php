@extends('layouts.app2', ['inversiones' => 'active'])
@section('title', 'Lk - Inversiones')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
            <h1 class="display-4">Inversiones</h1>
            <p class="lead">Duplica tus ahorros en el mercado</p>
        </div>
    </div>
    <div class="container text-center">
            <div class="d-flex justify-content-end ">
                <strong>Saldo CA:  $</strong> <p id="total" class="pr-5`"> {{$user->total}}  </p>
                    </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Empresa</th>
                    <th scope="col">Acciones</th>
                    <th scope="col">Valor de Acción</th>
                    <th scope="col">Compra venta de Acción</th>
                </tr>
            </thead>
            <tbody>
                @csrf
                <tr>
                    @foreach ($investments as  $investment)
                        <td id="company">{{$investment->company}}</td>
                        <td id="actions">{{$investment->actions}}</td>
                        <td id="value">{{$investment->value}}</td>
                    <td>
                        <button id="comprar" type="button" class="btn btn-primary">Comprar</button>
                        <button id="vender" type="button" class="btn btn-success">Vender</button>
                    </td>

                    @endforeach

                </tr>
            </tbody>
        </table>
        <div class="alert alert-danger" id="bootstrap-alert" style="display: none;">
                <button type="button" class="close">×</button>
            El saldo no es suficiente para realizar la operacion
            </div>
            <div class="alert alert-success" id="bootstrap-actions" style="display: none;">
                    <button type="button" class="close">×</button>
                    No posee acciones en esta empresa
                </div>

    </div>

    <script>
      jQuery(document).ready(function(){

             $("#comprar").click(function(event)
            {
                let company = $('#company').text();
                let actions = parseFloat($('#actions').text());
                let value = parseFloat($('#value').text());
                let total = parseFloat($('#total').text())
                console.log(value);
                console.log(total);
                    if (value < total){
                        total = total - value;
                        console.log("se puede realizar la transacion")
                        $('#total').html(total);
                        $('#actions').html(actions + 1);
                    }else{
                        document.getElementById('bootstrap-alert').style.display = 'block';
                        setTimeout(function(){
                            document.getElementById('bootstrap-alert').style.display = 'none'}
                            , 1700);                    }
            });

            $("#vender").click(function(event)
            {
                console.log("presiono");
                let company = $('#company').text();
                let actions = parseFloat($('#actions').text());
                let value = parseFloat($('#value').text());
                let total = parseFloat($('#total').text())
                console.log(value);
                console.log(total);
                    if (actions > 0 ){
                        total = total  + value;
                        console.log("se puede realizar la transacion")
                        $('#total').html(total);
                        $('#actions').html(actions - 1);

                    }else{
                        document.getElementById('bootstrap-actions').style.display = 'block';
                        setTimeout(function(){
                            document.getElementById('bootstrap-actions').style.display = 'none'}
                            , 1700);
                     }


            });


        });



    </script>



 @endsection
