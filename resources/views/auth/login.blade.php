@extends('layouts.auth')
@section('content')
<p class="title">{{ __('Register') }}</p>

<form method="POST" class="w-100 d-flex flex-column align-items-center justify-content-center "
    action="{{ route('login') }}">
    @csrf

    <div class="input-group mb-3">
        <span class="input-group-text" id="email">
            <i class="uil uil-envelope-alt"></i>
        </span>
        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus aria-describedby="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="password">
            <i class="uil uil-lock-alt"></i>
        </span>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="current-password" placeholder="password" aria-describedby="password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Lupa Password?') }}
    </a>
    @endif

    <div class="button mb-3">
        <button type="submit" class="btn"> {{ __('Login') }}</button>
    </div>
    <p>
        Tidak Punya Akun?
        <a href="/register">Register</a>
    </p>



</form>
@endsection