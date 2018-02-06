@extends('layoutBack')

@section('contenido')

       <div class="panel panel-headline">
			<div class="panel-heading">
							<h3 class="panel-title">Mensajes</h3>
			</div>
			
			<div class="panel-body">
			
				<div class="row">
				     	<table   class="table table-hover">
				     		<thead>
				     			<tr>
				     				<th>ID</th>
				     				<th>Nombre</th>
				     				<th> Email</th>
				     				<th> Comentario</th>
				     				<th> Acciones</th>
				     			</tr>
				     		</thead>
				     		<tbody>
				     			@foreach( $mensage as $item)
				     			<tr>
				     				<td>{{ $item->id}}	</td>   
										
										@if($item->user_id)
					     					 <td> 
					     					 	<a href="{{ route('usuarios.show',$item->user_id)}}">
					     					 		{{ $item->user->name }} 
												</a>

											</td>
											<td> 
					     					 	{{ $item->user->email }} 
					     					 	
											</td>
				     					@else
											 <td> 
											 	
					     					 		{{ $item->name }} 
					     					 	
											</td>
											<td> 
					     					 	{{ $item->email }} 
					     					 	
											</td>

				     					@endif
				     					  
				     				
				     				<td> 

				     					 <a href="{{route('mensajes.show',Hashids::encode($item->id))}} "> 
											{{ $item->comentario}}
										 </a>	 

				     				</td>
				     				
				     				<td>
				     					<a href="{{ route('mensajes.edit',Hashids::encode($item->id))}}" class="btn btn-primary btn-xs">
				     						Editar
				     					</a>
										 <form style="display: inline; " method="POST" action="{{route('mensajes.destroy',$item->id)}}">
											<button type="submit" class="btn btn-danger btn-xs"> Eliminar</button>
											{!!  csrf_field() !!}

											{!!  method_field('Delete') !!}
				     					</form>
				     					
				     				</td>
				     			</tr>
				     			@endforeach
				     		</tbody>
				     	</table>
	     	</div>
		</div>
	</div>
	    
@stop
@section('script')
     
  @include('error.mensajeError');
@stop