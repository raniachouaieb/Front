
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
            <a class="go-back-link" href="javascript:history.back();"><i class="fa fa-arrow-left"></i></a>
            <h1 class="page-title">A propos de nous</h1>
            <div class="navi-menu-button">
                <em></em>
                <em></em>
                <em></em>
            </div>
        </header>
        <!-- Header area end -->
        <!-- Page content start -->
        <main>
            <section class="container">
                <div class="about-img text-center">
                    <img src="{{asset('assets/front/images/about.png')}}" width="300" alt="">
                </div>
                <div class="panel text-center">
                    <h3 class="title mb-15">What is LMS System?</h3>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum has been .
                </div>

                <div class="form-divider"></div>

                <div class="prevention-wrapper">
                    <div class="news-list-item v2 has-border mb-15">
                        <div class="list-image">
                            <img src="{{asset('assets/front/images/why1.png')}}" alt="" width="100" height="100">
                        </div>
                        <div class="list-content">
                            <h2 class="list-title"><a href="#">Over 5,000 Online Courses</a></h2>
                            <p class="list-time">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit ipsum dolor.</p>
                            <a href="#" class="read-more">Read More ----</a>
                        </div>
                    </div>

                    <div class="news-list-item v2 has-border mb-15">
                        <div class="list-image">
                            <img src="{{asset('assets/front/images/why2.png')}}" alt="" width="100" height="100">
                        </div>
                        <div class="list-content">
                            <h2 class="list-title"><a href="#">Well Certified Instructors</a></h2>
                            <p class="list-time">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit ipsum dolor.</p>
                            <a href="#" class="read-more">Read More ----</a>
                        </div>
                    </div>

                    <div class="news-list-item v2 has-border mb-15">
                        <div class="list-image">
                            <img src="{{asset('assets/front/images/why3.png')}}" alt="" width="100" height="100">
                        </div>
                        <div class="list-content">
                            <h2 class="list-title"><a href="#">Lifetime Access Gurantee</a></h2>
                            <p class="list-time">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit ipsum dolor.</p>
                            <a href="#" class="read-more">Read More ----</a>
                        </div>
                    </div>

                </div>

            </section>

            <footer>
                <div class="container">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <p>Copyright © All Right Reserved</p>
                </div>
            </footer>
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
