@extends('layouts.app-front')

@section('content')
    <style>
        .article img {
            width:  300px;
            height: 200px;
        }
        .enfantCard {
            display: grid;
            grid-template-columns: 300px 300px 300px;
            grid-gap: 50px;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            font-family: 'Baloo Paaji 2', cursive;
        }
        form{
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .card {
            background-color: #a3b6ee;
            height: 30rem;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: rgba(0, 0, 0, 0.7);
            color: white;
        }

        .card__name {
            margin-top: 15px;
            font-size: 1.5em;
        }

        .card__image {
            height: 160px;
            width: 160px;
            border-radius: 50%;
            border: 5px solid #272133;
            margin-top: 20px;
            box-shadow: 0 10px 50px rgba(235, 25, 110, 1);
        }


        .draw-border {
            box-shadow: inset 0 0 0 4px #1b4b72;
            color: #58afd1;
            -webkit-transition: color 0.25s 0.0833333333s;
            transition: color 0.25s 0.0833333333s;
            position: relative;
        }

        .draw-border::before,
        .draw-border::after {
            border: 0 solid transparent;
            box-sizing: border-box;
            content: '';
            pointer-events: none;
            position: absolute;
            width: 0rem;
            height: 0;
            bottom: 0;
            right: 0;
        }

        .draw-border::before {
            border-bottom-width: 4px;
            border-left-width: 4px;
        }

        .draw-border::after {
            border-top-width: 4px;
            border-right-width: 4px;
        }

        .draw-border:hover {
            color: #ffe593;
        }

        .draw-border:hover::before,
        .draw-border:hover::after {
            border-color: #eb196e;
            -webkit-transition: border-color 0s, width 0.25s, height 0.25s;
            transition: border-color 0s, width 0.25s, height 0.25s;
            width: 100%;
            height: 100%;
        }

        .draw-border:hover::before {
            -webkit-transition-delay: 0s, 0s, 0.25s;
            transition-delay: 0s, 0s, 0.25s;
        }

        .draw-border:hover::after {
            -webkit-transition-delay: 0s, 0.25s, 0s;
            transition-delay: 0s, 0.25s, 0s;
        }

        .btn {
            background: none;
            border: none;
            cursor: pointer;
            line-height: 1.5;
            font: 700 1.2rem 'Roboto Slab', sans-serif;
            padding: 0.75em 2em;
            letter-spacing: 0.05rem;
            margin: 1em;
            width: 13rem;
        }

        .btn:focus {
            outline: 2px dotted #55d7dc;
        }

        .social-icons li {
            display: inline-block;
            margin: 0.15em;
            position: relative;
            font-size: 1em;
        }

        .social-icons i {
            color: #fff;
            position: absolute;
            top: 0.95em;
            left: 0.96em;
            transition: all 265ms ease-out;
        }

        .social-icons a {
            display: inline-block;
        }



        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
            font-size: 1.2em;
        }

    </style>
    <div class="container">

        <div class="enfantCard">
        @foreach($enfant as $elev)
        <div class="card">
            <form method="post" action="{{route('updateImage', $elev->id)}}"  enctype="multipart/form-data">
                @csrf

                @if($elev->gender == 0 && $elev->image)
                    <img src="{{asset('assets/uploads/enfants/garcon.jpg')}}" alt="Person" class="card__image" onclick="clickImage()" id="profileDisplay"/>

                @else
                    <img src="{{asset('assets/uploads/enfants/fille.png')}}" alt="Person" class="card__image" onclick="clickImage()" id="profileDisplay"/>
                @endif
                <input type="file" name="image" id="imageProfile" onchange="loadFile(event)" style="display: none;">
                <p class="card__name">{{$elev->nomEleve}} {{$elev->prenomEleve}}</p>
            <div class="grid-container">
            </div>

                <button class="btn draw-border">Changer image</button>
            </form>
            <button class="btn draw-border" data-toggle="modal" data-target="#exampleModal{{ $elev->id}}">Lire plus</button>



        </div>
        @endforeach
        </div>
    </div>




    @foreach($enfant as $elev)
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{ $elev->id}}"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Plus d'information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <label for="" style="font-weight: bold">Nom & Prénom :  </label>
                            <label>{{$elev->nomEleve }} {{$elev->prenomEleve }}</label>
                        </div>

                        <div class="row">
                            <label for="" style="font-weight: bold">Niveau :  </label>
                            <label>@foreach($niveau as $niv)@if($elev->niveau == $niv->id ){{$niv->level}} @endif @endforeach </label>
                        </div>
                        <div class="row">
                            <label for="" style="font-weight: bold">Classe :  </label>
                            <label>@foreach($class as $cl)@if($elev->class_id == $cl->id ){{$cl->name}} @endif @endforeach</label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    <script>
        function clickImage(){
            document.querySelector('#imageProfile').click();
        }
        var loadFile = function(event){
            var profileDisplay = document.getElementById('profileDisplay');
            profileDisplay.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

@endsection
