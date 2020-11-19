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
		background-color: white;
		width: 100%;
		box-shadow: 20px 0px 10px grey;
	}
	</style>
</head>
<body>

	<div class="container">
		<div class="visuals bar">
			<div id="visuals_titles" class="visuals bar">
				
			</div>
			<div id="fpp" class="visuals bar">
				
			</div>
			<div id="animation" class="visuals bar">
				
			</div>
			<div id="photogarphy" class="visuals bar">
				
			</div>
			<div id="gpe" class="visuals bar">
				
			</div>
		</div>

		<div class="audio">
			<div id="audio_titles" class="audio bar">
				
			</div>
			<div id="pmm" class="audio bar">
				
			</div>
			<div id="recordings" class="audio bar">
				
			</div>
			<div id="vebsr" class="audio bar">
				
			</div>
		</div>

		<div class="marketing">
			<div id="marketing_titles" class="marketing bar">
				
			</div>
			<div id="psu" class="marketing bar">
				 
			</div>
			<div id="platform_management" class="marketing bar">
				
			</div>
		</div>

		<div class="extras">
			<div id="extras_titles" class="extras bar">
				
			</div>
		</div>
	</div>

	
	
</body>

</html>