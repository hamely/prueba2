@extends('layoutBack')

@section('contenido')

       <div class="panel panel-headline">			
			<div class="panel-body">
			
				<div class="row">
						<div style="background: #b0b4c7;margin: 2px;">
							
							<a href="{{ route('entradas.create')}}" class="btn btn-primary">
							     						Agregar
							</a>
						</div>
				     	<table   class="table table-hover">
				     		<thead>
				     			<tr>
				     				<th>Titulo</th>
				     				<th>Contenido</th>
				     				<th>Ruta</th>
				     				<th>Categoria</th>
				     				<th>Usuario</th>
				     				<th>Acción</th>
				     			</tr>
				     		</thead>
				     		<tbody>
				     			@foreach( $entradas as $item)
				     				<tr>
								        <td> {{ $item->pivot->titulo}}</td>
								        <td> {!! substr($item->pivot->contenido,0,30)  !!} </td>
								        <td>{{$item->pivot->ruta}}</td>
								        <td><a href="">ver</a></td>
								        <td>{{$item->name}}</td>
								        <td><button type="button" class="btn btn-primary">Editar</button></td>
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

  @include('error.mensajeError');

@stop