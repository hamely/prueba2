@extends('layoutLogin')

@section('contenido')
				<div class="auth-box ">
					<div class="left" style="margin-top: -400px;">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="{{URL::asset('/img/layout/logos/logo-dark.png')}}" alt="Klorofil Logo"></div>
								<p class="lead">Ingrese a su cuenta</p>
							</div>
		
									  	 <form method="POST" action="login">
							        				{!!  csrf_field() !!}
										<div class="form-group">
												<label for="signin-email" class="control-label sr-only">Email</label>
														<input type="email" name="email"  placeholder="Email" class="form-control">
										</div>
										<div class="form-group">
												<label for="signin-password" class="control-label sr-only">Password</label>
												<input type="password" name="password" placeholder="Contraseña" class="form-control">
										</div>
										<div class="form-group clearfix">
											<label class="fancy-checkbox element-left">
												<input type="checkbox">
												<span>Recuérdame</span>
											</label>
										</div>
	
										<input type="submit" value="Iniciar" class="btn btn-info btn-md">
						      		</form>
							</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h4 class="heading">Bienvenidos a la empresa SPAZIOUR-APURIMAC</h4>
							<p>Por los desarrolladores</p>
						</div>
					</div>
				</div>
					

		
@stop