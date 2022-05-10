@extends('layouts.profile')
@section('content')

    <div class="container">
        <form method="post" action="{{route('updateImageParent', Auth::guard('parente')->user()->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="profile-bg">
            <div class="form-divider"></div>
            <div class="form-row txt-center">
                <div class="profile-image">

                    <img class="avatar-img" alt="User Avatar" src="{{asset('assets/'.Auth::guard('parente')->user()->image_profile)}}" id="profileDisplay"  width="100" height="100" style="border-radius: 50%">
                    <a href="javascript:void(0);" class="update-btn"><i class="fa fa-camera" onclick="clickImage()" ></i></a>
                    <input type="file" name="image_profile" id="imageProfile" onchange="loadFile(event)" style="display: none;">

                </div>
                <br>
                <div>
                    <label> <i class="fa-solid fa-user"></i> {{Auth::guard('parente')->user()->nomPere  }} {{Auth::guard('parente')->user()->prenomnomPere}}</label>
                </div>
                <div>
                    <label><i class="fa-solid fa-envelope"></i> {{Auth::guard('parente')->user()->email  }}</label>
                </div>
                <div >
                        <label><i class="fa-solid fa-phone"></i> {{Auth::guard('parente')->user()->telPere  }}</label>

                </div>


            </div>

        </div>
            <div class="section-head">

            <button type="submit" class="button circle block orange" style="margin-top: -130px;width: 60%;margin-left: 20%;">Modifier Image</button>
            </div>
        </form>

        <section class="container">
            <div class="section-head" style="margin-top: -11px">
                <h4 class="title-main">Enfants</h4>
            </div>

                <div class="row">
                     @foreach($enfant as $enf)
                    <div class="col-2">
                        <div class="profile-bg">
                             <div class="form-divider"></div>
                            <div class="form txt-center" style="padding: 25px;">
                                  <div class="profile-image">
                                @if($enf->image == null)
                                    @if($enf->gender == 0 )
                                        <img class="avatar-img" alt="User Avatar" src="{{asset('assets/uploads/enfants/garcon.jpg')}}" alt="Person"  onclick="clickImage()" id="profileDisplayEnf"  width="100" height="100" style="border-radius: 50%"/>

                                    @else
                                        <img class="avatar-img" alt="User Avatar" src="{{asset('assets/uploads/enfants/fille.png')}}" alt="Person"  onclick="clickImage()" id="profileDisplayEnf"  width="100" height="100" style="border-radius: 50%"/>
                                    @endif
                                      @else
                                          <img class="avatar-img" alt="User Avatar" src="{{asset('assets/'.$enf->image)}}" alt="Person"  onclick="clickImage()" id="profileDisplayEnf"  width="100" height="100" style="border-radius: 50%"/>

                                      @endif
                                    <form action="{{route('updateImageEnfant', $enf->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                          <a href="javascript:void(0);" class="update-btn"><i class="fa fa-camera" onclick="clickImage()" ></i></a>
                                        <input type="file" name="image" id="imageProfileEnf" onchange="loadFile(event)" style="display: none;">
                                        <div>
                                            <label style="margin-top: 15px"> {{$enf->nomEleve }} {{$enf->prenomEleve }}</label>
                                        </div>
                                        <div class="form-row">
                                            <button type="submit" class="button circle block orange">Modifier</button>
                                        </div>

                                    </form>
                                 </div>



                             </div>



                         </div>
                    </div>
                   @endforeach

                 </div>


                <div class="form-divider"></div>


        </section>



        <div class="form-divider"></div>


     </div>

    <script>
        function clickImage(){
            document.querySelector('#imageProfile').click();
        }
        var loadFile = function(event){
            var profileDisplay = document.getElementById('profileDisplay');
            profileDisplay.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <script>
        function clickImage(){
            document.querySelector('#imageProfileEnf').click();
        }
        var loadFile = function(event){
            var profileDisplay = document.getElementById('profileDisplayEnf');
            profileDisplay.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

@stop
