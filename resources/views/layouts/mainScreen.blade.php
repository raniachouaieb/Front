
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Home Page</title>

    <!-- Google font file. If you want you can change. -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,900" rel="stylesheet">

    <!-- Fontawesome font file css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate css file for css3 animations. for more : https://daneden.github.io/animate.css -->
    <!-- Only use animate action. If you dont use animation, you don't have to add.-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/animate.css')}}">

    <!-- Template global css file. Requared all pages -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/global.style.css')}}">

    <!-- Swiper slider css file -->
    <link rel="stylesheet" href="{{asset('assets/front/css/swiper.min.css')}}">

    <!--turbo slider plugin css file -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/turbo-slider/turbo.css')}}">

    <!-- JQuery library file. requared all pages -->
    <script src="{{asset('assets/front/js/jquery-3.2.1.min.js')}}"></script>

</head>

<body>

<div class="wrapper ">
    @yield('content')
</div>

<!--Page loader DOM Elements. Requared all pages-->
<div class="sweet-loader">
    <div class="box">
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
    </div>
</div>

<!-- Swiper JS -->
<script src="{{asset('assets/front/js/swiper.min.js')}}"></script>

<!-- Initialize Swiper -->
<script>

</script>

<!-- Template global script file. requared all pages -->
<script src="{{asset('assets/front/js/global.script.js')}}"></script>

<!-- Turbo slider plugin file. requared only wizard pages -->
<script src="{{asset('assets/front/js/turbo-slider/turbo.min.js')}}"></script>
<script src="{{asset('assets/front/js/turbo-ini.js')}}"></script>

</body>

</html>
