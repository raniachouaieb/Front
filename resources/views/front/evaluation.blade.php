
<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body>

@include('includes.sidebar')
<div class="wrapper-inline">
    <!-- Header area start -->
    <header> <!-- extra class no-background -->
        <a class="go-back-link" href="{{route('enfantObs')}}"><i class="fa fa-arrow-left"></i></a>
        <h1 class="page-title">Evaluation</h1>
        <div class="navi-menu-button">
            <em></em>
            <em></em>
            <em></em>
        </div>
    </header>

    <div>
        <div class="section-head">
            <h4 class="title-main">Liste des notes</h4>

        </div>


        <div class="clear"></div>

        <section class="container">

            <div>

                <ul class="card courses-list list-unstyled mb-0">
                    @foreach($module as $modul)
                    <label>{{$modul->nom_module}}</label>

                    @if($evaluations && $evaluations->count()>0)

                        @foreach($evaluations as $eval)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Matière</th>
                                    <th scope="col">Note</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">#
                                        {{$loop->index+1}}</th>

                                    <td>{{$eval->lesson->nom}}</td>
                                    <td>{{$eval->valeur}}</td>
                                </tr>
                                <tr>

                                </tbody>
                            </table>
                        @endforeach
                    @else

                        <li>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center course-item">
                                    <!--<img class="img-xs" src="img/product/course6.png" alt="Course image">-->

                                    <div class="row">
                                        <h5> Aucun devoir pour votre enfant</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endif
                    @endforeach

                </ul>


            </div>
        </section>

    </div>
</div>

</body>
</html>
