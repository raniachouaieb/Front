
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
                    <a class="go-back-link" href="{{route('mainScreen')}}"><i class="fa fa-arrow-left"></i></a>
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
                        @if($travails && $travails->count()>0)

                            @foreach($travails as $travail)
                            <li>

                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center course-item">
                                        <!--<img class="img-xs" src="img/product/course6.png" alt="Course image">-->

                                        <div class="row">
                                            <label>Sujet : </label>
                                            <h4 class="courses-name" style="margin-left: 1%">{{$travail->titre_travail}}</h4>
                                            <div class="">
                                                <p>{{$travail->detail_travail}}</p>

                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </li>
                            @endforeach
                        @endif

                    </ul>

                </div>
            </section>

        </main>

</body>
</html>
