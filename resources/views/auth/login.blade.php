@extends('layouts.app')

@section('content')
    <style>
        .rememberme{
            margin-left: -507px;
        }
    </style>

   <!-- <div class="container" id="grad1" >
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Login</strong></h2>
                    <div class="row">
                        <div class="col-md-12 mx-0">

                    <form id="msform" method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset>
                            <div class="form-card">

                                <input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror"  />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="password" name="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror




                        </fieldset>


                        <div class="form-group row ">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check ">
                                    <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label rememberme" for="remember" >
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-">
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
    </div>-->
@endsection
