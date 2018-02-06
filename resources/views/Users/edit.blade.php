@extends('layoutBack')

@section('contenido')
		<div class="panel panel-headline">
			<div class="panel-heading">
							<h3 class="panel-title">Editar usuario</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12">
					        @if(session()->has('info'))
									<div class="alert alert-success"> {{ session('info')}} </div>
					        @endif

					        <form method="POST" class="form-horizontal" action="{{ route('usuarios.update',$user->id) }}">
					        				{!!  method_field('PUT') !!}
					        				{!!  csrf_field() !!}
								<div class="form-group">
					        		<div class ="col-sm-6">
					        			<label class="control-label col-sm-1">Nombre</label>
						        		<input type="text" name="name"  class="form-control" id="name"  value="{{ $user->name}}">
						        		{!! $errors->first('name','<span class=error>:message</span>') !!}
					        		</div>
					        	</div>
								<div class="form-group">
					        		<div class ="col-sm-6">
										<label class="control-label col-sm-1">Email</label>
						        		<input type="text" name="email" id="email" class="form-control"   value ="{{ $user->email}}">
						        		{!! $errors->first('email','<span class=error>:message</span>') !!}
						        	</div>
					        	</div>
					        	<div class="form-group">
					        		<div class ="col-sm-6">
						        		@foreach ($roles as $id => $name)

							        		<label>
							        			  <input type="checkbox" value="{{$id}}" 
							        			  name="roles[]"  {{$user->roles->pluck('id')->contains($id) ? 'checked' : '' }}>
							        			  
							        			   {{ $name}}

							        		</label>

						        		@endforeach
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