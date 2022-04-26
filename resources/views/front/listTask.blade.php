
<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body>

            @include('includes.sidebar')
            <div class="wrapper-inline">
                <!-- Header area start -->
                <header> <!-- extra class no-background -->
                    <a class="go-back-link" href="{{route('task')}}"><i class="fa fa-arrow-left"></i></a>
                    <h1 class="page-title">Devoirs</h1>
                    <div class="navi-menu-button">
                        <em></em>
                        <em></em>
                        <em></em>
                    </div>
                </header>

                <div>
                    <div class="section-head">
                        <h4 class="title-main">Liste des devoirs</h4>

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
                                        <div class="d-flex align-items-center course-item">
                                            <div class="ml-10 wd-100">
                                                <h4 class="courses-name"><label>Sujet: </label>{{$travail->titre_travail}}</h4>
                                                <div class="">
                                                    <div class=""><label>Détail: </label> {{$travail->detail_travail}}</div>
                                                </div>
                                                <div>
                                                    <div class=""> <label>Matière: </label>
                                                        {{$travail->matieres->nom}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="">
                                            <span class="badge badge-success" style="position: absolute;margin: -61px;margin-left: 76px;;">{{$travail->date_depot}}</span>
                                        </div>
                                        <div class="" style="margin: -64px;margin-bottom: -151px; margin-left: -56px;">
                                            <label>Demandée le : </label>
                                            {{$travail->date_limite}}</div>


                                    </div>

                                </div>

                            </li>
                            @endforeach
                        @endif

                    </ul>


                </div>
            </section>

            </div>
            </div>

</body>
</html>
