@extends('layoutFront')
@section('headerScrip')

@stop
@section('slider')
	<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold" style="background:#ddd;margin-top: 90px;">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold">Nosotros</h3>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="#">Components</a>
                        </li>
                        <li>/</li>
                        <li>
                            <a href="javascript:;">Jango Components</a>
                        </li>
                        <li>/</li>
                        <li class="c-state_active">About Blocks</li>
                    </ul>
                </div>
            </div>
@stop
@section('contenido')
<div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 wow animated fadeInLeft">
                            <!-- Begin: Title 1 component -->
                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-bold">Nosotros</h3>
                                <div class="c-line-left c-theme-bg"></div>
                            </div>
                            <!-- End-->
                            <div align="justify">
                            <p>Desarrollamos software, páginas estáticas y dinámicas a la medida y gusto del cliente,manejo de cms, modelados 3d y logotipos ; brindamos también servicio freelance todo con la finalidad de complacer, enriquecer y dar a conocer al público en general su empresa o institución. Contamos con: </p>
                            </div>
                            <ul class="c-content-list-1 c-theme  c-font-uppercase">
                                <li>Conocimientos en CMS</li>
                                <li>Conocimientos en programación php,.net</li>
                                <li>Conocimientos en blander, 3dmax, autocad</li>
                                <li>Personal capacitado</li>
                            </ul>
                            <p>Para mayor información pueden contactarnos al celular 942373872 o escribirnos un mensaje por el módulo contactos de nuestra página.</p>
                        </div>
                        <div class="col-sm-6 wow animated fadeInRight">
                            <div class="c-content-client-logos-1">
                                <!-- Begin: Title 1 component -->
                                <div class="c-content-title-1">
                                    <h3 class="c-font-uppercase c-font-bold">Trabajo reciente</h3>
                                    <div class="c-line-left c-theme-bg"></div>
                                </div>
                                <!-- End-->
                                 <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{URL::asset('/img/content/nosotros/modelado3d.jpg')}});"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop

@section('script')



@stop


