<div class="py-1 bg-black top">
    @if(\Illuminate\Support\Facades\Auth::check())
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="fa fa-phone"></span></div>
                            <span class="fa fa-text-width"> {{Auth::user()->name}}</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <span class="fa fa-paper-plane"></span></div>
                            <span class="text">{{Auth::user()->email}}</span>
                        </div>
                        @if(Auth::user()->admin==true)
                            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                                <p class="mb-0 register-link"><a href="#">Admin</a></p>
                            </div>
                        @elseif(Auth::user()->author==true)
                            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                                <p class="mb-0 register-link"><a href="#">Shifokor</a></p>
                            </div>
                        @elseif(Auth::user()->bemorlar->count()==0)
                            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                                <p class="mb-0 register-link"><a href="#">Foydalanuvchi</a></p>
                            </div>
                        @elseif(Auth::user()->bemorlar->count()!=0)
                            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                                <p class="mb-0 register-link"><a href="#">Bemor</a></p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="fa fa-phone"></span></div>
                            <span class="fa fa-text-width"> 99 331 48 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <span class="fa fa-paper-plane"></span></div>
                            <span class="text">hello@email.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                            <p class="mb-0 post-info">Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">Shifo</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">

            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="{{asset('http://shifo/#home-section')}}" class="nav-link"><span>Bosh sahifa</span></a></li>
                <li class="nav-item"><a href="{{asset('http://shifo/#about-section')}}" class="nav-link"><span>Biz haqimizda</span></a></li>
                <li class="nav-item"><a href="{{asset('http://shifo/#department-section')}}" class="nav-link"><span>Bo'limlar</span></a></li>
                <li class="nav-item"><a href="{{asset('http://shifo/#doctor-section')}}" class="nav-link"><span>Shifokorlar</span></a></li>
                <li class="nav-item"><a href="{{asset('http://shifo/#blog-section')}}" class="nav-link"><span>Post va Yangiliklar</span></a></li>
                <li class="nav-item"><a href="{{asset('http://shifo/#contact-section')}}" class="nav-link"><span>Bog'lanish</span></a></li>

            </ul>
            <ul class="navbar-nav nav-dropdown">
                @if(Auth::check())
                    @if(Auth::user()->admin==true)
                        <li class="nav avatar" ><a href="{{route('admin')}}" class="nav-link"><img style=" border-radius: 50em;" class="avatar avatar-sm" alt="logo" width="50" src="{{asset('storage/'. Auth::user()->avatar)}}"> </a></li>
                        <li class="nav-item dropdown"><a style="color:darkslateblue;" href="#" class="nav-link">{{Auth::user()->name}}<span class="fa fa-caret-down">
                               </span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header">Account</div>
                                <a href="{{route('adminProfile')}}" class="dropdown-item">
                                    <i class="fa fa-user"></i> Profile
                                </a>

                                <a href="#" class="dropdown-item">
                                    <form method="post" id="logout-form" action="{{route('logout')}}">@csrf</form>
                                    <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>Chiqish
                                    </a>
                                </a>
                            </div>
                        </li>
                    @elseif(Auth::user()->author==true)

                        <li class="nav avatar"><a href="{{route('author')}}" class="nav-link"><img width="50" style=" border-radius: 50em;"  src="{{asset('storage/'. Auth::user()->avatar)}}"> </a></li>
                        <li class="nav-item dropdown"><a style="color:darkslateblue;" href="#" class="nav-link">{{Auth::user()->name}}<span class="fa fa-caret-down">
                               </span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header">Account</div>

                                <a href="{{route('authorProfile')}}" class="dropdown-item">
                                    <i class="fa fa-user"></i> Profile
                                </a>

                                <a href="#" class="dropdown-item">
                                    <form method="post" id="logout-form" action="{{route('logout')}}">@csrf</form>
                                    <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>Chiqish
                                    </a>
                                </a>
                            </div>

                        </li>
                    @endif
                    @if(Auth::user()->admin!=true && Auth::user()->author!=true)
                        <li class="nav avatar"><a href="#" class="nav-link"><img width="50" style=" border-radius: 50em;"  src="{{asset('storage/'. Auth::user()->avatar)}}"> </a></li>
                        <li class="nav-item dropdown">
                            <a style="color:darkslateblue;" href="#" class="nav-link">{{Auth::user()->name}}<span class="fa fa-caret-down">
                               </span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header">Account</div>

                                <a href="{{route('userProfile')}}" class="dropdown-item">
                                    <i class="fa fa-user"></i> Profile
                                </a>

                                <a href="#" class="dropdown-item">
                                    <form method="post" id="logout-form" action="{{route('logout')}}">@csrf</form>
                                    <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>Chiqish
                                    </a>
                                </a>
                            </div>
                        </li>
                    @endif
                @else
                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link"><span>Login</span></a></li>
                    <li class="nav-item"><a href="{{route('register')}}" class="nav-link"><span>Register</span></a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
