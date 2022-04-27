<nav class="menu">
    <!-- Template logo start -->
    <div class="nav-header" >
        <a href="index.html">
            @if(Auth::guard('parente')->user() )
                <img class="image-round" src="{{asset('assets/'.Auth::guard('parente')->user()->image_profile)}}"  style="margin-left: -16px;">
                <div class="name" style="color: grey">
                {{Auth::guard('parente')->user()->nomPere  }}
                {{Auth::guard('parente')->user()->prenomPere  }}
                </div>
            @endif

        </a>
    </div>
    <!-- Template logo end -->
    <!-- Menu navigation start -->
    <div class="nav-container">
        <ul class="main-menu">
            <li class="active">
                <a href="{{route('mainScreen')}}"><img src="{{asset('assets/front/images/home.png')}}" alt=""> Home</a>
            </li>
            <li>
                <a href="{{route('profile')}}"><img src="{{asset('assets/front/images/user.png')}}" alt=""> Profile</a>
            </li>

            <li>
                <a href="{{route('ComplementInfo')}}"><img src="{{asset('assets/front/images/user.png')}}" alt=""> Complement d'info</a>
            </li>

            <li>
                <a href=""><img src="{{asset('assets/front/images/bulltin.png')}}" alt=""> bulletin</a>
            </li>
            <li>
                <a href="{{route('apropos')}}"><img src="{{asset('assets/front/images/information.png')}}" alt=""> A propos</a>
            </li>

            <li>
                <a href="{{route('contact')}}"><img src="{{asset('assets/front/images/phone-call.png')}}" alt=""> Contact</a>
            </li>

            <li>
                <a  href="{{ route('logoute') }}"
                   onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                    <img src="{{asset('assets/front/images/logout.png')}}" alt="">{{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logoute') }}" method="post" class="d-none">
                    @csrf
                </form>

            </li>
           <!-- <li>
                <a href="#"><img src="{{asset('assets/front/images/i1.png')}}" alt=""> Teachers <span class="fa fa-angle-down"></span></a>
                <ul>
                    <li><a href="all-teachers.html" data-loader="show">All Teachers</a></li>
                    <li><a href="teacher-profile.html" data-loader="show">Teacher Profile</a></li>
                </ul>
            </li>-->

           <!-- <li>
                <a href="javascript:void(0);"><img src="" alt=""> Login/Register <span class="fa fa-angle-down"></span></a>
                <ul>
                    <li><a href="login.html" data-loader="show">Login</a></li>
                    <li><a href="signup.html" data-loader="show">Register</a></li>
                    <li><a href="forgot-password.html" data-loader="show">Forgot Password</a></li>
                </ul>
            </li>-->
        </ul>
    </div>
    <!-- Menu navigation end -->
</nav>
