@extends('layoutBack')

@section('contenido')
	<div class="panel panel-headline">
			<div class="panel-heading">
							<h3 class="panel-title">Eliminar Rol del usuario</h3>
			</div>
			<div class="panel-body">

						<div class="row">
						     	<table   class="table table-hover">
					     		<thead>
					     			<tr>
					     				<th>#</th>
					     				<th>Role</th>
					     				<th>Acciones</th>
					     			</tr>
					     		</thead>
					     		<tbody>
					     			@foreach($user as $itemp)
					     				<tr>

					     					<td>
					     						
					     					</td>
									
					     					<td>
					     						{{$itemp->name}} |{{$itemp->display_name}}
					     					</td>

					     					<td>
												<a href="{{ route('eliminarUsuarioRol',['id_usuario' =>$itemp->pivot->user_id, 'id_rol' => $itemp->pivot->roles_id])}}" class="btn btn-danger btn-xs">
							     						Eliminar
							     				</a>

					     					</td>

					     				</tr>
					     			@endforeach
					     		</tbody>
					     	</table>
			    	</div>
				</div>
@stop
@section('script')
     
 <script type="text/javascript">
 	
 </script>
  
@stop