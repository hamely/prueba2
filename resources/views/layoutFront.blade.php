<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	<title>Spaziour Apurímac</title>
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


	<link href="{{ asset("plugins/revo-slider/css/settings.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/revo-slider/css/layers.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/revo-slider/css/navigation.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/cubeportfolio/css/cubeportfolio.min.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/owl-carousel/assets/owl.carousel.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/fancybox/jquery.fancybox.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("plugins/slider-for-bootstrap/css/slider.css")}}" rel="stylesheet" type="text/css" />

	<link href="{{ asset("css/plugins.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("css/components.css")}}" id="style_components" rel="stylesheet" type="text/css" />
	<link href="{{ asset("css/themes/default.css")}}" rel="stylesheet" id="style_theme" type="text/css" />
	<link href="{{ asset("css/custom.css")}}" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="{{ asset("js/jssor.slider.min.js") }}"></script>
</head>

<script type="text/javascript">
	jQuery(document).ready(function ($) {

		var jssor_1_SlideshowTransitions = [
		{$Duration:500,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
		{$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
		{$Duration:1000,x:-1,y:2,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.85}},
		{$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
		{$Duration:1000,x:4,y:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
		{$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
		{$Duration:1000,x:-3,y:1,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
		{$Duration:1000,x:0.5,y:0.5,$Zoom:1,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.5}},
		{$Duration:1200,x:-0.6,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:$Jease$.$Swing,$Opacity:2,$Round:{$Rotate:0.5}},
		{$Duration:1500,y:-0.5,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Easing:$Jease$.$InWave,$Round:{$Top:1.5}},
		{$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:$Jease$.$InQuad},
		{$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
		];

		var jssor_1_SlideoTransitions = [
		[{b:-1,d:1,o:-1},{b:0,d:1200,y:300,o:1,e:{y:24,o:6}},{b:5600,d:800,y:-200,o:-1,e:{y:5}}],
		[{b:-1,d:1,o:-1},{b:400,d:800,x:200,o:1,e:{x:27,o:6}},{b:5600,d:800,x:-200,o:-1,e:{x:5}}],
		[{b:-1,d:1,o:-1},{b:400,d:800,x:-200,o:1,e:{x:27,o:6}},{b:5600,d:800,x:200,o:-1,e:{x:5}}],
		[{b:-1,d:1,o:-1},{b:1600,d:600,x:200,y:-230,o:1,e:{x:3,y:3}},{b:5600,d:800,o:-1}],
		[{b:4600,d:960,x:-204,e:{x:1}}],
		[{b:-1,d:1,sX:-1,sY:-1},{b:3400,d:400,sX:1,sY:1},{b:3800,d:300,o:-1,sX:0.1,sY:0.1}],
		[{b:-1,d:1,sX:-1,sY:-1},{b:3520,d:400,sX:1,sY:1},{b:3920,d:300,o:-1,sX:0.1,sY:0.1}],
		[{b:-1,d:1,o:-1},{b:2200,d:1200,x:-135,y:-24,o:1,e:{x:7,y:7}},{b:4600,d:640,x:-130,e:{x:1}}],
		[{b:-1,d:1,o:-1},{b:4600,d:240,x:-75,o:1},{b:4840,d:480,x:-150},{b:5320,d:240,x:-75,o:-1}],
		[{b:2800,d:600,y:70,sX:-0.5,sY:-0.5,e:{y:5}},{b:6000,d:600,y:50,r:-10},{b:7000,d:400,o:-1,rX:10,rY:-10}],
		[{b:0,d:600,x:-742,sX:4,sY:4,e:{x:6}},{b:900,d:600,sX:-4,sY:-4}],
		[{b:-1,d:1,o:-1},{b:400,d:500,o:1,e:{o:5}}],
		[{b:-1,d:1,o:-1,r:-180},{b:1500,d:500,o:1,r:180,e:{r:27}}],
		[{b:-1,d:1,o:-1,r:180},{b:2000,d:500,o:1,r:-180,e:{r:27}}],
		[{b:2800,d:600,y:-270,e:{y:6}}],
		[{b:6000,d:600,y:-100,r:-10,e:{y:6}},{b:7000,d:400,o:-1,rX:-10,rY:10}],
		[{b:-1,d:1,sX:-1,sY:-1},{b:3400,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:3800,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
		[{b:-1,d:1,o:-1},{b:3400,d:600,o:1},{b:4000,d:1000,r:360,e:{r:1}}],
		[{b:-1,d:1,o:-1},{b:3400,d:600,y:-70,o:1,e:{y:27}}],
		[{b:-1,d:1,sX:-1,sY:-1},{b:3700,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:4100,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
		[{b:-1,d:1,o:-1},{b:3700,d:600,o:1},{b:4300,d:1000,r:360}],
		[{b:-1,d:1,o:-1},{b:3700,d:600,x:-150,o:1,e:{x:27}}],
		[{b:-1,d:1,sX:-1,sY:-1},{b:4000,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:4400,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
		[{b:-1,d:1,o:-1},{b:4000,d:600,o:1},{b:4600,d:1000,r:360}],
		[{b:-1,d:1,o:-1},{b:4000,d:600,x:150,o:1,e:{x:27}}],
		[{b:9300,d:600,o:-1,r:540,sX:-0.5,sY:-0.5,e:{r:5}}],
		[{b:-1,d:1,o:-1,sX:2,sY:2},{b:6880,d:20,o:1},{b:6900,d:300,sX:-2.08,sY:-2.08,e:{sX:27,sY:27}},{b:7200,d:240,sX:0.08,sY:0.08}],
		[{b:-1,d:1,o:-1,sX:5,sY:5},{b:6300,d:600,o:1,sX:-5,sY:-5}],
		[{b:-1,d:1,o:-1},{b:7200,d:440,o:1}],
		[{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7420,d:20,o:1},{b:7440,d:200,r:180,sX:0.4,sY:0.4},{b:7640,d:200,r:180,sX:0.5,sY:0.5}],
		[{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:7620,d:20,o:1},{b:7640,d:300,r:60,sX:1.1,sY:1.1},{b:7940,d:160,sX:-0.2,sY:-0.2}],
		[{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7920,d:20,o:1},{b:7940,d:300,sX:1.4,sY:1.4},{b:8240,d:160,sX:-0.5,sY:-0.5}],
		[{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7620,d:20,o:1},{b:7640,d:200,r:180,sX:0.4,sY:0.4},{b:7840,d:200,r:180,sX:0.5,sY:0.5}],
		[{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:7820,d:20,o:1},{b:7840,d:300,r:60,sX:1.1,sY:1.1},{b:8140,d:160,sX:-0.2,sY:-0.2}],
		[{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8120,d:20,o:1},{b:8140,d:300,sX:1.4,sY:1.4},{b:8440,d:160,sX:-0.5,sY:-0.5}],
		[{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:7820,d:20,o:1},{b:7840,d:200,r:180,sX:0.4,sY:0.4},{b:8040,d:200,r:180,sX:0.5,sY:0.5}],
		[{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8020,d:20,o:1},{b:8040,d:300,r:60,sX:1.1,sY:1.1},{b:8340,d:160,sX:-0.2,sY:-0.2}],
		[{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8320,d:20,o:1},{b:8340,d:300,sX:1.4,sY:1.4},{b:8640,d:160,sX:-0.5,sY:-0.5}],
		[{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8020,d:20,o:1},{b:8040,d:200,r:180,sX:0.4,sY:0.4},{b:8240,d:200,r:180,sX:0.5,sY:0.5}],
		[{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8220,d:20,o:1},{b:8240,d:300,r:60,sX:1.1,sY:1.1},{b:8540,d:160,sX:-0.2,sY:-0.2}],
		[{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8520,d:20,o:1},{b:8540,d:300,sX:1.4,sY:1.4},{b:8840,d:160,sX:-0.5,sY:-0.5}],
		[{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8220,d:20,o:1},{b:8240,d:200,r:180,sX:0.4,sY:0.4},{b:8440,d:200,r:180,sX:0.5,sY:0.5}],
		[{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8420,d:20,o:1},{b:8440,d:300,r:60,sX:1.1,sY:1.1},{b:8740,d:160,sX:-0.2,sY:-0.2}],
		[{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8720,d:20,o:1},{b:8740,d:300,sX:1.4,sY:1.4},{b:9040,d:160,sX:-0.5,sY:-0.5}],
		[{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8220,d:20,o:1},{b:8240,d:200,r:180,sX:0.4,sY:0.4},{b:8440,d:200,r:180,sX:0.5,sY:0.5}],
		[{b:-1,d:1,o:-1,r:-60,sX:-0.9,sY:-0.9},{b:8420,d:20,o:1},{b:8440,d:300,r:60,sX:1.1,sY:1.1},{b:8740,d:160,sX:-0.2,sY:-0.2}],
		[{b:-1,d:1,o:-1,sX:-0.9,sY:-0.9},{b:8720,d:20,o:1},{b:8740,d:300,sX:1.4,sY:1.4},{b:9040,d:160,sX:-0.5,sY:-0.5}],
		[{b:-1,d:1,sX:-0.2,sY:-0.2},{b:0,d:400,y:330,e:{y:1}},{b:900,d:400,y:50,rX:80,e:{y:1,rX:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
		[{b:-1,d:1,o:-0.5},{b:900,d:400,o:-0.5}],
		[{b:-1,d:1,sX:-0.2,sY:-0.2},{b:1700,d:400,y:310,e:{y:1}},{b:2600,d:400,y:50,rX:80,e:{y:1,rX:1}},{b:19700,d:1000,y:20,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
		[{b:19700,d:1000,o:-1}],
		[{b:-1,d:1,o:-0.5},{b:2600,d:400,o:-0.5}],
		[{b:-1,d:1,sX:-0.2,sY:-0.2},{b:3400,d:400,y:290,e:{y:1}},{b:4800,d:400,y:50,rX:80,e:{y:1,rX:1}},{b:19700,d:1000,y:40,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
		[{b:19700,d:1000,o:-1}],
		[{b:-1,d:1,c:{t:-280}},{b:3800,d:100,c:{t:50.40},e:{c:{t:32}}},{b:3900,d:100,c:{t:33.60},e:{c:{t:32}}},{b:4000,d:100,c:{t:30.80},e:{c:{t:32}}},{b:4100,d:100,c:{t:30.80},e:{c:{t:32}}},{b:4200,d:100,c:{t:33.60},e:{c:{t:32}}},{b:4300,d:100,c:{t:22.40},e:{c:{t:32}}},{b:4400,d:100,c:{t:28.00},e:{c:{t:32}}},{b:4500,d:100,c:{t:50.40},e:{c:{t:32}}}],
		[{b:-1,d:1,o:-0.5},{b:4800,d:400,o:-0.5}],
		[{b:-1,d:1,sX:-0.2,sY:-0.2},{b:5700,d:400,y:270,e:{y:1}},{b:6600,d:400,y:50,rX:40,e:{y:1,rX:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
		[{b:19700,d:1000,o:-1}],
		[{b:6600,d:400,o:-0.2},{b:14700,d:500,o:-0.8}],
		[{b:-1,d:1,o:-0.5},{b:14700,d:500,o:-0.5}],
		[{b:-1,d:1,sX:-0.2,sY:-0.2},{b:7500,d:400,y:270,e:{y:1}},{b:8400,d:400,y:50,rX:40,e:{y:1,rX:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
		[{b:8400,d:400,o:-1}],
		[{b:-1,d:1,o:-0.5},{b:8400,d:400,o:-0.5}],
		[{b:-1,d:1,sX:-0.2,sY:-0.2},{b:9300,d:400,y:270,e:{y:1}},{b:10200,d:400,y:50,rX:40,e:{y:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
		[{b:10200,d:400,o:-1}],
		[{b:-1,d:1,o:-0.5},{b:10200,d:400,o:-0.5}],
		[{b:-1,d:1,sX:-0.2,sY:-0.2},{b:11100,d:400,y:270,e:{y:1}},{b:12000,d:400,y:50,rX:40,e:{y:1,rX:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
		[{b:12000,d:400,o:-1}],
		[{b:-1,d:1,o:-0.5},{b:12000,d:400,o:-0.5}],
		[{b:-1,d:1,sX:-0.2,sY:-0.2},{b:12900,d:400,y:270,e:{y:1}},{b:13800,d:400,y:50,rX:40,e:{y:1,rX:1}},{b:14700,d:500,rX:40,e:{rX:1}},{b:19700,d:1000,y:60,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
		[{b:13800,d:400,o:-1}],
		[{b:-1,d:1,o:-0.5},{b:13800,d:400,o:-0.5}],
		[{b:-1,d:1,sX:-0.2,sY:-0.2},{b:15700,d:400,y:270,e:{y:1}},{b:18800,d:400,y:30,rX:80,e:{y:1,rX:1}},{b:19700,d:1000,y:80,e:{y:1}},{b:20700,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:22700,d:900,y:25,o:-1,rX:60}],
		[{b:19700,d:1000,o:-1}],
		[{b:-1,d:1,o:-0.5},{b:18800,d:400,o:-0.5}],
		[{b:-1,d:1,o:-1},{b:16100,d:300,o:1},{b:16400,d:500,x:-238,e:{x:6}}],
		[{b:-1,d:1,o:-1},{b:16100,d:300,o:1},{b:16400,d:500,x:238,e:{x:6}}],
		[{b:-1,d:1,o:-1},{b:16700,d:400,y:200,o:1,e:{y:2,o:6}},{b:17100,d:300,y:-28,e:{y:3}},{b:17400,d:300,y:28,e:{y:2}}],
		[{b:-1,d:1,o:-1},{b:16900,d:400,y:200,o:1,e:{y:2,o:6}},{b:17300,d:300,y:-28,e:{y:3}},{b:17600,d:300,y:28,e:{y:2}}],
		[{b:-1,d:1,o:-1},{b:17100,d:400,y:200,o:1,e:{y:2,o:6}},{b:17500,d:300,y:-28,e:{y:3}},{b:17800,d:300,y:28,e:{y:2}}],
		[{b:-1,d:1,o:-1},{b:17300,d:400,y:200,o:1,e:{y:2,o:6}},{b:17700,d:300,y:-28,e:{y:3}},{b:18000,d:300,y:28,e:{y:2}}]
		];

		var jssor_1_options = {
			$AutoPlay: 1,
			$SlideDuration: 800,
			$SlideEasing: $Jease$.$OutQuint,
			$SlideshowOptions: {
				$Class: $JssorSlideshowRunner$,
				$Transitions: jssor_1_SlideshowTransitions,
				$TransitionsOrder: 1
			},
			$CaptionSliderOptions: {
				$Class: $JssorCaptionSlideo$,
				$Transitions: jssor_1_SlideoTransitions,
				$Breaks: [
				[{d:2000,b:5600,t:2}],
				[{d:2000,b:9300,t:2}],
				[{d:2000,b:22700}]
				]
			},
			$ArrowNavigatorOptions: {
				$Class: $JssorArrowNavigator$
			},
			$BulletNavigatorOptions: {
				$Class: $JssorBulletNavigator$
			}
		};

		var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);


		var MAX_WIDTH = 1400;

		function ScaleSlider() {
			var containerElement = jssor_1_slider.$Elmt.parentNode;
			var containerWidth = containerElement.clientWidth;

			if (containerWidth) {

				var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

				jssor_1_slider.$ScaleWidth(expectedWidth);
			}
			else {
				window.setTimeout(ScaleSlider, 30);
			}
		}

		ScaleSlider();

		$(window).bind("load", ScaleSlider);
		$(window).bind("resize", ScaleSlider);
		$(window).bind("orientationchange", ScaleSlider);
	});


</script>
<style>
.jssorl-009-spin img {
	animation-name: jssorl-009-spin;
	animation-duration: 1.6s;
	animation-iteration-count: infinite;
	animation-timing-function: linear;
}

@keyframes jssorl-009-spin {
	from {
		transform: rotate(0deg);
	}

	to {
		transform: rotate(360deg);
	}
}


.jssorb101 .i {position:absolute;cursor:pointer;}
.jssorb101 .i .ci {fill:#000;}
.jssorb101 .i .co {fill:#fff;opacity:.3;}
.jssorb101 .i:hover .co {fill:#ff9933;opacity: 1;}
.jssorb101 .i:hover .ci {fill:#fff;}
.jssorb101 .iav .ci {fill:#fff;stroke-width:0;}
.jssorb101 .iav .co {fill:#46d1d3;opacity: 1;}
.jssorb101 .i.idn {opacity:.3;}

.jssora051 {display:block;position:absolute;cursor:pointer;}
.jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
.jssora051:hover {opacity:.8;}
.jssora051.jssora051dn {opacity:.5;}
.jssora051.jssora051ds {opacity:.3;pointer-events:none;}

.border-button:hover { border-width: 10px; }
</style>

 <body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen">
        
	<?php function activeMenu($url)
	{
		return request()->is($url) ? 'c-active' : '';
	} ?>
        <header class="c-layout-header c-layout-header-4 c-bordered c-layout-header-default-mobile c-header-transparent-dark" data-minimize-offset="80" style="margin-top: -10px;background:#003346;color:#004353">
            <div class="c-navbar">
                <div class="container-fluid">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="" class="c-logo">
                                <img src="{{URL::asset('/img/layout/logos/logo.png')}}" alt="spaziour" class="c-desktop-logo">
                                <img src="{{URL::asset('/img/layout/logos/logo.png')}}" alt="spaziour" class="c-desktop-logo-inverse">
                                <img src="{{URL::asset('/img/layout/logos/logo.png')}}" alt="spaziour" class="c-mobile-logo"> </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                            <button class="c-topbar-toggler" type="button">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <button class="c-search-toggler" type="button">
                            </button>
                            <button class="c-cart-toggler" type="button">
                            </button>
                        </div>
                        <form class="c-quick-search" action="#">
                            <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                            <span class="c-theme-link">&times;</span>
                        </form>
                     
                        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li class="{{activeMenu('/')}}">
                                    <a href="{{ route('inicio')}}" class="c-link dropdown-toggle">Inicio
                                    </a>
                                    
                                </li>
                                <li class="{{ activeMenu('nosotros')  }}">
                                    <a href="{{ route('nosotros') }}" class="c-link dropdown-toggle">Nosotros
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                </li>
                                <li id="sunMenuServicios">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Servicios
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu" id="subMenuS">
                                            <a href="{{route('disenioWeb')}}">DIseños Paginas Web
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu" id="subMenuS">
                                            <a href="{{route('disenioLogotipos')}}">Diseños de logotipos
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li class="{{ activeMenu('trabajos')  }}">
                                    <a href="{{ route('trabajos') }}" class="c-link dropdown-toggle">Trabajos
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                </li>
                                <li class="{{ activeMenu('clientes')  }}">
                                    <a href="{{ route('clientes') }}" class="c-link dropdown-toggle">Clientes
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                </li>
                                 <li class="{{ activeMenu('blog')  }}">
                                    <a href="{{ route('blog') }}" class="c-link dropdown-toggle">Blog
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                </li>
                                 <li class= "{{ activeMenu('mensajes/create') }}" >
                                    <a href="{{ route('mensajes.create')}}" class="c-link dropdown-toggle">Contactos
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                </li>
                             
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </header>
        
        <div class="c-layout-page">

            @yield('slider')
      
		</div>
            <div class="c-content-box c-size-md c-bg-white">
	 			 @yield('contenido')

            </div>
		
        </div>

        <a name="footer"></a>
        <footer style="background: #001D29;padding: 10px; ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <dt>CONTÁCTENOS</dt>
                         <dt>Dirección: </dt><p>Av. Tamburco
						 <dt>Celular:</dt> 945773633</p>
                    </div>
                    <div class="col-md-6">

                    </div>
                    </div>
                </div>
                <div class="c-copyright" style="margin-left: 92px;">
                    Copyright spaziour.com
                </div>
            </div>
        </footer>


			<script src="{{ asset("plugins/jquery.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/jquery-migrate.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/jquery.easing.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/reveal-animate/wow.js")}}" type="text/javascript"></script>
			<script src="{{ asset("js/scripts/reveal-animate/reveal-animate.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/jquery.themepunch.tools.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/jquery.themepunch.revolution.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/extensions/revolution.extension.video.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/cubeportfolio/js/jquery.cubeportfolio.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/owl-carousel/owl.carousel.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/counterup/jquery.waypoints.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/counterup/jquery.counterup.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/fancybox/jquery.fancybox.pack.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/smooth-scroll/jquery.smooth-scroll.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/slider-for-bootstrap/js/bootstrap-slider.js")}}" type="text/javascript"></script>

			<script src="{{ asset("js/components.js")}}" type="text/javascript"></script>
			<script src="{{ asset("js/components-shop.js")}}" type="text/javascript"></script>
			<script src="{{ asset("js/app.js")}}" type="text/javascript"></script>

			<script src="{{ asset("plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js")}}" type="text/javascript"></script>
			<script src="{{ asset("js/scripts/revo-slider/slider-14.js")}}" type="text/javascript"></script>

			@yield('script')
</body>
</html>
