@extends('layoutFront')

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
@stop

@section('script')


@stop


