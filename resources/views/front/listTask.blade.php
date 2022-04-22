
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
        <main class="margin">
            @include('includes.sidebar')
            <div class="wrapper-inline">
                <!-- Header area start -->
                <header> <!-- extra class no-background -->
                    <a class="go-back-link" href="javascript:history.back();"><i class="fa fa-arrow-left"></i></a>
                    <h1 class="page-title">Travail à faire</h1>
                    <div class="navi-menu-button">
                        <em></em>
                        <em></em>
                        <em></em>
                    </div>
                </header>
            </div>


            <div class="clear"></div>

            <section class="container">


                <div>
                    <ul class="courses-list list-unstyled mb-0">

                        <li>
                            <a href="#" class="d-flex align-items-center">
                                <div class="d-flex align-items-center course-item">
                                    <!--<img class="img-xs" src="img/product/course6.png" alt="Course image">-->
                                    <div class="ml-10 wd-100">
                                        <h4 class="courses-name">gg</h4>
                                        <div class="progress">
                                            <div class="progress-bar gradient-orange wd-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="78"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <small class="d-block c-price">$24</small>
                                    <small class="txt-orange d-block">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>

        </main>

</body>
</html>
