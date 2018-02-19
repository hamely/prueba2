@extends('layoutBack')

@section('contenido')
	<div class="panel panel-headline">
			
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12">
						{!! Form::open(['route' => ['entradas.store'] , 'method' => 'POST', 'id' => 'form-crearEntrada', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}

							{!!  csrf_field() !!}

							  <div class="form-group row">
							      <label for="" class="col-sm-1 col-form-label">Título </label>

							      <div class="col-sm-12">
										
									{!!Form::text('titulo',null, ['class' => 'form-control btn-sm' , 'id' => 'titulo','autocomplete' => 'off'])!!}	

							      </div>
						    </div>
						    <div class="form-group row">
							      <label for="" class="col-sm-1 col-form-label">Categoria</label>								
  								 <div class="col-sm-7">
									 	@foreach ($categoria as $itemp)

							        		<label>
							        			  <input type="checkbox" name="nombre[]"  value="{{$itemp->id}}"}}>
							        			  
							        			   {{ $itemp->nombre}}

							        		</label>

						        		@endforeach
						          </div>

						    </div>
						    <div class="form-group row">
									<textarea class="form-control" id="contenidor" name="contenido"></textarea>
							</div>
							<div class="form-group row">
				                <label>Subir Imagen destacada</label>
				                <input type="file" name="imagen[]" id="imagen" multiple>
				                <p class="help-block">Subir imagen</p>
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
     
        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
		<script>
		
			CKEDITOR.replace( 'contenido',
	         {
	          customConfig : 'config.js',
	          toolbar : 'simple',
	          filebrowserBrowseUrl: '/public/php/fileupload.php',
    		 filebrowserUploadUrl: '/public/php/fileupload.php'
	          });
			
		</script>

		  
@stop