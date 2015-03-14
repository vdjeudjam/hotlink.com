<?php	//require_once("includes/connection.php"); ?>
<?php	require_once("includes/funcs.php"); ?>
<?php include("includes/header.php"); ?>
<?php 
	$username = $_POST['account'];
	$pass = encrypt_pass($_POST['pwd']);
?>
						
			<div id="login-article-section">								<!-- voici le contenu de l	 page en sois-->
				<p style="padding-top:10px;"> 
					<h1> <?php authentication( $username, $pass); ?> </h1> 
					<h2 align="left">You are now connected</h2> 
					<h3 align="left">Thanks for choosing HotLink.com</h3><br/>
						<p style="width:80%; text-align: padding-left: 50px;">You are now connected to the Internet. Please keep this page open, and remember to click on Logout to stop your time.
						For all support and enquiries, email our Customer Service Argents <a href="mailto:vdjeudjam@rocketmail.com? Subject=Hello%20again"> 
						<u>Email us</u> </a> or Call Us Now <b>phone: +23776413370</b>. Have a Nice Day.<br/>
						HotLink Team</p>
				</p>
				
				<form action="logout.php" name="logout" onsubmit="return openLogout()">
					<p style="text-align:center; margin-top: 20px;"> <?php authentication( $username, $pass); ?> </p>
							<table height="100%" width="100%">
						<tbody><tr>
							<td valign="middle" align="center">
							<b>Thank You for using HotLink</b> <br><br>
							<table class="tabula" border="1">  
							<tbody><tr><td align="right">user name</td><td></td></tr>
							<tr><td align="right">IP address</td><td>10.10.0.19</td></tr>
							<tr><td align="right">MAC address</td><td>74:02:00:00:FF:FF</td></tr>
							<tr><td align="right">session time</td><td>13m25s</td></tr>
							
							<tr><td align="right">time left</td><td>19m37s</td></tr>
							
							<tr><td align="right">bytes up/down:</td><td>917.3 KiB / 12.4 MiB</td></tr>
							</tbody></table>
							<br />
				</form>			
				<form action="logout.php" name="login" onsubmit="return openLogin()">
					<input value="log off" type="submit">
				</form>					
			</div>
			
			<div id="social-networks" style="padding-top: 20px;">
				<p> Follow Us:<br/><br/>
					<a href="https://www.facebook.com/HotLink" target="_blank" class="btn-auth btn-facebook large">facebook</a><br/><br/>
					<a href="https://www.twitter.com/HotLink" target="_blank" class="btn-auth btn-twitter large">twitter</a> <br/><br/>
					<a href="https://www.youtube.com/HotLink" target="_blank" class="bnt-auth btn-youtube large">YouTube</a>
				</p>
			</div>
			</div>
		</div>
			<div id="footer">			<!-- the footer of page -->
				<div id="footer-inner" style="height: 40px; font-size: 0.8em;">
					<a href="#" id="footer-icon" title="RSS"></a>
                        <div id="footer-text" align="center">
							<p>copyright &copy Mai 2013 HotLink.com<br />All Rights Reserved.</p>
						</div><div class="cleared"></div>
                </div>
				</div><div class="cleared"></div>
			<div id="citing" align="right"><p><i>"Car en Lui il y a la vie, le mouvement et l'etre".<br />
			<b>Act 17:28</i></p></div>
		</div>			
	</body>
						<!-- body of page-->
</html>						
<?php 
	if(isset($connection)){
		mysql_close($connection);
	}
?>