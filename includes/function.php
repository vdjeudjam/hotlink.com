<?php require_once("connection.php"); ?>

<?php

/*
	function confirm_query($result_set){
		if(!$result_set){
			die("database query failed: " . mysql_error() );
		}
	}
	
	function get_all_subjects(){
		global $connection;
		$query ="SELECT * 
				FROM subjects_table
				ORDER BY position ASC";
		$subject_set= mysql_query($query, $connection);
		confirm_query($subject_set);
		return $subject_set;
	}
	
	function get_pages_for_subjects($subject_id){
		global $connection;
		$query="SELECT * 
				FROM pages_table 
				WHERE subject_id={$subject_id} 
				ORDER BY position ASC";
		$page_set= mysql_query($query, $connection);
		confirm_query($page_set);
		return $page_set;
	}
	
	function get_subject_by_id($subject_id){
		global  $connection;
		$query = "SELECT *";
		$query .= " FROM table_subject";
		$query .= " WHERE subject_id =" .$subject_id." ";
		$query .= " LIMIT 1";
		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);					//je me suis arreter ici -----------------
		
		$subject = mysql_fetch_array($result_set);
		return $subject;
		}

	function get_pages_by_id($page_id){
		global $connection;
		$query ="SELECT * ";
		$query .= " FROM pages_table";
		$query .= " WHERE page_id =" .$page_id ." ";
		$query .= " LIMIT 1";
		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);					
			//REMEMBER
			// if no rows are returned, fetch array will return false
		if ($page = mysql_fetch_array($result_set)){
			return $page;
			}
		else {
			return NULL;
			}
	}
	
	function find_selected_page(){
		global $sel_subject;
		global $sel_page;
		
		if(isset($_GET['subj'])){
			$selected_page = NULL;
			$sel_subject = get_pages_for_subjects($_GET['subj']);
		}
		elseif(isset($_GET['page'])){
			$sel_subject = NULL;
			$sel_page = get_pages_by_id($_GET['page']);
		}
		else{
			$sel_subject = NULL;
			$sel_page = NULL;
		}
	}
	
	function mysql_prep($value){
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists("mysql_real_escape_string"); //i.e. PHP v4.3.0
		
		if( $new_enough_php ){ //PHP v4.3.0
			//undo any magic quote effects so mysql_real escape_string can do the work
			
			if($magic_quotes_active){
				$value = stripslashes($value);
				}
			$value = mysql_real_escape_string($value);
			} else {
				//if magic quotes eren't already on then add slashes manually
				if(!$magic_quotes_active){
				$value = addslashes($value);
				}
				//if magic quotes are active, then the slashes already exists
			}
			return $value;
		}
*/
	

?>