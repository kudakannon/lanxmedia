<?php

			

		?>

<!DOCTYPE html>


<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="mobile-web-app-capable" content="yes" />

	<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="apple-touch-icon" href="favicon.ico"/>
	<link rel="apple-touch-icon-precomposed" href="favicon.ico"/>
	
		
	<title></title>
	<script>

		function play_file(){
				var song =  "reese.mp3"; 			
	 			document.getElementById("playfile").src = "reese.mp3";
				 var x = document.getElementById("playfile").src;
				}
		function colourChange(b){
			if(b==0){
				console.log('hit');
				document.getElementById('playIcon').style.fill = '#22CB00';
				
			}
			if(b==1){
				console.log('hit');
				document.getElementById('playIcon').style.fill = '#000000';
				
			}
			if(b==2){
				console.log('hit');
				document.getElementById('pauseIcon').style.fill = '#00BFFF';
				document.getElementById('pauseIcon2').style.fill = '#00BFFF';
			}
			if(b==3){
				console.log('hit');
				document.getElementById('pauseIcon').style.fill = '#000000';
				document.getElementById('pauseIcon2').style.fill = '#000000';
				
			}
			if(b==4){
				console.log('hit');
				document.getElementById('nextIcon').style.fill = '#DA0000';
				
			}
			if(b==5){
				console.log('hit');
				document.getElementById('nextIcon').style.fill = '#000000';
				
				
			}
			if(b==6){
				console.log('hit');
				document.getElementById('prevIcon').style.fill = '#DA0000';
				
			}
			if(b==7){
				console.log('hit');
				document.getElementById('prevIcon').style.fill = '#000000';
				
				
			}
		}

	</script>
	<style>
		*{
			opacity: 1;

		}
		body{
			overflow-x: hidden;
			overflow-y: hidden;
			font-family:  AgencyFB;
		}
		.large{
			font-family: Technojap;
		}

		#testumony{
			margin-top: 0px;
			margin-left: 0px;
			position: absolute;
			background-color: rgba(255,255,255,0.5);
			background-size: 100% 100%;
			background-repeat: no-repeat;
			top: 0%;
			left: 0%;
			width: 25%;
			height: 50%;
		}
		#art_logo{
			margin-top: 0px;
			margin-left: 0px;
			position: absolute;
			background-image: url("faisallogo.png");
			background-size: 100% 100%;
			background-repeat: no-repeat;
			top: 3%;
			left: 27%;
			width: 25%;
			height: 18%;
		}
		#art_dec{
			background-color: rgba(255,255,255,0.6);
			padding-left: 5px;
			margin-top: 0px;
			margin-right: 0px;
			position: absolute;
			font-size: 20px;
			font-synthesis: bold;
			top: 3%;
			left: 50%;
			width: 50%;
			height: 18%;
		}
		#art_player{
			margin-top: 0px;
			margin-right: 0px;
			position: absolute;
			top: 20%;
			left: 0%;
			width: 100%;
			height: 100%;
		}
		.playlist{
			position: relative;
			top: 0px;
			left: 0px;
			background-color: white;
			width: 100%;
			height: 40px;
			border-style: solid;
			border-width: 1px;
			border-color: black;
		}
		/*footer{
			position: absolute;
			top: 100%;
			transform: translateY(-290px);
			width: 120%;
			height: 150px;
			background-color: #FFFFFF;
			left:-10px;
			box-shadow: 0 0px 10px 2.5px rgba(0, 0, 0, 0.75), 0 0px 10px 2.5px rgba(0, 0, 0, 0.75);
			font-family: AgencyFB;
		}*/

		#homebtn{
			background-image: url("images/icon/download.png");
			background-size: 100% 100%;
			position: absolute;
			left: 80%;
			top: 50px;
			width: 50px;
			height: 50px;
		}
		#homebtn:hover{
			cursor: pointer;
		}
		#lalogo{
			position: absolute;
			left: 50%;
			top: -10px;
			text-align: center;
			transform: translateX(-285px);
		}
		#under{
			position: absolute;
			transform: translateY(-25px) translateX(70px);
			font-family: Olorontryout;
		}
		#play_btn{
			position: absolute;
			top: 0%;
			left: 25%;
			height: 48%;
			width: 75%;
			border-width: 1px;
			border-style: solid;
			border-color: black;
			background-color: rgba(0,0,0,0.8);

		}
		#play_lst{
			position: absolute;
			top: 50%;
			left: 0%;
			height: 25%;
			width: 25%;
			border-width: 1px;
			border-style: solid;
			border-color: black;
			background-color: rgba(0,0,0,0.8);
			overflow: scroll;
			overflow-x: hidden;
		}
		.large{
			font-size: 35px;
		}
		.blurb{
			font-size: 18px;

		}
		.media_btn{
			position: absolute;
			top: 100%;
			left: 50%;
			transform: translateX(-100px) translateY(-50px);
		}
		#ctrl_media{
			position: absolute;
			top: 100%;
			left: 50%;
			transform: translateX(-100px) translateY(-50px) scale(0.75);

		}
		#ctrl_media:hover{
			cursor: pointer;
		}
		
		#playIcon{
			fill: black;
		
			
		}
		#pauseIcon{
			fill: black;
		
			
		}
		#pauseIcon2{
			fill: black;
		
			
		}
		#nextIcon{
			fill: black;
		
			
		}
		#prevIcon{
			fill: black;
		
			
		}
		#r6Clip{
			width: 100%;
			height: 100%;
		}

		@font-face {
			    font-family: Technojap;
			    src: url(fonts/tecnojap.ttf);
			    font-style: normal;
			    font-weight:200;
		}
		@font-face {
			    font-family: Olorontryout;
			    src: url(fonts/olorontryout.ttf);
			    font-style: normal;
			    font-weight:bold;
		}
		@font-face {
			    font-family: AgencyFB;
			    src: url(fonts/agencyfb.ttf);
			    font-style: normal;
			    font-weight:bold;
		}

	</style>
</head>
<body>
	
	<div id="testumony">
		<br/>
		"Wow lanx media helped me so much!!!"
			-FAI5
				 	
	</div>
	<div id="art_logo">
		
				 	
	</div>
	<div id="art_dec">
			FAI5 came to lanx media to get a media presence. With the help of our team we were he has become a youtube sensation.

	</div>
	<div id="art_player">
		
		<script type="text/javascript">
			var sounds ="alive.mp3";
			var sause = 0;
			var bleep = new Audio();

			bleep.src = sounds;	
			
			function trackCheck(){
				if(sause==0){
					sounds = "alive.mp3";
				}
				else if (sause == 1){
					sounds = "reese.mp3";
				}
				else if (sause == 2){
					sounds = "Got.mp3";
				}
				else if (sause == 3){
					sounds = "Lanister.mp3";
				}
				else if (sause == 4){
					sounds = "Still feel.mp3";
				}
				else if (sause == 5){
					sounds = "Sunflower.mp3";
				}
				else if (sause == 6){
					sounds = "Down.mp3";
				}
				else{
					sounds = "error";
				}

			}
			function trackSelect(trackNum){
					bleep.pause();
					sause =trackNum;
					trackCheck();
					bleep.src = sounds;
					bleep.play();
			}


			function trackChange(trackNum){



				if (trackNum==2){
					bleep.pause();
					sause +=1;
					if(sause>6){
						sause=6;
					}
					trackCheck();
					bleep.src = sounds;
					bleep.play();
				}
				else if(trackNum== 3){
					bleep.pause();
					sause -=1;
					if (sause<0) {
						sause =0;
					}
					trackCheck();
					bleep.src = sounds;
					bleep.play();
				}
				else if(trackNum== 0){
					trackCheck();
					bleep.play();
				}
				else if(trackNum== 1){
					trackCheck();
					bleep.pause();
				}
				
			}
		</script>
		
		<div id="play_btn">
			<video id="r6Clip">
			  <source src="r6.mp4" type="video/mp4">
			</video>
			
			<script>
				var x = document.getElementById("r6Clip");
	 			
				var clip ="r6.mp4";
				var ketchup = 0;
				var arch = new Audio();

				arch.src = clip;	
				
				function videoCheck(){
					if(ketchup==0){
						clip = "r6.mp4";
					}
					else if (ketchup == 1){
						clip = "ark.mp4";
					}
					else{
						clip = "error";
					}
					}



				function videoChange(trackNum){
					if(trackNum==0){
						videoCheck();
						x.play();
						
					}
					else if(trackNum== 1){
						videoCheck();
						
						x.pause();
					}
					if (trackNum==2){
						x.pause();
						ketchup +=1;
						videoCheck();
						x.src = clip;
						
						x.play();
					}
					else if(trackNum== 3){
						x.pause();
						ketchup -=1;
						videoCheck();
						x.src = clip;
						
						x.play();
					}
					
				}		
			
			</script>
			<svg height="100" width="200" id="ctrl_media">
				  <polygon points="100,0,200,25,125,42,125,50,75,50,75,42,0,25"  style="stroke:black;stroke-width:0.5;fill:grey;" onmouseenter="colourChange(0)" onmouseleave="colourChange(1)" onclick="videoChange(0)"/>
				  <polygon points="95,14,110,24,95,34"   id="playIcon" onmouseenter="colourChange(0)" onmouseleave="colourChange(1)" onclick="videoChange(0)"/>

				  <polygon points="100,100,200,75,125,58,125,50,75,50,75,58,0,75"  style="fill:grey;stroke:black;stroke-width:1" class="pause_btn" onmouseenter="colourChange(2)" onmouseleave="colourChange(3)" onclick="videoChange(1)"/>
				  <polygon points="96,65.5,101,65.5,101,84.5,96,84.5"   id="pauseIcon" class="pause_btn" onmouseenter="colourChange(2)" onmouseleave="colourChange(3)" onclick="videoChange(1)"/>
				  <polygon points="109,65.5,104,65.5,104,84.5,109,84.5"   id="pauseIcon2"    class="pause_btn"onmouseenter="colourChange(2)" onmouseleave="colourChange(3)" onclick="videoChange(1)"/>

				  <polygon points="200,25,125,42,125,58,200,75"  style="fill:grey;stroke:black;stroke-width:1" class="next_btn" onmouseenter="colourChange(4)" onmouseleave="colourChange(5)" onclick="videoChange(2)"/>
				  <polygon points="162.5,42,162.5,58,170.5,50,170.5,42,178.5,50,170.5,58,170.5,50" id="nextIcon"  class="next_btn"onmouseenter="colourChange(4)" onmouseleave="colourChange(5)" onclick="videoChange(2)"/>

				  <polygon points="0,25,75,42,75,58,0,75"  style="fill:grey;stroke:black;stroke-width:1" class="prev_btn"onmouseenter="colourChange(6)" onmouseleave="colourChange(7)" onclick="videoChange(3)"/>
				  <polygon points="37.5,42,37.5,58,29.5,50,29.5,42,21.5,50,29.5,58,29.5,50" id="prevIcon" class="prev_btn"onmouseenter="colourChange(6)" onmouseleave="colourChange(7)" onclick="videoChange(3)"/>
			</svg>
		</div>
	</div>
	<div id="play_lst"> 
			<div class="playlist" onclick="trackSelect(0)"> Alive</div>
			<div class="playlist" onclick="trackSelect(1)"> Reese</div>
			<div class="playlist" onclick="trackSelect(2)"> Game of Thrones opening</div>
			<div class="playlist" onclick="trackSelect(3)"> Rains of Castamere</div>
			<div class="playlist" onclick="trackSelect(4)"> Still feel</div>
			<div class="playlist" onclick="trackSelect(5)"> Sunflower</div>
			<div class="playlist" onclick="trackSelect(6)"> Down with the sickness</div>
			

	</div>

	
</body>

</html>