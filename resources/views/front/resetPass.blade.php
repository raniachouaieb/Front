
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Mobile Template</title>

    <!-- Google font file. If you want you can change. -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fontawesome font file css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/font-awesome.min.css')}}">

    <!-- Template global css file. Requared all pages -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/global.style.css')}}">
</head>

<body>

<div class="wrapper">

    <div class="wrapper-inline creamy-bg">
        <!-- Page content start -->
        <main class="mt-0 centered">

            <div class="container enterance">

                <div class="text-center">
                    <img src="{{asset('assets/front/images/logo.png')}}" class="logo-img" alt="">
                </div>

                <div class="form-divider"></div>

                <form action="{{route('submitResetPasswordForm')}}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-row-group with-icons">
                        <div class="form-row no-padding">
                            <i class="fa fa-envelope"></i>
                            <input type="email" name="email" value="{{old('email')}}" class="form-element" placeholder="Email address">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row-group with-icons">
                        <div class="form-row no-padding">
                            <i class="fa fa-lock"></i>
                            <input type="password"  class="form-element" name="password" placeholder="Password" >
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-row-group with-icons">
                        <div class="form-row no-padding">
                            <i class="fa fa-lock"></i>
                            <input type="password"  class="form-element" name="password_confirmation" placeholder="Confirm Password" >
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="button circle block orange">
                            Reset Password
                        </button>
                    </div>


                </form>


            </div>
        </main>
        <!-- Page content end -->
    </div>
</div>


<!--Page loader DOM Elements. Requared all pages-->
<div class="sweet-loader">
    <div class="box">
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
    </div>
</div>

<!-- JQuery library file. requared all pages -->
<script src="{{asset('assets/front/js/jquery-3.2.1.min.js')}}"></script>

<!-- Template global script file. requared all pages -->
<script src="{{asset('assets/front/js/global.script.js')}}"></script>


</body>


</html>
