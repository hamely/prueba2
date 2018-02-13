@extends('layoutFront')
@section('headerScrip')

@stop
@section('slider')
 <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both" style="background:#ddd;margin-top: 90px;">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold">Blog Grid View</h3>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li>/</li>
                        <li>
                            <a href="page-blog-grid.html">Blog Grid View</a>
                        </li>
                        <li>/</li>
                        <li class="c-state_active">Jango Components</li>
                    </ul>
                </div>
            </div>
@stop
@section('contenido')

	<div class="container c-content-box c-size-md" style="margin-top: -80px;" >
                    <div class="row">
                        <div class="col-md-9">
                            <div class="c-content-blog-post-card-1-grid">
                                <div class="row">
                                @foreach( $Entradas as $item)

                                        <div class="col-md-6">
                                            <div class="c-content-blog-post-card-1 c-option-2 c-bordered">
                                                <div style=":font-size: 12px;text-align: center;" class="c-font-uppercase"><h1>
                                                    <a href="#">{{$item->titulo}}</a> </h1>
                                                </div>
                                                        
                                                <div class="c-media c-content-overlay">
                                                    <div class="c-overlay-wrapper">
                                                        <div class="c-overlay-content">
                                                            <a href="#">
                                                                <i class="icon-link"></i>
                                                            </a>
                                                            <a href="{{URL::asset('/img/content/shop2/01.jpg')}}" data-lightbox="fancybox" data-fancybox-group="gallery">
                                                                <i class="icon-magnifier"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <img class="c-overlay-object img-responsive img-thumbnail" src="{{URL::asset('/img/content/shop2/01.jpg')}}" alt=""> 
                                                </div>
                                                <div class="c-body">
                                                    <div class="c-title c-font-bold c-font-uppercase" style="font-size: 10px;">
                                                        
                                                    </div>
                                                    <div class="c-author c-font-uppercase" style="margin-top: -35px;"> 
                                                        Autor:spaziour
                                                    </div>
                                                    <div class="c-panel">
                                                    <span style="border: 4px solid #eee;background: #f7f7f7;margin-top: -100px;" class="c-font-uppercase">fecha </span>
                                                    </div>
                                                    <div style="text-align: justify;">
                                                      {!! substr($item->contenido,0,200) !!}...<a href="" class="btn btn-success pull-right">Leer Más</a> 
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                   @endforeach

                                    
                                </div>

                                <div class="c-pagination">
                                    {!! $Entradas->links() !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- BEGIN: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control c-square c-theme-border" placeholder="Buscar Publicaciones...">
                                    <span class="input-group-btn">
                                        <button class="btn c-theme-btn c-theme-border c-btn-square" type="button">Buscar</button>
                                    </span>
                                </div>
                            </form>
                            <div class="c-content-ver-nav">
                                <div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
                                    <h3 class="c-font-bold c-font-uppercase">Categorias</h3>
                                    <div class="c-line-left c-theme-bg"></div>
                                </div>
                                <ul class="c-menu c-arrow-dot1 c-theme">
                                    <li>
                                        <a href="#">Php</a>
                                    </li>
                                    <li>
                                        <a href="#">Laravel</a>
                                    </li>
                                    <li>
                                        <a href="#">Codeigniter</a>
                                    </li>
                                   
                                </ul>
                            </div>
                            <div class="c-content-tab-1 c-theme c-margin-t-30">
                                <div class="nav-justified">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a href="#blog_recent_posts" data-toggle="tab">Entradas Recientes</a>
                                        </li>
                                        <li>
                                            <a href="#blog_popular_posts" data-toggle="tab">Entradas Populares</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="blog_recent_posts">
                                            <ul class="c-content-recent-posts-1">
                                             <li>
                                                 <a href="#">Php</a>
                                            </li>
                                            <li>
                                                <a href="#">Laravel</a>
                                            </li>
                                            <li>
                                                <a href="#">Codeigniter</a>
                                            </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="blog_popular_posts">
                                            <ul class="c-content-recent-posts-1">
                                                 <li>
                                                    <a href="#">Php</a>
                                                </li>
                                                <li>
                                                    <a href="#">Laravel</a>
                                                </li>
                                                <li>
                                                    <a href="#">Codeigniter</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-content-ver-nav">
                                <div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
                                    <h3 class="c-font-bold c-font-uppercase">Blog</h3>
                                    <div class="c-line-left c-theme-bg"></div>
                                </div>
                                <ul class="c-menu c-arrow-dot c-theme">
                                     <li>
                                        <a href="#">Php</a>
                                    </li>
                                    <li>
                                        <a href="#">Laravel</a>
                                    </li>
                                    <li>
                                        <a href="#">Codeigniter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


@stop

@section('script')



@stop


