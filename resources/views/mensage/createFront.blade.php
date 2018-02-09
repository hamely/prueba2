@extends('layoutFront')
@section('contenido')
		 <div class="c-content-box c-size-md c-bg-white c-no-bottom-padding">
		                <div class="container">
		                    <div class="c-content-product-1 c-opt-1">
		                        <div class="c-content-title-1">
		                            <h3 class="c-center c-font-uppercase c-font-bold">CONTACTENOS</h3>
		                            <div class="c-line-center"></div>
		                        </div>
		                        <div class="row">
		                            <div class="col-md-4 wow animate slideInUp">
		                                <div class="c-media">
		                                    <img src="{{URL::asset('/img/contacto/contacto.jpg')}}" alt="" /> </div>
		                            </div>
		                            <div class="col-md-8" style="margin-top: -60PX;">
		                                <div class="c-body">
		                                    @if(session()->has('info'))

												<div class="alert alert-success"> {{ session('info')}} </div>
		
											@endif
													
												<form method="POST" class="form-horizontal" action="{{ route('mensajes.store') }}">
														{!!  csrf_field() !!}
														
															
														<div class="form-group"> 
															<label  class="col-lg-2 control-label">
																Nombre
															</label>
															<div class="col-lg-5">
																<input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre')}}" placeholder="Nombre">
																{!! $errors->first('nombre','<span class=error>:message</span>') !!}
															</div>
														</div>

														<div class="form-group"> 
															<label  class="col-lg-2 control-label">
															Email
															</label>
															<div class="col-lg-5">
																<input type="text" class="form-control" name="email" id="email" value ="{{old('email')}}" placeholder="Email">
																{!! $errors->first('email','<span class=error>:message</span>') !!}
															</div>
														</div>
												
														<div class="form-group"> 
															<label  class="col-lg-2 control-label">
																Telefon de Contacto
															</label>
															<div class="col-lg-5">

																<input type="text" name="contacto" id="contacto" class="form-control" placeholder="Telefon de contacto" value="{{old('contacto')}}">
																{!! $errors->first('contacto','<span class=error>:message</span>') !!}
																
															</div>
														</div>

														<div class="form-group"> 
															<label  class="col-lg-2 control-label">
																Mensage
															</label>
															<div class="col-lg-5">
																<textarea name="comentario" id="comentario" rows="5" cols="38" style="overflow:hidden">
																	{{old('comentario')}}
																</textarea>
																
																{!! $errors->first('comentario','<span class=error>:message</span>') !!}
															</div>
														</div>

														

														<div class="form-group">
															<div class="col-lg-offset-2 col-lg-10">
																<input type="submit" value="Enviar" class="btn btn-info"> 
															</div>
														</div>

												</form>

		                                    
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		            </div>
		    </div>
     
@stop