
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
            <h4 class="title-main">{{$travails->matieres->nom}}</h4>

        </div>
        <hr width="19%" color="#477bd9">


        <div class="clear"></div>

        <section class="container">

            <div>

                <ul class="courses-list list-unstyled mb-0">


                            <li style="width: 100%">

                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center course-item">
                                        <!--<img class="img-xs" src="img/product/course6.png" alt="Course image">-->
                                        <div class="d-flex align-items-center course-item">
                                            <div class="ml-10 wd-100">
                                                <h4 class="courses-name"><label>{{$travails->titre_travail}} </label> </h4>
                                                <div>
                                                    <div class="" style="width: 149%;">
                                                        <label><strong>{{$travails->matieres->nom}}</strong></label>
                                                    </div>
                                                </div>
                                                <div class="" >
                                                    <div class="" style="  width: 175%;margin-bottom: 15%;"> {{$travails->detail_travail}}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="">
                                            <span class="badge badge-success" style=" position: absolute;top: -9px;right:10px;">
                                                {{$travails->date_depot}}</span>
                                        </div>
                                        <div class="" style=" position: absolute;bottom:-3px;right:10px;paddingLeft:6px;paddingRight:6px;paddingTop: 2px;paddingBottom: 2px;">
                                            <label>Demandée le : </label>
                                            {{$travails->date_limite}}</div>


                                    </div>

                                </div>

                            </li>



                </ul>
                @if(!empty($travails->file))

                   <div class="card">

                                        <img src=" http://192.168.1.15:8080/assets/{{($travails->file)}}" alt="" width="339" height="180" >
                   </div>


                @else

                    <div class="card">
                        <img src="{{ asset('assets/uploads/nomage.jpg') }}" alt="" width="339" height="180" >

                    </div>
                @endif
                    </ul>



            </div>
        </section>

    </div>
</div>

</body>
</html>
