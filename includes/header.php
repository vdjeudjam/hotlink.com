<?php //session_start(); ?>
<?php require_once("connection.php") ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang= "en">
	<head>
		<meta charset="utf-8"/>
		<title> HotLink.com </title>
		<link rel="stylesheet" type="text/css" href="stylesheets/styles.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/buttons.css" />
	</head>
	
	<script type="text/javascript">
					// affiche l'heure et function correctment

			function startTime(){
				var today=new Date();
				var h=today.getHours();
				var m=today.getMinutes();
				var s=today.getSeconds();
				// add a zero in front of numbers<10
				m=checkTime(m);
				s=checkTime(s);
				document.getElementById('time_txt').innerHTML=h+":"+m+":"+s;
				t=setTimeout(function(){startTime()},500);
				}

			//verify d'abord l'heure avant d'envoyer a startTime().	
			function checkTime(i){
				if (i<10)
				  {i="0" + i;}
			return i;
			}
	</script>
		
	<body onload="startTime()" style="color: grey;">
		<div id="page-container">
			<div class="clear-reset"></div>
				
				<div id="page-header" style="padding-top: 0;">
				<div id="page-header-inner"><!--<img width="1330" height="225" src="header.jpg" alt="" />-->
					<div id="logo" style="clear: both; height: 30px; padding-bottom: 30px;">				<!--se charge du logo-->
						<h1 id="logo-name"><i>HOTLINK.com</i></h1>
						<h2 id="logo-text">Your Wireless Internet Provider</h2>
					</div><div class="cleared"></div>
					<div id="time_txt"></div>
					
				</div>
				</div>
			<div class="cleared"></div>
		<div class="clear-reset"></div>
		
		<div id="page-sheet">
								
			<div id="page-sheet-ribbon">
			<div id= "menubar" align="center">
				<div id="menubar-inner">
					<ul>
						<li><a href ="index.php">Home</a></li>
						<li><a href="#">Products</a>
							<ul>
								<li><a href="../products.php?id=1">Machines</a></li>
								<li><a href="../products.php?id=2">USB flash</a></li>
								<li><a href="../products.php?id=3">Internet keys</a></li>
								<li><a href="../products.php?id=4">Others</a></li>
							</ul>
						</li>
						<li><a href="status.php">Status</a></li>
						<li><a href="aboutUs.php">About Us</a></li>
						<li><a href="#">Hi-News</a>
							<ul>
								<li><a href="../products.php?id=5">Promotions</a></li>
								<li><a href="../products.php?id=6">Event</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div><div class="cleared"></div>
