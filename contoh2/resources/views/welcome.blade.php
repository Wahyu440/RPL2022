<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BussLightYear</title>
        <link rel="icon" type="image/x-icon" href="resource/img/assets/favicon.ico" />
        
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="resources/views/css/styles.css" rel="stylesheet" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <header>
        <style>
            #intro {
                background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
                height: 100vh;
            }

            /* Height for devices larger than 576px */
            @media (min-width: 992px) {
                #intro {
                margin-top: -58.59px;
                }
            }

            .navbar .nav-link {
                color: #fff !important;
            }
            html, body {
                /* background-image: url('https://mdbootstrap.com/img/new/fluid/city/018.jpg'); */
                background-size: 1879px;
                background-color: #b31ee2;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 300;
                height: 200vh;
                margin: 0;
            }

            row {
                background-color: #abcd23;
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

            .links > a {
                color: #fff;
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
        </style>
        
    </head>
            
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a style="color:#fff;" class="navbar-brand nav-link" target="_blank">
            <strong>MENU</strong>
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                <a style="color:#fff;" class="nav-link" aria-current="page" href="#intro">HOME</a>
                </li>
                <li class="nav-item">
                <a style="color:#fff;" class="nav-link" href="" rel="nofollow"
                    target="_blank">ADMIN</a>
                </li>
                <li class="nav-item">
                <a style="color:#fff;" class="nav-link" href="" target="_blank">MANAGER</a>
                </li>
            </ul>

            <ul class="navbar-nav d-flex flex-row">
                <!-- Icons -->
                <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                    target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        
            @if (Route::has('login'))
                <!-- <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div> -->
            @endif

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="content-panel">
                                <h1 style="color:#4387DE;">BussLightYear</h1>
                                <h1><a style="color:#D5D812;" href="{{ url('/home') }}">Login</a>
                                <div class="top-right links">
                                    <a href="{{ url('/admin') }}">Login Admin</a>
                                </div>
                            </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</html>
