@extends('layouts.login')
@section('content')
    <style>
        .eye{
            position: absolute;
            right: 8%;
            transform: translate(0, -50%);
            top: 63%;
            cursor: pointer;
        }
        .fa{
            font-size: 18px;
            color: #7a797e;
        }
    </style>
    <main>
        @include('includes.alerts.flash')

        <div class="container enterance">
            <div class="text-center">
                <img src="{{asset('assets/front/images/logo.png')}}" class="logo-img" alt="">
            </div>

            <div class="form-divider"></div>
            <form method="post" action="{{route('login')}}">
                @csrf

            <div class="card shadow form-row-group with-icons">
                <div class="form-row no-padding">
                    <i class="fa fa-user"></i>

                    <input type="email" name="email" class="form-element"  value="{{old('email')}}" placeholder="Adresse Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert" style="color: crimson">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-row no-padding">
                    <i class="fa fa-lock"></i>
                    <input type="password" id="password" name="password" class="form-element" placeholder="Password">
                    <span><i class="fa fa-eye eye" aria-hidden="true" id="eye" onclick="toggle()"></i></span>

                    @error('password')
                    <span class="invalid-feedback " role="alert" style="color: crimson">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <button type="submit" class="button circle block orange" style="width: 56%;margin-left:20%;background-color:#84bedf;" >Login</button>
            </div>


            <div class="form-row txt-center mt-30">
                <a href="{{route('forgotPass')}}" data-loader="show">Forgot password?</a>
            </div>

            <div class="form-row txt-center w-text">
                Don't you have an account yet? <a href="{{route('getRegister')}}" data-loader="show">Sign Up</a>
            </div>

            <div class="form-divider"></div>
</form>
        </div>
    </main>
    <script src="{{ asset('js/sweetalert.js')}}"></script>
    <script>
        @if(Session('status'))
        // alert('{{ session('status') }}');
        swal({
            title: '{{ session('status') }}',
            //text: "You clicked the button!",
            icon: '{{ session('statuscode') }}',
            button: "Done!",
        });
        @endif

    </script>
    <script src="{{ asset('js/togglePassword.js')}}"></script>

@endsection
