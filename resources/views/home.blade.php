@extends('layouts.app',['title'=>'Bienvenido'])
@section('breadcrumbs', Breadcrumbs::render('home'))
@section('content')

<div style="height: 75vh">
    <div class="flex-center flex-column">
        @if (session('status'))
            <div class="alert alert-warning" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @auth
            <div class="alert alert-success" role="alert">
                Bienvenido: <strong>{{ Auth::user()->email }}</strong>
            </div>
        @endauth
    </div>
</div>


@push('scriptsFooter')
    <script>
        $('#menuBienvenido').addClass('active')
    </script>
@endpush
@endsection
