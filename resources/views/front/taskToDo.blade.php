@extends('layouts.profile')
@section('content')

    <div>
        <ul class="courses-list list-unstyled mb-0 ">
            @foreach($eleves as $enf)

                        <li>
                            <a href="#" class="d-flex align-items-center">
                                <div class="d-flex align-items-center course-item">
                                    <i class="list-arrow fa fa-angle-down"></i>

                                        <img src="{{asset('assets/'.$enf->image)}}" alt="Person" class="img-xs"  id="profileEnfDisplay"/>



                                    <div class="ml-10 wd-100">
                                        <h4 class="courses-name">{{$enf->nomEleve}} {{$enf->prenomEleve}}</h4>
                                        <!--   <div class="progress">
                                         <div class="progress-bar gradient-orange wd-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="78"></div>
                                        </div>-->
                                    </div>
                                </div>

                            </a>

                        </li>

            @endforeach


        </ul>



    </div>
@stop
