
<!DOCTYPE html>
<html lang="en">

@include('includes.header')

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
            <div class="text-center">
                <img src="{{asset('assets/front/images/logo.png')}}" class="logo-img" alt="">
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
        <form method="post" action="{{route('sendMessage')}}">
            @csrf
            <div class="contact-short-info">
                <div class="form-row-group with-icons">

                    <div class="form-divider"></div>
                    <div class="form-row no-padding ">
                        <div class="contact-item"> Message :</div>
                        <textarea name="message" class="form-element" placeholder="Textarea"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit"  class="button circle block orange"><i class="fa fa-send"></i> Envoyer</button>
        </form>
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
