
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
            <h1 class="page-title">Convocations</h1>
            <div class="navi-menu-button">
                <em></em>
                <em></em>
                <em></em>
            </div>
        </header>

        <div>
            <div class="section-head">
                <h4 class="title-main" style=" text-align: center">Mes enfants</h4>

            </div>
            <hr width="19%" color="#477bd9">


        @if($eleves && $eleves->count()>0)


                @foreach($eleves as $enf)
                    <div class="touch" onclick="window.location.href='{{route('listConvocation', $enf->id)}}';">
                        <div class="card" style=" border-radius: 3%;box-shadow: 0px 0px 7px 0px;padding: 5%;">

                            <img src="{{asset('assets/'.$enf->image)}}" alt=""  width="100" height="100" style="border-radius: 51%;margin-top: 2px;margin-left: 30%; margin-right: 50%;">
                            <div class="card" style="margin-top: 9%;margin-left: 8%;margin-right: 8%;">
                                <div style="text-align: center">
                                    <label><strong>{{$enf->nomEleve}} {{$enf->prenomEleve}}</strong></label>
                                </div>
                                <div class="row">
                                    <div class="col-md-4" style="text-align: center;">
                                        <label style="text-align: center">Niveau scolaire: {{$enf->class->level->level}} </label>

                                    </div>
                                    <div class="col-md-4" style="text-align: center">
                                        <label style="text-align: center">Classe: {{$enf->class->name}} </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">

                              <span class=" badge badge-success" style="width: 66%;padding:2%; margin-top: 5%  ">
                                  <div class="row">
                                      <div class="col-md-4">
                                           <label>Non lus: </label>

                                      </div>
                                      <div class="col-md-4">
                                {{$enf->convocations()->count()}}
                                      </div>

                                  </div>

                              </span>
                                </div>
                                <div class="col-6">
                             <span class=" badge badge-success" style="width: 66%;padding:2%; margin-top: 5% ">
                                 <div class="row">
                                      <div class="col-md-4">
                                           <label>Total: </label>

                                      </div>
                                      <div class="col-md-4">
                                {{$enf->convocations()->count()}}
                                      </div>
                                 </div>
                             </span>
                                </div>

                            </div>



                        </div>

{{--                        <div class="inst-card v2">--}}
{{--                            <div class="inst-item row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <img src="{{asset('assets/'.$enf->image)}}" alt="" class="inst-ing" width="25%"--}}
{{--                                         height="100%" style="    border-radius: 58%;  margin-top: -2px;margin-right: 7%;float: right;">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6" style="font-size: 20px">--}}
{{--                                    <label><strong>{{$enf->nomEleve}} {{$enf->prenomEleve}}</strong></label>--}}
{{--                                    <br>--}}
{{--                                        <label>Niveau : {{$enf->class->level->level}}  </label>--}}
{{--                                    <br>--}}
{{--                                        <label>Classe : {{$enf->class->name}} </label>--}}
{{--                                    <br>--}}
{{--                                    <label>Total Convocation: </label>--}}
{{--                                    <span class=" badge badge-success" style="width: 10%">--}}
{{--                                {{$enf->convocations()->count()}}--}}
{{--                            </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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
