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

	</style>
</head>
<body>

	<div class="listing"><nav>
			<ul>
			<li id="l0" class="listed">Budget
				<ul>
				<li id="b9"class="budget"class="line3"><h3>Marketing</h3>Estimated<br>activity *100+</li>
					<li id="b0" class="budget"class="line1">2 post a week</li>
					<li id="b1"class="budget"class="line1">1 platform</li>
				<!-- 2 -->	<li id="b2"class="budget"class="line2"><h3>Paid Advertising</h3>Paid strategy</li>
				<li id="b3"class="budget"class="line3">Recomended<br>Ad budget<br>+$10</li>
				<!-- 2 -->	<li id="b4"class="budget"class="line2"><h3>Content</h3> Content strategy</li>
					<li id="b5"class="budget"class="line1">Up tp 8 Images/gifs</li>
				<!-- 2 -->	<li id="b6"class="budget"class="line2"><h3>Support</h3>Online media strategy</li>
				<!-- 2 -->	<li id="b7"class="budget"class="line2">Regular check-in<br>as determined</li>
					<li id="b8"class="budget"class="line1">Monthly reporting</li>
					<li id="b10"class="budget" >1760/month</li>
					<li id="b11"class="budget" >58.66/day</li>
				</ul>
			</li>
			<li id="l1" class="listed"><hr/>Bronze
				<ul>
					<li id="br0"class="bronze"class="line3"><h3>Marketing</h3>Estimated<br>activity *1K+</li>
					<li id="br1" class="bronze"class="line1">3 posts a week</li>
					<li id="br2"class="bronze"class="line1">2 platforms</li>
				<!-- 2 -->	<li id="br3"class="bronze"class="line2"><h3>Paid Advertising</h3>Paid strategy</li>
					<li id="br4"class="bronze"class="line3">Recomended<br>Ad budget<br>+$100</li>
				<!-- 2 -->	<li id="br5"class="bronze"class="line2"><h3>Content</h3>Content strategy</li>
					<li id="br6"class="bronze"class="line1">Up tp 12 Images/gifs</li>
					<li id="br7"class="bronze"class="line1">1 video</li>
					<li id="br8"class="bronze"class="line1">2 Audios</li>
				<!-- 2 -->	<li id="br9"class="bronze"class="line2"><h3>Support</h3>Online media strategy</li>
				<!-- 2 -->	<li id="br10"class="bronze"class="line2">Regular check-in<br>as determined</li>
					<li id="br11"class="bronze"class="line1">Monthly reporting</li>
					<li id="br12"class="bronze" >3,298.90</li>
					<li id="br13"class="bronze" >109.96/day</li>
				</ul>
			</li>
			<li id="l2"class="listed"><hr/>Silver
				<ul>
					<li id="s0"class="silver" class="line3"><h3>Marketing</h3>Estimated<br>activity *10K+</li>
					<li id="s1" class="silver"class="line1">4 posts a week</li>
					<li id="s2"class="silver"class="line1">3 platforms</li>
				<!-- 2 -->	<li id="s3"class="silver" class="line2"><h3>Paid Advertising</h3>Paid strategy</li>
					<li id="s4"class="silver" class="line3">Recomended<br>Ad budget<br>+$500</li>
				<!-- 2 -->	<li id="s5"class="silver"class="line2">Quarterly<br>contest</li>
				<!-- 2 -->	<li id="s6"class="silver"class="line2"><h3>Content</h3>Content strategy</li>
					<li id="s7"class="silver"class="line1">Up tp 12 Images/gifs</li>
					<li id="s8"class="silver"class="line1">2 videos</li>
					<li id="s9"class="silver"class="line1">4 Audios</li>
				<!-- 2 -->	<li id="s10"class="silver"class="line2"><h3>Support</h3>Online media strategy</li>
				<!-- 2 -->	<li id="s11"class="silver"class="line2">Regular check-in<br>as determined</li>
					<li id="s12"class="silver">Monthly reporting</li>
					<li id="s13"class="silver" >6,598.90</li>
					<li id="s14"class="silver" >219.96/day</li>
				</ul>
			</li>
			<li id="l3"class="listed"><hr/>Gold
				<ul>
					<li id="g0"class="gold" class="line3"><h3>Marketing</h3>Estimated<br>activity *100K+</li>
					<li id="g1" class="gold"class="line1">5 posts a week</li>
					<li id="g2"class="gold"class="line1">4 platforms</li>
				<!-- 2 -->	<li id="g3"class="gold"class="line2"><h3>Paid Advertising</h3>Paid strategy</li>
					<li id="g4"class="gold"class="line3">Recomended<br>Ad budget<br>+$1K</li>
				<!-- 2 -->	<li id="g5"class="gold"class="line2">Monthly<br>contest</li>
				<!-- 2 -->	<li id="g6"class="gold"class="line2"><h3>Influencer Marketing</h3>Influencer strategy</li>
				<!-- 2 -->	<li id="g7"class="gold"class="line2">Infulencer discovery and<br>Incorporation</li>
				<!-- 2 -->	<li id="g8"class="gold"class="line2"><h3>Content</h3>Content strategy</li>
					<li id="g9"class="gold"class="line1">Up tp 16 Images/gifs</li>
					<li id="g10"class="gold"class="line1">3 videos</li>
					<li id="g11"class="gold"class="line1">6 Audios</li>
				<!-- 2 -->	<li id="g12"class="gold"class="line2"><h3>Support</h3>Online media strategy</li>
				<!-- 2 -->	<li id="g13"class="gold"class="line2">Regular check-in<br>as determined</li>
					<li id="g14"class="gold"class="line1">Monthly reporting</li>
					<li id="g15"class="gold" >13,198.90</li>
					<li id="g16"class="gold" >439.96/day</li>
				</ul>
			</li>
			<li id="l4"class="listed"><hr/>Platinum
				<ul>
					<li id="p0"class="platinum"class="line3"><h3>Marketing</h3>Estimated<br>activity *1M+</li>
					<li id="p1" class="platinum"class="line1">Daily posts</li>
					<li id="p2"class="platinum"class="line1">5 platforms</li>
				<!-- 2 -->	<li id="p3"class="platinum"class="line2"><h3>Paid Advertising</h3> Paid strategy</li>
					<li id="p4"class="platinum"class="line3">Recomended<br>Ad budget<br>+$3K</li>
				<!-- 2 -->	<li id="p5"class="platinum"class="line2">Monthly<br>contest</li>
					<li id="p6"class="platinum"class="line1">GEO filters</li>
				<!-- 2 -->	<li id="p7"class="platinum"class="line2"><h3>Influencer Marketing</h3> Influencer strategy</li>
				<!-- 2 -->	<li id="p8"class="platinum"class="line2">Infulencer discovery and<br>Incorporation</li>
				<!-- 2 -->	<li id="p9"class="platinum"class="line2"><h3>Content</h3>Content strategy</li>
					<li id="p10"class="platinum"class="line1">Up tp 20 Images/gifs</li>
					<li id="p11"class="platinum"class="line1">4 videos</li>
					<li id="p12"class="platinum"class="line1">8 Audios</li>
				<!-- 2 -->	<li id="p13"class="platinum"class="line2"><h3>Support</h3>Online media strategy</li>
				<!-- 2 -->	<li id="p14"class="platinum"class="line2">Regular check-in<br>as determined</li>
					<li id="p15"class="platinum"class="line1">Monthly reporting</li>
					<li id="p16"class="platinum" >21,998.90</li>
					<li id="p17"class="platinum" >733.29/day</li>
				</ul>
			</li>
		</ul>
	</nav></div>

	
	
</body>

</html>