@extends('layouts.app')
@section('css')
    <style>
        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgb(76, 9, 121) 35%, rgb(235, 233, 234) 100%);

        }

        .card {
            position: relative;
            top: 50px;
            left: 0;
            background-color: rgba(0, 0, 0, 0.449);
            color: wheat;
            border-radius: 70px;
            padding: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">

                <div class="card">

                    <div class="card-header text-center text-primary h1">
                        {{ __('Ahmad Networking') }}
                    </div>

                    <div class="row m-2 p-2">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <img src="{{ asset('assets/img/hero-img.png') }}" alt="" class="img-fluid"
                                style=" width:250px;height:200px;">
                        </div>
                    </div>



                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Enter Your Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Enter Your Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary btn-block">
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
@endsection

@section('js')

@endsection
