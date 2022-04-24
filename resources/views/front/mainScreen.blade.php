@extends('layouts.mainScreen')
@section('content')
    <div class="nav-menu">
       @include('includes.sidebar')
    </div>
    <div class="wrapper-inline">
        <!-- Header area start -->
        <header>
            <!-- extra class no-background -->

            <h1 class="page-title">Home Page</h1>

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
                                <img src="{{asset('assets/front/images/s2.png')}}" class="cat imgMainscreen" alt="">
                                <h4 class="b-text">Travail à faire</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-2 text-center mb-15">
                        <a href="product-list.html">
                            <div class="provide-item s2-bg">
                                <img src="{{asset('assets/front/images/s1.png')}}" class="cat imgMainscreen" alt="">
                                <h4 class="b-text">Note d'info</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                        <div class="col-2 text-center mb-15">
                            <a href="{{route('menuds')}}">
                                <div class="provide-item s3-bg">
                                    <img src="{{asset('assets/front/images/burger.png')}}" class="cat imgMainscreen" alt="">
                                    <h4 class="b-text">Menu de la semaine</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-2 text-center mb-15">
                            <a href="product-list.html">
                                <div class="provide-item s4-bg">
                                    <img src="{{asset('assets/front/images/newsletter.png')}}" class="cat imgMainscreen" alt="">
                                    <h4 class="b-text">Convocations</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                <div class="row">
                        <div class="col-2 text-center">
                            <a href="product-list.html">
                                <div class="provide-item s4-bg">
                                    <img src="{{asset('assets/front/images/schedule.png')}}" class="cat imgMainscreen" alt="">
                                    <h4 class="b-text">emploi</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-2 text-center">
                            <a href="{{route('suggestion')}}">
                                <div class="provide-item s4-bg">
                                    <img src="{{asset('assets/front/images/comment.png')}}" class="cat imgMainscreen" alt="">
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
@stop
