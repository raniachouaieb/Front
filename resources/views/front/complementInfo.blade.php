
<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body>
<style>
    span{ color: #019723; font-size: 18px;}
    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }
    .stepwizard-row {
        display: table-row;
    }
    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }
    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }

</style>
<div class="wrapper">
  @include('includes.sidebar')
    <div class="wrapper-inline">
        <!-- Header area start -->
        <header> <!-- extra class no-background -->
            <a class="go-back-link" href="javascript:history.back();"><i class="fa fa-arrow-left"></i></a>
            <h1 class="page-title">Complement Info</h1>
            <div class="navi-menu-button">
                <em></em>
                <em></em>
                <em></em>
            </div>
        </header>
        <!-- Header area end -->
        <!-- Page content start -->
        <main>
            <section class="container">
                <div class="card">

                </div>

            <form method="post" action="{{route('updateAll', Auth::guard('parente')->user()->id)}}">
                @csrf
{{--<div class="card" style="margin-bottom: 10px">--}}
{{--<div class="row">--}}
{{--    <div class="col-4">--}}
{{--        <div style="border:10px; color:red;  background-color:#fff; width:20px; text-align:center;">--}}
{{--            <label>1</label>--}}
{{--        </div>--}}
{{--        Informations--}}
{{--    </div>--}}
{{--    <div class="col-4">--}}
{{--    <div style="text-align: center; border-radius:5px">--}}
{{--        <label>2</label>--}}
{{--    </div>--}}

{{--    <label style="text-align: center">Enfants</label>--}}
{{--    </div>--}}
{{--    <div class="col-4">--}}
{{--    <div style="text-align: center">--}}
{{--        <label>3</label>--}}
{{--    </div>--}}
{{--    <label style="text-align: center">Terminé</label>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}


                <div class="form-row-group with-icons" style="background: #fff;
    padding: 15px 12px;
    border-radius: 10px;
    border: 1px solid #cdcdcd;
    box-shadow: 0 2px 2px 0 transparent, 0 1px 5px 0 rgb(0 0 0 / 24%), 0 3px 1px -2px transparent;" >
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step col-xs-4">
                                <a href="#step-1" type="button"
                                   class="btn btn-success {{ $errors->has('user.*') ? 'btn-danger' :'' }} btn-circle">1</a>
                                <p><small>Informations</small></p>
                            </div>
                            <div class="stepwizard-step col-xs-4">
                                <a href="#step-2" type="button"
                                   class="btn btn-default {{ $errors->has('students.*') ? 'btn-danger' :'' }} btn-circle" {{ old('students') ? '' :'disabled="disabled"' }}>2</a>
                                <p><small>Les enfants</small></p>
                            </div>
                            <div class="stepwizard-step col-xs-4">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                <p><small>Terminer</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-divider"></div>
                    <div class="form-label-divider"><span>1-Papa</span></div>
                    <div class="form-divider"></div>
                    <div class="form-row no-padding">
                        <i class="fa fa-user"></i>
                        <input type="text" name="nomPere" class="form-element" placeholder="nom" value="{{Auth::guard('parente')->user()->nomPere  }}">
                    </div>
                    <div class="form-row no-padding">
                        <i class="fa fa-user"></i>
                        <input type="text" name="prenomPere" class="form-element" placeholder="prenom" value="{{Auth::guard('parente')->user()->prenomPere  }}">
                    </div>
                    <div class="form-row no-padding">
                        <i class="fa fa-address-book"></i>
                        <input type="text" name="professionPere" class="form-element" placeholder="profession" value="{{Auth::guard('parente')->user()->professionPere  }}">
                    </div>
                    <div class="form-row no-padding">
                        <i class="fa fa-phone"></i>
                        <input type="text" name="telPere" class="form-element" placeholder="telephone" value="{{Auth::guard('parente')->user()->telPere  }}">
                    </div>
                    <div class="form-divider"></div>
                    <div class="form-label-divider"><span>2-Maman</span></div>
                    <div class="form-divider"></div>
                    <div class="">
                        <div class="form-row no-padding">
                            <i class="fa fa-user"></i>
                            <input type="text" name="nomMere" class="form-element" placeholder="nom" value="{{Auth::guard('parente')->user()->nomMere  }}">
                        </div>
                        <div class="form-row no-padding">
                            <i class="fa fa-user"></i>
                            <input type="text" name="prenomMere" class="form-element" placeholder="prenom" value="{{Auth::guard('parente')->user()->prenomMere  }}">
                        </div>
                        <div class="form-row no-padding">
                            <i class="fa fa-address-book"></i>
                            <input type="text" name="professionMere" class="form-element" placeholder="profession" value="{{Auth::guard('parente')->user()->professionMere  }}">
                        </div>
                        <div class="form-row no-padding">
                            <i class="fa fa-phone"></i>
                            <input type="text" name="telMere" class="form-element" placeholder="telephone" value="{{Auth::guard('parente')->user()->telMere  }}">
                        </div>

                    </div>
                    <div class="form-divider"></div>
                    <div class="form-label-divider"><span style=" ">3-Contact</span></div>
                    <div class="form-divider"></div>
                    <div class="">
                        <div class="form-row no-padding">
                            <i class="fa fa-location-arrow"></i>
                            <input type="text" name="adresse" class="form-element" placeholder="adresse" value="{{Auth::guard('parente')->user()->adresse  }}">
                        </div>
                        <div class="form-row no-padding">
                            <i class="fa fa-envelope"></i>
                            <i class="fa fa-user"></i>
                            <input type="number" name="nbEnfants" class="form-element" placeholder="nombre enfants" value="{{Auth::guard('parente')->user()->nbEnfants  }}">
                        </div>
                        <div class="form-row no-padding">
                            <i class="fa fa-envelope"></i>
                            <input type="email" name="email" class="form-element" placeholder="email" value="{{Auth::guard('parente')->user()->email  }}">
                        </div>

                    </div>
                </div>








                <div class="form-divider"></div>

                <div class="form-row">
                    <button type="submit" class="button circle block orange" style=" width: 100%;">Suivant</button>
                </div>

                <div class="form-divider"></div>
            </form>





            </section>
        </main>
        <!-- Page content end -->
    </div>
</div>


<!--Page loader DOM Elements. Requared all pages-->
<div class="sweet-loader">
    <div class="box">
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
    </div>
</div>

<!-- JQuery library file. requared all pages -->
<script src="{{asset('assets/front/js/jquery-3.2.1.min.js')}}"></script>

<!-- Template global script file. requared all pages -->
<script src="{{asset('assets/front/js/global.script.js')}}"></script>


</body>

</html>
