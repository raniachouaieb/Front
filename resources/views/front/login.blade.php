@extends('layouts.login')
@section('content')
    <main>

        <div class="container enterance">
            <div class="text-center">
                <img src="{{asset('assets/front/images/logo.png')}}" class="logo-img" alt="">
            </div>

            <div class="form-divider"></div>
            <form method="post" action="{{route('login')}}">
                @csrf
            <div class="form-row-group with-icons">
                <div class="form-row no-padding">
                    <i class="fa fa-user"></i>
                    <input type="email" name="email" class="form-element" placeholder="Username or Email">
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
                <div class="form-row no-padding">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="password" class="form-element" placeholder="Password">
                </div>
            </div>

            <div class="form-row">
                <button type="submit" class="get-started-btn" style="width: 19rem;margin-left: 3rem;">Login</button>
            </div>


            <div class="form-row txt-center mt-30">
                <a href="forgot-password.html" data-loader="show">Forgot password?</a>
            </div>

            <div class="form-row txt-center w-text">
                Don't you have an account yet? <a href="{{route('getRegister')}}" data-loader="show">Sign Up</a>
            </div>

            <div class="form-divider"></div>
</form>
        </div>
    </main>
@endsection
