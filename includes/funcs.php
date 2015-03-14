<?php
	
	function querydb($id){
			//creating a connection to database	
		$connection = mysql_connect("localhost", "root", "");	//(DB_SERVER, DB_USER, DB_PASSWORD)
		if(!$connection){
			die("database connection failed: " .mysql_error() );
		}
		
		//select a database	
		$db_select = mysql_select_db("hotlink", $connection);
		if(!$db_select){
			die("database selection failed:" .mysql_error() );
		}
		
		//querying the database
		$query = "SELECT * FROM products_table WHERE product_id = {$id}";
		$result = mysql_query($query);
		
		try{
			if(!$result)
				throw new Exception('error loading the page - please go back and try again.');
		}
		catch(Exception $e){
			echo 'connection failed' .$e->getMessage();
			exit;
		}
		
		$row = mysql_fetch_array($result);
		
		echo ("<div id=\"aricle-block-1\">");	
		echo ("<div id=\"article-block-inner\" align=\"center\" style=\"  margin-top: 5px;\">");	//<!-- doit travailler ca-->
		echo ("<h3 style=\"padding-boottom: 10px; font-size: 1.9em;\"> {$row['product_name']} </h3><br />");
		echo ("<p> <img src=\"{$row['product_image']}\" alt =\"product\" width=\"700\" height=\"300\" /> </p><br />");
		echo ("<blockquote>");
		echo ("<p> {$row['product_description']} </p>");
		echo ("</blockquote>");
		echo ("</div>");	
		echo ("</div>"); 
		
		mysql_close($connection);	
	}
	
	
	//uses sha1 encryption technik to encrypt the password
	
	function encrypt_pass($pwd){
		//$pwd = $_POST['password1'];
		$encrypt = sha1($pwd);
		return $encrypt;
	}
	
	
	//checks if form's fills have all been filled 
	
	function filled_out($form_vars){
		//test that each variable has a value
		foreach($form_vars as $fieldname => $value){    //form_vars is an array
			if( (!isset ($fieldname)) || ($value == '') && $fieldname != 0 ) {
				return false;
			}
			return true;
		}
	}
	
	//authentifying the users before granting login access
	
	function authentication($username, $pass){
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
		
		$query = "SELECT * FROM users_info WHERE user_id = {$pass} AND user_name = {$username}";
		$result = mysql_query($query);
				
		try{
			if(!$result)
				throw new Exception('error loading the page - please go back and try again.');
		}
		catch(Exception $e){
			echo 'wrong username / password' .$e->getMessage();
			exit;
		}

		$row = mysql_fetch_array($result);
		
		echo ("<p> Welcome {$row['user_name']} </p>");
		
	mysql_close($connection);
	}
	
?>