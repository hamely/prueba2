@extends('layoutFront')
@section('headerScrip')

@stop
@section('slider')
 <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both" style="background:#ddd;margin-top: 90px;">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold"></h3>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="#">Páginas Web</a>
                        </li>
                        <li>/</li>
                        <li>
                            <a href="page-blog-grid.html">Software</a>
                        </li>
                        <li>/</li>
                        <li class="c-state_active"></li>
                    </ul>
                </div>
            </div>
@stop
@section('contenido')
<div class="container">
                <div class="c-layout-sidebar-menu c-theme ">
                    <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
                    <div class="c-sidebar-menu-toggler">
                        <h3 class="c-title c-font-uppercase c-font-bold">Navigation</h3>
                        <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </a>
                    </div>
                    <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                        <li class="c-dropdown c-active c-open">
                            <a href="javascript:;" class="c-toggler">Páginas web
                                <span class="c-arrow"></span>
                            </a>
                            <ul class="c-dropdown-menu">
                                <li class="c-active">
                                    <a href="#">Para Instituciones públicas</a>
                                </li>
                                <li>
                                    <a href="#">Para Instituciones privadas</a>
                                </li>
                                <li>
                                    <a href="#">Instituciones educativas</a>
                                </li>
                                <li>
                                    <a href="#">Restaurantes</a>
                                </li>
                                <li>
                                    <a href="#">Radios</a>
                                </li>
                                <li>
                                    <a href="#">Bares y discotecas</a>
                                </li>
                                <li>
                                    <a href="#">Ferreterias</a>
                                </li>
                                <li>
                                    <a href="#">Zapaterias</a>
                                </li>
                                <li>
                                    <a href="#">Tiendas de ropa</a>
                                </li>
                                <li>
                                    <a href="#">Jugueterias</a>
                                </li>
                                <li>
                                    <a href="#">Otros</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="c-dropdown">
                            <a href="javascript:;" class="c-toggler">Software
                                <span class="c-arrow"></span>
                            </a>
                            <ul class="c-dropdown-menu">
                                <li>
                                    <a href="#">Sistema de ventas</a>
                                </li>
                                <li>
                                    <a href="#">Sistema de hoteleria</a>
                                </li>
                                <li>
                                    <a href="#">Sistema de seguimiento de proyectos</a>
                                </li>
                                <li>
                                    <a href="#">Sistema de control de restuarantes</a>
                                </li>
                                <li>
                                    <a href="#">Sistema de control de pasajes</a>
                                </li>
                                <li>
                                    <a href="#">Sistema de administracion de cementerios</a>
                                </li>
                                <li>
                                    <a href="#">Otros sistemas</a>
                                </li>                     
                            </ul>
                        </li>
                     
                     
                    </ul>
                                        <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
                </div>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
                    <div class="c-shop-result-filter-1 clearfix form-inline">
                        <div class="c-filter">
                            <label class="control-label c-font-16">Mostrar:</label>
                            <select class="form-control c-square c-theme c-input">
                                <option value="#?limit=24" selected="selected">24</option>
                                <option value="#?limit=25">25</option>
                                <option value="#?limit=50">50</option>
                                <option value="#?limit=75">75</option>
                                <option value="#?limit=100" selected>100</option>
                            </select>
                        </div>
                        <div class="c-filter">
                            <label class="control-label c-font-16">Ordenar&nbsp;Por:</label>
                            <select class="form-control c-square c-theme c-input">
                                <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                <option value="#?sort=pd.name&amp;order=ASC">Nombre (A - Z)</option>
                                <option value="#?sort=pd.name&amp;order=DESC">Nombre (Z - A)</option>
                                <option value="#?sort=p.price&amp;order=ASC">Precio (Bajos &gt; Altos)</option>
                                <option value="#?sort=p.price&amp;order=DESC" selected>Precio (Altos &gt; Bajos)</option>
                                <option value="#?sort=rating&amp;order=DESC">Rating (Altos)</option>
                                <option value="#?sort=rating&amp;order=ASC">Rating (Bajos)</option>
                                <option value="#?sort=p.model&amp;order=ASC">Modelos (A - Z)</option>
                                <option value="#?sort=p.model&amp;order=DESC">Modelos (Z - A)</option>
                            </select>
                        </div>
                    </div>
                    <!-- END: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
                    <div class="c-margin-t-20"></div>
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-2-7 -->
                    <div class="c-bs-grid-small-space">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Vender</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explorar</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{URL::asset('/img/content/servicios/servicios1.jpg')}});"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Páginas de emisoras de radios</p>
                                        <p class="c-price c-font-14 c-font-slim"> &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red"></span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Más detalles</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explorar</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{URL::asset('/img/content/servicios/servicios2.jpg')}});"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Modelados 3D</p>
                                        <p class="c-price c-font-14 c-font-slim">&nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red"></span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Más detalles</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explorar</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{URL::asset('/img/content/servicios/servicios3.jpg')}});"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Páginas de Instituciones</p>
                                        <p class="c-price c-font-14 c-font-slim"> &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red"></span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Más detalles</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Vender</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explorar</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{URL::asset('/img/content/servicios/servicios4.jpg')}});"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Páginas de diarios-noticieros</p>
                                        <p class="c-price c-font-14 c-font-slim"> &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red"></span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Más detalles</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Vender</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explorar</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{URL::asset('/img/content/servicios/servicios1.jpg')}});"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Software de administracion de cementerios</p>
                                        <p class="c-price c-font-14 c-font-slim">&nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red"></span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Más detalles</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Vender</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explorar</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{URL::asset('/img/content/servicios/servicios1.jpg')}});"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Software de sistema de ventas</p>
                                        <p class="c-price c-font-14 c-font-slim">&nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red"></span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Más detalles</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       
                    </div>
                    <!-- END: CONTENT/SHOPS/SHOP-2-7 -->
                    <div class="c-margin-t-20"></div>
                    <ul class="c-content-pagination c-square c-theme pull-right">
                        <li class="c-prev">
                            <a href="#">
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="c-active">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li class="c-next">
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>

@stop

@section('script')



@stop


