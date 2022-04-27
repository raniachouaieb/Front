
<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body>
<style>


    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #msform fieldset  {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        padding: 20px 40px 30px 40px;
        box-sizing: border-box;
        width: 94%;
        margin: 0 3% 20px 3%;
        position: relative
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform fieldset  {
        text-align: left;
        color: #9E9E9E
    }

    #msform input,
    #msform textarea {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: none;
        font-weight: bold;
        border-bottom: 2px solid skyblue;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: skyblue;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
        /* margin-left: 185px;*/
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
        /*margin-left: 108px;*/
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
    }

    select  {
        width: 157%;
        margin-left: -120px;
        /* margin: 1px; */
        margin-bottom: 12px;
    }

    select:focus {
        border-bottom: 5px solid skyblue
    }



    .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #000000
    }

    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 16%;
        float: left;
        position: relative
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f023"
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f09d"
    }
    #progressbar #infoEleve:before {
        font-family: FontAwesome;
        content: "\f09d"
    }
    #progressbar #condition:before {
        font-family: FontAwesome;
        content: "\f09d"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: skyblue
    }
</style>

<div class="wrapper">

    <div class="wrapper-inline creamy-bg">
        <!-- Page content start -->
        <main>
            <div class="container enterance">

                <div class="text-center">
                    <img src="{{asset('assets/front/images/logo.png')}}" class="logo-img" alt="">
                </div>

                <div class="form-divider"></div>
                <form id="msform" method="post" action="{{route('inscrire')}}">
                    @csrf

                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Information Père</strong></li>
                        <li id="personal"><strong>Information Mère</strong></li>
                        <li id="payment"><strong>Contact</strong></li>
                        <li id="infoEleve"><strong>Info eleve</strong></li>
                        <li id="condition"><strong>Condition</strong></li>
                        <li id="confirm"><strong>Submit</strong></li>


                    </ul> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-row-group with-icons">
                            <h2 class="fs-title">Information Père</h2>
                            <input type="text" name="nomPere" placeholder="Nom" class="form-control @error('nomPere') is-invalid @enderror" >
                            @error('nomPere')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <input type="text" name="prenomPere" placeholder="Prénom" class="form-control @error('prenomPere') is-invalid @enderror" />
                            @error('prenomPere')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="text" name="professionPere" placeholder="Profession" class="form-control @error('professionPere') is-invalid @enderror" />
                            @error('professionPere')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="phone" name="telPere" placeholder="Numéro téléphone" class="form-control @error('telPere') is-invalid @enderror" />
                            @error('telPere')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div> <input type="button" name="next" class="next action-button" value="Next Step" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <h2 class="fs-title">Information Mère</h2>
                            <input type="text" name="nomMere" placeholder="Nom" class="form-control @error('nomMere') is-invalid @enderror"/>
                            @error('nomMere')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="text" name="prenomMere" placeholder="Prénom" class="form-control @error('prenomMere') is-invalid @enderror" />
                            @error('prenomMere')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="text" name="professionMere" placeholder="Profession" class="form-control @error('professionMere') is-invalid @enderror" />
                            @error('professionMere')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="phone" name="telMere" placeholder="Numéro téléphone" class="form-control @error('telMere') is-invalid @enderror" />
                            @error('telMere')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next Step" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <h2 class="fs-title">Contact</h2>

                            <input type="text" name="adresse" placeholder="Adresse" class="form-control @error('adresse') is-invalid @enderror" />
                            @error('adresse')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror"  />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="password" name="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="password" name="password" placeholder="Confirme mot de passe" class="form-control @error('password') is-invalid @enderror" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="number" name="nbEnfants" placeholder="Nombre enfants" class="form-control @error('nbEnfants') is-invalid @enderror" />
                            @error('nbEnfants')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="button" name="make_payment" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>

                        <div class="form-card" id="info-eleve">
                            <h2 class="fs-title">Information Enfants</h2>
                            <div id="field1">
                                <input type="text" name="nomEleve1" placeholder="Nom" class="form-control @error('nomEleve') is-invalid @enderror"/>
                                @error('nomEleve')
                                <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                                <input type="text" name="prenomEleve1" placeholder="Prénom" class="form-control @error('prenomEleve') is-invalid @enderror" />
                                @error('prenomEleve')
                                <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                                <input type="date" name="birth1" placeholder="Date naissance" class="form-control @error('birth') is-invalid @enderror" />
                                @error('birth')
                                <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                                <div class="row">
                                    <div class="col-4">
                                        <label class="genre">Gender</label>
                                    </div>
                                    <div class="col-8">
                                        <select  id="month" name="gender1" class="form-control @error('gender') is-invalid @enderror list-dt"  style="width: 295px">
                                            <option selected>Gender</option>
                                            <option value="garcon" > Garcon </option>
                                            <option value="fille" > Fille </option>
                                        </select>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="pay">Niveau</label>
                                    </div>
                                    <div class="col-8">
                                        <select id="niv" name="niveau1" class="form-control @error('niveau') is-invalid @enderror list-dt" style="width: 295px">
                                            <option value="" selected> Niveau </option>
                                            @foreach($niveaux as $niv)
                                                <option value="{{$niv->id}}" > {{$niv->level}}</option>
                                            @endforeach
                                        </select>
                                        @error('niveau')
                                        <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <hr />
                            <p>Enfant</p>
                        </div>


                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-8">
                                <a id="add-more"  class="btn btn-success" onclick="add_more_enfant()" style="color: white;">Add More +</a>
                            </div>
                            <div class="col-md-4 col-md-offset-8">
                                <a id="remove-div"  class="btn btn-success"  style="color: white;">Remove</a>
                            </div>
                        </div>


                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next Step" />

                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <label for="" class="d-block">
                                <input type="checkbox" id="terms" > Vous devez accepter nos <a href=""> termes et conditions</a>

                            </label>

                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="submit" name="next" class="next action-button button circle block orange" value="Confirm" />

                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <h2 class="fs-title text-center">Success !</h2> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5>You are now registred successfully! Please check your email to verification link!</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>


                    <div class="form-row txt-center w-text">
                        Already have an account? <a href="{{route('getLogin')}}" data-loader="show">Login</a>
                    </div>
                </form>
            </div>
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
<script>
    $(document).ready(function(){

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function(){

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

//Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
            next_fs.show();
//hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
// for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({'opacity': opacity});
                },
                duration: 600
            });
        });

        $(".previous").click(function(){

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

//Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
            previous_fs.show();

//hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
// for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({'opacity': opacity});
                },
                duration: 600
            });
        });


        $(".submit").click(function(){
            return false;
        })

    });
</script>
<script>
    var counter=1;
    function add_more_enfant(){


        //var infoEleve = document.getElementById('info-eleve');

        counter+=1;

        $('#info-eleve').append( '<div id="field1'+counter+'">'+
            '<input type="text" name="nomEleve'+counter+'" placeholder="Nom" class="form-control @error('nomEleve') is-invalid @enderror"/>'+
            '@error('nomEleve')'+
            '<span class="invalid-feedback" role="alert">'+
            '<strong>{{ $message }}</strong>'+
            '</span>'+
            '@enderror'+
            '<input type="text" name="prenomEleve'+counter+'" placeholder="Prénom" class="form-control @error('prenomEleve') is-invalid @enderror" />'+
            '@error('prenomEleve')'+
            '<span class="invalid-feedback" role="alert">'+
            '<strong>{{ $message }}</strong>'+
            '</span>'+
            '@enderror'+
            '<input type="date" name="birth'+counter+'" placeholder="Date naissance" class="form-control @error('birth') is-invalid @enderror" />'+
            '@error('birth')'+
            '<span class="invalid-feedback" role="alert">'+
            ' <strong>{{ $message }}</strong>'+
            '</span>'+
            '@enderror'+
            '<div class="row">'+
            '<div class="col-4">'+
            '<label class="genre">Gender</label>'+
            '</div>'+
            '<div class="col-8">'+
            '<select class="list-dt" id="month" name="gender'+counter+'" class="form-control @error('gender') is-invalid @enderror" style="width: 295px">'+
            '<option selected>Gender</option>'+
            '<option value="garcon" > Garcon </option>'+
            '<option value="fille" > Fille </option>'+
            '</select>'+
            '@error('gender')'+
            '<span class="invalid-feedback" role="alert">'+
            '<strong>{{ $message }}</strong>'+
            '</span>'+
            '@enderror'+
            '</div>'+
            '</div>'+
            '<div class="row">'+
            '<div class="col-4">'+
            '<label class="pay">Niveau</label>'+
            '</div>'+
            '<div class="col-8">'+
            '<select class="list-dt" id="niv" name="niveau'+counter+'" class="form-control @error('niveau') is-invalid @enderror" style="width: 295px">'+
            '<option value="" selected> Niveau </option>'+
            '@foreach($niveaux as $niv)'+
            '<option value="{{$niv->id}}" > {{$niv->level}}</option>'+
            '@endforeach'+
            '</select>'+
            '@error('niveau')'+
            '<span class="invalid-feedback" role="alert">'+
            '<strong>{{ $message }}</strong>'+
            '</span>'+
            '@enderror'+
            '</div>'+
            '</div>'+
            '</div>'+ '<hr />'+
            '<p>Eleve'+counter+'</p>');


    }
</script>
<script>

    $('html').on('click', '.remove-div', function (e) {
        e.preventDefault();
        $(this).parent('div').remove();
        counter--;
    });

</script>




</body>

</html>
