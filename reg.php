<?php require_once("includes/connection.php") ?>
<?php require_once("includes/funcs.php") ?>

<?php 
	
	$username = $_POST['account'];
	$pass = encrypt_pass($_POST['password1']);
	$phone = $_POST['mobile'];
	$email = $_POST['email'];
	$checkbox = $_POST['acceptterms'];
	
	//starting session
	session_start();
	
	try{
		//checks form filled in
		if(!filled_out($_POST)){
			throw new Exception('you have not filled out the form correctly - please go back and try again.');
		}	
	}

	catch(Exception $e){
		echo $e->getMessage();
		exit;
	}	
	
		//register session variable
	$_SESSION['valid_user'] = $username;

	$query = "INSERT INTO users_info(
			user_name, user_id, mobile, email, confirm
			) VALUES(
			'{$username}', '{$pass}', '{$phone}', '{$email}', '{$checkbox}'
			)";
	
	$result = mysql_query($query);
	
	try{
		if(!$result){
			throw new Exception('error loading the page - please go back and try again.');
			}
	}
	
	catch(Exception $e){
		echo 'duplicate username' .$e->getMessage();
		exit;
	}
	
	echo ("<p style=\" font-size: 1.9em; \">");
	echo ("You were successfully registered! <b>{$username}</b> <br/>");
	echo ("click here to load, get some time into your account, then sign in and browse <br/>");
	echo ("<a href='index.php'> Home </a>");
	echo ("</p>");
?>

<?php	mysql_close($connection); ?>