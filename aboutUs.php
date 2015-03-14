<?php require_once("includes/connection.php") ?>

<?php include("includes/header.php"); ?>
<div id="left-navigation" align="left" style="">			<!-- in charge of left section -->
	<div id="left-navigation-inner" align="left" style="padding:10px;">
		<div id="login-form" style="width: 170px;">			<!--take care of the form-->     
			<div id="login-form-inner" style="width: 170px">
				<form action="status.php" method="post" > 
					<p align="center" class="logging"><b> Login Here !</b></p>
					<label for="login" style="font-family:Georgia;font-size:14px;color:black;"> account: <input type="text" name="account" placeholder="enter account name" /> </label><br>
					<label for="password" style="font-family:Georgia;font-size:14px;color:black;"> password: <input type="password" name="pwd" placeholder="enter password" /> </label>
					<p><input type="submit" value="login"/> </p>
					<p><a href="form.php"><u> Create Account </u><a/></p>									
				
				</form>
			</div><div class="cleared"></div>	
		</div>
					
		<div id="nav-down" align="left">				<!-- div below form -->
			<div id="nav-down-inner" >
				<p> <!--href="#" class="follow"-->
					Follow Us:<br/><br/>
					<a href="https://www.facebook.com/HotLink" target="_blank" class="btn-auth btn-facebook large">facebook</a><br/><br/>
					<a href="https://www.twitter.com/HotLink" target="_blank" class="btn-auth btn-twitter large">twitter</a> <br/><br/>
					<a href="https://www.youtube.com/HotLink" target="_blank" class="bnt-auth btn-youtube large">YouTube</a>
				</p>
			</div><div class="cleared"></div>
		</div>
	</div>
</div>	
<div id="artcle" align="right" style="width: 690px; margin-left: 210px; margin-top: 0; border: 1px solid transperent;">				<!-- in charge of right section -->
	<div id="article-content-block" align="right">
		<div id="article-content-block-inner" align="right"> 			<!--revoire le width-->
			<div id="article-content-row-1" align="right" style="">
						<!--<div id="article-block-1" style="width: 400px; ">				<!-- shutterstock_9220px543doit contenir des images circulantes 
							<img width="700" height="333" src="slide3.jpg" alt="" />
						</div>-->
						
			</div>
			
			<div id="aricle-block-1">	
				<div id="article-block-inner" align="center" style="padding-top: 20px; margin-top: 5px;">	<!-- doit travailler ca-->
					<h1> About Us </h1>
					<p>
						<table class="main" cellpadding="8" width="100%" >
							<tr><td class="mainIn"><h3>About HotLink.com</h3>
								<p class="desc">
								Founded in February 2013, HotLink.com was created to be a stepping stone
								to the fast, reliable and secured wireless internet access in the town of Buea and its environs. 
								Also, to provide many other facilities like IT classes amongst many.
								</p><br />
								<hr>
								<h3>HotLink.com's Strive for Perfection</h3>
								<p class="desc">New ideas, techniques and teachings are found every day.  HotLink.com is always changing its
								techniques and aim high to incorporate the latest in web design.  If you have any suggestions
								on new content for our site, simply <a href="mailto%myemail@hotlink.com">myemail@hotlink.com</a>Email us</a>! or can still <b>contact us</b> 
								We greatly appreciate your ideas and feedback. 
								Spot any typos/errors? <a href="mailto%myemail@hotlink.com">myemail@hotlink.com</a> Please let us know</a>.  We love being shown where we've goofed!
								</p><br />
								<hr>
								<h3>HotLink.com's Creators</h3>
								<p class="desc">HotLink.com was initially created by a team of web developers wanting to fill a void
								in the type of internet services provided in Buea. Although many other internet providers did a good job, 
								there always seemed to be major errors that were just glossed over. 
								However, after finishing with the IT service provision, we figured "Why not add
								basic necessities?" and it just kind of spiraled out of control since then. 
								</p>
							</td></tr>
						</table>
					</p><br/>
					<h2>Contact Us</h2>
					<p>
						<table class="main" cellpadding="8" width="100%" >
							<tr><td class="mainIn">
								<p class="desc">
								Please let us know if you have any feedback about the site.  We are always trying to improve
								the website, so any feedback is much appreciated. Email
								</p><br/><hr>
								<p><b>Note:</b> At this
								time we cannot provide individual help, support, or answers to questions due to the volume of mail
								we receive every day.  However, rest assured that we do read every single email, just be patient.
								Thank you for your feedback
								and take care!
								</p><br/><hr>
								<h4>contact</h4>
								
								<p>P.O. Box: 1917, Buea<br />
									Cameroon.</p>
								
								<p>Tel:(+237)76413370<br />
								       (+237)22030305<br/>
									   (+237)55586295</p>
								</p>
								<p><br/>W: <a href="http://www.5thseason.com">http://www.HotLink.com</a><br />
								   E: <a href="mailto%myemail@hotlink.com">myemail@hotlink.com</a>
								</p>
							</td></tr>
						</table>
					</p>
				</div>	
			</div>	
			 <a href="#" id="footer-icon" title="RSS"><img src="images/rssicon.jpg" align="right"/>
			<div class="cleared"></div>
			