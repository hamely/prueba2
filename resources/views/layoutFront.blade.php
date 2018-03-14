<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	<title>Spaziour Apurímac</title>
	<script type="text/javascript" src="{{ asset("js/jquery.js") }}"></script>
	<script type="text/javascript" src="{{ asset("js/bootstrap.js") }}"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet"  href="{{ asset("css/app.css") }}">

	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
	<link href="{{ asset("plugins/socicon/socicon.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/bootstrap-social/bootstrap-social.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/simple-line-icons/simple-line-icons.min.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/animate/animate.min.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />


	<link href="{{ asset("plugins/revo-slider/css/settings.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/revo-slider/css/layers.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/revo-slider/css/navigation.css")}}" rel="stylesheet" type="text/css" />

	<link href="{{ asset("plugins/cubeportfolio/css/cubeportfolio.min.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/owl-carousel/assets/owl.carousel.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/fancybox/jquery.fancybox.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/slider-for-bootstrap/css/slider.css")}}" rel="stylesheet" type="text/css" />

	<link href="{{ asset("css/plugins.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("css/components.css")}}" id="style_components" rel="stylesheet" type="text/css" />
	<link href="{{ asset("css/themes/default.css")}}" rel="stylesheet" id="style_theme" type="text/css" />
	<link href="{{ asset("css/custom.css")}}" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="{{ asset("js/jssor.slider.min.js") }}"></script>
      <style type="text/css">
            .error{
                color: red;
            }
        </style>
</head>

@yield('headerScrip')
 <body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen">
        
	<?php function activeMenu($url)
	{
		return request()->is($url) ? 'c-active' : '';
	} ?>
        <header class="c-layout-header c-layout-header-4 c-bordered c-layout-header-default-mobile c-header-transparent-dark" data-minimize-offset="80" style="margin-top: -10px;background:#003346;color:#004353">
            <div class="c-navbar">
                <div class="container-fluid">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="" class="c-logo">
                                <img src="{{URL::asset('/img/layout/logos/logo.png')}}" alt="spaziour" class="c-desktop-logo">
                                <img src="{{URL::asset('/img/layout/logos/logo.png')}}" alt="spaziour" class="c-desktop-logo-inverse">
                                <img src="{{URL::asset('/img/layout/logos/logo.png')}}" alt="spaziour" class="c-mobile-logo"> </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                            <button class="c-topbar-toggler" type="button">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <button class="c-search-toggler" type="button">
                            </button>
                            <button class="c-cart-toggler" type="button">
                            </button>
                        </div>
                        <form class="c-quick-search" action="#">
                            <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                            <span class="c-theme-link">&times;</span>
                        </form>
                     
                        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li class="{{activeMenu('/')}}">
                                    <a href="{{ route('inicio')}}" class="c-link dropdown-toggle">Inicio
                                    </a>
                                    
                                </li>
                                <li class="{{ activeMenu('nosotros')  }}">
                                    <a href="{{ route('nosotros') }}" class="c-link dropdown-toggle">Nosotros
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                </li>

                                <li id="sunMenuServicios">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Servicios
                                    </a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu" id="subMenuS">
                                            <a href="{{route('disenioWeb')}}" class="{{request()->is('disenioWeb') ? 'c-active' : ''}}">DIseños Paginas Web
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu" id="subMenuS">
                                            <a href="{{route('disenioLogotipos')}}">Diseños de logotipos
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li class="{{ activeMenu('trabajos')  }}">
                                    <a href="{{ route('trabajos') }}" class="c-link dropdown-toggle">Trabajos
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                </li>
                                <li class="{{ activeMenu('clientes')  }}">
                                    <a href="{{ route('clientes') }}" class="c-link dropdown-toggle">Clientes
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                </li>
                                 <li class="{{ activeMenu('blog')  }}">
                                    <a href="{{ route('blog') }}" class="c-link dropdown-toggle">Blog
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                </li>
                                 <li class= "{{ activeMenu('mensajes/create') }}" >
                                    <a href="{{ route('mensajes.create')}}" class="c-link dropdown-toggle">Contactos
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                </li>
                             
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </header>
        
        <div class="c-layout-page">

            @yield('slider')
      
		</div>
            <div class="c-content-box c-size-md c-bg-white">
	 			 @yield('contenido')

            </div>
		
        </div>

        <a name="footer"></a>
        <footer style="background: #001D29;padding: 10px; ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <dt>CONTÁCTENOS</dt>
                         <dt>Correo</dt>spaziour@gmail.com<p>
						 <dt>Celular:</dt> 942373872</p>
                    </div>
                    <div class="col-md-6">

                    </div>
                    </div>
                </div>
                <div class="c-copyright" style="margin-left: 92px;">
                    Copyright spaziour.com
                </div>
            </div>
        </footer>


			<script src="{{ asset("plugins/jquery.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/jquery-migrate.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/jquery.easing.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/reveal-animate/wow.js")}}" type="text/javascript"></script>
			<script src="{{ asset("js/scripts/reveal-animate/reveal-animate.js")}}" type="text/javascript"></script>
            
			<script src="{{ asset("plugins/revo-slider/js/jquery.themepunch.tools.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/jquery.themepunch.revolution.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/extensions/revolution.extension.video.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/cubeportfolio/js/jquery.cubeportfolio.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/owl-carousel/owl.carousel.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/counterup/jquery.waypoints.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/counterup/jquery.counterup.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/fancybox/jquery.fancybox.pack.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/smooth-scroll/jquery.smooth-scroll.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/slider-for-bootstrap/js/bootstrap-slider.js")}}" type="text/javascript"></script>

			<script src="{{ asset("js/components.js")}}" type="text/javascript"></script>
			<script src="{{ asset("js/components-shop.js")}}" type="text/javascript"></script>
			<script src="{{ asset("js/app.js")}}" type="text/javascript"></script>

			<script src="{{ asset("plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("js/scripts/revo-slider/slider-14.js")}}" type="text/javascript"></script>

			@yield('script')
</body>
</html>
