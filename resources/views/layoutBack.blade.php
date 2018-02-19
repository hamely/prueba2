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
        <link rel="stylesheet"  href="{{ asset("css/toastr/toastr.css") }}"> 
        
        <style type="text/css">
            .error{
                color: red;
            }
        </style>

    </head>
<body>
     <?php function activeMenu($url)
                {
                    return request()->is($url) ? 'active' : '';
                } ?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href=""><img src="{{URL::asset('/img/layout/logos/logo-dark.png')}}" alt="Klorofil Logo" class="img-responsive logo">
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
                                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>

                                                   <ul class="dropdown-menu">

                                                            <li><a href="{{route('usuarios.edit',auth()->id()) }}"><i class="lnr lnr-user"></i> <span>Mi Perfil {{ auth()->user()->name }} </span></a></li>
                                                            <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mensaje</span></a></li>
                                                            <li><a href="#"><i class="lnr lnr-cog"></i> <span>Configuración</span></a></li>
                                                            <li><a href="{{route('logout')}}"> <i class="lnr lnr-exit"></i> <span>cerrar</span> </a></li>

                                                    </ul>

                                            </li>

                                        @endif
                                    </li>
                                
                            </ul>
                </div>
            </div>
        </nav>

        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        
                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Zonas Turisticas</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="page-profile.html" class="">Lugares</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="" class=""><i class="lnr lnr-text-format"></i> <span>Proyectos</span></a></li>
                        <li><a href="{{ route('entradas.index')}}" class="{{ activeMenu('entradas') }}"><i class="lnr lnr-linearicons"></i> <span>Entradas</span></a></li>
                        @if(auth()->check())
                                <li><a href="{{ route('mensajes.index')}}" class= "{{ activeMenu('mensajes') }}"><i class="lnr lnr-home"></i> <span>Mensaje</span></a></li>
                            @if(auth()->user()->hasRoles(['admin','estudiante']))
                                 <li> <a href="{{ route('mensajes.create')}}" class="{{ activeMenu('mensajes/create') }}"><i class="lnr lnr-text-format"></i><span class="c-arrow c-toggler">Contactos</span></a></li>
                                <li><a href="{{ route('usuarios.index')}}" class= "{{ activeMenu('usuarios') }}"><i class="lnr lnr-code"></i> <span>Usuarios</span></a></li>
                            @endif
                          @endif
                    </ul>
                </nav>
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
        <script type="text/javascript" src="{{ asset("js/jquery.slimscroll.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("js/klorofil-common.js") }}"></script>
        <script type="text/javascript" src="{{ asset("js/toastr/toastr.min.js") }}"></script>
        <script type="text/javascript" src="{{ asset("js/Helper/jsHelper.js") }}"></script>

        @yield('script')
    </body>
</html>
