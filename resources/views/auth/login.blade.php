@extends('layouts.form')
@section('title', 'Inicio de sesión')

@section('content')
<div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary shadow border-0">
          <div class="card-body px-lg-5 py-lg-5">

            @if ($errors->any())
            <div class="text-center text-muted mb-4">
                <small>Oops! se encontró un error.</small>
              </div>
            <div class="alert alert-danger" role="alert">
                 {{ $errors->first() }}
            </div>
              @else
            <div class="text-center text-muted mb-4">
              <small>Ingresa tus datos para iniciar sesión.</small>
            </div>
            @endif

        <form role="form" method="POST" action="{{ route('login') }}">
            @csrf

              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control" placeholder="Email" type="email" name="email"
                value="{{ old('email')}}" required autofocus>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong> {{ $errors->first('email')}} </strong>
                </span>
                @endif
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control" placeholder="Contraseña" type="password" name="password" required>
                  @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                  @endif
                </div>
              </div>
              <div class="custom-control custom-control-alternative custom-checkbox">
                  <input name="remenber" class="custom-control-input" id=" customCheckLogin" type="checkbox" {{ old('remenber') ? 'checked' : ''}}>
                <label class="custom-control-label" for="remember">
                  <span class="text-muted">Recordarme</span>
                </label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">Ingresar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
          <a href="{{ route('password.request')}}" class="text-light">
                <small>¿Olvidaste tú contraseña?</small></a>
          </div>
          <div class="col-6 text-right">
          <a href="{{ route('register')}}" class="text-light">
                <small>Crea una nueva cuenta</small></a>
          </div>
        </div>
      </div>
    </div>
  </div>

<
@endsection
