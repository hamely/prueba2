@extends('layoutBack')

@section('contenido')
<div class="panel panel-headline">
			<div class="panel-heading">
							<h3 class="panel-title">Editar Mensajes</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-8">
					        <form method="POST" class="form-horizontal"  action="{{ route('mensajes.update',$detalleMensage->id) }}">
					        				{!!  method_field('PUT') !!}
					        				{!!  csrf_field() !!}

					        	<div class="form-group">
					        		<div class="col-sm-6"> 

	      								<label class="control-label col-sm-1">Nombre:</label>
						        		<input type="text" class="form-control" name="nombre" id="nombre" value="{{ $detalleMensage->nombre}}">
						        		{!! $errors->first('nombre','<span class=error>:message</span>') !!}

						        	</div>

					        	</div>

					        	<div class="form-group">

					        		<div class="col-sm-6"> 

						        		<label class="control-label col-sm-1"> Email:</label>
						        		<input type="text" class="form-control" name="email" id="email" value ="{{ $detalleMensage->email}}">
						        		{!! $errors->first('email','<span class=error>:message</span>') !!}
						        	</div>
					        	</div>
					        	<div class="form-group">

					        		  <div class="col-sm-6">
							        		<label class="control-label col-sm-1">Comentario:</label>
							        		<input type="text" class="form-control" name="comentario" value="{{ $detalleMensage->comentario}}">
						        	</div>

					        	</div>

								<div class="form-group">
									<div class="col-sm-5">
										<input type="submit" value="Enviar" class="btn btn-primary"> 
									</div>
								</div>


				        </form>
			    	</div>
			     </div>
		</div>
	</div>	     
	    
@stop