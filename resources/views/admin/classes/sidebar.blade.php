<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            @if(Auth::user()->admin==true)
                <li class="nav-title" >Admin</li>

                <li class="nav-item">
                    <a href="{{route('admin')}}" class="nav-link {{Route::currentRouteName()=='admin'? 'active':''}}">
                        <i class="icon icon-speedometer"></i> BoshAdmin Sahifa
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('post.index')}}" class="nav-link {{(Route::currentRouteName()=='post.index' or Route::currentRouteName()=='post.create' or Route::currentRouteName()=='post.edit')? 'active':''}}">
                        <i class="fa fa-comment "></i> Postlar
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('comment.index')}}" class="nav-link {{(Route::currentRouteName()=='comment.index' or Route::currentRouteName()=='comment.edit') ? 'active':''}}">
                        <i class="fa fa-paper-plane"></i>Kommentlar
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link {{(Route::currentRouteName()=='user.index' or Route::currentRouteName()=='user.show' or Route::currentRouteName()=='user.edit')? 'active':''}}">
                        <i class="fa fa-user"></i>Users
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('adminProfile')}}" class="nav-link {{Route::currentRouteName()=='adminProfile'? 'active':''}}">
                        <i class="fa fa-user"></i>Profile
                    </a>
                </li>
                <li class="nav-item nav-dropdown">
                    <a href="" class="nav-link nav-dropdown-toggle {{(Route::currentRouteName()=='contactAdmin' or Route::currentRouteName()=='konsultatsiyaAdmin') ? 'active':''}}">
                        <i class="icon icon-people"></i> Zayavkalar <i class="fa fa-caret-left"></i>
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{route('contactAdmin')}}" class="nav-link {{Route::currentRouteName()=='contactAdmin'? 'active':''}}">
                                <i class="fa fa-list"></i> Contact({{App\Models\Contact::all()->count()}})
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('konsultatsiyaAdmin')}}" class="nav-link {{Route::currentRouteName()=='konsultatsiyaAdmin'? 'active':''}}">
                                <i class="fa fa-list"></i> Konsultatsiya({{App\Models\Konsultatsiya::all()->count()}})
                            </a>
                        </li>
                    </ul>
                </li>


            @elseif(Auth::user()->author==true)
                <li class="nav-title">Shifokor</li>
                <li class="nav-item">
                    <a href="{{route('author')}}" class="nav-link {{Route::currentRouteName()=='author'? 'active':''}}">
                        <i class="icon icon-speedometer"></i> BoshShifokor sahifasi
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('post1.index')}}" class="nav-link {{(Route::currentRouteName()=='post1.index' or  Route::currentRouteName()=='post1.edit' or Route::currentRouteName()=='post1.create') ?'active':''}}">
                        <i class="fa fa-comment"></i> Postlar
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('comment1.index')}}" class="nav-link {{(Route::currentRouteName()=='comment1.index' or Route::currentRouteName()=='comment1.edit')? 'active':''}}">
                        <i class="fa fa-paper-plane"></i> Kommentlar
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('user1.index')}}" class="nav-link {{(Route::currentRouteName()=='user1.index' or Route::currentRouteName()=='user1.edit' or Route::currentRouteName()=='user1.show') ? 'active': '' }}">
                        <i class="fa fa-user"></i> Doktorlar
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('bemor.index')}}" class="nav-link {{(Route::currentRouteName()=='bemor.index' or Route::currentRouteName()=='bemor.edit' or Route::currentRouteName()=='bemor.show' or Route::currentRouteName()=='userEdit' ) ? 'active':''}}">
                        <i class="icon icon-user"></i> Bemorlar
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('authorProfile')}}" class="nav-link {{Route::currentRouteName()=='authorProfile'? 'active':''}}">
                        <i class="fa fa-edit"></i> Profile
                    </a>
                </li>
                <li class="nav-item nav-dropdown">
                    <a href="" class="nav-link nav-dropdown-toggle ? 'active':''}}">
                        <i class="icon icon-people"></i> Zayavkalar <i class="fa fa-caret-left"></i>
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{route('contactAuthor')}}" class="nav-link {{Route::currentRouteName()=='userVaraqa'? 'active':''}}">
                                <i class="fa fa-list"></i> Contact({{App\Models\Contact::all()->count()}})
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('konsultatsiyaAuthor')}}" class="nav-link {{Route::currentRouteName()=='userVaraqa'? 'active':''}}">
                                <i class="fa fa-list"></i> Contact({{App\Models\Konsultatsiya::all()->count()}})
                            </a>
                        </li>
                    </ul>
                </li>

            @else
                <li class="nav-title">User</li>
                <li class="nav-item">
                    <a href="{{route('userProfile')}}" class="nav-link {{Route::currentRouteName()=='userProfile'? 'active':''}}">
                        <i class="icon icon-people"></i> Profile
                    </a>
                </li>
                <li class="nav-item nav-dropdown">
                    <a href="{{route('userVaraqa')}}" class="nav-link nav-dropdown-toggle ? 'active':''}}">
                        <i class="icon icon-people"></i> Kasallik Varaqasi <i class="fa fa-caret-left"></i>
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{route('userVaraqa')}}" class="nav-link {{Route::currentRouteName()=='userVaraqa'? 'active':''}}">
                                <i class="fa fa-list"></i> Varaqalar
                            </a>
                        </li>

                    </ul>
                </li>

            @endif
        </ul>
    </nav>
</div>
