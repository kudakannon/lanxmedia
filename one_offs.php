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
		function toggle(val){
			
			if(val==0){ 
					if(document.getElementById('fpp_info').style.display=="none"){
						document.getElementById('fpp_info').style.display="inline-block";
					}
					else{
						document.getElementById('fpp_info').style.display="none";
					}
					//document.getElementById('fpp_info').style.visibility="visible";	
			}
			else if(val==1){ 
					if(document.getElementById('ani_info').style.display=="none"){
						document.getElementById('ani_info').style.display="inline-block";
					}
					else{
						document.getElementById('ani_info').style.display="none";
					}
					//document.getElementById('fpp_info').style.visibility="visible";	
			}
			else if(val==2){ 
					if(document.getElementById('pho_info').style.display=="none"){
						document.getElementById('pho_info').style.display="inline-block";
					}
					else{
						document.getElementById('pho_info').style.display="none";
					}
					//document.getElementById('fpp_info').style.visibility="visible";	
			}
			else if(val==3){ 
					if(document.getElementById('gpe_info').style.display=="none"){
						document.getElementById('gpe_info').style.display="inline-block";
					}
					else{
						document.getElementById('gpe_info').style.display="none";
					}
					//document.getElementById('fpp_info').style.visibility="visible";	
			}
			else if(val==4){ 
					if(document.getElementById('pmm_info').style.display=="none"){
						document.getElementById('pmm_info').style.display="inline-block";
					}
					else{
						document.getElementById('pmm_info').style.display="none";
					}
					//document.getElementById('fpp_info').style.visibility="visible";	
			}
			else if(val==5){ 
					if(document.getElementById('rec_info').style.display=="none"){
						document.getElementById('rec_info').style.display="inline-block";
					}
					else{
						document.getElementById('rec_info').style.display="none";
					}
					//document.getElementById('fpp_info').style.visibility="visible";	
			}
			else if(val==6){ 
					if(document.getElementById('vebsr_info').style.display=="none"){
						document.getElementById('vebsr_info').style.display="inline-block";
					}
					else{
						document.getElementById('vebsr_info').style.display="none";
					}
					//document.getElementById('fpp_info').style.visibility="visible";	
			}
			else if(val==7){ 
					if(document.getElementById('psu_info').style.display=="none"){
						document.getElementById('psu_info').style.display="inline-block";
					}
					else{
						document.getElementById('psu_info').style.display="none";
					}
					//document.getElementById('fpp_info').style.visibility="visible";	
			}
			else if(val==8){ 
					if(document.getElementById('pmag_info').style.display=="none"){
						document.getElementById('pmag_info').style.display="inline-block";
					}
					else{
						document.getElementById('pmag_info').style.display="none";
					}
					//document.getElementById('fpp_info').style.visibility="visible";	
			}
			
		}

	</script>
	<style>
		hr{
			border-color:  rgba(200,200,200,1);
			position: absolute;
			border-width: 1.5px;
			border-style: solid;
			height: 50%;
			top: 25%;
		}
		*{
			margin: 0px;
			padding: 0px;
			font-family: AgencyFB	;
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
		@font-face {
			    font-family: dank;
			    src: url(fonts/market.ttf);
			    font-style: normal;
			    font-weight:bold;
		}
		body
			{
				overflow-y: visible;
				text-align: center;
				margin: 0;
				text-decoration: none;

			}
			.listing{

				width: 100%;
				height: 20%;
				text-shadow: 4px 4px 4px #0F0F0F;
			}


			nav ul
			{
				width: 100%;
				height: 100px;
				
				text-align: center;
			}

			 nav ul li
			 {
			 	background-color: rgba(255,255,255,0.5);
			 	position: absolute;
			 	float: left;
			 	width: 20%;	
			 	height:95px;
			 	padding-top:15px;
				list-style-type: none;
				font-size: 3.5em;
				text-align: center;
			}
			#l0{
				color: #44B649;
				font-family: dank;
				left: 0%
				
			}
			#l1{
				color: #C59579;
				font-family: dank;
				left: 20%
			}
			#l2{
				color: #C2A5AC;
				font-family: dank;
				left: 40%
			}
			#l3{
				color: #FBC179;
				font-family: dank;
				left: 60%
			}
			#l4{
				font-family: dank;
				left: 80%
			}
			.budget, .bronze, .silver, .gold, .platinum{
				top:15px;
				text-shadow: 0px 0px 0px #000000;
				padding-top:50px;
				height: 100px;
				position: relative;
			 	float: left;
			 	
			 	width: 100%;	
			 	border-style: none;
			 	color: rgb(0,0,0);
				list-style-type: none;
				font-size: .37em;
				text-align: center;
			}
			h3{
				text-shadow: 0 0 1.5px #000000;
				font-size: 1em;
				font-style: bold;
			}

			.budget{
				background-color: rgba(255,255,255,1);
			}
			.bronze{
				background-color: rgba(245,245,245,1);
			}
			.silver{
				background-color: rgba(235,235,235,1);
			}
			.gold{
				background-color: rgba(215,215,215,1);
			}
			.platinum{
				background-color: rgba(200,200,200,1);
			}
			#b10, #br12, #s13, #g15,#p16{
				padding-top: 15px;
				background-color: #240C0D;
				color: #FFFFFF;
				text-align: center;
				font-size: 1em;
				height:75px;
			}
			#b11 ,#br13, #s14, #g16,#p17{
				padding-top:  5px;
				background-color: #931A1B;
				color: #FFFFFF;
				font-size: 0.75em;
				height:60px;
			}
			
			#b9, #b3, #br0, #br4, #s0, #s4,#g0, #g4, #p0, #p4 {
				padding-top:30px;
				height: 120px;
			}
			#b2, #b4, #b6, #b7, #br3, #br5, #br9, #br10, #s3, #s5, #s6, #s10, #s11, #g3, #g5, #g6, #g7, #g8, #g12, #g13, #p3, #p5, #p7, #p8, #p9, #p13, #p14{
				padding-top: 45px;
				height: 105px;
			}

			/*.budget:hover, .bronze:hover, .silver:hover, .gold:hover, .platinum:hover{
				background-color: rgba(255,0,0,1);
			}*/
		.bar{
			position: initial;
			background-color: white;
			width: 100%;
			font-size: 1.7em;
			box-shadow: 0px 5px 5px rgba(0,0,0,0.5);
			padding-top: 10px;
		}
		.visuals{
		}

		#visuals_titles{
			height: 100px;
		}
		#fpp{
			height: 50px;
		}
		#ani_info{
			display: none;
		}
		#animation{
			height: 50px;
		}
		#photography{
			height: 50px;
		}
		#gpe{
			height: 50px;
		}

		.audio{
			width: 100%;
		}

		#audio_titles{
			
			height: 100px;
		}
		#pmm{
			height: 50px;
		}
		#recordings{
			height: 50px;
		}
		#vebsr{
			height: 50px;
		}

		.marketing{
		}

		#marketing_titles{
			height: 100px;
		}
		#psu{
			height: 50px;
		}
		#platform_management{
			height: 50px;
		}
		.extras{
		}
		.bbbj{
			font-size: 2em;
			font-weight: bold;
		}
		.spacer{
			height: 10px;
		}
		.bottom_spacer{
			height: 50px;
		}
		.inserting{
				position: absolute;
				transform: translateY(-30px);
				width: 100%;
				height: 820px;
			}
		.bart{
				position: relative;
				left: 0%;
				top: 50%;
				transform: translateY(-25px);
				width: 100%;
				height: 50px;
				background-color: rgba(255,255,255,0.7);			
		}
		.small{
					
				height: 30%;
				top: 0%;
		}
		.medium{
					
				height: 30%;
				top: 30%;
			}
			.large{
					
				height: 30%;
				top: 60%;
			}
			.spc{
				position: absolute;
				height: 30px;
				width: 100%;
				top: 100%;
			}
			.hexag{
				position: absolute;
				transform: scale(0.75);
				
			}
			.hexes_r{
				position: absolute;
				transform: translateY(-15px);
				left: 75%;
				width: 220px;
				height:246px;
			}
			.hexes_l{
				position: absolute;
				transform: translateX(-293px) translateY(-15px);
				left: 25%;
				width: 220px;
				height:246px;
			}
			.top_right{
				position: absolute;
				left: 50%;
				top: 25%;

			}
			.bottom_right{
				position: absolute;
				left: 50%;
				top: 75%;

			}
			.bottom_left{
				position: absolute;
				top: 50%;
				left: 0%;
				

			}
			.top_left{
				position: absolute;
				top: 0%;
				left: 0%;


			}
			.information{
				height:790px ;
				width: 100% ;

			}
			.back_blur{
				filter: blur(5px);
				opacity: 0.75;
			}
			.hex_text_top_left{
				width: 103px;
				height: 73px;
				position: absolute;
				top: 25%;
				left: 50%;
				transform: translateX(-92px) translateY(-39.5px);
				font-size: 17.5px;
				padding-top: 17px;
				/*border-color: rgb(0,0,0);
				border-width: 1px;
				border-style: solid;*/
			}
			.hex_text_top_right{
				width: 103px;
				height: 73px;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translateX(18px) translateY(-39.5px);
				font-size: 40px;
				padding-top: 14px;
				padding-left: 7px;
				/*border-color: rgb(0,0,0);
				border-width: 1px;
				border-style: solid;*/
			}
			.hex_text_bottom_left{
				width: 103px;
				height: 73px;
				position: absolute;
				top: 75%;
				left: 50%;
				transform: translateX(-92px) translateY(-39.5px);
				font-size: 17.5px;
				padding-top: 17px;
				/*border-color: rgb(0,0,0);
				border-width: 1px;
				border-style: solid;*/
			}
			.hex_text_bottom_right{
				width: 103px;
				height: 73px;
				position: absolute;
				left: 50%;
				top: 100%;
				transform: translateX(18px) translateY(-39.5px);
				font-size: 40px;
				padding-top: 12px;
				padding-left: 7px;
				/*border-color: rgb(0,0,0);
				border-width: 1px;
				border-style: solid;*/
			}
			.pp_size{
				font-size: 40px;
			}
			.price_size{
				font-size: 30px;
			}
			#fpp_info{
				/*visibility: hidden;*/
				display: none;
			}
			#pho_info{
				/*visibility: hidden;*/
				display: none;
			}
			#gpe_info{
				/*visibility: hidden;*/
				display: none;
			}
			#pmm_info{
				/*visibility: hidden;*/
				display: none;
			}
			#rec_info{
				/*visibility: hidden;*/
				display: none;
			}
			#vebsr_info{
				/*visibility: hidden;*/
				display: none;
			}
			#psu_info{
				/*visibility: hidden;*/
				display: none;
			}
			#pmag_info{
				/*visibility: hidden;*/
				display: none;
			}

	</style>
</head>
<body>

	<div class="container">
		<div class="spacer"></div>
		<div class="spacer"></div>
		<div class="visuals" >
			<div id="visuals_titles" class="bar bbbj"> <h1> Visuals</h1>
				
			</div>
			
			<div class="spacer"></div>
			<div id="fpp" class="bar" onclick="toggle(0)">
				Film & post production
			</div>
			<div class="information" id="fpp_info">
				<div class="inserting">
				 	<div class="small">
				 		<div class="bart">
				 			<div class="pp_size"> Small (up to 1 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>

								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>
									

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">1,650+</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">3,300+</div>
								</svg>
								
								
								
								<div></div>
							</div>

				 		</div>
				 	</div>
				 	<div class="medium">
				 		<div class="bart">
				 			<div class="pp_size">Medium (up to 12 hr)</div>
				 		</div>
				 		<div class="hexes_l">
				 			<div id="left_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">3,300+</div>

								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">11,000+</div>
								</svg>
							</div>

				 		</div>
				 	</div>
				 	<div class="large">
				 		<div class="bart">
				 			<div class="pp_size">Large (up to 48 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">33,000+</div>
								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">110,000+</div>
								</svg>
								
								
							</div>

				 		</div>
				 	</div>
				 	
				 </div>
			</div>
			<div class="spacer"></div>
			<div id="animation" class="bar" onclick="toggle(1)">
				Animations
			</div>
			<div class="information" id="ani_info">
				<div class="inserting">
				 	<div class="small">
				 		<div class="bart">
				 			<div class="pp_size"> Small (up to 1 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>

								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>
									

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">1,650+</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">3,300+</div>
								</svg>
								
								
								
								<div></div>
							</div>

				 		</div>
				 	</div>
				 	<div class="medium">
				 		<div class="bart">
				 			<div class="pp_size">Medium (up to 12 hr)</div>
				 		</div>
				 		<div class="hexes_l">
				 			<div id="left_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">3,300+</div>

								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">11,000+</div>
								</svg>
							</div>

				 		</div>
				 	</div>
				 	<div class="large">
				 		<div class="bart">
				 			<div class="pp_size">Large (up to 48 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">33,000+</div>
								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">110,000+</div>
								</svg>
								
								
							</div>

				 		</div>
				 	</div>
				 	
				 </div>
			</div>
			<div class="spacer"></div>
			<div id="photography" class="bar" onclick="toggle(2)">
				Photography
			</div>
			<div class="information" id="pho_info">
				<div class="inserting">
				 	<div class="small">
				 		<div class="bart">
				 			<div class="pp_size"> Small (up to 1 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>

								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>
									

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">1,650+</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">3,300+</div>
								</svg>
								
								
								
								<div></div>
							</div>

				 		</div>
				 	</div>
				 	<div class="medium">
				 		<div class="bart">
				 			<div class="pp_size">Medium (up to 12 hr)</div>
				 		</div>
				 		<div class="hexes_l">
				 			<div id="left_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">3,300+</div>

								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">11,000+</div>
								</svg>
							</div>

				 		</div>
				 	</div>
				 	<div class="large">
				 		<div class="bart">
				 			<div class="pp_size">Large (up to 48 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">33,000+</div>
								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">110,000+</div>
								</svg>
								
								
							</div>

				 		</div>
				 	</div>
				 	
				 </div>
			</div>
			<div class="spacer"></div>
			<div id="gpe" class="bar" onclick="toggle(3)">
				Graphics & photo edits
			</div>
			<div class="information" id="gpe_info">
				<div class="inserting">
				 	<div class="small">
				 		<div class="bart">
				 			<div class="pp_size"> Small (up to 1 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>

								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>
									

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">1,650+</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">3,300+</div>
								</svg>
								
								
								
								<div></div>
							</div>

				 		</div>
				 	</div>
				 	<div class="medium">
				 		<div class="bart">
				 			<div class="pp_size">Medium (up to 12 hr)</div>
				 		</div>
				 		<div class="hexes_l">
				 			<div id="left_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">3,300+</div>

								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">11,000+</div>
								</svg>
							</div>

				 		</div>
				 	</div>
				 	<div class="large">
				 		<div class="bart">
				 			<div class="pp_size">Large (up to 48 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">33,000+</div>
								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">110,000+</div>
								</svg>
								
								
							</div>

				 		</div>
				 	</div>
				 	
				 </div>
			</div>
			<div class="spacer bottom_spacer "></div>
		</div>

		<div class="audio ">
			<div id="audio_titles" class="bar bbbj"> <h1>Audio</h1>
				
			</div>
			<div class="spacer"></div>
			<div id="pmm" class="bar" onclick="toggle(4)">
				Produce, mix & master
			</div>
			<div class="information" id="pmm_info">
				<div class="inserting">
				 	<div class="small">
				 		<div class="bart">
				 			<div class="pp_size"> Small (up to 1 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>

								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>
									

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">1,650+</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">3,300+</div>
								</svg>
								
								
								
								<div></div>
							</div>

				 		</div>
				 	</div>
				 	<div class="medium">
				 		<div class="bart">
				 			<div class="pp_size">Medium (up to 12 hr)</div>
				 		</div>
				 		<div class="hexes_l">
				 			<div id="left_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">3,300+</div>

								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">11,000+</div>
								</svg>
							</div>

				 		</div>
				 	</div>
				 	<div class="large">
				 		<div class="bart">
				 			<div class="pp_size">Large (up to 48 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">33,000+</div>
								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">110,000+</div>
								</svg>
								
								
							</div>

				 		</div>
				 	</div>
				 	
				 </div>
			</div>
			<div class="spacer"></div>
			<div id="recordings" class="bar" onclick="toggle(5)">
				Recordings
			</div>
			<div class="information" id="rec_info">
				<div class="inserting">
				 	<div class="small">
				 		<div class="bart">
				 			<div class="pp_size"> Small (up to 1 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>

								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>
									

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">1,650+</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">3,300+</div>
								</svg>
								
								
								
								<div></div>
							</div>

				 		</div>
				 	</div>
				 	<div class="medium">
				 		<div class="bart">
				 			<div class="pp_size">Medium (up to 12 hr)</div>
				 		</div>
				 		<div class="hexes_l">
				 			<div id="left_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">3,300+</div>

								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">11,000+</div>
								</svg>
							</div>

				 		</div>
				 	</div>
				 	<div class="large">
				 		<div class="bart">
				 			<div class="pp_size">Large (up to 48 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">33,000+</div>
								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">110,000+</div>
								</svg>
								
								
							</div>

				 		</div>
				 	</div>
				 	
				 </div>
			</div>
			<div class="spacer"></div>
			<div id="vebsr" class="bar" onclick="toggle(6)">
				Vocal enhancing & background sound removal
			</div>
			<div class="information" id="vebsr_info">
				<div class="inserting">
				 	<div class="small">
				 		<div class="bart">
				 			<div class="pp_size"> Small (up to 1 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>

								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>
									

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">1,650+</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">3,300+</div>
								</svg>
								
								
								
								<div></div>
							</div>

				 		</div>
				 	</div>
				 	<div class="medium">
				 		<div class="bart">
				 			<div class="pp_size">Medium (up to 12 hr)</div>
				 		</div>
				 		<div class="hexes_l">
				 			<div id="left_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">3,300+</div>

								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">11,000+</div>
								</svg>
							</div>

				 		</div>
				 	</div>
				 	<div class="large">
				 		<div class="bart">
				 			<div class="pp_size">Large (up to 48 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">33,000+</div>
								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">110,000+</div>
								</svg>
								
								
							</div>

				 		</div>
				 	</div>
				 	
				 </div>
			</div>
			<div class="spacer bottom_spacer "></div>
		</div>

		<div class="marketing">
			<div id="marketing_titles" class="bar bbbj"><h1>Marketing</h1>
				
			</div>
			<div class="spacer"></div>
			<div id="psu" class="bar" onclick="toggle(7)"> 
				 Platform set up
			</div>
			<div class="information" id="psu_info">
				<div class="inserting">
				 	<div class="small">
				 		<div class="bart">
				 			<div class="pp_size"> Small (up to 1 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>

								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>
									

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">1,650+</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">3,300+</div>
								</svg>
								
								
								
								<div></div>
							</div>

				 		</div>
				 	</div>
				 	<div class="medium">
				 		<div class="bart">
				 			<div class="pp_size">Medium (up to 12 hr)</div>
				 		</div>
				 		<div class="hexes_l">
				 			<div id="left_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">3,300+</div>

								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">11,000+</div>
								</svg>
							</div>

				 		</div>
				 	</div>
				 	<div class="large">
				 		<div class="bart">
				 			<div class="pp_size">Large (up to 48 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">33,000+</div>
								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">110,000+</div>
								</svg>
								
								
							</div>

				 		</div>
				 	</div>
				 	
				 </div>
			</div>
			<div class="spacer"></div>
			<div id="platform_management" class="bar" onclick="toggle(8)">
				Platform managment
			</div>
			<div class="information" id="pmag_info">
				<div class="inserting">
				 	<div class="small">
				 		<div class="bart">
				 			<div class="pp_size"> Small (up to 1 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>

								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>
									

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">1,650+</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>
								<div></div>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">3,300+</div>
								</svg>
								
								
								
								<div></div>
							</div>

				 		</div>
				 	</div>
				 	<div class="medium">
				 		<div class="bart">
				 			<div class="pp_size">Medium (up to 12 hr)</div>
				 		</div>
				 		<div class="hexes_l">
				 			<div id="left_menu" >
							
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">3,300+</div>

								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">11,000+</div>
								</svg>
							</div>

				 		</div>
				 	</div>
				 	<div class="large">
				 		<div class="bart">
				 			<div class="pp_size">Large (up to 48 hr)</div>
				 		</div>
				 		<div class="hexes_r">
				 			<div id="right_menu" >
							
								
								<svg height="158" width="196" class="top_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_left">Up to 4K full<br> frame 50fps</div>
								</svg>

								<svg height="158" width="196" class="top_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="top_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_top_right">33,000+</div>
								</svg>

								<svg height="158" width="196" class="bottom_left back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_left" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_left">8K Helium sensor<br> 150fps (RED cam)</div>
								</svg>

								<svg height="158" width="196" class="bottom_right back_blur" >
									<polygon  points="50.5,8,137.5,8,188,79,139.5,158,48.5,158,8,79"style="fill:#000000;stroke:black;stroke-width:0;" class="hexag"/>
								</svg>
								<svg height="158" width="196" class="bottom_right" >
									<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0" class="hexag"/>
									<div class="hex_text_bottom_right">110,000+</div>
								</svg>
								
								
							</div>

				 		</div>
				 	</div>
				 	
				 </div>
			</div>
			<div class="spacer bottom_spacer "></div>
		</div>

		<div class="extras bar">
			<div id="extras_titles" class="bar bbbj"> <h1>Extras</h1>
				
			</div>
		</div>
	</div>

	
	
</body>

</html>