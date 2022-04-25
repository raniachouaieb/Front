@extends('layouts.front')

@section('content')
    <main class="no-header mt-0">

        <div class="splash-screen">
            <div class="get-started-btn-wrapper">
                <a href="{{route('getLogin')}}" class="get-started-btn g-fixed">Get Started</a>
            </div>
        </div>

    </main>
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

@endsection
