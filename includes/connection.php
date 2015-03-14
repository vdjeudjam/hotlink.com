<?php
	//creating a connection to database	
	
	$connection = mysql_connect("localhost", "root", "");	//(DB_SERVER, DB_USER, DB_PASSWORD)
	if(!$connection){
		die("database connection failed:" .mysql_error() );
	}
	
	//select a database	
	$db_select = mysql_select_db("hotlink", $connection);
	if(!$db_select){
		die("database selection failed:" .mysql_error() );
	}
?>
