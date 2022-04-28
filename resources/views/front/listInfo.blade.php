
<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body>

@include('includes.sidebar')
<div class="wrapper-inline">
    <!-- Header area start -->
    <header> <!-- extra class no-background -->
        <a class="go-back-link" href="{{route('noteInfo')}}"><i class="fa fa-arrow-left"></i></a>
        <h1 class="page-title">Note Info</h1>
        <div class="navi-menu-button">
            <em></em>
            <em></em>
            <em></em>
        </div>
    </header>


        <div class="section-head">
            <h4 class="title-main" >Liste des informations</h4>

        </div>


        <section class="container">
            <div>
                <ul class="courses-list list-unstyled mb-0">
                    @if($listInf && $listInf->count()>0)

                    @foreach($listInf as $info)
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center course-item">
                                        <!--<img class="img-xs" src="img/product/course6.png" alt="Course image">-->

                                        <div class="row">
                                            <label>Sujet : </label>
                                            <h4 class="courses-name" style="margin-left: 3%">{{$info->titre}}</h4>
                                            <div class="row">
                                                <label>Détail: </label>
                                                {!!$info->info  !!}

                                            </div>
                                        </div>




                                    </div>

                                </div>

                            </li>

                 </ul>
                @endforeach
                @endif


            </div>
        </section>


</div>

</body>
</html>
