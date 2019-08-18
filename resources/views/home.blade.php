@extends('layouts.app2')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                    <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h1 class="display-4">Bienvenido a MBanking, qué querés hacer hoy?</h1>
                               <p class="lead">En este sitio poder operar con tu cuenta mirando el balance, haciendo transferencia pagando servicios y armando las inversiones!</p>
                            </div>
                          </div>
                          <div class="container">
                              <div class="card-deck text-center">
                                <div class="card">
                                    <img src="../images/balance.png" class="card-img-top" alt="..." style="max-height:162px">
                                <div class="card-body">
                                    <h5 class="card-title">Balance</h5>
                                      <p class="card-text">Mira como vienen sus cuentas: Ingresos y Egresos.</p>
                                 <a href="/balance" class="btn btn-primary">Ver situación económica</a>
                              </div>
                          </div>
                          <div class="card">
                            <img src="../images/servicios.png" class="card-img-top" alt="...">
                            <div class="card-body ">
                              <h5 class="card-title">Pago servicios</h5>
                              <p class="card-text">Paga todo lo que necesites desde la comodidad de tu casa. </p>
                              <a href="/services" class="btn btn-primary">Pagar servicios</a>
                            </div>
                          </div>
                          <div class="card">
                            <img src="../images/inversiones.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Inversiones</h5>
                              <p class="card-text">Duplica tus ahorros en el mercado financier. </p>
                              <a href="/inversiones" class="btn btn-primary">Invertir</a>
                            </div>
                          </div>
                </div>
            </div>
        </div>
    </div>
 @endsection
