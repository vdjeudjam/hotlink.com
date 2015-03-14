<?php
	include_once("includes/connection.php");
	include_once("includes/funcs.php");
	include_once("includes/header.php");
?>
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
			</div>
	<div id="aricle-block-1">	
				<div id="article-block-inner" align="center" style="padding-top: 10px; margin-top: 5px;">	<!-- doit travailler ca-->
					<?php querydb($_GET['id']); ?> 
				</div>	
			</div>	<div class="cleared"></div>				
<?php
	include_once("includes/footer.php");
?>