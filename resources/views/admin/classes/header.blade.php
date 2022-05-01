<nav class="navbar page-header">
    <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
        <i class="fa fa-bars"></i>
    </a>

    <a class="navbar-dark" href="{{route('index')}}">
        <div style="background-color:#c80e0e;">
            <img width="45" src="{{asset('admin/assets/imgs/v.png')}}" alt="logo"></div>
    </a>

    <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
        <i class="fa fa-bars"></i>
    </a>

    <ul class="navbar-nav ml-auto">

        @if(Auth::user()->admin==true)

            <li class="nav-item ">
                <a href="{{route('post.create')}}" class="btn btn-info" >
                    <i class="fa fa-paper-plane"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle avatar" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('storage/'. Auth::user()->avatar)}}" class="avatar avatar-sm" alt="logo">
                    <span class="icon icon-caret-down"><strong>{{Auth::user()->name}}</strong></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">Account</div>

                    <a href="{{ route('adminProfile') }}" class="dropdown-item">
                        <i class="fa fa-user"></i> Profile
                    </a>

                    <a href="#" class="dropdown-item">

                        <form method="post" id="logout-form" action="{{route('logout')}}">@csrf</form>
                        <a class="btn" href="#" onclick="document.getElementById('logout-form').submit();">
                            <i class="icon icon-logout"></i> Logout
                        </a>
                    </a>
                </div>
            </li>

        @elseif(Auth::user()->author==true)

            <li class="nav-item ">
                <a href="{{route('post1.create')}}" class="btn btn-info" >
                    <i class="fa fa-paper-plane"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle avatar" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('storage/'. Auth::user()->avatar)}}" class="avatar avatar-sm" alt="logo">
                    <span class="icon icon-caret-down"><strong>{{Auth::user()->name}}</strong></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">Account</div>

                    <a href="{{ route('authorProfile') }}" class="dropdown-item">
                        <i class="fa fa-user"></i> Profile
                    </a>
                    <a href="#" class="dropdown-item">
                        <form method="post" id="logout-form" action="{{route('logout')}}">@csrf</form>
                        <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">
                            <i class="icon icon-logout"></i> Logout
                        </a>
                    </a>
                </div>
            </li>

        @else
            <li class="nav-item ">
                <a href="#" class="btn btn-warning" >
                    <i class="fa fa-envelope"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle avatar" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('storage/'. Auth::user()->avatar)}}" class="avatar avatar-sm" alt="logo">
                    <span class="icon icon-caret-down"><strong>{{Auth::user()->name}}</strong></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">Account</div>

                    <a href="{{ route('userProfile') }}" class="dropdown-item">
                        <i class="fa fa-user"></i> Profile
                    </a>
                    <a href="#" class="dropdown-item">

                        <form method="post" id="logout-form" action="{{route('logout')}}">@csrf</form>
                        <a class="btn" href="#" onclick="document.getElementById('logout-form').submit();">
                            <i class="icon icon-logout"></i> Logout
                        </a>
                    </a>
                </div>
            </li>
        @endif

    </ul>
</nav>
