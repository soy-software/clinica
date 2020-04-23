@extends('layouts.app',['title'=>'Ingresar'])
@section('breadcrumbs', Breadcrumbs::render('login'))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <div class="md-form md-outline input-with-pre-icon">
                            <i class="fas fa-envelope  input-prefix"></i>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            
                            <label for="email">
                                {{ __('E-Mail Address') }}
                            </label>

                            @error('email')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        

                    

                        <div class="md-form md-outline input-with-pre-icon">
                            <i class="fas fa-envelope  input-prefix"></i>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="current-password">
                            
                            <label for="password">
                                {{ __('Password') }}
                            </label>

                            @error('password')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scriptsFooter')
    <script>
        $('#menuLogin').addClass('active')
    </script>
@endpush

@endsection
