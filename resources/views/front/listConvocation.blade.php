<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body>

@include('includes.sidebar')
<div class="wrapper-inline">

    <header> <!-- extra class no-background -->
        <a class="go-back-link" href="{{route('convocation')}}"><i class="fa fa-arrow-left"></i></a>
        <h1 class="page-title">Convocations</h1>
        <div class="navi-menu-button">
            <em></em>
            <em></em>
            <em></em>
        </div>
    </header>

    <div class="section-head">
    <h4 class="title-main" >Liste des convocations</h4>

    </div>

    <section class="container">

        <div>

            <ul class="courses-list list-unstyled mb-0" >
                @if($convocations && $convocations->count()>0)

                    @foreach($convocations as $convocation)
                        <li style="width: 60%;margin-left: 20%;">

                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center course-item">
                                    <!--<img class="img-xs" src="img/product/course6.png" alt="Course image">-->


                                    <div class="row">
                                        <label>Titre : </label>
                                        <h4 class="courses-name" style="margin-left: 3%">{{$convocation->titre_conv}}</h4>
                                        <div class="row">
                                            <label>Raison: </label>
                                            {{$convocation->description}}

                                        </div>
                                    </div>

                                </div>
                                <div class="">
                                    <span class="badge badge-success" style="position: absolute;margin: -44px;margin-left: -55px;;">{{date('d/m/Y',strtotime($convocation->date_envoie))}}</span>
                                </div>

                            </div>

                        </li>
                    @endforeach
                @endif

            </ul>


        </div>
    </section>

</div>
</body>
</html>
