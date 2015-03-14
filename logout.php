<?php
	//include_once("includes/connection.php");
	//include_once("includes/funcs.php");
?>

<?php include("includes/header.php"); ?>
	
	<div id="login-article-section">								<!-- voici le contenu de l	 page en sois-->
		<table height="100%" width="100%">
		<tbody><tr>
			<td valign="middle" align="center">
			<b>Thank You for using HotLink</b> <br><br>
			<table class="tabula" border="1">  
			<tbody><tr><td align="right">user name</td><td>03marnda</td></tr>
			<tr><td align="right">IP address</td><td>10.10.0.19</td></tr>
			<tr><td align="right">MAC address</td><td>74:02:00:00:FF:FF</td></tr>
			<tr><td align="right">session time</td><td>13m25s</td></tr>
			
			<tr><td align="right">time left</td><td>19m37s</td></tr>
			
			<tr><td align="right">bytes up/down:</td><td>917.3 KiB / 12.4 MiB</td></tr>
			</tbody></table>
			<br>
			<form action="status.php" name="login" onsubmit="return openLogin()">
			<input value="log in" type="submit">
			</form>
			</td>
			</tr>
		</tbody></table>
	</div>
</div>