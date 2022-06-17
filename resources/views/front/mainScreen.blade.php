@extends('layouts.mainScreen')
@section('content')
    <div class="nav-menu">
       @include('includes.sidebar')
    </div>
    <div class="wrapper-inline">
        <!-- Header area start -->
        <header>
            <!-- extra class no-background -->

            <h1 class="page-title">Accueil</h1>

            <div class="navi-menu-button">
                <em></em>
                <em></em>
                <em></em>
            </div>

        </header>
        <!-- Header area end -->

        <!-- Page content start -->
        <main class="margin">

            <div class="clear"></div>

            <section class="container">

<!--                <div class="section-head">
                    <h4 class="title-main">Top Listed Categories</h4>
                    <a class="c-btn" href="#">more</a>
                </div>-->

                <div class="row">
                    <div class="col-2 text-center mb-15">
                        <a href="{{route('task')}}">
                            <div class="provide-item s1-bg">
                                <img src="{{asset('assets/front/images/tasks.png')}}" class="cat imgMainscreen" alt="">
                                <h4 class="b-text">Travail à faire</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-2 text-center mb-15">
                        <a href="{{route('noteInfo')}}">
                            <div class="provide-item s2-bg">
                                <img src="{{asset('assets/front/images/info.png')}}" class="cat imgMainscreen" alt="">
                                <h4 class="b-text">Note d'info</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                        <div class="col-2 text-center mb-15">
                            <a href="{{route('menuds')}}">
                                <div class="provide-item s3-bg">
                                    <img src="{{asset('assets/front/images/menuds.png')}}" class="cat imgMainscreen" alt="">
                                    <h4 class="b-text">Menu de la semaine</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-2 text-center mb-15">
                            <a href="{{route('convocation')}}">
                                <div class="provide-item s4-bg">
                                    <img src="{{asset('assets/front/images/iconConv.png')}}" class="cat imgMainscreen" alt="">
                                    <h4 class="b-text">Convocations</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                <div class="row">
                        <div class="col-2 text-center">
                            <a href="{{route('getEnfant')}}">
                                <div class="provide-item ">
                                    <img src="{{asset('assets/front/images/iconEmp.png')}}" class="cat imgMainscreen" alt="">
                                    <h4 class="b-text">emploi</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-2 text-center">
                            <a href="{{route('suggestion')}}">
                                <div class="provide-item ">
                                    <img src="{{asset('assets/front/images/taf.png')}}" class=" cat imgMainscreen" alt="">
                                    <h4 class="b-text">Observation</h4>
                                </div>
                            </a>
                        </div>

                    </div>

            </section>

        </main>
        <!-- Page content end -->
    </div>
    <script src="{{ asset('js/sweetalert.js')}}"></script>
    <script>
        @if(Session('status'))
        // alert('{{ session('status') }}');
        swal({
            title: '{{ session('status') }}',
            //text: "You clicked the button!",
            icon: '{{ session('statuscode') }}',
            button: "Done!",
        });
        @endif

    </script>
    <script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js"></script>

    <script>

        var firebaseConfig = {
            apiKey: "AIzaSyBqDXA5OPm_rY87OYWj6uoyGMTsDX9LBbQ",
            authDomain: "schoolapp-c3163.firebaseapp.com",
            databaseURL: "https://schoolapp-c3163.firebaseio.com",
            projectId: "schoolapp-c3163",
            storageBucket: "schoolapp-c3163.appspot.com",
            messagingSenderId: "810121300083",
            appId: "1:810121300083:web:90550d5b78ab2bf4c54206",
            measurementId: "G-V5P1TB8637"
        };

        firebase.initializeApp(firebaseConfig);
        const messaging = firebase.messaging();

        function initFirebaseMessagingRegistration() {
            messaging
                .requestPermission()
                .then(function () {
                    return messaging.getToken()
                })
                .then(function(token) {
                    console.log(token);

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: '{{ url('save-token') }}',
                        type: 'POST',
                        data: {
                            token: token
                        },
                        dataType: 'JSON',
                        success: function (response) {
                            alert('Token saved successfully.');
                        },
                        error: function (err) {
                            console.log('User Chat Token Error'+ err);
                        },
                    });

                }).catch(function (err) {
                console.log('User Chat Token Error'+ err);
            });
        }

        messaging.onMessage(function(payload) {
            const noteTitle = payload.notification.title;
            const noteOptions = {
                body: payload.notification.body,
                icon: payload.notification.icon,
            };
            new Notification(noteTitle, noteOptions);
        });

    </script>

@stop
