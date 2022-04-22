
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Mobile Template</title>

    <!-- Google font file. If you want you can change. -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900" rel="stylesheet">

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
            <h1 class="page-title">Travail à faire</h1>
            <div class="navi-menu-button">
                <em></em>
                <em></em>
                <em></em>
            </div>
        </header>

        <div>
            <div class="section-head">
                <h4 class="title-main" style="margin-top: 25px">Top Listed Categories</h4>
            </div>
            <php i=0 ?>
        @foreach($eleves as $enf)
            {{$i++}}
        <a href="{{route('listTask', $enf->id)}}">
            <div class="inst-card v2">
                <div class="inst-item">
                    <div class="inst-img-wrapper v2">
                        <img src="{{asset('assets/'.$enf->image)}}" alt="" class="inst-ing" width="100" height="100" style="border-radius: 35%">
                    </div>
                    <div class="inst-info">
                        <h3 class="instname">{{$enf->nomEleve}} {{$enf->prenomEleve}}</h3>
                        <p>@foreach($niveaux as $niv)@if($enf->niveau == $niv->id ){{$niv->level}} @endif @endforeach </p>
                        <p>@foreach($classes as $class)@if($enf->class_id == $class->id ){{$class->name}} @endif @endforeach </p>

                        <span>{{$i}}</span>
                    </div>
                </div>
            </div>
        </a>
        @endforeach




    </div>
    </div>
</div>
<!-- JQuery library file. requared all pages -->
<script src="{{asset('assets/front/js/jquery-3.2.1.min.js')}}"></script>

<!-- Template global script file. requared all pages -->
<script src="{{asset('assets/front/js/global.script.js')}}"></script>


</body>

</html>
