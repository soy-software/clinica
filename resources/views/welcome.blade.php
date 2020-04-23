@extends('layouts.app',['title'=>'Inicio'])
@section('breadcrumbs', Breadcrumbs::render('inicio'))
@section('content')
<div style="height: 75vh">
    <div class="flex-center flex-column">
      <h5 class="animated fadeIn mb-3">Bienvenido <strong>{{ config('app.name','Clinica-UTC') }}</strong></h5>
      <p class="animated fadeIn text-muted">{{ date('Y') }}</p>
    </div>
  </div>
@endsection
