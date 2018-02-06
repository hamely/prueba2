<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Spaziour Apurímac</title>


        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset("plugins/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("plugins/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset("css/linearicons/style.css")}}">

        <link rel="stylesheet" href="{{ asset("css/main.css")}}">
        <link rel="stylesheet" href="{{ asset("css/demo.css")}}">
        <link rel="stylesheet"  href="{{ asset("css/app.css") }}"> 

    </head>
<body>
     <?php function activeMenu($url)
                {
                    return request()->is($url) ? 'active' : '';
                } ?>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="{{route('inicio')}}"><img src="{{URL::asset('/img/layout/logos/logo-dark.png')}}" alt="Klorofil Logo" class="img-responsive logo">
                </a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <div id="navbar-menu">
                     <ul class="nav navbar-nav navbar-right">
                                    @if(auth()->guest())

                                        <li class= "{{ activeMenu('login') }}">
                                            <a  href="{{ URL::to('login') }}">login</a> 
                                        </li> 

                                    @else 
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ auth()->user()->name }} <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="logout"> cerrar </a></li>
                                            </ul>
                                        </li>

                                    @endif

                                
                            </ul>
                </div>
            </div>
        </nav>

        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                
            </div>
        </div>

        <div class="main">
            <div class="main-content">
                    <div class="container-fluid">

                        @yield('contenido')

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; 2017 Spaziour.com</p>
            </div>
        </footer>
    </div>

        <script type="text/javascript" src="{{ asset("js/jquery.js") }}"></script>
        <script type="text/javascript" src="{{ asset("js/bootstrap.js") }}"></script>
        <script src="{{ asset("js/jquery.slimscroll.min.js") }}"></script>
        <script src="{{ asset("js/klorofil-common.js") }}"></script>
    </body>
</html>
