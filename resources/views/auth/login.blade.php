@extends('layouts.guest')

@section('content')

<div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
    <a class="u-login-form py-3 mb-auto" href="{{ route('home')}}">
        <img class="img-fluid" src="{{ asset('img/logo.png')}}" width="160" alt="Autenticación de Usuarios y Roles en Laravel">
    </a>

    <div class="u-login-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <h1 class="h2">Bienvenido de nuevo!</h1>
                <p class="small">Inicie sesión en su panel con su direccion de correo electronico y contraseña.</p>
            </div>

            <div class="d-flex my-4">
                <a class="btn btn-sm btn-danger px-3 mr-2" href="#">
                    <i class="fab fa-google mr-1"></i> Inicia sesión con Google
                </a>
            </div>

            <p class="small">O inicie sesión con su correo electrónico a continuación.</p>

            <div class="form-group mb-4">
                <label for="email">Correo electrónico</label>
                <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" placeholder="Tu correo electronico" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                @endif
            </div>

            <div class="form-group mb-4">
                <label for="password">Contraseña</label>
                <input id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" placeholder="Tu contraseña" required>
                @if ($errors->has('password'))
                <small class="form-text invalid-feedback">{{ $errors->first('password') }}</small>
                @endif
            </div>

            <div class="form-group d-flex justify-content-between align-items-center mb-4">
                <div class="custom-control custom-checkbox">
                    <input id="rememberMe" class="custom-control-input" name="rememberMe" type="checkbox" {{ old('rememberMe') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="rememberMe">Recordarme</label>
                </div>

                <a class="link-muted small" href="{{ route('password.request') }}">¿Olvidó su contraseña?</a>
            </div>

            <button class="btn btn-primary btn-block" type="submit">Iniciar sesión</button>
        </form>

        <p class="small">
            ¿No tienes una cuenta? <a href="{{route('register')}}">Registrate aquí</a>
        </p>
    </div>

    <div class="u-login-form text-muted py-3 mt-auto">
        <small><i class="far fa-question-circle mr-1"></i> Si no puede iniciar sesión,<a href="#"> contáctenos</a>.</small>
    </div>
</div>

@endsection