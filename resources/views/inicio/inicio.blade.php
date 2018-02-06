@extends('layoutFront')

@section('contenido')
	<div class="container" style="margin-top:-106px;height: 100px;float: center;background-color:rgba(0,0,0,.65);z-index: 20;position: relative;">
		<div class="row" style="margin-top: 30px;">
			<div class="form-group row">
				  {!! Form::open(['route' => ['templo'] , 'method' => 'GET', 'id' => 'formLugares' ]) !!}
							 <div class="col-sm-6" style="margin-left:5px;">
									<span class='3d' style="color:#e44b02;font-weight:bold;font-size:30px;text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9,0 3px 0 #bbb, 0 4px 0 #b9b9b9,0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);">
									Spaziour</span> <span style="color:#09e5fb;">Encuentra tu templo Colonial</span>
							 </div>
							 {!!  method_field('GET') !!}
		        				{!!  csrf_field() !!}
					  		 <div class="col-sm-5" style="margin-left:-9px;margin-top: 5px;">
								  	{!!Form::text('buscarLugares',null, ['class' => 'form-control btn-sm' , 'id' => 'buscarLugares','autocomplete' => 'off'])!!}	
								  <div id="carga" style="position: absolute;z-index: 12;text-align: right;"> </div>
									  <div id="lugares">
											 
												<ul class="list-group" id="lista" style="position: absolute;width: 470px;margin-top: 0px;z-index:10;background: red;font-size:12px; ">
													
												</ul>
											
									  </div>
								  		 
							</div>	
							<div class="col-sm-1" style="text-align: center;margin-left:-12px;margin-top: 5px;" >
									{!! Form::submit('Buscar', array('class' => 'btn btn-danger btn-sm')) !!} 
							</div>
					{!! Form::close() !!}
					

			</div>
		  </div>
		 </div>
@stop

@section('script')

<script type="text/javascript">
	$(document).ready(function(){

	$("#buscarLugares").on( "keyup", function() 
	    		{
	       		    event.preventDefault();
	       		 	var buscarLugar=$("#buscarLugares").val();
	       		 	if (buscarLugar.length !=0)
	       		 	{
			       		 	var form  = $("#formLugares");
			       		 	var url=form.attr("action");
					        $.ajax(
					        {
					            headers: {
							            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							        },
								url: url,
								dataType: "json",
		          			    type:'GET',
						        data:form.serialize(),
						        cache: false,
						        contentType: false,
						        processData: false,
								beforeSend: function (xhr) {
						            var token = $('meta[name="csrf_token"]').attr('content');

						            if (token) {
						                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
						            }
						            $("#carga").html('<i class="fa fa-refresh fa-spin"></i>');
						        },
					            success:function(resp)
					            {
						            $("#carga").html('');
						            if(resp.data!='vacio')
						            {
						            	if( Object.keys(resp).length>=1)
							              {
							                var html;
						            		  	  $("#lista").html('');

									              $.each(resp.data,function(index,element)
							                    	{
							                    			html ='<a href="lugar-localizado/'+element.id+'" class="list-group-item"><h3>'+element.nombre+'<span style="color:#4CAF50" class="glyphicon glyphicon-map-marker"></span></h3>'+
															       '<p class="list-group-item-text"><h5>'+element.comentario+'</h5></p>';
															    '</a>';	
															$("#lista").append(html);				
							                    	});
							              }

						            }else{

						            		     $("#lista").html('');

									             html ='<a href="#" class="list-group-item">'+
														 '<p class="list-group-item-text">No se encontro resultado</p>'+
													   '</a>';	
								               $("#lista").append(html);

						            }
						              
						            	
					            }
					        }).fail( function( jqXHR, textStatus, errorThrown ) {
							   console.log( 'El servidor esta detenido Error!!' );
						});
	       		 	}
	       		 	
	    	});

		$("html").click(function() {
	   			 $("#lista").html('');
	   			 $("#buscarLugares").val('');
		});
		$('#lista').click(function (e) {
		    e.stopPropagation();
		});
		$('#buscarLugares').click(function (e) {
		    e.stopPropagation();
		});
					
	});
</script>

@stop


