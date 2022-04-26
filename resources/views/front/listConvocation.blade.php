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
    <h4 class="title-main" style="margin-left: 32%;">Liste des convocations</h4>

    </div>

    <section class="container">

        <div>

            <ul class="courses-list list-unstyled mb-0" style="margin-top: 14%;">
                @if($convocations && $convocations->count()>0)

                    @foreach($convocations as $convocation)
                        <li>

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
                                    <div>
                                        <span class="badge badge-success" style="position: fixed;margin-top: 7%;margin-left: 22%;">{{$convocation->date_envoie}}</span>
                                    </div>




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
