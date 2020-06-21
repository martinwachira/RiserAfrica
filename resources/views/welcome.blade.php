@extends('layouts.custom_style')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Riser Africa</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .app-logo {
            height: 40px;
        }
    </style>
</head>

<body>

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
                        <!-- <li class="nav-item d-none d-lg-block"></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email"><i class="ficon feather icon-mail"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar"><i class="ficon feather icon-calendar"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link"><i class="ficon feather icon-star warning"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link "><i class="ficon feather icon-maximize"></i></a></li> -->
                    </ul>

                    <ul class="nav navbar-nav float-right">
                        <li>
                            <h3 class="dropdown dropdown-language nav-item">
                                <a class="dropdown-toggle nav-link" id="dropdown-flag-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="selected-language">Home</span>
                                </a>
                            </h3>
                        </li>
                        <h3 class="dropdown dropdown-language nav-item">
                            <a class="dropdown-toggle nav-link" id="dropdown-flag-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h3> Projects</h3>
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
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600">
                                        User Account
                                    </span>
                                    <span class="user-status">
                                        status
                                    </span>
                                </div>
                                <span>
                                    <img class="round" src="../../vuexy/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <br>
                                @if (Route::has('login'))
                                <!-- <a class="dropdown-item" href="#"> -->
                                <i class="feather icon-user">
                                </i>
                                @auth
                                <a href="{{ url('/home') }}">Home</a>
                                @else
                                <a href="{{ route('login') }}">Login</a>
                                @if (Route::has('register'))
                                <br><br>
                                <i class="feather icon-user-plus">
                                </i>
                                <a href="{{ route('register') }}">Register</a>
                                @endif
                                @endauth</a>
                                @endif
                                <!-- <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="feather icon-power"></i> Logout</a> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <div class="content">
        <div class="title m-b-md">
            Riser Africa
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="form-group">
                    <h5>Login Form</h5>
                    <p> Created Simple Login Form.</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#inlineForm">
                        Launch Modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Inline Login Form </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="#">
                                    <div class="modal-body">
                                        <label>Email: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Email Address" class="form-control">
                                        </div>

                                        <label>Password: </label>
                                        <div class="form-group">
                                            <input type="password" placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>