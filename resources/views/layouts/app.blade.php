
    <!-- bootsrap datepicker-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/css/bootstrap-datepicker.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/js/bootstrap-datepicker.js"></script> -->
    

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
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
                <a class="navbar-brand" href="{{ url('/') }}">
                    C-Bodas
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                @if (Auth::guest())
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Daftar</a></li>
                    </ul>
                @else
                    <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <!-- @if (Auth::user()->userAs == 1)
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Lalala<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('user/profile') }}">Profil</a></li>
                                    <li><a href="">Lapak</a></li>
                                </ul>
                            </li>
                        @endif -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="{{ url('merchant/product') }}">
                                Lapak
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('user/profile') }}">
                                    <i class="fa fa-btn fa-user"></i>Lihat Profil</a>
                                </li>
                                <li><a href="{{ url('/logout') }}">
                                    <i class="fa fa-btn fa-sign-out"></i>Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
