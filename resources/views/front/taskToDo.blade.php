
<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body>

<div class="wrapper">
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

        <div>
            <div class="section-head">
                <h4 class="title-main" >Mes enfants</h4>

            </div>

            @if($eleves && $eleves->count()>0)


        @foreach($eleves as $enf)
            <div class="touch" onclick="window.location.href='{{route('listTask', $enf->class_id)}}';">
                <div class="inst-card v2">
                    <div class="inst-item">
                        <div class="inst-img-wrapper v2">
                            <img src="{{asset('assets/'.$enf->image)}}" alt="" class="inst-ing" width="80" height="80" style="border-radius: 50%;margin-top: 25px;">
                        </div>
                        <div class="inst-info">
                            <h4 class="instname">{{$enf->nomEleve}} {{$enf->prenomEleve}}</h4>
                            <div class="row">
                                <label>Niveau : </label>
                                 <h6>@foreach($niveaux as $niv)@if($enf->niveau == $niv->id ){{$niv->level}} @endif @endforeach </h6>
                            </div>
                            <div class="row">
                                <label>Classe : </label>
                            <h6>@foreach($classes as $class)@if($enf->class_id == $class->id ){{$class->name}} @endif @endforeach </h6>
                            </div>
                            <label style="margin-left: -18px">Travail à faire réçus : </label>
                            <span class=" badge badge-success" style="width: 10%">
                                {{$enf->travails()->count()}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
<!--        <a href="{{route('listTask', $enf->id)}}">-->

<!--        </a>-->
        @endforeach
            @endif



    </div>
    </div>
</div>
<!-- JQuery library file. requared all pages -->
<script src="{{asset('assets/front/js/jquery-3.2.1.min.js')}}"></script>

<!-- Template global script file. requared all pages -->
<script src="{{asset('assets/front/js/global.script.js')}}"></script>


</body>

</html>
