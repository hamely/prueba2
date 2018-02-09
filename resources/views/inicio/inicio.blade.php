@extends('layoutFront')
@section('headerScrip')
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

@stop
@section('slider')
  <div   id="jssor_1" style="position:relative;margin:0 auto;top:55px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;margin-top: 18px;">

		<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
			<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{URL::asset('svg/loading/static-svg/spin.svg')}}" />
		</div>
		<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
			<div data-b="0">
				<img data-u="image" src="{{URL::asset('/img/content/inicio/04.jpg')}}" />
				<div style="position:absolute;top:77px;left:460px;width:460px;height:210px;z-index:0;">
					<img data-u="caption" data-t="0" style="position:absolute;top:-300px;left:89px;width:210px;height:178px;z-index:0;" src="{{URL::asset('img/content/inicio/mock-pc.png')}}" />
					<img data-u="caption" data-t="1" style="position:absolute;top:55px;left:-200px;width:114px;height:144px;z-index:0;" src="{{URL::asset('/img/content/inicio/mock-ipad.png')}}" />
					<img data-u="caption" data-t="2" style="position:absolute;top:88px;left:420px;width:219px;height:120px;z-index:0;" src="{{URL::asset('/img/content/inicio/mock-laptop.png')}}" />
				</div>
				<div data-u="caption" data-t="3" data-to="0% 100%" style="position:absolute;top:385px;left:-100px;width:257px;height:127px;z-index:0;">
					<div style="position:absolute;top:4px;left:34px;width:198px;height:112px;z-index:0; overflow:hidden;">
						<img data-u="caption" data-t="4" style="position:absolute;top:-2px;left:-2px;width:408px;height:116px;z-index:0;" src="{{URL::asset('/img/present/02/mock-phone-slider-flat.jpg')}}" />
					</div>
					<img style="position:absolute;top:0px;left:0px;width:257px;height:127px;z-index:0;" src="{{URL::asset('/img/present/02/mock-phone.png')}}" />
					<img data-u="caption" data-t="5" style="position:absolute;top:22px;left:139px;width:108px;height:108px;z-index:0;" src="{{URL::asset('/img/present/02/circle-hollow.png')}}" />
					<img data-u="caption" data-t="6" style="position:absolute;top:31px;left:148px;width:90px;height:90px;z-index:0;" src="{{URL::asset('/img/present/02/circle-solid.png')}}" />
					<img data-u="caption" data-t="7" style="position:absolute;top:100px;left:300px;width:63px;height:77px;z-index:0;" src="{{URL::asset('/img/present/02/hand.png')}}" />
					<img data-u="caption" data-t="8" style="position:absolute;top:-44px;left:255px;width:75px;height:20px;z-index:0;" src="{{URL::asset('/img/present/02/swipe-arrow.png')}}" />
				</div>
				<a href="http://www.jssor.com/help/slideshow-transitions.html" target="_blank" style="display:block; position:absolute;top:22px;left:600px;width:320px;height:36px;z-index:0;font-size:22px;color:#000;line-height:36px;">Grandes ideas, grandes resultados.</a>
			</div>
			<div data-b="1" data-p="170.00">
				<img data-u="image" src="{{URL::asset('/img/present/02.jpg')}}" />
				<div data-u="caption" data-t="9" data-3d="1" style="position:absolute;top:150px;left:-36px;width:1053px;height:150px;z-index:0;">
					<div data-u="caption" data-t="10" data-to="100% 50%" style="position:absolute;top:0px;left:1030px;width:72px;height:72px;z-index:0;background-color:#eb9434;">
						<div data-u="caption" data-t="11" style="position:absolute;top:0px;left:0px;width:72px;height:72px;z-index:0;font-size:46px;color:#ffffff;line-height:72px;text-align:center;">MO

						</div>
					</div>
					<div data-u="caption" data-t="13" data-to="0% 50%" style="position:absolute;top:0px;left:360px;width:175px;height:72px;z-index:0;background-color:#eb9434;font-size:45px;color:#ffffff;line-height:72px;text-align:center;">DELADO

					</div>
					<div data-u="caption" data-t="13" data-to="0% 50%" style="position:absolute;top:0px;left:535px;width:230px;height:72px;z-index:0;background-color:#eb9434;font-size:45px;color:#ffffff;line-height:72px;text-align:center;"> EN  3D

					</div>
					<div data-u="caption" data-t="14" style="position:absolute;top:360px;left:238px;width:577px;height:30px;z-index:0;font-size:24px;color:#ffffff;line-height:30px;text-align:center;">Templos Coloniales de Apurímac</div>
				</div>
				<div data-u="caption" data-t="15" data-3d="1" style="position:absolute;top:70px;left:182px;width:616px;height:150px;z-index:0;">
					<img data-u="caption" data-t="16" style="position:absolute;top:22px;left:266px;width:84px;height:84px;z-index:0;" src="{{URL::asset('/img/present/03/ios.png')}}" />
					<img data-u="caption" data-t="17" style="position:absolute;top:16px;left:260px;width:96px;height:96px;z-index:0;" src="{{URL::asset('/img/present/03/circle.png')}}" />
					<div data-u="caption" data-t="18" style="position:absolute;top:195px;left:260px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:30px;text-align:center;">Templo Chuquinga</div>
					<img data-u="caption" data-t="19" style="position:absolute;top:22px;left:22px;width:84px;height:84px;z-index:0;" src="{{URL::asset('/img/present/03/android.png')}}" />
					<img data-u="caption" data-t="20" style="position:absolute;top:16px;left:16px;width:96px;height:96px;z-index:0;" src="{{URL::asset('/img/present/03/circle.png')}}" />
					<div data-u="caption" data-t="21" style="position:absolute;top:125px;left:166px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:30px;text-align:center;">San Pedro de Andahuaylas </div>
					<img data-u="caption" data-t="22" style="position:absolute;top:22px;left:510px;width:84px;height:84px;z-index:0;" src="{{URL::asset('/img/present/03/windows.png')}}" />
					<img data-u="caption" data-t="23" style="position:absolute;top:16px;left:504px;width:96px;height:96px;z-index:0;" src="{{URL::asset('/img/present/03/circle.png')}}" />
					<div data-u="caption" data-t="24" style="position:absolute;top:125px;left:354px;width:96px;height:30px;z-index:0;font-size:18px;color:#ffffff;line-height:30px;text-align:center;">Templo Colonial de Cocharcas </div>
				</div>
				<div style="position:absolute;top:20px;left:327px;width:336px;height:312px;z-index:0;">
					<div data-u="caption" data-t="25" style="position:absolute;top:82px;left:104px;width:128px;height:147px;z-index:0;">
						<img data-u="caption" data-t="26" style="position:absolute;top:0px;left:0px;width:128px;height:147px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow-big.png')}}" />
						<img data-u="caption" data-t="27" style="position:absolute;top:9px;left:8px;width:112px;height:129px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid-yellow.png')}}" />
						<div data-u="caption" data-t="28" style="position:absolute;top:20px;left:0px;width:128px;height:90px;z-index:0;font-size:15px;line-height:30px;text-align:center;">PARA
							<br />
							TODOS 
							<br />
							NAVEGADORES
						</div>
					</div>
					<div style="position:absolute;top:0px;left:187px;width:90px;height:104px;z-index:0;">
						<img data-u="caption" data-t="29" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow.png')}}" />
						<img data-u="caption" data-t="30" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid.png')}}" />
						<img data-u="caption" data-t="31" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="{{URL::asset('/img/present/03/opera.png')}}" />
					</div>
					<div style="position:absolute;top:104px;left:246px;width:90px;height:104px;z-index:0;">
						<img data-u="caption" data-t="32" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow.png')}}" />
						<img data-u="caption" data-t="33" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid.png')}}" />
						<img data-u="caption" data-t="34" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="{{URL::asset('/img/present/03/firefox.png')}}" />
					</div>
					<div style="position:absolute;top:208px;left:187px;width:90px;height:104px;z-index:0;">
						<img data-u="caption" data-t="35" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow.png')}}" />
						<img data-u="caption" data-t="36" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid.png')}}" />
						<img data-u="caption" data-t="37" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="{{URL::asset('/img/present/03/ie.png')}}" />
					</div>
					<div style="position:absolute;top:208px;left:59px;width:90px;height:104px;z-index:0;">
						<img data-u="caption" data-t="38" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow.png')}}" />
						<img data-u="caption" data-t="39" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid.png')}}" />
						<img data-u="caption" data-t="40" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="{{URL::asset('/img/present/03/edge.png')}}" />
					</div>
					<div style="position:absolute;top:104px;left:0px;width:90px;height:104px;z-index:0;">
						<img data-u="caption" data-t="41" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow.png')}}" />
						<img data-u="caption" data-t="42" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid.png')}}" />
						<img data-u="caption" data-t="43" style="position:absolute;top:33px;left:26px;width:38px;height:38px;z-index:0;" src="{{URL::asset('/img/present/03/safari.png')}}" />
					</div>
					<div style="position:absolute;top:0px;left:59px;width:90px;height:104px;z-index:0;">
						<img data-u="caption" data-t="44" style="position:absolute;top:0px;left:0px;width:90px;height:104px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-hollow.png')}}" />
						<img data-u="caption" data-t="45" style="position:absolute;top:8px;left:7px;width:76px;height:88px;z-index:0;" src="{{URL::asset('/img/present/03/hexagon-solid.png')}}" />
						<img data-u="caption" data-t="46" style="position:absolute;top:33px;left:28px;width:38px;height:38px;z-index:0;" src="{{URL::asset('/img/present/03/chrome.png')}}" />
					</div>
				</div>
			</div>

		</div>
		<!-- Bullet Navigator -->
		<div data-u="navigator" class="jssorb101" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
			<div data-u="prototype" class="i" style="width:16px;height:16px;">
				<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					<circle class="co" cx="8000" cy="8000" r="5000"></circle>
					<circle class="ci" cx="8000" cy="8000" r="3000"></circle>
				</svg>
			</div>
		</div>
		<!-- Arrow Navigator -->
		<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
			<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
			</svg>
		</div>
		<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
			<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
			</svg>
		</div>
@stop
@section('contenido')

	<div class="container" style="margin-top:-106px;height: 100px;float: center;background-color:rgba(0,0,0,.65);z-index: 20;position: relative;">
			<div class="row" style="margin-top: 30px;">
					<div class="form-group row">
						  {!! Form::open(['route' => ['templo'] , 'method' => 'GET', 'id' => 'formLugares' ]) !!}
									 <div class="col-sm-6" style="margin-left:5px;">
											<span class='3d' style="color:#158c7b;font-weight:bold;font-size:30px;text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9,0 3px 0 #bbb, 0 4px 0 #b9b9b9,0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);">
											Spaziour</span> <span style="color:white;">Encuentra tu proyecto aquí</span>
									 </div>
									 {!!  method_field('GET') !!}
				        				{!!  csrf_field() !!}
							  		 <div class="col-sm-6" style="margin-left:-39px;margin-top: 5px;">
										  	{!!Form::text('buscarLugares',null, ['class' => 'form-control input-lg' , 'id' => 'buscarLugares','autocomplete' => 'off','placeholder' => 'Buscar'])!!}	
										  <div id="carga" style="position: absolute;z-index: 12;text-align: right;"> </div>
											  <div id="lugares">
													 
														<ul class="list-group" id="lista" style="position: absolute;width: 470px;margin-top: 0px;z-index:10;background: red;font-size:12px; ">
															
														</ul>
													
											  </div>
										  		 
									</div>	
									
							{!! Form::close() !!}
							
					</div>
			  </div>
		 </div>

		  <div class="container">	

	                    <div class="c-content-feature-10" style="margin-top: 40px;">
	                        
	                        <div class="c-content-title-1">
	                            <h3 class="c-font-uppercase c-center c-font-bold">Templo y lugares Turisticos 3D</h3>
	                            <div class="c-line-center c-theme-bg"></div>
	                            <p class="c-font-center">Recorridos virtuales y modelados 3D para templos coloniales,zonas turisticas</p>
	                        </div>
	                        <ul class="c-list">
	                            <li>
	                                <div class="c-card c-font-right wow animate fadeInLeft">
	                                    <i class="icon-trophy c-font-27 c-theme-font c-float-right c-border c-border-opacity"></i>
	                                    <div class="c-content c-content-right">
	                                        <h3 class="c-font-uppercase c-font-bold">Templo Coloniales</h3>
	                                        <p> Los templo colonial de Apurimac, de apariencia externa más bien sencilla, conserva en su interior restos de importantes pinturas murales. </p>
	                                    </div>
	                                </div>
	                                <div class="c-border-bottom c-bg-opacity-2"></div>
	                            </li>
	                            <div class="c-border-middle c-bg-opacity-2"></div>
	                            <li>
	                                <div class="c-card wow animate fadeInRight">
	                                    <i class="icon-rocket c-font-27 c-theme-font c-float-left c-border c-border-opacity"></i>
	                                    <div class="c-content c-content-left">
	                                        <h3 class="c-font-uppercase c-font-bold">Lugares Turisticos</h3>
	                                        <p>La provincia de Aymaraes es un lugar idóneo para la práctica del turismo termomedicinal gracias a que en esta parte de Apurímac se pueden encontrar los Baños Termales de Pincahuacho.</p>
	                                    </div>
	                                </div>
	                                <div class="c-border-bottom c-bg-opacity-2"></div>
	                            </li>
	                        </ul>
	                        
	                    </div>
	                </div>
	                <div id="baner" class="c-content-feature-15 c-bg-img-center"  style="background-image: url({{URL::asset('/img/content/inicio/chuquinga.jpg')}}">
		                <div class="container">
		                    <div class="row">
		                        <div class="col-md-offset-4 col-md-8 col-xs-12">
		                            <div class="c-feature-15-container c-bg-dark">
		                                <h2 class="c-feature-15-title c-font-bold c-font-uppercase c-theme-border c-font-white">Templo colonial de Chuquinga</h2>
		                                <div class="row">
		                                    <div class="col-md-4 col-xs-12">
												<img src="{{URL::asset('/img/content/inicio/02.jpg')}}" class="c-feature-15-img" /> </div>
		                                    <div class="col-md-8 col-xs-12">
		                                        <p class="c-feature-15-desc c-font-grey"> El Templo de Chuquinga, ergido bajo la advocación de San Pedro, presenta una planta de distribución longitudinal, con tres volúmenes adosados al cuerpo principal, 
		                                        en el muro lateral sur, correspondiente a los ambientes del baptisterio, </p>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>

		            <div class="c-content-box c-size-md c-bg-grey-1  ">
		                <div class="container">
		                    <div class="c-content-feature-2-grid" data-auto-height="true" data-mode="base-height">
		                        <div class="row">
		                            <div class="col-md-4 col-sm-6">
		                                <div class="c-content-feature-2" data-height="height">
		                                    <div class="c-icon-wrapper">
		                                        <div class="c-content-line-icon c-theme c-icon-screen-chart"></div>
		                                    </div>
		                                    <h3 class="c-font-uppercase c-font-bold c-title">APLICACIONES WEB</h3>
		                                    <p>Desarrollo de páginas dinámicas</p>
		                                </div>
		                            </div>
		                            <div class="col-md-4 col-sm-6">
		                                <div class="c-content-feature-2" data-height="height">
		                                    <div class="c-icon-wrapper">
		                                        <div class="c-content-line-icon c-theme c-icon-support"></div>
		                                    </div>
		                                    <h3 class="c-font-uppercase c-font-bold c-title">Aplicaciones móviles</h3>
		                                    <p>Modelados 3D</p>
		                                </div>
		                            </div>
		                            <div class="col-md-4 col-sm-6">
		                                <div class="c-content-feature-2" data-height="height">
		                                    <div class="c-icon-wrapper">
		                                        <div class="c-content-line-icon c-theme c-icon-comment"></div>
		                                    </div>
		                                    <h3 class="c-font-uppercase c-font-bold c-title">Repositorio</h3>
		                                    <p>Lugares recomendados por turitas</p>
		                                </div>
		                            </div>
		                            <div class="col-md-4 col-sm-6">
		                                <div class="c-content-feature-2" data-wow-delay1="2s" data-height="height">
		                                    <div class="c-icon-wrapper">
		                                        <div class="c-content-line-icon c-theme c-icon-bulb"></div>
		                                    </div>
		                                    <h3 class="c-font-uppercase c-font-bold c-title">Ideas de modelados 3D</h3>
		                                    <p>Guia de ideas </p>
		                                </div>
		                            </div>
		                            <div class="col-md-4 col-sm-6">
		                                <div class="c-content-v-center c-theme-bg wow bounceInUp" data-wow-delay1="2s" data-height="height">
		                                    <div class="c-wrapper">
		                                        <div class="c-body c-padding-20 c-center">
		                                            <h3 class="c-font-19 c-line-height-28 c-font-uppercase c-font-white c-font-bold">Desarrollo de software, diseño de páginas web, manejo de cms, logotipos y modelados 3d </h3>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="col-md-4 col-sm-6">
		                                <div class="c-content-feature-2" data-wow-delay1="2s" data-height="height">
		                                    <div class="c-icon-wrapper">
		                                        <div class="c-content-line-icon c-theme c-icon-globe"></div>
		                                    </div>
		                                    <h3 class="c-font-uppercase c-font-bold c-title">Alojamiento</h3>
		                                    <p>Recoridos virtuales de Hoteles,restaurantes. </p>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
	           		 <div class="c-content-box c-size-md c-bg-white">
		                <div class="container">
		     
		                   		 <div class="c-content-client-logos-slider-1" data-slider="owl">
		  
				                        <div class="c-content-title-1">
				                            <h3 class="c-center c-font-uppercase c-font-bold">Páginas Desarrolladas</h3>
				                            <div class="c-line-center c-theme-bg"></div>
				                        </div>

											 <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="5" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-small-items="1" data-auto-play="false" data-rtl="false" data-slide-speed="5000"
							                        data-auto-play-hover-pause="true" style="background:linear-gradient(top, #e7e8e8, #e7e8e8);
													background:-webkit-linear-gradient(top, #e7e8e8, #e7e8e8);
													background:-moz-linear-gradient(top, #e7e8e8, #e7e8e8);
													background:-o-linear-gradient(top, #e7e8e8, #e7e8e8);
													background:-ms-linear-gradient(top, #e7e8e8, #e7e8e8);">                           			 
							                      		
														 <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo1.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo2.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo3.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo4.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo5.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo6.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo7.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo8.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo9.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo10.jpg')}}" alt="" />
							                                </a>
							                            </div>
							                            <div class="item" style="margin-top: 60px; border: solid 5px #1cad99;transition: border-width 0.6s linear; ">
							                                <a href="#">
							                                    <img src="{{URL::asset('/img/content/client-logos/logo11.jpg')}}" alt="" />
							                                </a>
							                            </div>			
																
							                        </div>

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
	       		 	if (buscarLugar.length >=4)
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
							   console.log( '!!' );
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


