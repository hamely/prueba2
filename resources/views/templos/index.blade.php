@extends('layoutModelos3D')

@section('contenido')

		<div id="lbl_left" class="lbl">
			
			<div id='tiempoCarga'>Cargando...</div>
				
			</div>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ asset("js/jquery.js") }}"></script>
        <script type="text/javascript" src="{{ asset("js/bootstrap.js") }}"></script>
        <link rel="stylesheet"  href="{{ asset("css/app.css") }}"> 

        <div id="container"></div>
		<div id="info">
			<a href="http://spaziour.com/" target="_blank" rel="noopener">spaziour.com</a> 
			<br/><span class="button" id="preload">Refrescar</span>
		</div>

		<div id="waitScreen">
			Loading ...
		</div>

		<script src="{{ asset("js/threejs/three.js") }}"></script>
		<script src="{{ asset("js/threejs/js/geometries/TeapotBufferGeometry.js") }}"></script>
		<script src="{{ asset("js/threejs/js/controls/OrbitControls.js") }}"></script>
		<script src="{{ asset("js/threejs/js/libs/dat.gui.min.js") }}"></script>

		<script>

		/*Medir los fotogramas por segundos */

		(function()
			{var script=document.createElement('script');script.onload=function()
		{var stats=new Stats();document.body.appendChild(stats.dom);requestAnimationFrame(function loop(){stats.update();requestAnimationFrame(loop)});};script.src='//rawgit.com/mrdoob/stats.js/master/build/stats.min.js';document.head.appendChild(script);})()

		/*fin medir */
		

		var container = document.getElementById( 'container' );

		var renderer, scene, camera, clock = new THREE.Clock(), fov = 50;
		var teapot;
		var controls;
		var move = false;
		var rtTexture, rtMaterial;
		var meshes = [];
		
		document.getElementById( "preload" ).addEventListener( 'click', function() {

			var hash = document.location.hash.substr( 1 );

			if ( hash.length === 0 ) {
				window.location.hash = "#NoPreLoad"
			} else {
				window.location.hash = ""
			}
			
			location.reload(true);

		}, false );

		window.addEventListener( 'load', init );

		function init() {

			renderer = new THREE.WebGLRenderer( { antialias: true } );
			renderer.setPixelRatio( window.devicePixelRatio );
			renderer.setSize( window.innerWidth, window.innerHeight );
			container.appendChild( renderer.domElement );

			scene = new THREE.Scene();

			camera = new THREE.PerspectiveCamera( fov, window.innerWidth / window.innerHeight, 1, 1000000 );
			camera.position.x = 10;
			camera.position.z = 2800;
			camera.position.y = 600;
			camera.target = new THREE.Vector3();

			controls = new THREE.OrbitControls( camera, renderer.domElement );
			controls.minDistance = -300;
			controls.maxDistance = 101000000;

			scene.add( new THREE.AmbientLight( 0x464646 ) );

			var light = new THREE.DirectionalLight( 0xffddcc, 1 );
			light.position.set( 1, 0.75, 0.5 );
			scene.add( light );

			var light = new THREE.DirectionalLight( 0xccccff, 1 );
			light.position.set( - 1, 0.75, - 0.5 );
			scene.add( light );

			teapot = new THREE.TeapotBufferGeometry( 15, 18 );

			var itemsonrow = 10;

			for (var i = 0 ; i<1; i ++ ){
						
						loader=new THREE.JSONLoader();
                        logo=function(object,color){
                            asalogo=new THREE.Mesh(
                                object,new THREE.MeshFaceMaterial(color)
                            );
                            asalogo.position.set(0,-70,0);
                            scene.add(asalogo);
                        }
           		 loader.load("prueba.js",logo);
			}
			MurosContornoTemplo();
			suelo();
			balconDelantero();
			balcondentro();
			asientosFuera();
			palosSoporteDentro();
			paredesContornoTemplo();
			abienteDelTemplo();


			window.addEventListener( 'resize', onWindowResize, false );

			var hash = document.location.hash.substr( 1 );

			if ( hash.length === 0 ) {

				renderer.compile(scene,camera);
				
			}
			
			document.getElementById("waitScreen").className = "hide";
			
			setTimeout(function() {
				
				onWindowResize();
				animate();
				
			}, 1);

					/*nuevo aspecto*/
					scene.background = new THREE.Color( 0xbfd1e5 );
					

		}
		function abienteDelTemplo()
			{
				var geometry = new THREE.CubeGeometry( 40000, 9000, 40000 );
				var cubeMaterials =
				[
					new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/Skybox/front.jpg' ), side: THREE.DoubleSide } ), // Right side
					new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/Skybox/back.jpg' ), side: THREE.DoubleSide } ), // Left side
					new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/Skybox/up.jpg' ), side: THREE.DoubleSide } ), // Top side
					new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/Skybox/down.jpg' ), side: THREE.DoubleSide } ), // Bottom side
					new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/Skybox/right.jpg' ), side: THREE.DoubleSide } ), // Front side
					new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/Skybox/left.jpg' ), side: THREE.DoubleSide } ) // Back side
				];
				var cubeMaterial = new THREE.MeshFaceMaterial( cubeMaterials );
				var cube = new THREE.Mesh( geometry, cubeMaterial );
				cube.position.set(-910,3940,1400);
				scene.add( cube );
			}
		function MurosContornoTemplo()
		{
			
				//muros Izquierdo
						var geometriaCuboAde = new THREE.CubeGeometry(
						    120,
						    170, 
						    100
						);
						var aparienciaLila=THREE.ImageUtils.loadTexture('texturas/piedra/pierdraMuro.jpg' );
						aparienciaLila.wrapS = THREE.RepeatWrapping;
						aparienciaLila.wrapT = THREE.RepeatWrapping;
						aparienciaLila.repeat.set( 1,4 );
						var material = new THREE.MeshBasicMaterial( { map: aparienciaLila } );
						material.side = THREE.DoubleSide;

						var cubo = new THREE.Mesh(geometriaCuboAde, material);
						cubo.position.set(-910,60,1400);
						cubo.overdraw = true;
	    				cubo.castShadow = true;
						scene.add(cubo);

						var geometriaCuboAde1 = new THREE.CubeGeometry(
						    120,
						    276, 
						    100
						);
						var aparienciaLila1=THREE.ImageUtils.loadTexture('texturas/piedra/yeso_blanco.jpg' );
						aparienciaLila1.wrapS = THREE.RepeatWrapping;
						aparienciaLila1.wrapT = THREE.RepeatWrapping;
						aparienciaLila1.repeat.set( 1,4 );
						var material1 = new THREE.MeshBasicMaterial( { map: aparienciaLila1 } );
						material1.side = THREE.DoubleSide;

						var cubo1 = new THREE.Mesh(geometriaCuboAde1, material1);
						cubo1.position.set(-910,283,1400);
						cubo1.overdraw = true;
	    				cubo1.castShadow = true;
						scene.add(cubo1);
					//fin muro Izquiero

						//muros Derecho
						var geometriaCuboAde = new THREE.CubeGeometry(
						    120,
						    170, 
						    100
						);
						var aparienciaLila=THREE.ImageUtils.loadTexture('texturas/piedra/pierdraMuro.jpg' );
						aparienciaLila.wrapS = THREE.RepeatWrapping;
						aparienciaLila.wrapT = THREE.RepeatWrapping;
						aparienciaLila.repeat.set( 1,4 );
						var material = new THREE.MeshBasicMaterial( { map: aparienciaLila } );
						material.side = THREE.DoubleSide;

						var cubo = new THREE.Mesh(geometriaCuboAde, material);
						cubo.position.set(173,60,1420);
						cubo.overdraw = true;
	    				cubo.castShadow = true;
						scene.add(cubo);

						var geometriaCuboAde1 = new THREE.CubeGeometry(
						    120,
						    276, 
						    100
						);
						var aparienciaLila1=THREE.ImageUtils.loadTexture('texturas/piedra/yeso_blanco.jpg' );
						aparienciaLila1.wrapS = THREE.RepeatWrapping;
						aparienciaLila1.wrapT = THREE.RepeatWrapping;
						aparienciaLila1.repeat.set( 1,4 );
						var material1 = new THREE.MeshBasicMaterial( { map: aparienciaLila1 } );
						material1.side = THREE.DoubleSide;

						var cubo1 = new THREE.Mesh(geometriaCuboAde1, material1);
						cubo1.position.set(173,283,1420);
						cubo1.overdraw = true;
	    				cubo1.castShadow = true;
						scene.add(cubo1);
					//fin muro derecho
					   //Muros del costado derechos del templo 
					   //1
							   	var geometriaCuboAde1 = new THREE.CubeGeometry(
								    120,
								    170, 
								    100
								);
								aparienciaLila.wrapS = THREE.RepeatWrapping;
								aparienciaLila.wrapT = THREE.RepeatWrapping;
								aparienciaLila.repeat.set( 1,4 );
								var material = new THREE.MeshBasicMaterial( { map: aparienciaLila } );
								material.side = THREE.DoubleSide;

								var cubo = new THREE.Mesh(geometriaCuboAde1, material);
								cubo.position.set(293,60,1330);
								scene.add(cubo);

								var geometriaCuboAde1 = new THREE.CubeGeometry(
								    120,
								    210, 
								    100
								);
								aparienciaLila1.wrapS = THREE.RepeatWrapping;
								aparienciaLila1.wrapT = THREE.RepeatWrapping;
								aparienciaLila1.repeat.set( 1,4 );
								var material1 = new THREE.MeshBasicMaterial( { map: aparienciaLila1 } );
								material1.side = THREE.DoubleSide;

								var cubo1 = new THREE.Mesh(geometriaCuboAde1, material1);
								cubo1.position.set(293,250,1330);;
								scene.add(cubo1);

									var geometry = new THREE.CubeGeometry( 140, 25,120 );
									var cubeMaterials =
									[
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Right side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Left side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja.jpg' ), side: THREE.DoubleSide } ), // Top side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Bottom side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Front side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ) // Back side
									];
									// Create a MeshFaceMaterial, which allows the cube to have different materials on each face
									var cubeMaterial = new THREE.MeshFaceMaterial( cubeMaterials );
									var cube = new THREE.Mesh( geometry, cubeMaterial );
										cube.position.set(293,356,1330);
										cube.rotation.z = -Math.PI / 14;
									scene.add( cube );

					   //1
					   
					   //2
					   		var geometriaCuboAde1 = new THREE.CubeGeometry(
								    120,
								    170, 
								    100
								);
								aparienciaLila.wrapS = THREE.RepeatWrapping;
								aparienciaLila.wrapT = THREE.RepeatWrapping;
								aparienciaLila.repeat.set( 1,4 );
								var material = new THREE.MeshBasicMaterial( { map: aparienciaLila } );
								material.side = THREE.DoubleSide;

								var cubo = new THREE.Mesh(geometriaCuboAde1, material);
								cubo.position.set(293,60,500);
								scene.add(cubo);

								var geometriaCuboAde1 = new THREE.CubeGeometry(
								    120,
								    210, 
								    100
								);
								aparienciaLila1.wrapS = THREE.RepeatWrapping;
								aparienciaLila1.wrapT = THREE.RepeatWrapping;
								aparienciaLila1.repeat.set( 1,4 );
								var material1 = new THREE.MeshBasicMaterial( { map: aparienciaLila1 } );
								material1.side = THREE.DoubleSide;

								var cubo1 = new THREE.Mesh(geometriaCuboAde1, material1);
								cubo1.position.set(293,250,500);;
								scene.add(cubo1);

									var geometry = new THREE.CubeGeometry( 140, 25,120 );
									var cubeMaterials =
									[
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Right side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Left side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja.jpg' ), side: THREE.DoubleSide } ), // Top side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Bottom side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Front side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ) // Back side
									];
									// Create a MeshFaceMaterial, which allows the cube to have different materials on each face
									var cubeMaterial = new THREE.MeshFaceMaterial( cubeMaterials );
									var cube = new THREE.Mesh( geometry, cubeMaterial );
										cube.position.set(293,356,500);
										cube.rotation.z = -Math.PI / 14;
									scene.add( cube );
					   //2
					   //3
					   var geometriaCuboAde1 = new THREE.CubeGeometry(
								    120,
								    170, 
								    100
								);
								aparienciaLila.wrapS = THREE.RepeatWrapping;
								aparienciaLila.wrapT = THREE.RepeatWrapping;
								aparienciaLila.repeat.set( 1,4 );
								var material = new THREE.MeshBasicMaterial( { map: aparienciaLila } );
								material.side = THREE.DoubleSide;

								var cubo = new THREE.Mesh(geometriaCuboAde1, material);
								cubo.position.set(293,60,-300);
								scene.add(cubo);

								var geometriaCuboAde1 = new THREE.CubeGeometry(
								    120,
								    210, 
								    100
								);
								aparienciaLila1.wrapS = THREE.RepeatWrapping;
								aparienciaLila1.wrapT = THREE.RepeatWrapping;
								aparienciaLila1.repeat.set( 1,4 );
								var material1 = new THREE.MeshBasicMaterial( { map: aparienciaLila1 } );
								material1.side = THREE.DoubleSide;

								var cubo1 = new THREE.Mesh(geometriaCuboAde1, material1);
								cubo1.position.set(293,250,-300);;
								scene.add(cubo1);

									var geometry = new THREE.CubeGeometry( 140, 25,120 );
									var cubeMaterials =
									[
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Right side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Left side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja.jpg' ), side: THREE.DoubleSide } ), // Top side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Bottom side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Front side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ) // Back side
									];
									// Create a MeshFaceMaterial, which allows the cube to have different materials on each face
									var cubeMaterial = new THREE.MeshFaceMaterial( cubeMaterials );
									var cube = new THREE.Mesh( geometry, cubeMaterial );
										cube.position.set(293,356,-300);
										cube.rotation.z = -Math.PI / 14;
									scene.add( cube );
					   //3
					   //4
					    var geometriaCuboAde1 = new THREE.CubeGeometry(
								    120,
								    170, 
								    100
								);
								aparienciaLila.wrapS = THREE.RepeatWrapping;
								aparienciaLila.wrapT = THREE.RepeatWrapping;
								aparienciaLila.repeat.set( 1,4 );
								var material = new THREE.MeshBasicMaterial( { map: aparienciaLila } );
								material.side = THREE.DoubleSide;

								var cubo = new THREE.Mesh(geometriaCuboAde1, material);
								cubo.position.set(293,60,-1095);
								scene.add(cubo);

								var geometriaCuboAde1 = new THREE.CubeGeometry(
								    120,
								    210, 
								    100
								);
								aparienciaLila1.wrapS = THREE.RepeatWrapping;
								aparienciaLila1.wrapT = THREE.RepeatWrapping;
								aparienciaLila1.repeat.set( 1,4 );
								var material1 = new THREE.MeshBasicMaterial( { map: aparienciaLila1 } );
								material1.side = THREE.DoubleSide;

								var cubo1 = new THREE.Mesh(geometriaCuboAde1, material1);
								cubo1.position.set(293,250,-1095);;
								scene.add(cubo1);

									var geometry = new THREE.CubeGeometry( 140, 25,120 );
									var cubeMaterials =
									[
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Right side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Left side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja.jpg' ), side: THREE.DoubleSide } ), // Top side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Bottom side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ), // Front side
										new THREE.MeshBasicMaterial( { map: new THREE.TextureLoader( ).load( 'texturas/tejas/teja_lateral.jpg' ), side: THREE.DoubleSide } ) // Back side
									];
									// Create a MeshFaceMaterial, which allows the cube to have different materials on each face
									var cubeMaterial = new THREE.MeshFaceMaterial( cubeMaterials );
									var cube = new THREE.Mesh( geometry, cubeMaterial );
										cube.position.set(293,356,-1095);
										cube.rotation.z = -Math.PI / 14;
									scene.add( cube );
					   //4
				

		}
		function suelo()
		{
				
				var aparienciaLila=THREE.ImageUtils.loadTexture('texturas/pasto/grasslight-small.jpg' );
				aparienciaLila.wrapS = THREE.RepeatWrapping;
				aparienciaLila.wrapT = THREE.RepeatWrapping;
				aparienciaLila.repeat.set( 4, 4,1 );
				var geometry = new THREE.PlaneBufferGeometry( 3000, 4000 );
				var material = new THREE.MeshBasicMaterial( { map: aparienciaLila,side:THREE.DoubleSide });

				var ground = new THREE.Mesh( geometry, material );
				ground.position.set( -380, -35, 0 );
				ground.rotation.x = -Math.PI / 2;
				scene.add( ground );

				//suelo delantero frente al templo
				var sueloPiedras = THREE.ImageUtils.loadTexture('texturas/suelo/suelo.jpg' );
				sueloPiedras.wrapS = THREE.RepeatWrapping;
				sueloPiedras.wrapT = THREE.RepeatWrapping;
				sueloPiedras.repeat.set(4,3);

				var geometrySueloPiedra = new THREE.PlaneBufferGeometry( 2000, 650 );
				var materialSueloPiedra = new THREE.MeshBasicMaterial( { map: sueloPiedras });

				var figuraTextura = new THREE.Mesh( geometrySueloPiedra, materialSueloPiedra );
				figuraTextura.position.set( 0, -19, 1660);
				figuraTextura.rotation.x = -Math.PI / 2;
				scene.add( figuraTextura );

				//suelo delantero frente al templo

				//suelo centro costado al templo  Izquierdo
				var sueloPiedrasCostadoD = THREE.ImageUtils.loadTexture('texturas/suelo/suelo.jpg' );
				sueloPiedrasCostadoD.wrapS = THREE.RepeatWrapping;
				sueloPiedrasCostadoD.wrapT = THREE.RepeatWrapping;
				sueloPiedrasCostadoD.repeat.set(1,8);

				var geometrySueloPiedraCostadoD = new THREE.PlaneBufferGeometry( 150, 2450 );
				var materialSueloPiedraCostadoD = new THREE.MeshBasicMaterial( { map: sueloPiedrasCostadoD });

				var figuraTexturaCostadoD = new THREE.Mesh( geometrySueloPiedraCostadoD, materialSueloPiedraCostadoD );
				figuraTexturaCostadoD.position.set( 250, -19, 110);
				figuraTexturaCostadoD.rotation.x = -Math.PI / 2;
				scene.add( figuraTexturaCostadoD );
				//fin costado Izquierdo
				//
				//suelo centro costado al templo   derecho
				var sueloPiedrasCostadoI = THREE.ImageUtils.loadTexture('texturas/suelo/suelo.jpg' );
				sueloPiedrasCostadoI.wrapS = THREE.RepeatWrapping;
				sueloPiedrasCostadoI.wrapT = THREE.RepeatWrapping;
				sueloPiedrasCostadoI.repeat.set(1,8);

				var geometrySueloPiedraCostadoI = new THREE.PlaneBufferGeometry( 150, 2450 );
				var materialSueloPiedraCostadoI = new THREE.MeshBasicMaterial( { map: sueloPiedrasCostadoD });

				var figuraTexturaCostadoI = new THREE.Mesh( geometrySueloPiedraCostadoI, materialSueloPiedraCostadoI );
				figuraTexturaCostadoI.position.set( -1000, -19, 110);
				figuraTexturaCostadoI.rotation.x = -Math.PI / 2;
				scene.add( figuraTexturaCostadoI );
				//fin costado derecho

		}

		function balconDelantero()
			{
					var geometriaCubo = new THREE.CubeGeometry(
					    949,
					    10, 
					    60
					);
					var aparienciaLila=THREE.ImageUtils.loadTexture('texturas/madera/madera.jpg' );
					/*var aparienciaLila = new THREE.MeshLambertMaterial({
					    color: 0x9999FF 
					});*/ 
					var material = new THREE.MeshBasicMaterial( { map: aparienciaLila } );
					var cubo = new THREE.Mesh(geometriaCubo, material);
					cubo.position.set(-380,220,1400);
					scene.add(cubo);
			}

		

			function balcondentro()
			{
					var geometriaCubo = new THREE.CubeGeometry(
					    1190,
					    10, 
					    220
					);
					var aparienciaLila=THREE.ImageUtils.loadTexture('texturas/madera/madera2.jpg' );
					var material = new THREE.MeshBasicMaterial( { map: aparienciaLila } );
					var cubo = new THREE.Mesh(geometriaCubo, material);
					cubo.position.set(-372,220,1220);
					scene.add(cubo);
			}

			

			//asientos de afuer
			function asientosFuera()
			{
					
					var Geometria=new THREE.Geometry();
					var vertices=[[2,2,0],[70,2,0],[70,35,0],[35,35,0],[35,70,0],[2,70,0]];
					

					var long_vertices=vertices.length;
					var array_extrude=[];
				
					for(i=0;i<long_vertices;i++){
							x=vertices[i][0];
							y=vertices[i][1];
							z=vertices[i][2];
							Vector=new THREE.Vector3(x,y,z);
							Geometria.vertices.push(Vector);   
							array_extrude.push(Vector);
					}

					var forma_figura=new THREE.Shape(array_extrude);
					
					var datos_extrusion={
										amount:500, //cantidad de profundidad 
										bevelEnabled:false, // activando bisel
										bevelSegments:1, // segmentos del bisel
										steps:5, // "profundidad y Núm. de segmentos que marcan la profundidad“
										bevelThickness:100 // grosor del bisel
										};
					var textura=THREE.ImageUtils.loadTexture('texturas/piedra/piedra.jpg' );
					var extrude_geometria=new THREE.ExtrudeGeometry(forma_figura,datos_extrusion);
					textura.repeat.set(0.02,0.02);
					textura.wrapS = textura.wrapT = THREE.repeatWrapping;
					var material = new THREE.MeshBasicMaterial({map:textura,side:THREE.DoubleSide,wireframe:false});
					var mallaextrusion=new THREE.Mesh(extrude_geometria,material);
					mallaextrusion.position.set(-1000,-19,1440);

					scene.add(mallaextrusion);


					
					/*
					var geometriaCuboAde = new THREE.CubeGeometry(
					    90,
					    40, 
					    900
					);
					var aparienciaLila=THREE.ImageUtils.loadTexture('texturas/piedra/img_pared.jpg' );
					aparienciaLila.wrapS = THREE.RepeatWrapping;
					aparienciaLila.wrapT = THREE.RepeatWrapping;
					aparienciaLila.repeat.set( 1,4 );
					var material = new THREE.MeshBasicMaterial( { map: aparienciaLila } );
					material.side = THREE.DoubleSide;

					var cubo = new THREE.Mesh(geometriaCuboAde, material);
					
					cubo.position.set(-960,20,1850);
					 cubo.overdraw = true;
    				cubo.castShadow = true;
					scene.add(cubo);*/
			}

			

			function palosSoporteDentro()//delantero asotea  arriba
			{
					//delantero arriba
					var geometriaCubo = new THREE.CubeGeometry(
					    1190,
					    5, 
					    15
					);
					var aparienciaLila=THREE.ImageUtils.loadTexture('texturas/madera/madera.jpg' );
					aparienciaLila.wrapS = THREE.RepeatWrapping;
					aparienciaLila.wrapT = THREE.RepeatWrapping;
					aparienciaLila.repeat.set( 1,4 );
					var materia = new THREE.MeshBasicMaterial( { map: aparienciaLila } );
					var cubo = new THREE.Mesh(geometriaCubo, materia);
					cubo.position.set(-372,260,1110);
					scene.add(cubo);
					//fin arriba
					//
					var gAsoteaArriba = new THREE.CubeGeometry(
					    1190,
					    5, 
					    15
					);
					var aparienciaLila1=THREE.ImageUtils.loadTexture('texturas/madera/madera3.jpg' );
					aparienciaLila1.wrapS = THREE.RepeatWrapping;
					aparienciaLila1.wrapT = THREE.RepeatWrapping;
					aparienciaLila1.repeat.set( 1,4 );
					var materiaAsotea = new THREE.MeshBasicMaterial( { map: aparienciaLila1 } );
					var mesAsoteaCubo = new THREE.Mesh(gAsoteaArriba, materiaAsotea);
					mesAsoteaCubo.position.set(-372,210,1130);
					scene.add(mesAsoteaCubo);
					
					//fin arriba
					//soportes verticales 
					var gAsoteaArribaPalosVerticales = new THREE.CubeGeometry(
					    10,
					    5, 
					    230
					);
					var incremento=190;
					var acumulado=0;
					for (var i =0; i <= 3; i++) {

						var aparienciaLila2=THREE.ImageUtils.loadTexture('texturas/madera/madera3.jpg' );
						aparienciaLila2.wrapS = THREE.RepeatWrapping;
						aparienciaLila2.wrapT = THREE.RepeatWrapping;
						aparienciaLila2.repeat.set( 1,4 );
						var materiaAsoteaVertical = new THREE.MeshBasicMaterial( { map: aparienciaLila2 } );
						var mesAsoteaCuboVertical = new THREE.Mesh(gAsoteaArribaPalosVerticales, materiaAsoteaVertical);
						mesAsoteaCuboVertical.position.set(-372+acumulado,210,1220);
						scene.add(mesAsoteaCuboVertical);
						acumulado =acumulado+incremento;
					}
					//fin soportes verticales 



			}
			function paredesContornoTemplo()
				{
						//pared contono Izquierda delantera
						var Geometria=new THREE.Geometry();
						var vertices=[[2,2,0],[70,2,0],[70,35,0],[35,35,0],[35,150,0],[2,150,0]];
						var long_vertices=vertices.length;
						var array_extrude=[];
					
						for(i=0;i<long_vertices;i++){
								x=vertices[i][0];
								y=vertices[i][1];
								z=vertices[i][2];
								Vector=new THREE.Vector3(x,y,z);
								Geometria.vertices.push(Vector);   
								array_extrude.push(Vector);
						}

						var forma_figura=new THREE.Shape(array_extrude);
						
						var datos_extrusion={
											amount:1300, //cantidad de profundidad 
											bevelEnabled:false, // activando bisel
											bevelSegments:1, // segmentos del bisel
											steps:5, // "profundidad y Núm. de segmentos que marcan la profundidad“
											bevelThickness:100 // grosor del bisel
											};
						var textura=THREE.ImageUtils.loadTexture('texturas/piedra/piedra.jpg' );
						var extrude_geometria=new THREE.ExtrudeGeometry(forma_figura,datos_extrusion);
						textura.repeat.set(0.02,0.02);
						textura.wrapS = textura.wrapT = THREE.repeatWrapping;
						var material = new THREE.MeshBasicMaterial({map:textura,side:THREE.DoubleSide,wireframe:false});
						var mallaextrusion=new THREE.Mesh(extrude_geometria,material);
						mallaextrusion.position.set(-1900,-19,2010);
						mallaextrusion.rotation.x = -Math.PI/128;
						mallaextrusion.rotation.y = Math.PI/2 ;
						scene.add(mallaextrusion);	

						//Fin parede Izquierda
						// parede derecha delantera

						var Geometria=new THREE.Geometry();
						var vertices=[[2,2,0],[70,2,0],[70,35,0],[35,35,0],[35,150,0],[2,150,0]];
						

						var long_vertices=vertices.length;
						var array_extrude=[];
					
						for(i=0;i<long_vertices;i++){
								x=vertices[i][0];
								y=vertices[i][1];
								z=vertices[i][2];
								Vector=new THREE.Vector3(x,y,z);
								Geometria.vertices.push(Vector);   
								array_extrude.push(Vector);
						}

						var forma_figura=new THREE.Shape(array_extrude);
						
						var datos_extrusion={
											amount:1300, //cantidad de profundidad 
											bevelEnabled:false, // activando bisel
											bevelSegments:1, // segmentos del bisel
											steps:5, // "profundidad y Núm. de segmentos que marcan la profundidad“
											bevelThickness:100 // grosor del bisel
											};
						var textura=THREE.ImageUtils.loadTexture('texturas/piedra/piedra.jpg' );
						var extrude_geometria=new THREE.ExtrudeGeometry(forma_figura,datos_extrusion);
						textura.repeat.set(0.02,0.02);
						textura.wrapS = textura.wrapT = THREE.repeatWrapping;
						var material = new THREE.MeshBasicMaterial({map:textura,side:THREE.DoubleSide,wireframe:false});
						var mallaextrusion=new THREE.Mesh(extrude_geometria,material);
						mallaextrusion.position.set(-200,-19,2010);
						mallaextrusion.rotation.x = -Math.PI/128;
						mallaextrusion.rotation.y = Math.PI/2 ;
						scene.add(mallaextrusion);	

						 //fin parede derecha
						  //pared costado derecha

						var Geometria=new THREE.Geometry();
						var vertices=[[2,2,0],[50,2,0],[50,80,0],[2,80,0]];
						

						var long_vertices=vertices.length;
						var array_extrude=[];
					
						for(i=0;i<long_vertices;i++){
								x=vertices[i][0];
								y=vertices[i][1];
								z=vertices[i][2];
								Vector=new THREE.Vector3(x,y,z);
								Geometria.vertices.push(Vector);   
								array_extrude.push(Vector);
						}

						var forma_figura=new THREE.Shape(array_extrude);
						
						var datos_extrusion={
											amount:4000, //cantidad de profundidad 
											bevelEnabled:false, // activando bisel
											bevelSegments:1, // segmentos del bisel
											steps:5, // "profundidad y Núm. de segmentos que marcan la profundidad“
											bevelThickness:100 // grosor del bisel
											};
						var textura=THREE.ImageUtils.loadTexture('texturas/piedra/piedra.jpg' );
						var extrude_geometria=new THREE.ExtrudeGeometry(forma_figura,datos_extrusion);
						textura.repeat.set(0.02,0.02);
						textura.wrapS = textura.wrapT = THREE.repeatWrapping;
						var material = new THREE.MeshBasicMaterial({map:textura,side:THREE.DoubleSide,wireframe:false});
						var mallaextrusion=new THREE.Mesh(extrude_geometria,material);
						mallaextrusion.position.set(1090,-19,-1995);
						scene.add(mallaextrusion);	

						 //fin parede derecha
						 //
						  //pared costado izquierda

						var Geometria=new THREE.Geometry();
						var vertices=[[2,2,0],[50,2,0],[50,180,0],[2,180,0]];
						

						var long_vertices=vertices.length;
						var array_extrude=[];
					
						for(i=0;i<long_vertices;i++){
								x=vertices[i][0];
								y=vertices[i][1];
								z=vertices[i][2];
								Vector=new THREE.Vector3(x,y,z);
								Geometria.vertices.push(Vector);   
								array_extrude.push(Vector);
						}

						var forma_figura=new THREE.Shape(array_extrude);
						
						var datos_extrusion={
											amount:4000, //cantidad de profundidad 
											bevelEnabled:false, // activando bisel
											bevelSegments:1, // segmentos del bisel
											steps:5, // "profundidad y Núm. de segmentos que marcan la profundidad“
											bevelThickness:100 // grosor del bisel
											};
						var textura=THREE.ImageUtils.loadTexture('texturas/piedra/piedra.jpg' );
						var extrude_geometria=new THREE.ExtrudeGeometry(forma_figura,datos_extrusion);
						textura.repeat.set(0.02,0.02);
						textura.wrapS = textura.wrapT = THREE.repeatWrapping;
						var material = new THREE.MeshBasicMaterial({map:textura,side:THREE.DoubleSide,wireframe:false});
						var mallaextrusion=new THREE.Mesh(extrude_geometria,material);
						mallaextrusion.position.set(-1905,-19,-1995);
						scene.add(mallaextrusion);	

						 //fin parede derecha
						 
				}

		function onWindowResize() {

			var width = window.innerWidth, height = window.innerHeight;

			camera.aspect = width / height;
			camera.updateProjectionMatrix();

			renderer.setSize( width, height );

			if ( rtTexture ) rtTexture.setSize( width, height );

		}

		function animate() {

			var delta = clock.getDelta();
			for (var i = 0; i < meshes.length; i++ ){
				
				var mesh = meshes[i]; 
				mesh.material.updateFrame( delta );
			
			}

			renderer.render( scene, camera );

			requestAnimationFrame( animate );

		}
		var inicio = new Date;

	function tiempo_carga(){
	var fin = new Date;
	var segundos = (fin-inicio)/1000;
	var salida = "La pagina ha sido cargada en "+segundos +" segundos";
	console.log(salida);
	document.getElementById("tiempoCarga").innerHTML = salida;
	}

	onload=function() {tiempo_carga();}
		</script>
@stop