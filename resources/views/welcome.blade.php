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

        /* custom style */
        .app-logo {
            height: 40px;
        }

        .carrs {
            /* height: calc(100vh - 75px); */
            height: 550px;
            /* width: auto; */
            text-align: center;
            position: fixed;
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
                                <span> Projects</span>
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
                        <h3 class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
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
    <section id="carousel-options ">
        <div class="row match-height">
            <div class="">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body ">
                            <div id="carousel-interval" class="carousel slide " data-ride="carousel" data-interval="5000">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-interval" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-interval" data-slide-to="1"></li>
                                    <li data-target="#carousel-interval" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner carrs" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="/images/slider/dairy.jpg" alt="First slide">
                                        <div class="carousel-caption">
                                            <h3>First Slide Label</h3>
                                            <p>Donut jujubes I love topping I love sweet. Jujubes I love brownie gummi bears I love donut sweet
                                                chocolate. Tart chocolate marshmallow.Tart carrot cake muffin.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel-caption">
                                            <h3>First Slide Label</h3>
                                            <p>Donut jujubes I love topping I love sweet. Jujubes I love brownie gummi bears I love donut sweet
                                                chocolate. Tart chocolate marshmallow.Tart carrot cake muffin.</p>
                                        </div>
                                        <img class="img-fluid" src="/images/slider/irrigation.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="/images/slider/poultry.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel-interval" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-interval" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Carousel Options end -->

    <div class="content">
        <h4>Projects</h4>
    </div>
</body>

</html>