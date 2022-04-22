
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Mobile Template</title>

    <!-- Google font file. If you want you can change. -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fontawesome font file css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/font-awesome.min.css')}}">

    <!-- Template global css file. Requared all pages -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/global.style.css')}}">
</head>

<body>

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
            <div class="container">


            <form method="post" action="{{route('updateAll', Auth::guard('parente')->user()->id)}}">
                @csrf
                <div class="form-divider"></div>
                <div class="form-label-divider"><span>Information Père</span></div>
                <div class="form-divider"></div>

                <div class="form-row-group with-icons">
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
                    <!-- <div class="form-row no-padding">
                         <i class="fa fa-language"></i>
                         <select class="form-element">
                             <option value="">Language</option>
                             <option value="1"  selected>English</option>
                             <option value="2">Spanish</option>
                             <option value="3">Turkish</option>
                         </select>
                     </div>-->
                </div>

                <div class="form-divider"></div>
                <div class="form-label-divider"><span>Information Mère</span></div>
                <div class="form-divider"></div>

                <div class="form-row-group with-icons">
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
                    <!-- <div class="form-row no-padding">
                         <i class="fa fa-language"></i>
                         <select class="form-element">
                             <option value="">Language</option>
                             <option value="1"  selected>English</option>
                             <option value="2">Spanish</option>
                             <option value="3">Turkish</option>
                         </select>
                     </div>-->
                </div>

                <div class="form-divider"></div>
                <div class="form-label-divider"><span>Contact</span></div>
                <div class="form-divider"></div>

                <div class="form-row-group with-icons">
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
                <div class="form-divider"></div>

                <div class="form-row">
                    <button type="submit" class="button circle block orange">Update</button>
                </div>

                <div class="form-divider"></div>
            </form>

                <div class="section-head">
                    <h4 class="title-main">Enfants</h4>
                </div>
                <div class="row">
                    @foreach($enfant as $enf)
                        <div class="col-2">

                                        <form action="{{route('updateElev', $enf->id)}}" method="post" >
                                            @csrf

                                            <div>
                                                <input type="text" name="nomEleve" class="form-element" placeholder="" value="{{$enf->nomEleve }}">
                                                <input type="text" name="prenomEleve" class="form-element" placeholder="" value="{{$enf->prenomEleve }}">

                                            </div>
                                            <div class="form-row">
                                                <button type="submit" class="button circle block orange">Modifier</button>
                                            </div>

                                        </form>

                        </div>
                    @endforeach

                </div>
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


</body>

</html>
