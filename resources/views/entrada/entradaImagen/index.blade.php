<table   class="table table-hover">
				     		<thead>
				     			<tr style="background: #25a929;">
				     				<th>Imagen</th>
				     				<th>Descripción</th>
				     				<th>Estado</th>
				     				<th>Creación</th>
				     			</tr>
				     		</thead>
				     		<tbody>

				     			@foreach( $entradaImagen as $item)
				     				<tr >
								        <td> 
								        	<img style="height: 100px;width: 150px;" src="{{URL::asset('/img/entrada/'.$item->nombre)}}" alt="Klorofil Logo" class="img-responsive logo">
								        </td>
								        <td>{{$item->descripcion}}</td>
								        <td>{{$item->estado}}</a></td>
								        <td>{{$item->created_at}}</td>
								     </tr>
								@endforeach
				     		</tbody>
				     	</table>