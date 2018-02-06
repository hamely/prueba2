@extends('layoutFrontLocalizacion')
@section('mapa')
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Spaziour Apurímac</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet"  href="{{ asset("css/app.css") }}">

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="{{ asset("plugins/socicon/socicon.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("plugins/bootstrap-social/bootstrap-social.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("plugins/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("plugins/animate/animate.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("plugins/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />

    <link href="{{ asset("css/plugins.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/components.css")}}" id="style_components" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/themes/default.css")}}" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="{{ asset("css/custom.css")}}" rel="stylesheet" type="text/css" />

           <style>

              #map {
                height: 100%;
                width: 100%;
              }
              
        
          </style>

          <script>

          var map;
          var infowindow;
          var marcadores = [
			        ['<a href="{{route("temploChuquinga")}}">VISITAR TEMPLO COLONIAL DE CHUQUINGA 3D</a>',  -14.291548, -73.256193,'{{URL::asset("/img/templosMapa/chuquinga.png")}}'],

      		];

          function initMap() 
          {
            var pyrmont = {lat: -14.2915486, lng: -73.256193}; 

            map = new google.maps.Map(document.getElementById('map'), {
              center: pyrmont,
              zoom: 15,
              mapTypeId: google.maps.MapTypeId.HYBRID
            });
			  var marker, i;
			    var infowindow = new google.maps.InfoWindow();

			      for (i = 0; i < marcadores.length; i++) 
			      {  
			        marker = new google.maps.Marker({
			          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
			          map: map,
			          icon:marcadores[i][3],
			        });

			         google.maps.event.addListener(marker, 'click', (function(marker, i) {
				          return function() {
				            infowindow.setContent(marcadores[i][0]);
				            infowindow.open(map, marker);
				          }
				        })(marker, i));
			       }
          }

       
          </script>
@stop
  <body>
     @section('contenido')
     <div  style="margin-top: -40px;" class="c-content-box c-size-lg c-bg-parallax" >

          <div class="c-content-box c-size-lg c-bg-parallax" style="background-image: url({{URL::asset('/img/content/backgrounds/bg-12.jpg')}}">

                        <div class="col-md-2" style="margin-top: -30px;">
                            <div class="c-content-v-center " style="height: 520px; background: #f1f1f1;box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;position: relative;">
                                <div class="c-wrapper">
                                    <div class="c-body c-padding-20 c-center">
                                               
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10" style="margin-top: -30px;">
                            <div class="c-content-v-center" style="height: 520px;background: #f1f1f1;box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;position: relative;">
                                <div class="c-wrapper">
                                    <div class="c-body c-padding-20 c-center">
                                        <div id="map">   </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
    </div>

     
  
     @stop
	  @section('script')
     
  
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbQ8JRicT1bTUYm3laAYGZ-5OtEuLI3Vc&callback=initMap" async defer>
            </script>

      @stop
		
  </body>
  </html>