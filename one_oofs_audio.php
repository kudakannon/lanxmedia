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
		body{
			background-color: green;
		}
		.inserting{
			position: absolute;
			width: 100%;
			height: 100%;
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
			background-color: black;
			height: 30px;
			width: 100%;
			top: 100%;
		}
		.hexag{
			position: absolute;
		}
		.hexes_r{
			position: absolute;
			transform: translateY(-15px);
			left: 75%;
			width: 293px;
			height:326px;
		}
		.hexes_l{
			position: absolute;
			transform: translateX(-293px) translateY(-15px);
			left: 25%;
			width: 293px;
			height:326px;
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

	</style>
</head>
<body>
 <div class="inserting">
 	<div class="small">
 		<div class="spc"></div>
 		<div class="bart"></div>
 		<div class="hexes_r">
 			<div id="rightmenu" >
			
				<svg height="158" width="196" class="top_left" >
					<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0;" class="hexag" />
				</svg>
				<svg height="158" width="196" class="top_right" >
					<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0;" class="hexag"/>
				</svg>
				<svg height="158" width="196" class="bottom_left" >
					<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0;" class="hexag"/>
				</svg>
				<svg height="158" width="196" class="bottom_right" >
					<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0;" class="hexag"/>
				</svg>
				
				<div id="rightTxt" class="rightBox"></div><!-- open main = 2 --><!-- open main = 2 -->
			</div>

 		</div>
 	</div>
 	<div class="medium">
 		<div class="bart"></div>
 		<div class="hexes_l">
 			<div id="leftmenu" >
			
				<svg height="158" width="196" class="top_left" >
					<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0;" class="hexag" />
				</svg>
				<svg height="158" width="196" class="top_right" >
					<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0;" class="hexag"/>
				</svg>
				<svg height="158" width="196" class="bottom_left" >
					<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0;" class="hexag"/>
				</svg>
				<svg height="158" width="196" class="bottom_right" >
					<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0;" class="hexag"/>
				</svg>
				
				<div id="leftTxt" class="leftBox"></div><!-- open main = 2 --><!-- open main = 2 -->
			</div>

 		</div>
 	</div>
 	<div class="large">
 		<div class="bart"></div>
 		<div class="hexes_r">
 			<div id="rightmenu" >
			
				<svg height="158" width="196" class="top_left" >
					<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0;" class="hexag" />
				</svg>
				<svg height="158" width="196" class="top_right" >
					<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0;" class="hexag"/>
				</svg>
				<svg height="158" width="196" class="bottom_left" >
					<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0;" class="hexag"/>
				</svg>
				<svg height="158" width="196" class="bottom_right" >
					<polygon  points="50.5,4,137.5,4,184,79,137.5,154,50.5,154,4,79" style="fill:#FFFFFF;stroke:white;stroke-width:0;" class="hexag"/>
				</svg>
				
				<div id="rightTxt" class="rightBox"></div><!-- open main = 2 --><!-- open main = 2 -->
			</div>

 		</div>
 	</div>
 	
 </div>
	
</body>

</html>