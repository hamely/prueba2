@extends('layoutBack')

@section('contenido')

       <div class="panel panel-headline">			
			<div class="panel-body">
			
				<div class="row">
						<div style="margin: 2px;">
							
						  	 <div class="row">
							    <div class="col-sm-3" style="margin-right: -150px;">
							    	<a href="{{ route('entradas.create')}}" class="btn btn-primary">
							     						Añadir Nueva
									</a>
							    </div>
							    <div class="col-sm-3" >
								      <select class="form-control">
								      		<option value="" disabled selected>Cuscar Categoria</option>
								      	@foreach($categoria as $itemp)
									        <option value=""> {{$itemp->nombre}}</option>
									    @endforeach
								      </select>
							    </div>
							    <div class="col-sm-3" style="margin-right: -140px;">
							    	<a href="" class="btn btn-light">
							     						Filtrar
									</a>
							    </div>
							    
						  </div>

						</div>
				     	<table   class="table table-hover">
				     		<thead>
				     			<tr style="background: #25a929;">
				     				<th>Titulo</th>
				     				<th>Ruta</th>
				     				<th>Categoria</th>
				     				<th>Usuario</th>
				     			</tr>
				     		</thead>
				     		<tbody>

				     			@foreach( $entradas as $item)
				     				<tr >
								        <td> 
								        	{{ $item->titulo}}</br>
								        	<a href=""  class="clEntrada" id="{{$item->id}}">ver Imagenes</a> 
								        	<button type='button' class='editar btn btn-primary btn-xs' onclick="paginaAjaxDialogo(null, 'Imagenes Entrada',{idCategoriaUsers:'{{$item->id}}'},'{{route('entradasImagen.index')}}', 'GET', null, null, false, true)"><i class='ace-icon fa fa-pencil bigger-120'></i></button>
								        </td>
								        <td>{{$item->ruta}}</td>
								        <td>{{$item->nombre}}</a></td>
								        <td>{{$item->name}}</td>
								     </tr>
								@endforeach
				     		</tbody>
				     	</table>
				     	{!! $entradas->links() !!}
	     	</div>
	     	

		</div>
	</div>
	    
@stop
@section('script')

  @include('error.mensajeError')

	<script>
		$(document).ready(function()
		{
			 $(".clEntrada").click(function() {
			 	var idCategoriaUsers=$(this).attr('id');
			 	alert(idCategoriaUsers);
			 	event.preventDefault();

		       
		});
				
	});
	</script>
@stop