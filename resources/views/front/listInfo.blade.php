
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Mobile Template</title>

    <!-- Google font file. If you want you can change. -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Fontawesome font file css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/font-awesome.min.css')}}">

    <!-- Template global css file. Requared all pages -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/global.style.css')}}">
</head>

<body>

@include('includes.sidebar')
<div class="wrapper-inline">
    <!-- Header area start -->
    <header> <!-- extra class no-background -->
        <a class="go-back-link" href="{{route('mainScreen')}}"><i class="fa fa-arrow-left"></i></a>
        <h1 class="page-title">Devoirs</h1>
        <div class="navi-menu-button">
            <em></em>
            <em></em>
            <em></em>
        </div>
    </header>

    <div>
        <div class="section-head">
            <h4 class="title-main" style=" margin-top: 25px;margin-left: 155px;">Liste des devoirs</h4>

        </div>


        <div class="clear"></div>

        <section class="container">

            <div>

                <ul class="courses-list list-unstyled mb-0">

                            <li>

                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center course-item">
                                        <!--<img class="img-xs" src="img/product/course6.png" alt="Course image">-->

                                        <div class="row">
                                            <label>Sujet : </label>
                                            <h4 class="courses-name" style="margin-left: 3%">kjhgf</h4>
                                            <div class="row">
                                                <label>Détail: </label>
                                                fgh
                                            </div>
                                        </div>

                                        <label>Demandee le : </label>


                                    </div>

                                </div>

                            </li>

                </ul>


            </div>
        </section>

    </div>
</div>

</body>
</html>
