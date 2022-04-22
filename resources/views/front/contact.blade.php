
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
            <h1 class="page-title">CONTACT</h1>
            <div class="navi-menu-button">
                <em></em>
                <em></em>
                <em></em>
            </div>
        </header>
        <!-- Header area end -->
        <!-- Page content start -->
        <main>
            <div class="contact-info">
                <div class="contact-stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <span>3.58</span>
                    <span>(1.425 reviews)</span>
                </div>
                <h3 class="address-name">New York City Hall</h3>
                <p class="address">City Hall Park - New York</p>
            </div>

            <div class="contact-address">
                <div class="contact-item">
                    <i class="fa fa-map-marker"></i> New York City Hall
                </div>

                <div class="contact-item">
                    <i class="fa fa-clock-o"></i> 09:00 to 17:00 Working Days
                </div>

                <div class="contact-item">
                   <a href="tel: +1 (123) 123 2 123"><i class="fa fa-phone"></i> +1 (123) 123 2 123</a>
                </div>

                <div class="contact-item">
                    <a href="www.domain.com"><i class="fa fa-globe"></i> www.domain.com</a>
                </div>

                <div class="contact-item">
                    <a href="mailto:johndoe@example.com"><i class="fa fa-envelope"></i> johndoe@example.com</a>
                </div>
            </div>

            <div class="contact-short-info">
                <div class="form-row-group with-icons">
                    <div class="form-row no-padding ">
                        <div class="contact-item"> Message :</div>
                        <textarea class="form-element" placeholder="Textarea"></textarea>
                    </div>
                </div>
            </div>
            <a href="#" class="button blue"><i class="fa fa-send"></i> Envoyer</a>

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
