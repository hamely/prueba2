@extends('layoutBack')

@section('contenido')
       <div class="panel panel-headline">
			<div class="panel-heading">
							<h3 class="panel-title">Mensajes</h3>
			</div>
			<div class="panel-body">
				<div class="row">
       
			<h1>Nombre Completo</h1>
			{{ $detalleMensage->nombre}} -{{ $detalleMensage->email }}
	     	
    	</div>
		</div>
	</div>	    
@stop