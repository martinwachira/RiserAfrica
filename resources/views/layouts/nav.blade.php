
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile-2">
                    <ul class="nav navbar-nav bookmark-icons mr-auto float-left">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                            <a class="nav-link nav-menu-main hidden-xs menu-toggle is-active" href="#">
                                <i class="ficon feather icon-menu"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo">
                                <img class="app-logo" src="/images/logo/riser.jpeg" alt="logo">
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav float-right">
                        <li>
                            <h3 class="dropdown dropdown-language nav-item">
                                <a class="dropdown-toggle nav-link" id="dropdown-flag-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="selected-language"><a href="/"> Home</a></span>
                                </a>
                            </h3>
                        </li>
                        &nbsp;&nbsp;
                        <li>
                            <h3 class="dropdown dropdown-language nav-item">
                                <a class="dropdown-toggle nav-link" id="dropdown-flag-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="selected-language"><a href="/about">About</a> </span>
                                </a>
                            </h3>
                        </li>
                        &nbsp;&nbsp;
                        <h3 class="dropdown dropdown-language nav-item">
                            <a class="dropdown-toggle nav-link" id="dropdown-flag-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span >Projects</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag-3">
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-users">
                                    </i> Community</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-street-view">
                                    </i> Group </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-yoast">
                                    </i> Youth</a>
                            </div>
                        </h3>
                        &nbsp;
                        <h3 class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link" id="dropdown-flag-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600">
                                        Account
                                    </span>
                                </div>
                                    <!-- <img class="round" src="../../vuexy/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span> -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag-3">
                                <br>
                                @if (Route::has('login'))
                                <!-- <a class="dropdown-item" href="#"> -->
                                
                                @auth
                                <a  href="{{ url('/home') }}">Home</a>
                                @else
                                <a class="dropdown-item" href="{{ route('login') }}">
                                <i class="feather icon-unlock">
                                </i>
                                Login</a>
                                
                                @if (Route::has('register'))
                                
                                <a class="dropdown-item" href="{{ route('register') }}">
                                <i class="feather icon-user-plus">
                                </i>
                                Register</a>
                                
                                @endif
                                @endauth</a>
                                @endif
                                <!-- <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="feather icon-power"></i> Logout</a> -->
                            </div>
    </h3>
                    </ul>
                </div>
            </div>

        </div>
    </nav>