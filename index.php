<?php include 'admin/core/init.php';?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
<?php include 'includes/head-common.php';?>
<title><?=EVENT?></title>
</head>
<body class="home page page-id-2" id="up">
    <style type="text/css">
      #ads-sidebar{
        margin-top: 50px;
        position: absolute;
        right: 0%;
        z-index: 999;
        background: #ccc;
        padding: 4px 0px 4px 4px;
        margin-right: 4px;
        border: solid 1px gray;}
        #c-ads{position: absolute;
        right: 0;
        top: 0px;
        cursor: pointer;
        color: #000;
        border: solid 1px black;
        width: 8px;
        height: 8px;
        display: block;
        line-height: 8px;
      }
      #ads-wrapper{
        position:absolute;
        right:0%;
        z-index:999;
      }
    </style>
    <!--  <link type="text/css" rel="stylesheet" href="http://www.egrappler.com/wp-content/themes/piha/css/top-bar.css"> -->
    <!--[if IE]>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
        <style>.chromeFrameInstallDefaultStyle { width: 100%; border: 5px solid #ffa700; }</style><div id="prompt"></div>
        <script>window.attachEvent("onload", function() {CFInstall.check({mode: "overlay", node: "prompt"});});</script>
    <![endif]-->
    <?php include 'views/header-common.php';?>  
  <header>
      
      <!-- #region Jssor Slider Begin -->
      <!-- Generator: Jssor Slider Maker -->
      <!-- Source: http://www.jssor.com -->
      <!-- This code works without jquery library. -->
      <script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
      <script type="text/javascript">
          jssor_1_slider_init = function() {

              var jssor_1_SlideshowTransitions = [
                {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
                {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:1000,x:-1,y:2,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.85}},
                {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:1000,x:4,y:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
                {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
                {$Duration:1000,x:-3,y:1,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
                {$Duration:1200,y:-1,$Cols:8,$Rows:4,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5},
                {$Duration:1000,x:0.5,y:0.5,$Zoom:1,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.5}},
                {$Duration:1200,x:-0.6,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
                {$Duration:1500,y:-0.5,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Easing:$Jease$.$InWave,$Round:{$Top:1.5}},
                {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:$Jease$.$InQuad},
                {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
              ];

              var jssor_1_SlideoTransitions = [
                [{b:-1,d:1,o:-1},{b:0,d:1200,y:300,o:1,e:{y:24,o:6}},{b:5600,d:800,y:-200,o:-1,e:{y:5}}],
                [{b:-1,d:1,o:-1},{b:400,d:800,x:200,o:1,e:{x:27,o:6}},{b:5600,d:800,x:-200,o:-1,e:{x:5}}],
                [{b:-1,d:1,o:-1},{b:400,d:800,x:-200,o:1,e:{x:27,o:6}},{b:5600,d:800,x:200,o:-1,e:{x:5}}],
                [{b:-1,d:1,o:-1},{b:1600,d:600,x:200,y:-200,o:1,e:{x:3,y:3}},{b:5600,d:800,o:-1}],
                [{b:4600,d:960,x:-204}],
                [{b:-1,d:1,sX:-1,sY:-1},{b:3400,d:400,sX:1,sY:1},{b:3800,d:300,o:-1,sX:0.1,sY:0.1}],
                [{b:-1,d:1,sX:-1,sY:-1},{b:3520,d:400,sX:1,sY:1},{b:3920,d:300,o:-1,sX:0.1,sY:0.1}],
                [{b:-1,d:1,o:-1},{b:2200,d:1200,x:-135,y:-24,o:1,e:{x:7,y:7}},{b:4600,d:640,x:-130}],
                [{b:-1,d:1,o:-1},{b:4600,d:240,x:-75,o:1,e:{x:1}},{b:4840,d:480,x:-150,e:{x:1}},{b:5320,d:240,x:-75,o:-1,e:{x:1}}],
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
                [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:0,d:400,y:330},{b:900,d:400,y:50,rX:80},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:900,y:25,o:-1,rX:60}],
                [{b:-1,d:1,o:-0.5},{b:900,d:400,o:-0.5}],
                [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:1700,d:400,y:310},{b:2600,d:400,y:50,rX:80},{b:20000,d:1000,y:20},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:900,y:25,o:-1,rX:60}],
                [{b:20000,d:1000,o:-1}],
                [{b:-1,d:1,o:-0.5},{b:2600,d:400,o:-0.5}],
                [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:3400,d:400,y:290},{b:5100,d:400,y:50,rX:80},{b:20000,d:1000,y:40},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:900,y:25,o:-1,rX:60}],
                [{b:20000,d:1000,o:-1}],
                [{b:-1,d:1,c:{t:-280}},{b:3880,d:20,c:{t:50.40}},{b:3980,d:20,c:{t:33.60}},{b:4080,d:20,c:{t:30.80}},{b:4180,d:20,c:{t:30.80}},{b:4280,d:20,c:{t:33.60}},{b:4380,d:20,c:{t:22.40}},{b:4480,d:20,c:{t:28.00}},{b:4580,d:20,c:{t:50.40}}],
                [{b:-1,d:1,o:-0.5},{b:5100,d:400,o:-0.5}],
                [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:6000,d:400,y:270},{b:6900,d:400,y:50,rX:40},{b:15000,d:500,rX:40},{b:20000,d:1000,y:60},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:900,y:25,o:-1,rX:60}],
                [{b:20000,d:1000,o:-1}],
                [{b:6900,d:400,o:-0.2},{b:15000,d:500,o:-0.8}],
                [{b:-1,d:1,o:-0.5},{b:15000,d:500,o:-0.5}],
                [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:7800,d:400,y:270},{b:8700,d:400,y:50,rX:40},{b:15000,d:500,rX:40},{b:20000,d:1000,y:60},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:900,y:25,o:-1,rX:60}],
                [{b:8700,d:400,o:-1}],
                [{b:-1,d:1,o:-0.5},{b:8700,d:400,o:-0.5}],
                [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:9600,d:400,y:270},{b:10500,d:400,y:50,rX:40},{b:15000,d:500,rX:40},{b:20000,d:1000,y:60},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:900,y:25,o:-1,rX:60}],
                [{b:10500,d:400,o:-1}],
                [{b:-1,d:1,o:-0.5},{b:10500,d:400,o:-0.5}],
                [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:11400,d:400,y:270},{b:12300,d:400,y:50,rX:40},{b:15000,d:500,rX:40},{b:20000,d:1000,y:60},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:900,y:25,o:-1,rX:60}],
                [{b:12300,d:400,o:-1}],
                [{b:-1,d:1,o:-0.5},{b:12300,d:400,o:-0.5}],
                [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:13200,d:400,y:270},{b:14100,d:400,y:50,rX:40},{b:15000,d:500,rX:40},{b:20000,d:1000,y:60},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:900,y:25,o:-1,rX:60}],
                [{b:14100,d:400,o:-1}],
                [{b:-1,d:1,o:-0.5},{b:14100,d:400,o:-0.5}],
                [{b:-1,d:1,sX:-0.2,sY:-0.2},{b:16000,d:400,y:270},{b:19100,d:400,y:30,rX:80},{b:20000,d:1000,y:80},{b:21000,d:1000,y:-95,rX:-80,sX:0.2,sY:0.2,e:{y:16,rX:16,sX:16,sY:16}},{b:23000,d:900,y:25,o:-1,rX:60}],
                [{b:20000,d:1000,o:-1}],
                [{b:-1,d:1,o:-0.5},{b:19100,d:400,o:-0.5}],
                [{b:-1,d:1,o:-1},{b:16400,d:300,o:1},{b:16700,d:500,x:-238}],
                [{b:-1,d:1,o:-1},{b:16400,d:300,o:1},{b:16700,d:500,x:238}],
                [{b:-1,d:1,o:-1},{b:17000,d:400,y:200,o:1,e:{y:2,o:6}},{b:17400,d:300,y:-28,e:{y:3}},{b:17700,d:300,y:28,e:{y:2}}],
                [{b:-1,d:1,o:-1},{b:17200,d:400,y:200,o:1,e:{y:2,o:6}},{b:17600,d:300,y:-28,e:{y:3}},{b:17900,d:300,y:28,e:{y:2}}],
                [{b:-1,d:1,o:-1},{b:17400,d:400,y:200,o:1,e:{y:2,o:6}},{b:17800,d:300,y:-28,e:{y:3}},{b:18100,d:300,y:28,e:{y:2}}],
                [{b:-1,d:1,o:-1},{b:17600,d:400,y:200,o:1,e:{y:2,o:6}},{b:18000,d:300,y:-28,e:{y:3}},{b:18300,d:300,y:28,e:{y:2}}]
              ];

              var jssor_1_options = {
                $AutoPlay: true,
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
                    [{d:2000,b:23000}]
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

              /*responsive code begin*/
              /*you can remove responsive code if you don't want the slider scales while window resizing*/
              function ScaleSlider() {
                  var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                  if (refSize) {
                      refSize = Math.min(refSize, 1900);
                      jssor_1_slider.$ScaleWidth(refSize);
                  }
                  else {
                      window.setTimeout(ScaleSlider, 30);
                  }
              }
              ScaleSlider();
              $Jssor$.$AddEvent(window, "load", ScaleSlider);
              $Jssor$.$AddEvent(window, "resize", ScaleSlider);
              $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
              /*responsive code end*/
          };
      </script>
      <style>
          /* jssor slider bullet navigator skin 05 css */
          /*
          .jssorb05 div           (normal)
          .jssorb05 div:hover     (normal mouseover)
          .jssorb05 .av           (active)
          .jssorb05 .av:hover     (active mouseover)
          .jssorb05 .dn           (mousedown)
          */
          .jssorb05 {
              position: absolute;
          }
          .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
              position: absolute;
              /* size of bullet elment */
              width: 16px;
              height: 16px;
              background: url('img/b05.png') no-repeat;
              overflow: hidden;
              cursor: pointer;
          }
          .jssorb05 div { background-position: -7px -7px; }
          .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
          .jssorb05 .av { background-position: -67px -7px; }
          .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

          /* jssor slider arrow navigator skin 22 css */
          /*
          .jssora22l                  (normal)
          .jssora22r                  (normal)
          .jssora22l:hover            (normal mouseover)
          .jssora22r:hover            (normal mouseover)
          .jssora22l.jssora22ldn      (mousedown)
          .jssora22r.jssora22rdn      (mousedown)
          .jssora22l.jssora22lds      (disabled)
          .jssora22r.jssora22rds      (disabled)
          */
          .jssora22l, .jssora22r {
              display: block;
              position: absolute;
              /* size of arrow element */
              width: 40px;
              height: 58px;
              cursor: pointer;
              background: url('img/a22.png') center center no-repeat;
              overflow: hidden;
          }
          .jssora22l { background-position: -10px -31px; }
          .jssora22r { background-position: -70px -31px; }
          .jssora22l:hover { background-position: -130px -31px; }
          .jssora22r:hover { background-position: -190px -31px; }
          .jssora22l.jssora22ldn { background-position: -250px -31px; }
          .jssora22r.jssora22rdn { background-position: -310px -31px; }
          .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
          .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
      </style>
      <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 380px; overflow: hidden; visibility: hidden;">
          <!-- Loading Screen -->
          <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
              <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
              <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
          </div>
          <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 380px; overflow: hidden;">
              <div data-b="0" data-p="170.00">
                  <img data-u="image" src="<?=DN?>/img/Web Banners-07.png" />
              </div>
              <?php 
              /*
                <div data-b="1" data-p="170.00" style="display: none;">
                    <img data-u="image" src="<?=DN?>/img/Web Banners-06.jpg" />
                </div>
                <!-- <a data-u="any" href="http://www.jssor.com" style="display:none">Introduction Slider</a> -->
                <div data-b="2" data-p="816.0" style="display: none;">
                    <img data-u="image" src="<?=DN?>/img/Web Banners-05.jpg" />
                </div>
              */ ?>
          </div>
          <!-- Bullet Navigator -->
          <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
              <!-- bullet navigator item prototype -->
              <div data-u="prototype" style="width:16px;height:16px;"></div>
          </div>
          <!-- Arrow Navigator -->
          <span data-u="arrowleft" class="jssora22l" style="top:0px;left:10px;width:40px;height:58px;" data-autocenter="2"></span>
          <span data-u="arrowright" class="jssora22r" style="top:0px;right:10px;width:40px;height:58px;" data-autocenter="2"></span>
      </div>
      <script type="text/javascript">jssor_1_slider_init();</script>
      <!-- #endregion Jssor Slider End -->
  </header> 
  <a class="scroll-point" id="about"></a>

  <div class="sectiongrey">
      <section>
        <div class="separator"> 
          <div class="line"></div>
          <h2>About Us</h2>
          <div class="line"></div>
        </div>
          <div class="grid3">
          <p>
              In Africa, due to a fast growing middle class, a 
              rapid urbanization is driving change. The consumption 
              patterns are changing from a vegetable-, to a protein-rich 
              diet. This large-scaled shift urgently requires developments 
              in professional farming and availability of up to date technologies and innovations.

              </p>  


              <p>With a hassle-free and low-cost new series of events, VNU Exhibitions 
              is ready to serve your networks with a boutique-style event: Poultry Africa. 
              Sub-Saharan Africa’s first quality Expo in combination with the Leadership 
              Conference and technical best practices.
              </p>

              <p>
                <a href="#">Download the brochure of Poultry Africa 2017!</a>
              </p>



          </div>

      </section>
  </div>

  <a class="scroll-point" id="freebies"></a>
  <div class="clear"></div>

  <div class="sectiongreen-2">
      <section>
        <div class="separator"> 
          <div class="line"></div>
          <h2>Programme</h2>
          <div class="line"></div>
        </div>
          <div class="clear"></div>
          <div class="grid3">
              <!-- <p>
                  Saving for our future generations has been made easy. The Rwanda Revenue Authority is committed to supporting the fund and has subsequently declared all contributions tax exempt & tax deductible.
              </p>
              <p>
                  You can contribute to the Agaciro Development Fund as a corporate or as an individual by committing either a certain percentage of the company’s turnover or a percentage of your salary.
              </p>
              <p>
                  Various employee groups whom have their own internal funds also contribute a percentage of their fund.
              </p> -->
              <!-- <p>
                  The fund is currently invested in banks as term deposits and treasury bonds to generate interests. Other diversified avenues of income including investments in other safe and high profitability sectors are also planned.

              </p>
              <p>
                  In the short & long term, we aim to invest in a wide range of countries, companies and assets to obtain the highest possible return with moderate risk. The fund will target local, regional and global markets for equities, fixed income and real estate.

              </p>
              <p>
                  As a responsible investor with a view to safeguard the wealth of our future generations, we will:
              </p>
              <p>•   Establish, maintain and monitor sustainable standards including environmental, social and governance</p>
              <p>•   Improve standards of commercial activities</p>
              <p>•   Improve standards of corporate governance</p>
              <p>•   Monitor and manage risk</p> -->
          </div>
          <div class="contact-form shadow grid2 programme" id="form">
              <article class="col shadow" style="width: 50%;margin:0;">
                  <!-- <figure><img src="img/Green-01.jpg" alt="free-html5-responsive-template"></figure><br> -->
                  <h3>Day 1 – October 4</h3>
                  <h4>Expo</h4>
                  <ul>
                    <hr>
                    <li>10.00 – 18.00<br>
                      Expo
                    </li>
                    <hr>
                  </ul>
                  <h4>Session 1: Antimicrobial resistance</h4>
                  <ul>
                    <hr>
                    <li>09.00 – 09.05<br>
                      Introduction
                    </li>
                    <hr>
                    <li>09.35 – 09.35<br>
                      The history of AMR, poultry examples, 
                      reservoirs of resistance, prevention, 
                      correct use of antibiotics, alternatives 
                      and the future, by World Poultry Veterinary Association I.
                    </li>
                    <hr>
                    <li>09.35 – 10.05<br>
                      The history of AMR, poultry examples, 
                      reservoirs of resistance, prevention, 
                      correct use of antibiotics, alternatives 
                      and the future, by World Poultry Veterinary 
                      Association II.
                    </li>
                    <hr>
                    <li>10.05 – 10.30<br>
                      Discussion
                    </li>
                    <hr>
                    <li>10.30 – 11.00<br>
                      Coffe break
                    </li>
                    <hr>
                  </ul>
                  <h4>Session 2: Zoonotic pathoges</h4>
                  <ul>
                    <hr>
                    <li>11.00 – 11.05<br>
                      Introduction
                    </li>
                    <hr>
                    <li>11.05 – 11.35<br>
                      The current situation including Salmonella 
                      enteritidis in eggs in Europe.Campylobacter. 
                      Apathy. Control options I.
                    </li>
                    <hr>
                    <li>11.35 – 12.05<br>
                      The current situation including Salmonella 
                      enteritidis in eggs in Europe.Campylobacter. 
                      Apathy. Control options II.
                    </li>
                    <hr>
                    <li>12.05 – 12.30<br>
                      Discussion
                    </li>
                    <hr>
                    <li>12.30 – 13.30<br>
                      Lunch
                    </li>
                    <hr>
                  </ul>
                  <h4>Session 3: Marketing and trade opportunities for Africa</h4>
                  <ul>
                    <hr>
                    <li>13.30 – 15.00<br>
                      TBA
                    </li>
                    <hr>
                    <li>15.00 – 15.20<br>
                      Coffee break
                    </li>
                    <hr>
                  </ul>
                  <h4>Session 4: Optimal feed supply and feed production for Africa</h4>
                  <ul>
                    <hr>
                    <li>15.20 – 16.50<br>
                      TBA
                    </li>
                    <hr>
                    <li>17.00 – 18.30<br>
                      Network cocktail
                    </li>
                    <hr>
                  </ul>
                  <h4>Breakout sessions</h4>
                  <ul>
                    <hr>
                    <li>13.00- 17.00<br>
                      Technical best practices
                    </li>
                    <hr style="margin-bottom: 0;margin-top: 4px;">
                  </ul>
              </article>
              <article class="col shadow" style="width: 50%;margin:0;">
                  <!-- <figure><img src="img/Green-03.jpg" alt="free-admin-template-psd"></figure><br> -->
                  <h3>Day 2 – October 5</h3>
                  <h4>Expo</h4>
                  <ul>
                    <hr>
                    <li>10.00 – 18.00<br>
                      Expo
                    </li>
                    <hr>
                  </ul>
                  <h4>Session 1: Avian influenza</h4>
                  <ul>
                    <hr>
                    <li>09.00 – 09.05<br>
                      Introduction
                    </li>
                    <hr>
                    <li>09.05 – 10.05<br>
                      Update on the current global 
                      picture and its relevance to Africa. 
                      Future strategies for control that are 
                      worthy of consideration
                    </li>
                    <hr>
                    <li>10.05 – 10.30<br>
                      Discussion
                    </li>
                    <hr>
                    <li>10.30 – 11.00<br>
                      Coffee break
                    </li>
                    <hr>
                  </ul>
                  <h4>Session 2: Poultry Welfare</h4>
                  <ul>
                    <hr>
                    <li>11.00 – 11.05<br>
                      Introduction
                    </li>
                    <hr>
                    <li>11.05 – 11.35<br>
                      History of welfare linked to 
                      Maslow’s hierarchy. Current welfare 
                      concerns in the farm, hatchery and processing 
                      plant adopting a positive attitude towards 
                      welfare in the poultry business I.
                    </li>
                    <hr>
                    <li>11.35 – 12.05<br>
                      History of welfare linked to Maslow’s hierarchy. 
                      Current welfare concerns in the farm, hatchery and 
                      processing plant adopting a positive attitude towards 
                      welfare in the poultry business II.
                    </li>
                    <hr>
                    <li>12.20 – 13.30<br>
                      Lunch
                    </li>
                    <hr>
                  </ul>
                  <h4>Session 3: Marketing outlook</h4>
                  <ul>
                    <hr>
                    <li>13.30 – 15.00<br>
                      TBA
                    </li>
                    <hr>
                    <li>15.00 – 15.30<br>
                      Coffee break
                    </li>
                    <hr>
                  </ul>
                  <h4>Session 4: Farm management</h4>
                  <ul>
                    <hr>
                    <li>15.30 – 17.00<br>
                      TBA
                    </li>
                    <hr>
                  </ul>
                  <h4>Technical Seminars</h4>
                  <ul>
                    <hr>
                    <li>13.00 – 17.00<br>
                      Technical best practices
                    </li>
                    <hr style="visibility: hidden;">
                  </ul>
                  <h4 style="visibility: hidden;">Technical Seminars</h4>
                  <ul style="visibility: hidden;">
                    <hr>
                    <li>13.00 – 17.00<br>
                      Technical best practices
                    </li>
                    <hr>
                    <li>13.00 – 17.00<br>
                      Technical best practices
                    </li>
                    <hr>
                    <li>13.00 – 17.00<br>
                      Technical best practices
                    </li>
                  </ul>
              </article>

          </div>


          <div class="clear"></div>
          <!-- <div class="grid3">
          <article class="col">
            <figure><img src="img/jquery-image-slider-plugin-with-cool-transition-effects.jpg" alt="jquery-image-slider-plugin-with-cool-transition-effects"></figure>
            <h3><a href="http://www.egrappler.com/jquery-image-slider-plugin-with-cool-transition-effects-quake-slider/">jQuery Image<br>Slider Plugin</a></h3>
            <p>Open Source jQuery Image / Content Slider Plugin, with support for CSS themes and 40+ cool transition effects.</p>
                </article>
          <article class="col">
            <figure><img src="img/responsive-multi-level-dropdown-menu-wordpress-plugin.jpg" alt="responsive-multi-level-dropdown-menu-wordpress-plugin"></figure>
            <h3><a href="http://www.egrappler.com/a-responsive-multi-level-dropdown-menu-plugin-with-icons-for-wordpress-wpbootm/">WordPress<br>Menu Plugin</a></h3>
            <p>WPBootM is a responsive multi level dropdown menu plugin for WordPress, based on famous twitter bootstrap framework.</p>
                </article>
          <article class="col">
            <figure><img src="img/free-wordpress-resume-theme-elegant-resume.jpg" alt="free-wordpress-resume-theme-elegant-resume"></figure>
            <h3><a href="http://www.egrappler.com/free-wordpress-resume-theme-elegant-resume/">WordPress<br>Resume Theme</a></h3>
            <p>We solve problems focusing on the user through tests, metrics and accessibility techniques.</p>
                </article>
        </div> -->
      </section>
  </div>
  <a class="scroll-point" id="ideas"></a>

  <div class="sectiongrey">
      <section>
          <div class="separator"> 
              <div class="line"></div>
              <h2>Speakers & Exhibitors</h2>
              <div class="line"></div>
          </div>
          <div class="grid2">
              <article class="col shadow">
                  <!-- <figure><img src="img/Green-01.jpg" alt="free-html5-responsive-template"></figure><br> -->
                  <h3>Speakers</h3>
                  <p>The morning program of the Leadership Conference will 
                  lead you through the themes of Antimicrobial resistance, Avian 
                  influenza, Poultry Welfare and Zoonotic pathogens, supported by WVPA.<br><br>

                  In the afternoon, VIV worldwide and partners will focus on the 
                  marketing and trade opportunities for Africa.<br><br>

                  Presentations will be held both in English and French.
                  </p>
              </article>
              <article class="col shadow">
                  <!-- <figure><img src="img/Green-03.jpg" alt="free-admin-template-psd"></figure><br> -->
                  <h3>Exhibitors</h3>
                  <p>Join these international experts <br>on poultry production who 
                  will be showcasing <br>innovative solutions for the industry. 
                  <br>

                  </p>
                  <p>Click here to download the Exhibitor list.<br><br><br><br></p>
              </article>
              <!-- <article class="col shadow">
                  <figure><img src="img/Green-02.jpg" alt="free-professional-html5-cv-resume-template"></figure><br>
                  <p>Various employee groups whom have their own internal funds also contribute a percentage of their fund.<br><br><br><br>

                  </p>
              </article> -->
          </div>
          <div class="clear"></div><br><br><br>
          <div class="clear"></div>
          <div class="grid3">
              <!-- <p>
                  Saving for our future generations has been made easy. The Rwanda Revenue Authority is committed to supporting the fund and has subsequently declared all contributions tax exempt & tax deductible.
              </p>
              <p>
                  You can contribute to the Agaciro Development Fund as a corporate or as an individual by committing either a certain percentage of the company’s turnover or a percentage of your salary.
              </p>
              <p>
                  Various employee groups whom have their own internal funds also contribute a percentage of their fund.
              </p> -->
              <!-- <p>
                  To find out more about how to contribute, email us on info@agaciro.rw and our team will meet with and assist you.
              </p>
              <p>
                  Click here to download our bank details (we need to put the bank details on their current website on a PDF file)
              </p>
              <p>
                  You can also Users of Rwanda mobile networks (MTN, Airtel and TIGO) can contribute to Agaciro Development Fund via SMS or USSD. To make your contribution, send Agaciro to 2020 or dial *202# and follow the steps.
              </p>
              <p>
                  Are you in Rwanda or elsewhere in the world and would like to contribute to Agaciro Development Fund? Click on Contribute online, use your MasterCard or VISA Credit Card and follow the steps.

              </p> -->
          </div>
          <div class="clear"></div>

      </section>
  </div>
  <a class="scroll-point" id="ideas"></a>
  <div class="section" style="background: url(img/Share your ideas copy.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
      <section>
          <div class="separator"> 
              <div class="line"></div>
              <h2>When & Where?</h2>
              <div class="line"></div>
          </div>
          <div class="grid3">
              <!-- <div style="width: 48%; float:left;">
                  <img src="img/Share your ideas copy.jpg" style="width:100%;" alt="free-professional-html5-cv-resume-template">
              </div> -->
              <h3 style="color: #666666;">When:</h3>
              <p class="ideas-det">
                October 4-5, 2017
              </p><br>
              <h3 style="color: #666666;">Where:</h3>
              <p class="ideas-det" style="padding-top: 20px;">
                Kigali Convention Centre will be serving as the venue of Poultry Africa 2017. <br>
                It is just 5 kilometers from the bustling city center and Kigali International Airport (KGL).
              </p>
          </div>

          <div class="clear"></div>
      </section>
  </div>

  <a class="scroll-point" id="clients"></a>
  <div class="clear"></div>

  <div class="sectiongrey">
  <!-- <section>
    <div class="separator"> 
      <div class="line"></div>
      <h2>Footnotes</h2>
      <div class="line"></div>
    </div>
    <div class="clear"></div>
    <h3 class="sectionh3">Brands we've worked with. <br> We get to work with some of the best brands in the world.</h3>
    <div id="slide-wrapper">
      <div class="caroufredsel_wrapper" style="display: block; text-align: center; float: none; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: auto; width: 972px; height: 190px; margin: 0px; overflow: hidden;"><ul class="testimonials" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 5346px; height: 190px; z-index: auto;">
        
        
        
        
        
        
        
        
        
        
      <li class="col" style="width: 175px;"><figure><img src="img/clients/seagate.png" alt=""></figure></li><li class="col" style="width: 175px;"><figure><img src="img/clients/wynn.png" alt=""></figure></li><li class="col" style="width: 175px;"><figure><img src="img/clients/zipcar.png" alt=""></figure></li><li class="col" style="width: 175px;"><figure><img src="img/clients/computerhistory.png" alt=""></figure></li><li class="col" style="width: 175px;"><figure><img src="img/clients/discoverychannel.png" alt=""></figure></li><li class="col" style="width: 175px;"><figure><img src="img/clients/dockers.png" alt=""></figure></li><li class="col" style="width: 175px;"><figure><img src="img/clients/firefox.png" alt=""></figure></li><li class="col" style="width: 175px;"><figure><img src="img/clients/google.png" alt=""></figure></li><li class="col" style="width: 175px;"><figure><img src="img/clients/levis.png" alt=""></figure></li></ul></div>
    </div>
    <div class="pagination" id="foo2_pag" style="display: block;"><a href="#" class=""><span>1</span></a><a href="#" class=""><span>2</span></a><a href="#" class="selected"><span>3</span></a></div>
  </section> -->
  </div>

  <a class="scroll-point" id="contact"></a>
  <div class="clear"></div>

  <div class="sectiongreen-3">
    <section>
      <div class="separator"> 
        <div class="line"></div>
        <h2>Contact Us</h2>
        <div class="line"></div>
      </div>
          <div class="grid2">
              <article class="col shadow">
                  <figure><img src="img/Diana-Toth.jpg" alt="Diana Toth"></figure><br>
                  <!-- <h3>Speakers</h3> -->
                  <p>For information about visiting and exhibiting, please contact:<br><br>

                  Ms. Diána Tóth, Conference manager at diana.toth@vnuexhibitions.com<br><br>
                  </p>
              </article>
              <article class="col shadow">
                  <figure><img src="img/Origineel-wiebertje-Tessa.jpg" alt="Origineel wiebertje Tessa"></figure><br>
                  <!-- <h3>Exhibitors</h3> -->
                  <p>For information about operational preparations, please contact:<br><br>
                  Ms. Tessa Remers, Operations manager at tessa.remers@vnuexhibitions.com
                  <br><br>
                  </p>
              </article>
          </div>
      <div class="clear"></div>
      <div class="contact-form shadow" id="form">
        <!-- <form id="contact_form" method="POST" action="" accept-charset="UTF-8">
            <input type="hidden" name="csrf_token" value="WOmJTlFSei62Ec5msvgIfbDioUG0tIku5CZPXmsC">
            <input type="text" name="job-title-flx" style="display:none">
            <input id="lang" type="hidden" name="lang" value="en">
          <h1>We will reply soon</h1>
          <fieldset>
            <label for="name">Your Name*</label>
            <input required="" type="text" name="name" value="" id="name">
            <label for="email">Your Email*</label>
            <input required="" type="email" name="email" value="" id="email">
            <label for="phone">Contact Phone</label>
            <input type="text" name="phone" value="" id="phone">
          
          </fieldset>
          <fieldset>
            <label>Type Your Message</label>
            <textarea id="message" name="message"></textarea>
          </fieldset>
          
                <div class="clear">
                <fieldset class="fsubmit">
          <input id="submit" type="button" class="btn btn-primary btn-submit" value="Send Message">
          </fieldset>
                </div>
        </form> -->

            <!-- <div id="location">
                <h1><a name="Head_Office"></a>Our Office</h1>
                <p>Address: 3rd Floor, RSSB Tower II, Kigali, Rwanda <br />P.o.Box: **** Kigali Rwanda<br />T: +250 78******* <br />E: <a href="mailto:info@agaciro.rw">info@agaciro.rw </a></p>
            </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <script
                        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
                    </script>
                    <script>
                        var myCenter=new google.maps.LatLng(-1.946290, 30.068456);

                        function initialize()
                        {
                        var mapProp = {
                          center:myCenter,
                          zoom:17,
                          mapTypeId:google.maps.MapTypeId.ROADMAP
                          };

                        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

                        var marker=new google.maps.Marker({
                          position:myCenter,
                          animation:google.maps.Animation.BOUNCE
                          });

                        marker.setMap(map);

                        var infowindow = new google.maps.InfoWindow({
                          content:("Agaciro")
                          });

                        infowindow.open(map,marker);
                        }

                        google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                    <div id="googleMap" style="width:100%;height:300px;"></div>
                </div> -->
      </div>
      <div class="contact-form hidden" id="thanks">
        <h1 class="color">Thanks, <span id="client_name"></span>!</h1>
        <div class="thanks-txt">
          <figure class="user-pic"><img src="img/team-avatar.jpg" alt="John Donga"></figure>
          <p>Hi!  I’m John the DONGA :), I've just received your message. I will contact you back in a day or two!</p>
        </div>
        <h1>In the meantime you can check out the following</h1>    
        <!-- <a href="http://facebook.com/egrappler" target="_blank" rel="nofollow">Like EGrappler</a> -->
      </div>

      <div class="bottom-shadow"></div>
      <div class="no-shadow hidden"></div>
      <div class="clear"></div>
      
      
    </section>
  </div>
  <?php include 'views/footer-common.php';?>








  <?php /* ?>




  <div id="wrapper" class="home">
        <div class="home-section-text banner">
            <img class="img img-responsive" src="<?=DN?>/img/holder.jpg" style="width:100%; margin-top: -80px"/>
        </div>
        <div class="clearfix" style="height: 6px"></div>
        <div class="top_padding">
<!--
          <div class="home-section-text">
              <img class="img img-responsive" src="<?=DN?>/img/14.jpg"/>
          </div>
-->
<!--
            <div class="home-section-video">
                <div class="splash">
                    <div class="inner">
                        <video autoplay loop muted>
                            <source src="<?=DN?>/videos/TA.mp4"  type="video/mp4" />
                        </video>
                        <img class="normal-image" src="" title="Transform Africa Summit">
                        <img class="mobile-image" src="" title="Transform Africa Summit">
                    </div>
                </div>
            </div>
-->
        </div>
        </div>
        <div class="content home-windows-layer">
            <div class="inner">
                <div class="content">
                    <div class="box item-normal no-overflow">
                        <!-- <a href="<?=DN?>/register" target="" class="half-height tgreen-bg"> -->
                        <a href="" target="" class="half-height tgreen-bg">
                            <!-- <h2 class=""><strong>REGISTER</strong></h2> -->
                            <h3 class="" style="text-transform: none!important;"><br>
                            <h2 class=""><strong>REGISTRATION NOW CLOSED</strong></h2>
<!--                                Register now for early bird discounts-->
                                <!-- <strong style="font-size:120%; line-height: 28px;">Early bird rates maintained!</strong><br>
                                <strong style="font-size:120%; line-height: 28px;">Registration extended until 6th May</strong> -->
                            </h3>
<!--                            <h3 class="">Attend the TASummit 2017</h3>-->
                            <span class="round-arrow"></span>
                        </a>
                        <!-- <a href="<?=DN?>/participate" target="" class="half-height orange-bg"> -->
                        <a href="https://twitter.com/TASummit" target="_blank" class="half-height orange-bg">
                            <!-- <h2 class=""><strong>SPONSOR OR EXHIBIT</strong></h2> -->
                            <h2 class=""><strong>FOLLOW THE SUMMIT ON TWITTER</strong></h2>
                            <!-- <h3 class="" style="text-transform: none!important;">Showcase your brand to over 4,000 like minds that are shaping Africa's digital transformation </h3> -->
                            <h3 class="" style="text-transform: none!important;">Click here.</h3>
                            <span class="round-arrow"></span>
                        </a>
                    </div>

                    <div class="box item-normal no-overflow" style="background: #2a51a3;">
                      <section class="animated fadeInDown">
                          <div class="container-fliud">
                              <?php include "includes/slides.php" ?>
                          </div>
                      </section>
                    </div>
                    <div class="box item-normal">
                        <a href="" target="" class="has-video">
                            <div class="wrap-all">
                                <img class="img img-responsive" src="<?=DN?>/img/2015/video1.png">
                                <h2 class="text-default" style="text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.1); "><strong>Watch the Video </strong></h2>
                                <video  id="clean-video38" class="clean-video" data-stream="<?=DN?>/videos/tas.mp4" style="object-fit: fill">
                                    <source src="<?=DN?>/videos/tas.mp4" type="video/mp4">
                                    <source src="<?=DN?>/videos/tas.mp4" type="video/mov">
                                    <source src="<?=DN?>/videos/tas.mp4" type="video/wmv">
                                </video>
                            </div>
                        </a>
                    </div>
                    <div class="box item-normal cust">
                        <!-- <a href="<?=DN?>/speakers" target="" class="half-height africa-bg"> -->
                        <a href="https://www.facebook.com/TransformAfricaSummit/" target="_blank" class="half-height africa-bg">
                            <!-- <h2 class=""><strong> SUMMIT SPEAKERS </strong></h2> -->
                            <h2 class=""><strong>FOLLOW THE SUMMIT ON FACEBOOK</strong></h2>
                            <h3 class="" style="text-transform: none!important;">Click here.</h3>
                            <!-- <h3 class="" style="text-transform: none!important;">Click here to view this years amazing speaker line-up</h3> -->
                            <span class="round-arrow"></span>
                        </a>
                        <a href="<?=DN?>/plan" target="" class="half-height blue-bg">
                            <h2 class=""><strong>PLAN YOUR TRIP</strong> <small style="font-size: 20px; color: #fff!important"></small></h2>
<!--                            <h3 class="" style="text-transform: none!important;">Click here to start your trip preparations</h3>-->
                            <h3 class="" style="text-transform: none!important;">For Visas, Hotel Reservations &amp; Travel Information</h3>
                            <span class="round-arrow"></span>
                        </a>
<!--
                        <a href="<?=DN?>/register/speaker" target="" class="full-height blue-bg">
                            <h2 class=""><strong>SPEAKING OPPORTUNITES</strong> <small style="font-size: 20px; color: #fff!important"></small></h2>
                            <h3 class="" style="text-transform: none!important;">Click here to apply to become a speaker</h3>
                            <span class="round-arrow"></span>
                        </a>
-->
                    </div>
                    <div class="box item-normal orange-bg">
                        <a href="#" class="wrap-all orange-bg" onclick='return false;' style="cursor: default;">
<!--
                            <div class="wrap-fifty blue-tint">
                                <img src="img/kcc-2016-small.jpg">
                            </div>
-->
              <div class="col-sm-12">
              <h2 class="text-white text-left text-uppercase"><strong>Highlights at Transform Africa Summit 2017</strong></h2><hr style="padding: 0; margin: 10px 0;"/>
              </div>
                            <div class="col-sm-6">
                                <ul>
                                  <li>Smart Africa <strong>Leaders Summit</strong></li>
                                  <li>Smart Africa <strong>Women's Summit</strong></li>
                                  <li>Smart Africa <strong>Business Leaders Symposium</strong></li>
                                  <li>Smart Africa <strong>Invest Program</strong></li>
                                  <li>Smart Talk: <strong>Conversations with Global ICT Influencers</strong></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                  <li>Smart Africa <strong>Conference Sessions</strong></li>
                                  <li>The Smart <strong>Networking Hub</strong></li>
                                  <li><strong>Smart Africa</strong> Exhibition</li>
                                  <li><strong>Face the Gorillas:</strong> Smart Cities Edition</li>
                                  <li><strong>Ms Geek Africa:</strong> Smart Cities Edition</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="container-fluid mapsection" style="margin-top: 3%">
                  <div class="container">
                    <div class="col-sm-12">
                        <h2 class="text-left text-default"><strong>Our Partners</strong></h2><hr>
                        <ul id="responsive" class="gallery content-slider list-unstyled clearfix">
                            <li><img class="img-logo" src="<?=DN?>/img/inmarsat.png" alt="INMARSAT"></li>
                            <li><img class="img-logo" src="<?=DN?>/img/cmu.png" alt="CMU"></li>
                            <li><img class="img-logo" src="<?=DN?>/img/hancon.png" alt="HANCOM"></li>
                            <li><img class="img-logo" src="<?=DN?>/img/bmz.jpg" alt="GIZ"></li>
                            <li><img class="img-logo" src="<?=DN?>/img/gvglogo.png" alt="Global Voice Group"></li>
                            <li><img class="img-logo" src="<?=DN?>/img/kommlabs.jpg" alt="Kommlabs"></li>
                            <li><img class="img-logo" src="<?=DN?>/img/kigalicity1.jpg" alt="Kigali City"></li>
                            <li><img class="img-logo" src="<?=DN?>/img/JICA-logo1.jpg" alt="JICA"></li>
                            <li><img class="img-logo" src="<?=DN?>/img/rwair.jpg" alt="Rwanda Air"></li>
                            <li><img class="img-logo" src="<?=DN?>/img/afdb.png" alt="Africa Development Bank"></li>
                            <li><img class="img-logo" src="<?=DN?>/img/iaccelerate.jpg" alt="iAccelerator"></li>
                            <li><img class="img-logo" src="<?=DN?>/img/microsoft-logo.jpg" alt="Microsoft Corporation"></li>
                            <li><img class="img-logo" src="<?=DN?>/img/gsma.png" alt="GSMA"></li>
                        </ul>
                        <style>
                            .mapsection .img-logo{
                                width: 80%!important;
                                margin: auto;
                            }
                        </style>
                    </div>
                    <div class="col-sm-4"><br><br>
                      <img class="img img-responsive mapafrica" src="img/map.png" />
                    </div>
                    <div class="col-sm-8"><br><br>
                      <h2 class="text-left text-default"><strong>Africa's time</strong> is now</h2>
                      <p>As technology drives mobility and connectivity in urbanized societies, African cities continuously seek to establish new infrastructure and city systems that will enable transition, and position them as global leaders and next generation cities.<hr class="hr-packs-gold">
                        <h4 class="text-left text-platinum">Dr. Hamadoun Tour&eacute;
                            <small> - Executive Director, Smart Africa</small></h4>
                        <a class="btn btn-success" href="about">Click here for more</a>
                      </p><br>
                    </div>
                  </div>
                </div>
                <div class="clearfix" id="attend"></div>
                <section id="left-right" class="bg2"><br>
                  <div class="container">
                    <p class="text-white">Transform Africa Summit 2017 has been designed to foster constructive conversation towards building a Smart Africa and facilitate meetings of like minds seeking policy &amp; opportunities to accelerate the continent towards socio economic transformation.</p>
                  </div>
                <div class="container-fluid">
                  <div class="pull-left book-layout-left">
                     <div class="col-md-12" style="padding: 20px;">
                        <h2 class="text-center" style="color: #fff!important">WHO WILL ATTEND</h2>
                        <hr class="hr-book-layout1" />
                         <ul class="text-white"><div style="clear: both;"></div>
                           <li>Heads of State &amp; Government</li>
                           <li>First Ladies</li>
                           <li>Ministers and Government officials in ICT &amp; related sectors such as digital economy, infrastructure, finance, health, education, and energy</li>
                           <li>Over 300 Mayors of African cities</li>
                           <li>Telecom and Utilities Regulators</li>
                           <li>Heads of International and Regional Organizations</li>
                           <li>ICT Industry leaders, innovators and investors</li>
                           <li>Young innovators, Girls and Women in STEM</li>
                           <li>Small and medium businesses (SMEs), entrepreneurs and innovators seeking business opportunities</li>
                           <li>Exhibitors from nations, companies and organizations around the world within the ICT Ecosystem</li>
                           <li>Non-governmental organizations</li>
                           <li>Academics, consultants, thought leaders and digital thinkers</li>
                         </ul>
                     </div>
                   </div>

                   <div class="pull-right book-layout-right">
                     <div class="col-md-12" style="padding: 20px;">
                       <h2 class="text-center" style="color: #fff!important">WHY YOU SHOULD ATTEND</h2>
                       <hr class="hr-book-layout1" />
                       <ul class="text-white"><div style="clear: both;"></div>
                           <li>Be part of Africa’s leading forum on digital transformation in Africa.</li>
                           <li>Support the Women and Girls in STEM through participation &amp; contribution towards the SMART Girls initiative.</li>
                           <li>Broaden your reach and deepen your impact through collaborations with youth in Africa shaping the digital landscape.</li>
                           <li>Participate in the new exciting SMART TALK session where a global business influencer will engage with delegates on issues shaping our world with a view to explore extraordinary ideas &amp; inspire powerful action.</li>
                           <li>Get insight into country specific SMART AFRICA flagship projects in the Member States through the SMART INVEST PROGRAM at the Summit. Interact and network with key decision makers and deal makers.</li>
                         </ul>
                        <div style="clear: both;"></div>
<!--
                        <div class="information-comments">
                            <strong><a href="http://twitter.com/tasummit" target="_blank">Twitter</a> :</strong>@TASummit #TAS2017
                        </div>
-->
                     </div>
                   </div>
                </div>
                </section>
                <div class="clearfix" id="program"></div>
                <?php include 'includes/program.html';?>
        
              <div class="container-fluid bg">
                <div class="container">
                    <div class="clearfix" style="margin: 2%;"></div>
                      <div class="panels">
                        <div class="col-xs-12 col-sm-4">
                          <div class="panel panel-gold text-center bg-panel">
                            <div class="panel-body">
                                <h3 class="text-default">Plan your Vist</h3>
                                <a href="visa"class="btn btn-gold">Click here</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                          <div class="panel panel-gold text-center bg-panel">
                            <div class="panel-body">
                              <h3 class="text-default">Discover Rwanda</h3>
                                <a href="discover"class="btn btn-gold">Click here</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                          <div class="panel panel-gold text-center bg-panel">
                            <div class="panel-body">
                                <h3 class="text-default">Kigali Convention Center</h3>
                                <a href="<?=DN?>/kcc" class="btn btn-gold">Click here</a>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="swiper-container swiper-container-horizontal" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/6.jpg"></div>

                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/1.jpg"></div>
                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/3.jpg"></div>
                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/4.jpg"></div>
                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/5.jpg"></div>
                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/7.jpg"></div>
                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/8.jpg"></div>
                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/9.jpg"></div>

                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/4.jpg"></div>
                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/5.jpg"></div>
                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/7.jpg"></div>
                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/8.jpg"></div>
                        <div class="swiper-slide"><img src="<?=DN?>/img/2015/9.jpg"></div>
                    </div>
                    <div class="swiper-button-prev"><i class="material-icons">&#xE408;</i></div>
                    <div class="swiper-button-next"><i class="material-icons">&#xE409;</i></div>
                </div>
            </div><!--inner-->
        </div><!--content-->
    </div><!--wrapper-->

    <?php include 'views/footer-common.php'; */ ?>
    
</body>
</html>


































