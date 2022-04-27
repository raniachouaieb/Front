
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
   @include('includes.sidebar')
    <div class="wrapper-inline">
        <!-- Header area start -->
        <header> <!-- extra class no-background -->
            <a class="go-back-link" href="{{route('mainScreen')}}"><i class="fa fa-arrow-left"></i></a>
            <h1 class="page-title">Suggestion</h1>
            <div class="navi-menu-button">
                <em></em>
                <em></em>
                <em></em>
            </div>
        </header>
        <!-- Header area end -->
        <!-- Page content start -->
        <main>
            <div class="text-center">
                <img src="{{asset('assets/front/images/logo.png')}}" class="logo-img" alt="">
            </div>
            <div class="container" style="margin-top: 23%;">



                <div class="form-divider"></div>
                <div class="form-label-divider"><span style="color: #2eb18d;font-size: 18px;">Proposer une suggestion</span></div>
                <div class="form-divider"></div>
                <form method="post" action="{{route('createSuggestion')}}">
                    @csrf
                    <div class="form-row-group">
                        <div class="form-row no-padding">
                            <div class="contact-item"> sujet :</div>
                            <input type="text" name="sujet" class="form-element " placeholder="">
                            @error('sujet')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-mini-divider"></div>

                    <div class="form-row-group">
                        <div class="form-row no-padding ">
                            <div class="contact-item"> Suggestion :</div>
                            <textarea name="suggestion" class="form-element" placeholder="Textarea"></textarea>
                        </div>
                    </div>

                    <div class="form-mini-divider"></div>
                    <div class="form-row">
                        <button type="submit" class="button circle block orange">Envoyer</button>
                    </div>
                </form>

            </div>

            <div class="form-mini-divider mb-0"></div>


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
