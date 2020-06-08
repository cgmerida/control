@extends('layouts.app')

@section('content')

    <h4 class="fw-300 c-grey-900 mB-40">Registrate</h4>
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="text-normal text-dark">Nombre</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('name') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
            <label for="lastname" class="text-normal text-dark">Apellido</label>
            <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

            @if ($errors->has('lastname'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('lastname') }}</small>
                </span>
            @endif
        </div>


        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
            <label for="tel" class="text-normal text-dark">Telefono</label>
            <input id="tel" type="number" class="form-control" name="tel" value="{{ old('tel') }}" required autofocus>

            @if ($errors->has('tel'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('tel') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="text-normal text-dark">Correo</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('email') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="text-normal text-dark">Contraseña</label>
            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('password') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="password_confirmation" class="text-normal text-dark">Confirmar Contraseña</label>
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>

        </div>

        <!--  Error handle -->
        @if ($errors->any())
            @foreach($errors->all() as $error)
                <span class="form-text text-danger">
                    <small>{{ $error }}</small>
                </span>
            @endforeach
        @endif

        <div class="form-group">
            <div class="peers ai-c jc-sb fxw-nw">
                <div class="peer">
                    <a href="/login">Ya tengo cuenta</a>
                </div>
                <div class="peer">
                    <button class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </form>

@endsection
