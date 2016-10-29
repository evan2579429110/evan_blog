<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="L{ csrf_token() }L"/>
    <title>evan</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="L{url('bootstrap/font-awesome.min.css')}L"  crossorigin="anonymous">
    <link rel="stylesheet" href="L{url('bootstrap/googleapis.min.css')}L">

    <!-- Styles -->
    <link rel="stylesheet" href="L{url('bootstrap/bootstrap.min.css')}L" crossorigin="anonymous">

    <script src="L{url('angular/jquery.min.js')}L"></script>



    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" ng-app='routingDemoApp'>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="L{ url('/#/home') }L">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="L{ url('/home') }L">index</a></li>
                    <li><a href="L{ url('/#/article') }L">article</a></li>
                    <li><a href="{{ url('/home') }}">index</a></li>
                    <li><a href="{{ url('/home') }}">index</a></li>
                </ul>
                @if( Auth::id() )
                    <ul class="nav navbar-nav navbar-right" >
                        <!-- Authentication Links -->
                        <li><a>L{Auth::id()}L </a></li>
                        <li><a href="/logout">Log out</a></li>

                    </ul>
                @else
                    <ul class="nav navbar-nav navbar-right" >
                        <!-- Authentication Links -->
                        <li><a href="#/login">Login </a></li>
                        <li><a href="#/register">Register</a></li>

                    </ul>
                @endif
            </div>
        </div>
    </nav>

    @yield('content')


</body>
</html>
