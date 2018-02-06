@extends('layoutBack')

@section('contenido')
		 <div class="panel panel-default">
			 			
					<div class="panel-body">
						<div class="row">
								 <div style="background: #b0b4c7;margin: 2px;">
									 <a href="{{ route('usuarios.create')}}" class="btn btn-primary">
							     						Editar
							     	 </a>
								  </div>
								 
						     	<table   class="table table-hover">
					     		<thead>
					     			<tr>
					     				<th>Nombre</th>
					     				<th>Email</th>
					     				<th>Role</th>
					     				<th>Acciones</th>
					     			</tr>
					     		</thead>
					     		<tbody>
					     			@foreach( $Users as $item)
					     				<tr>
					     					
					     					<td>
												{{ $item->name}} 
					     					</td>

					     					<td>
					     						{{$item->email }}
					     					</td>

					     					<td>
					     						@foreach ($item->roles as $role)
					     							{{$role->display_name }},</br>
												@endforeach
					     					</td>

					     					<td>
					     							<div >
					     								
					     							</div>
						     						<a href="{{ route('usuarios.edit',$item->id)}}" class="btn btn-primary btn-xs">
							     						Editar
							     					</a>		
							     					<a href="{{ route('usuariosEliminar',$item->id)}}" class="btn btn-danger btn-xs">
							     						Eliminar
							     					</a>
												
					     					
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