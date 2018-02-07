@extends('layoutFront')

@section('slider')
  <div   id="jssor_1" style="position:relative;margin:0 auto;top:55px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;margin-top: 18px;">

		<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
			<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{URL::asset('svg/loading/static-svg/spin.svg')}}" />
		</div>
		<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
			<div data-b="0">
				<img data-u="image" src="{{URL::asset('/img/present/04.jpg')}}" />
				<div style="position:absolute;top:77px;left:460px;width:460px;height:210px;z-index:0;">
					<img data-u="caption" data-t="0" style="position:absolute;top:-300px;left:89px;width:210px;height:178px;z-index:0;" src="{{URL::asset('img/present/02/mock-pc.png')}}" />
					<img data-u="caption" data-t="1" style="position:absolute;top:55px;left:-200px;width:114px;height:144px;z-index:0;" src="{{URL::asset('/img/present/02/mock-ipad.png')}}" />
					<img data-u="caption" data-t="2" style="position:absolute;top:88px;left:420px;width:219px;height:120px;z-index:0;" src="{{URL::asset('/img/present/02/mock-laptop.png')}}" />
				</div>
				<div data-u="caption" data-t="3" data-to="0% 100%" style="position:absolute;top:385px;left:-100px;width:257px;height:127px;z-index:0;">
					<div style="position:absolute;top:4px;left:34px;width:198px;height:112px;z-index:0; overflow:hidden;">
						<img data-u="caption" data-t="4" style="position:absolute;top:-2px;left:-2px;width:408px;height:116px;z-index:0;" src="{{URL::asset('/img/present/02/mock-phone-slider-flat.jpg')}}" />
					</div>
					<img style="position:absolute;top:0px;left:0px;width:257px;height:127px;z-index:0;" src="{{URL::asset('/img/present/02/mock-phone.png')}}" />
					<img data-u="caption" data-t="5" style="position:absolute;top:22px;left:139px;width:108px;height:108px;z-index:0;" src="{{URL::asset('/img/present/02/circle-hollow.png')}}" />
					<img data-u="caption" data-t="6" style="position:absolute;top:31px;left:148px;width:90px;height:90px;z-index:0;" src="{{URL::asset('/img/present/02/circle-solid.png')}}" />
					<img data-u="caption" data-t="7" style="position:absolute;top:100px;left:300px;width:63px;height:77px;z-index:0;" src="{{URL::asset('/img/present/02/hand.png')}}" />
					<img data-u="caption" data-t="8" style="position:absolute;top:-44px;left:255px;width:75px;height:20px;z-index:0;" src="{{URL::asset('/img/present/02/swipe-arrow.png')}}" />
				</div>
				<a href="http://www.jssor.com/help/slideshow-transitions.html" target="_blank" style="display:block; position:absolute;top:22px;left:600px;width:320px;height:36px;z-index:0;font-size:22px;color:#ffffff;line-height:36px;">Mas de 30 Templos coloniales</a>
			</div>
			<div data-b="1" data-p="170.00">
				<img data-u="image" src="{{URL::asset('/img/present/02.jpg')}}" />
				<div data-u="caption" data-t="9" data-3d="1" style="position:absolute;top:150px;left:-36px;width:1053px;height:150px;z-index:0;">
					<div data-u="caption" data-t="10" data-to="100% 50%" style="position:absolute;top:0px;left:1030px;width:72px;height:72px;z-index:0;background-color:#eb9434;">
						<div data-u="caption" data-t="11" style="position:absolute;top:0px;left:0px;width:72px;height:72px;z-index:0;font-size:46px;color:#ffffff;line-height:72px;text-align:center;">MO

						</div>
					</div>
					<div data-u="caption" data-t="13" data-to="0% 50%" style="position:absolute;top:0px;left:360px;width:175px;height:72px;z-index:0;background-color:#eb9434;font-size:45px;color:#ffffff;line-height:72px;text-align:center;">DELADO

					</div>
					<div data-u="caption" data-t="13" data-to="0% 50%" style="position:absolute;top:0px;left:535px;width:230px;height:72px;z-index:0;background-color:#eb9434;font-size:45px;color:#ffffff;line-height:72px;text-align:center;"> EN  3D

					</div>
					<div data-u="caption" data-t="14" style="position:absolute;top:360px;left:238px;width:577px;height:30px;z-index:0;font-size:24px;color:#ffffff;line-height:30px;text-align:center;">Templos Coloniales de Apurímac</div>
				</div>
				<div data-u="caption" data-t="15" data-3d="1" style="position:absolute;top:70px;left:182px;width:616px;height:150px;z-index:0;">
					<img data-u="caption" data-t="16" style="position:absolute;top:22px;left:266px;width:84px;height:84px;z-index:0;" src="{{URL::asset('/img/present/03/ios.png')}}" />
					<img data-u="caption" data-t="17" style="position:absolute;top:16px;left:260px;width:96px;height:96px;z-index:0;" src="{{URL::asset('/img/present/03/circle.png')}}" />
					<div data-u="caption" data-t="18" style="position:absolute;top:195px;left:260px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:30px;text-align:center;">Templo Chuquinga</div>
					<img data-u="caption" data-t="19" style="position:absolute;top:22px;left:22px;width:84px;height:84px;z-index:0;" src="{{URL::asset('/img/present/03/android.png')}}" />
					<img data-u="caption" data-t="20" style="position:absolute;top:16px;left:16px;width:96px;height:96px;z-index:0;" src="{{URL::asset('/img/present/03/circle.png')}}" />
					<div data-u="caption" data-t="21" style="position:absolute;top:125px;left:166px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:30px;text-align:center;">San Pedro de Andahuaylas </div>
					<img data-u="caption" data-t="22" style="position:absolute;top:22px;left:510px;width:84px;height:84px;z-index:0;" src="{{URL::asset('/img/present/03/windows.png')}}" />
					<img data-u="caption" data-t="23" style="position:absolute;top:16px;left:504px;width:96px;height:96px;z-index:0;" src="{{URL::asset('/img/present/03/circle.png')}}" />
					<div data-u="caption" data-t="24" style="position:absolute;top:125px;left:354px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:30px;text-align:center;">Templo Colonial de Cocharcas </div>
				</div>
				<div style="position:absolute;top:20px;left:327px;width:336px;height:312px;z-index:0;">
					<div data-u="caption" data-t="25" style="position:absolute;top:82px;left:104px;width:128px;height:147px;z-index:0;">
						<img data-u="caption" data-t="26" style="position:absolute;top:0px;left:0px;width:128px;height:147px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow-big.png')}}" />
						<img data-u="caption" data-t="27" style="position:absolute;top:9px;left:8px;width:112px;height:129px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid-yellow.png')}}" />
						<div data-u="caption" data-t="28" style="position:absolute;top:20px;left:0px;width:128px;height:90px;z-index:0;font-size:15px;line-height:30px;text-align:center;">PARA
							<br />
							TODOS 
							<br />
							NAVEGADORES
						</div>
					</div>
					<div style="position:absolute;top:0px;left:187px;width:90px;height:104px;z-index:0;">
						<img data-u="caption" data-t="29" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow.png')}}" />
						<img data-u="caption" data-t="30" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid.png')}}" />
						<img data-u="caption" data-t="31" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="{{URL::asset('/img/present/03/opera.png')}}" />
					</div>
					<div style="position:absolute;top:104px;left:246px;width:90px;height:104px;z-index:0;">
						<img data-u="caption" data-t="32" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow.png')}}" />
						<img data-u="caption" data-t="33" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid.png')}}" />
						<img data-u="caption" data-t="34" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="{{URL::asset('/img/present/03/firefox.png')}}" />
					</div>
					<div style="position:absolute;top:208px;left:187px;width:90px;height:104px;z-index:0;">
						<img data-u="caption" data-t="35" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow.png')}}" />
						<img data-u="caption" data-t="36" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid.png')}}" />
						<img data-u="caption" data-t="37" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="{{URL::asset('/img/present/03/ie.png')}}" />
					</div>
					<div style="position:absolute;top:208px;left:59px;width:90px;height:104px;z-index:0;">
						<img data-u="caption" data-t="38" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow.png')}}" />
						<img data-u="caption" data-t="39" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid.png')}}" />
						<img data-u="caption" data-t="40" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="{{URL::asset('/img/present/03/edge.png')}}" />
					</div>
					<div style="position:absolute;top:104px;left:0px;width:90px;height:104px;z-index:0;">
						<img data-u="caption" data-t="41" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow.png')}}" />
						<img data-u="caption" data-t="42" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid.png')}}" />
						<img data-u="caption" data-t="43" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="{{URL::asset('/img/present/03/safari.png')}}" />
					</div>
					<div style="position:absolute;top:0px;left:59px;width:90px;height:104px;z-index:0;">
						<img data-u="caption" data-t="44" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow.png')}}" />
						<img data-u="caption" data-t="45" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid.png')}}" />
						<img data-u="caption" data-t="46" style="position:absolute;top:33px;left:28px;width:38px;height:38px;z-index:0;" src="{{URL::asset('/img/present/03/chrome.png')}}" />
					</div>
				</div>
			</div>

		</div>
		<!-- Bullet Navigator -->
		<div data-u="navigator" class="jssorb101" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
			<div data-u="prototype" class="i" style="width:16px;height:16px;">
				<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					<circle class="co" cx="8000" cy="8000" r="5000"></circle>
					<circle class="ci" cx="8000" cy="8000" r="3000"></circle>
				</svg>
			</div>
		</div>
		<!-- Arrow Navigator -->
		<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
			<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
			</svg>
		</div>
		<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
			<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
			</svg>
		</div>
@stop
@section('contenido')

	<div class="container" style="margin-top:-106px;height: 100px;float: center;background-color:rgba(0,0,0,.65);z-index: 20;position: relative;">
			<div class="row" style="margin-top: 30px;">
					<div class="form-group row">
						  {!! Form::open(['route' => ['templo'] , 'method' => 'GET', 'id' => 'formLugares' ]) !!}
									 <div class="col-sm-6" style="margin-left:5px;">
											<span class='3d' style="color:#e44b02;font-weight:bold;font-size:30px;text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9,0 3px 0 #bbb, 0 4px 0 #b9b9b9,0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);">
											Spaziour</span> <span style="color:#09e5fb;">Encuentra tu templo Colonial</span>
									 </div>
									 {!!  method_field('GET') !!}
				        				{!!  csrf_field() !!}
							  		 <div class="col-sm-5" style="margin-left:-9px;margin-top: 5px;">
										  	{!!Form::text('buscarLugares',null, ['class' => 'form-control btn-sm' , 'id' => 'buscarLugares','autocomplete' => 'off'])!!}	
										  <div id="carga" style="position: absolute;z-index: 12;text-align: right;"> </div>
											  <div id="lugares">
													 
														<ul class="list-group" id="lista" style="position: absolute;width: 470px;margin-top: 0px;z-index:10;background: red;font-size:12px; ">
															
														</ul>
													
											  </div>
										  		 
									</div>	
									<div class="col-sm-1" style="text-align: center;margin-left:-12px;margin-top: 5px;" >
											{!! Form::submit('Buscar', array('class' => 'btn btn-danger btn-sm')) !!} 
									</div>
							{!! Form::close() !!}
							
					</div>
			  </div>
		 </div>

		  <div class="container">	

	                    <div class="c-content-feature-10" style="margin-top: 40px;">
	                        
	                        <div class="c-content-title-1">
	                            <h3 class="c-font-uppercase c-center c-font-bold">Templo y lugares Turisticos 3D</h3>
	                            <div class="c-line-center c-theme-bg"></div>
	                            <p class="c-font-center">Recorridos virtuales y modelados 3D para templos coloniales,zonas turisticas</p>
	                        </div>
	                        <ul class="c-list">
	                            <li>
	                                <div class="c-card c-font-right wow animate fadeInLeft">
	                                    <i class="icon-trophy c-font-27 c-theme-font c-float-right c-border c-border-opacity"></i>
	                                    <div class="c-content c-content-right">
	                                        <h3 class="c-font-uppercase c-font-bold">Templo Coloniales</h3>
	                                        <p> Los templo colonial de Apurimac, de apariencia externa más bien sencilla, conserva en su interior restos de importantes pinturas murales. </p>
	                                    </div>
	                                </div>
	                                <div class="c-border-bottom c-bg-opacity-2"></div>
	                            </li>
	                            <div class="c-border-middle c-bg-opacity-2"></div>
	                            <li>
	                                <div class="c-card wow animate fadeInRight">
	                                    <i class="icon-rocket c-font-27 c-theme-font c-float-left c-border c-border-opacity"></i>
	                                    <div class="c-content c-content-left">
	                                        <h3 class="c-font-uppercase c-font-bold">Lugares Turisticos</h3>
	                                        <p>La provincia de Aymaraes es un lugar idóneo para la práctica del turismo termomedicinal gracias a que en esta parte de Apurímac se pueden encontrar los Baños Termales de Pincahuacho.</p>
	                                    </div>
	                                </div>
	                                <div class="c-border-bottom c-bg-opacity-2"></div>
	                            </li>
	                        </ul>
	                        
	                    </div>
	                </div>
	                <div id="baner" class="c-content-feature-15 c-bg-img-center"  style="background-image: url({{URL::asset('/img/content/backgrounds/bg-11.jpg')}}">
		                <div class="container">
		                    <div class="row">
		                        <div class="col-md-offset-4 col-md-8 col-xs-12">
		                            <div class="c-feature-15-container c-bg-dark">
		                                <h2 class="c-feature-15-title c-font-bold c-font-uppercase c-theme-border c-font-white">Templo colonial de Chuquinga</h2>
		                                <div class="row">
		                                    <div class="col-md-4 col-xs-12">
												<img src="{{URL::asset('/img/content/shop8/02.jpg')}}" class="c-feature-15-img" /> </div>
		                                    <div class="col-md-8 col-xs-12">
		                                        <p class="c-feature-15-desc c-font-grey"> El Templo de Chuquinga, ergido bajo la advocación de San Pedro, presenta una planta de distribución longitudinal, con tres volúmenes adosados al cuerpo principal, 
		                                        en el muro lateral sur, correspondiente a los ambientes del baptisterio, </p>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>

		            <div class="c-content-box c-size-md c-bg-grey-1  ">
		                <div class="container">
		                    <div class="c-content-feature-2-grid" data-auto-height="true" data-mode="base-height">
		                        <div class="row">
		                            <div class="col-md-4 col-sm-6">
		                                <div class="c-content-feature-2" data-height="height">
		                                    <div class="c-icon-wrapper">
		                                        <div class="c-content-line-icon c-theme c-icon-screen-chart"></div>
		                                    </div>
		                                    <h3 class="c-font-uppercase c-font-bold c-title">APLICAIONES WEB</h3>
		                                    <p>Desarrollo de paginas dinamicas</p>
		                                </div>
		                            </div>
		                            <div class="col-md-4 col-sm-6">
		                                <div class="c-content-feature-2" data-height="height">
		                                    <div class="c-icon-wrapper">
		                                        <div class="c-content-line-icon c-theme c-icon-support"></div>
		                                    </div>
		                                    <h3 class="c-font-uppercase c-font-bold c-title">Aplicaciones móviles</h3>
		                                    <p>Desarro de Modelados 3D</p>
		                                </div>
		                            </div>
		                            <div class="col-md-4 col-sm-6">
		                                <div class="c-content-feature-2" data-height="height">
		                                    <div class="c-icon-wrapper">
		                                        <div class="c-content-line-icon c-theme c-icon-comment"></div>
		                                    </div>
		                                    <h3 class="c-font-uppercase c-font-bold c-title">Repositorio</h3>
		                                    <p>Lugares recomendados por turitas</p>
		                                </div>
		                            </div>
		                            <div class="col-md-4 col-sm-6">
		                                <div class="c-content-feature-2" data-wow-delay1="2s" data-height="height">
		                                    <div class="c-icon-wrapper">
		                                        <div class="c-content-line-icon c-theme c-icon-bulb"></div>
		                                    </div>
		                                    <h3 class="c-font-uppercase c-font-bold c-title">Ideas de modelados 3D</h3>
		                                    <p>Guia de ideas </p>
		                                </div>
		                            </div>
		                            <div class="col-md-4 col-sm-6">
		                                <div class="c-content-v-center c-theme-bg wow bounceInUp" data-wow-delay1="2s" data-height="height">
		                                    <div class="c-wrapper">
		                                        <div class="c-body c-padding-20 c-center">
		                                            <h3 class="c-font-19 c-line-height-28 c-font-uppercase c-font-white c-font-bold">Los lugares turisticos mas vicitados </h3>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="col-md-4 col-sm-6">
		                                <div class="c-content-feature-2" data-wow-delay1="2s" data-height="height">
		                                    <div class="c-icon-wrapper">
		                                        <div class="c-content-line-icon c-theme c-icon-globe"></div>
		                                    </div>
		                                    <h3 class="c-font-uppercase c-font-bold c-title">Alojamiento</h3>
		                                    <p>Recoridos virtuales de Hoteles,restaurantes. </p>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
	           		 <div class="c-content-box c-size-md c-bg-white">
		                <div class="container">
		     
		                   		 <div class="c-content-client-logos-slider-1" data-slider="owl">
		  
				                        <div class="c-content-title-1">
				                            <h3 class="c-center c-font-uppercase c-font-bold">Paginas Desarrolladas</h3>
				                            <div class="c-line-center c-theme-bg"></div>
				                        </div>

											 <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="5" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-small-items="1" data-auto-play="false" data-rtl="false" data-slide-speed="5000"
							                        data-auto-play-hover-pause="true" style="background:linear-gradient(top, #e7e8e8, #e7e8e8);
													background:-webkit-linear-gradient(top, #e7e8e8, #e7e8e8);
													background:-moz-linear-gradient(top, #e7e8e8, #e7e8e8);
													background:-o-linear-gradient(top, #e7e8e8, #e7e8e8);
													background:-ms-linear-gradient(top, #e7e8e8, #e7e8e8);">                           			 
							                      		
														 <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo1.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo2.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo3.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo4.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo5.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo6.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo7.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo8.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo9.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo10.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo11.jpg')}}" alt="" />
							                                </a>
							                            </div>			
																
							                        </div>

							            </div>

							</div>
					</div>



@stop

@section('script')

<script type="text/javascript">
	$(document).ready(function(){

	$("#buscarLugares").on( "keyup", function() 
	    		{
	       		    event.preventDefault();
	       		 	var buscarLugar=$("#buscarLugares").val();
	       		 	if (buscarLugar.length !=0)
	       		 	{
			       		 	var form  = $("#formLugares");
			       		 	var url=form.attr("action");
					        $.ajax(
					        {
					            headers: {
							            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							        },
								url: url,
								dataType: "json",
		          			    type:'GET',
						        data:form.serialize(),
						        cache: false,
						        contentType: false,
						        processData: false,
								beforeSend: function (xhr) {
						            var token = $('meta[name="csrf_token"]').attr('content');

						            if (token) {
						                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
						            }
						            $("#carga").html('<i class="fa fa-refresh fa-spin"></i>');
						        },
					            success:function(resp)
					            {
						            $("#carga").html('');
						            if(resp.data!='vacio')
						            {
						            	if( Object.keys(resp).length>=1)
							              {
							                var html;
						            		  	  $("#lista").html('');

									              $.each(resp.data,function(index,element)
							                    	{
							                    			html ='<a href="lugar-localizado/'+element.id+'" class="list-group-item"><h3>'+element.nombre+'<span style="color:#4CAF50" class="glyphicon glyphicon-map-marker"></span></h3>'+
															       '<p class="list-group-item-text"><h5>'+element.comentario+'</h5></p>';
															    '</a>';	
															$("#lista").append(html);				
							                    	});
							              }

						            }else{

						            		     $("#lista").html('');

									             html ='<a href="#" class="list-group-item">'+
														 '<p class="list-group-item-text">No se encontro resultado</p>'+
													   '</a>';	
								               $("#lista").append(html);

						            }
						              
						            	
					            }
					        }).fail( function( jqXHR, textStatus, errorThrown ) {
							   console.log( 'El servidor esta detenido Error!!' );
						});
	       		 	}
	       		 	
	    	});

		$("html").click(function() {
	   			 $("#lista").html('');
	   			 $("#buscarLugares").val('');
		});
		$('#lista').click(function (e) {
		    e.stopPropagation();
		});
		$('#buscarLugares').click(function (e) {
		    e.stopPropagation();
		});
					
	});
</script>

@stop


