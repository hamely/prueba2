@extends('layoutBack')

@section('contenido')
	<div class="panel panel-headline">
			<div class="panel-heading">
							<h3 class="panel-title">Agregar usuario </h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12">
						{!! Form::open(['route' => ['usuarios.store'] , 'method' => 'POST', 'id' => 'form-crearUsuario', 'class' => 'form-horizontal']) !!}

							{!!  csrf_field() !!}
							  <div class="form-group row">
							      <label for="" class="col-sm-1 col-form-label">Nombre </label>

							      <div class="col-sm-7">
										
									{!!Form::text('name',null, ['class' => 'form-control btn-sm' , 'id' => 'nombre','autocomplete' => 'off'])!!}	

							      </div>
						    </div>

							<div class="form-group row">
							      <label for="" class="col-sm-1 col-form-label">Email</label>

							      <div class="col-sm-7">
							      		{!!Form::email('email',null, ['class' => 'form-control btn-sm' , 'id' => 'email','autocomplete' => 'off'])!!}	
							      </div>
						    </div>

						    <div class="form-group row">
							      <label for="" class="col-sm-1 col-form-label">Contraseña</label>

							      <div class="col-sm-7">
							      		{!!Form::password('password',null, ['class' => 'form-control' , 'id' => 'password','autocomplete' => 'off'])!!}	
							      </div>
						    </div>
							
						    <div class="form-group row">
 								 <label for="" class="col-sm-1 col-form-label">Rol</label>								
  								 <div class="col-sm-7">
									  <select id="role" name="role[]" multiple>
						                    @foreach ($roles as $itemp)
						                        <option value="{{ $itemp->id }}">{{ $itemp->name}} | {{ $itemp->display_name}}</option>
						                    @endforeach             
						                </select>
						          </div>

							 </div>


							<div class="form-group" style="text-align: center;">
								<button type="submit" id="btnEnviarFormulario" class="btn btn-primary">Guardar</button>
								<button  class="btn btn-danger" data-dismiss="modal">Cerrar</button>
							</div>

						{!! Form::close() !!}
					</div>
						
					
					</div>
			</div>
@stop
@section('script')
     
 <script type="text/javascript">
 	
 </script>
  
@stop