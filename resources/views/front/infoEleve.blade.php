<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body>
<style>
    span {
        color: #019723;
        font-size: 18px;
    }

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

                <div class="form-row-group with-icons" style="background: #fff;
    padding: 15px 12px;
    border-radius: 10px;
    border: 1px solid #cdcdcd;
    box-shadow: 0 2px 2px 0 transparent, 0 1px 5px 0 rgb(0 0 0 / 24%), 0 3px 1px -2px transparent;">
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step col-xs-4">
                                <a href="#step-1" type="button"
                                   class="btn btn-danger {{ $errors->has('user.*') ? 'btn-danger' :'' }} btn-circle">1</a>
                                <p><small>Informations</small></p>
                            </div>
                            <div class="stepwizard-step col-xs-4">
                                <a href="#step-2" type="button"
                                   class="btn btn-success {{ $errors->has('students.*') ? 'btn-danger' :'' }} btn-circle" {{ old('students') ? '' :'disabled="disabled"' }}>2</a>
                                <p><small>Les enfants</small></p>
                            </div>
                            <div class="stepwizard-step col-xs-4">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle"
                                   disabled="disabled">3</a>
                                <p><small>Terminer</small></p>
                            </div>
                        </div>
                    </div>


                    @foreach($parent->students as $enf)
                        <div style="    margin-top: 24px;
    text-align: center;"><span>Information sur l'eleve{{$loop->index+1}} </span></div>

                        <form action="{{route('updateElev', $enf->id)}}" method="post">
                            @csrf

                            <div>
                                <input type="text" name="nomEleve" class="form-element" placeholder=""
                                       value="{{$enf->nomEleve }}">
                                <input type="text" name="prenomEleve" class="form-element" placeholder=""
                                       value="{{$enf->prenomEleve }}">

                            </div>
                            <div class="form-row">
                                <button type="submit" class="button circle block orange">Modifier</button>
                            </div>

                        </form>


                @endforeach

    </div>
            </section>
        </main>
        <!-- Page content end -->
    </div>
</div>


<!-- JQuery library file. requared all pages -->
<script src="{{asset('assets/front/js/jquery-3.2.1.min.js')}}"></script>

<!-- Template global script file. requared all pages -->
<script src="{{asset('assets/front/js/global.script.js')}}"></script>


</body>

</html>
