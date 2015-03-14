<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en/fr">
	<head>
		<title>Account Registration Form</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/others.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
		<script type= text/javascipt>
				// in charge of the language option in form   

		function change_lang(){
			len = document.myform.lang.length;
			for (i = 0; i < len; i++){
				if (document.myform.lang[i].selected)
					lang = document.myform.lang[i].text;
				}
			window.location="form.php?cont=change_lang&lang=" + lang;
			}
		</script>
	<body>
		<div id= "container">
			<div id= "header">
				<h1> Registering Account</h1>
			</div>
			
			<div id ="sections">
				<label align="left">Language:</label>
					<select name="lang" class="normal" id="lang" onchange="return change_lang()">
						<option selected="selected" value="French">French</option>
						<option selected="selected" value="English">English</option>
					</select>
			<hr />		
			
				<!--<script type="text/javascript" src="scripts/script.js"></script>-->
				
				<form name="myform" action="reg.php" method="post" >
					<table cellpadding="10" cellspacing="2" align="center" border="0"><tbody>
						<p align="center">
							<tr><td><label><font color="#FF0000">*</font>username: <input type="text" name="account" placeholder="enter user name" /></label><br /></td></tr>
							<tr><td><label><font color="#FF0000">*</font>password: <input type="password" name="password1" id="password1" placeholder="enter password" /> </label><br /></td></tr>
							<!--<tr><td><label><font color="#FF0000">*</font>confirm password: <input type="password" name="password2" id="password2" placeholder="enter password"/> </label><br /></td></tr>-->
							<tr><td><label><font color="#FF0000">*</font>mobile: <input type="text" name="mobile" placeholder="enter mobile number" /> </label><br /></td></tr>
							<tr><td><label><font color="#FF0000">*</font>e-mail: <input type="text" name="email" id="email" placeholder="enter email address" /> </label><br /></td></tr>
						</p>
					</tbody></table>
					<p class="normal" align="center"><font color="#FF0000">*</font> Fields are mandatory!</p>
					<p align="center"> 
					<textarea name="textarea" cols="60" rows="5" readonly="readonly">ATTENTION: 
PLEASE READ THESE TERMS CAREFULLY BEFORE USING THIS WEBSITE. BY USING THIS SITE YOU AGREE TO BE BOUND BY THESE TERMS AND CONDITIONS. IF YOU DO
NOT ACCEPT THESE TERMS ("TERMS"), DO NOT USE THIS WEBSITE.
									   
All services are prepaid Services are available where technology permits HotLink network cannot be held accountable or responsible under any circumstance or condition of any cancellation of an account as a result 
of any unauthorized manipulation of HotLink devices and services

After registration over to the client, plus setup (inclusive) is said to be under the client’s responsibility.  warranty last 12weeks

HotLink may terminate his agreement in the event that the client breach the material terms of the agreement
					</textarea></p>
					
					<table cellpadding="3" cellspacing="2" align="center" >
						<!--<p align="center">-->
							<tr><td><input name="acceptterms" id="acceptterms" value="1" checked="checked" type="checkbox">I accept the Terms &amp; Conditions</td></tr>
							<tr><td><input name="adduser" value="Register account" type="submit"></td></tr>
						</p>
					</table>
				</form>
				
			</div>
			<hr>
			<footer>
				<p align="center">
					<a href="/lang/?lang=fr">Fran&ccedil;ais</a> | 
					<a href="/lang/?lang=en"> English </a> | &copy; HotLink 2013. 
				</p>
			</footer>
		</div>
	</body>
</html>


