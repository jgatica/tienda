<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/material-kit//img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/material-kit//img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> @yield('title', 'App Shop')</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('assets/material-kit/css/material-kit.css?v=2.0.7') }}" rel="stylesheet" />

</head>

<body class="@yield('body-class', 'ninguna')" >
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ url('/') }}">App Shop </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Registro</a>
                    </li>

                    {{--Este es un dropdown
                    <li class="dropdown nav-item">
                        <a href="{{ route('login') }}" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">apps</i> Components
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="../index.html" class="dropdown-item">
                                <i class="material-icons">layers</i> All Components
                            </a>
                            <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                                <i class="material-icons">content_paste</i> Documentation
                            </a>
                        </div>
                    </li>--}}
                @else
                    <li class="dropdown nav-item">
                        <a href="{{ route('login') }}" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="{{ url('home') }}" class="dropdown-item">
                                <i class="material-icons">layers</i> Dashboard
                            </a>
                            @if (auth()->user()->admin)
                                {{--Item de menu--}}
                                <a href="{{ url('admin/products') }}" class="dropdown-item">
                                    <i class="material-icons">layers</i> Gestionar productos
                                </a>
                            @endif
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class="material-icons">layers</i> Desconectar
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="post"
                                  style="display: none;"
                            >
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

                {{--Enlaces redes sociales
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>--}}
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper">
    @yield('content')
</div>
<!--   Core JS Files   -->
<script src="{{ asset('assets/material-kit//js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/material-kit/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/material-kit/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/material-kit/js/plugins/moment.min.js') }}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset('assets/material-kit/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('assets/material-kit/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/material-kit/js/material-kit.js?v=2.0.7') }}" type="text/javascript"></script>
</body>

</html>
