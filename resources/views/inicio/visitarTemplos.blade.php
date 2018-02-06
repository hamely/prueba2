<!DOCTYPE html>
<html>
  <head>
    <title>Spaziour Templo Colonial de chuquinga</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script type="text/javascript" src="{{ asset("js/jquery.js") }}"></script>
  <script type="text/javascript" src="{{ asset("js/bootstrap.js") }}"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet"  href="{{ asset("css/app.css") }}">

  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
  <link href="{{ asset("plugins/socicon/socicon.css")}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset("plugins/bootstrap-social/bootstrap-social.css")}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset("plugins/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset("plugins/simple-line-icons/simple-line-icons.min.css")}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset("plugins/animate/animate.min.css")}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset("plugins/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <style>

          #map {
            height: 100%;
          }
          html, body {
            height: 100%;
            margin: 0;
            padding: 0;
          }
        #logo {
            border-radius: 75px 10px 10px 10px;
            border-radius: 20px 22px 16px 29px;
            -moz-border-radius: 20px 22px 16px 29px;
            -webkit-border-radius: 20px 22px 16px 29px;
            border: 3px solid #15ebd9;
          }
          </style>
          <script>

          var map;
          var infowindow;
          var marcadores = [
			        ['<a href="{{route("temploChuquinga")}}">VISITAR TEMPLO COLONIAL DE CHUQUINGA 3D</a>',  -14.291548, -73.256193,'{{URL::asset("/img/templosMapa/chuquinga.png")}}'],
			        ['<a href="">VISITAR TEMPLO COLONIAL DE SORAYA 3D</a>',  -14.1645139, -73.3160521,'{{URL::asset("/img/templosMapa/soraya.png")}}'],
			        ['<a href="">VISITAR TEMPLO COLONAIL DE LA VIRGEN DE LAS MERCEDES DE PAMPAMARCA 3D</a>',  -14.4272563,-73.2074832,'{{URL::asset("/img/templosMapa/pampamarca.png")}}'],
			        ['<a href="">VISITAR TEMPLO SAN FELIPE DE MUTCA 3D</a>', -14.214773,-73.3104704,'{{URL::asset("/img/templosMapa/mutca.png")}}']

      		];

          function initMap() 
          {
            var pyrmont = {lat: -14.2915486, lng: -73.256193}; 

            map = new google.maps.Map(document.getElementById('map'), {
              center: pyrmont,
              zoom: 9,
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
  </head>
  <body>
      <a href="http://localhost:81/spaziour/public/" style="position:absolute;float:left;z-index:2;margin-left:120px;margin-top: 12px;"> 
        <img  src="{{URL::asset('/img/layout/logos/logoAdmin.png')}}" alt="spaziour" id="logo"></a> 
	    <div id="map" style="">
	    	
	    </div>
		
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbQ8JRicT1bTUYm3laAYGZ-5OtEuLI3Vc&callback=initMap" async defer>
	    </script>

  </body>
  </html>