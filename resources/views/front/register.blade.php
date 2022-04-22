
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Mobile Template</title>

    <!-- Google font file. If you want you can change. -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900" rel="stylesheet">

    <!-- Fontawesome font file css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/font-awesome.min.css')}}">

    <!-- Template global css file. Requared all pages -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/global.style.css')}}">
</head>

<body>

<div class="wrapper">

    <div class="wrapper-inline creamy-bg">
        <!-- Page content start -->
        <main>
            <div class="container enterance">

                <div class="text-center">
                    <img src="{{asset('assets/front/images/logo.png')}}" class="logo-img" alt="">
                </div>

                <div class="form-divider"></div>
                <form method="post" action="">
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
                        <div class="form-card">
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
                                        <select class="list-dt" id="month" name="gender1" class="form-control @error('gender') is-invalid @enderror">
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
                                        <select class="list-dt" id="niv" name="niveau1" class="form-control @error('niveau') is-invalid @enderror">
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

                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-8">
                                <a id="add-more"  class="btn btn-primary" onclick="add_more_enfant()">Add More +</a>
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
                        <input type="submit" name="next" class="next action-button" value="Confirm" />
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

                <div class="form-row">
                    <button type="submit"> S'inscrire</button>
                </div>

                <div class="form-row txt-center w-text">
                    Already have an account? <a href="login.html" data-loader="show">Login</a>
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
<script src="js/jquery-3.2.1.min.js"></script>

<!-- Template global script file. requared all pages -->
<script src="js/global.script.js"></script>


</body>

</html>
