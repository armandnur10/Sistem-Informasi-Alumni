@extends('layouts.auth')
@section('content')
<p class="title">{{ __('LOGIN') }}</p>

<form method="POST" class="w-100 d-flex flex-column align-items-center justify-content-center"
    action="{{ route('login') }}">
    @csrf

    <!-- <div class="form-group{{ $errors->has('nisn') ? ' has-error' : '' }}">
        <label for="nisn" class="col-md-4 control-label">Enter Mobile No.</label>
        <div class="col-md-6">
            <input id="nisn" type="text" class="form-control" name="nisn" value="{{ old('nisn') }}"
                required autofocus>
            @if ($errors->has('nisn'))
            <span class="help-block">
                <strong>{{ $errors->first('nisn') }}</strong>
            </span>
            @endif
        </div>
    </div> -->
    <div class="input-group mb-3{{ $errors->has('nisn') ? ' has-error' : '' }}">
        <span class="input-group-text" id="nisn">
            <i class="fa-solid fa-user"></i>
        </span>
        <input type="text" class="form-control @error('nisn') is-invalid @enderror" placeholder="nisn" name="nisn"
            value="{{ old('nisn') }}" required autocomplete="nisn" autofocus aria-describedby="nisn">
        @if ($errors->has('nisn'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('nisn') }}</strong>
        </span>
        @endif
    </div>

    <!-- @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Lupa Password?') }}
    </a>
    @endif -->

    <div class="button mb-3">
        <button type="submit" class="btn"> {{ __('Login') }}</button>
    </div>



</form>
@endsection
