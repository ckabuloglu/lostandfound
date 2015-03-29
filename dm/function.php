<?

$_host= "localhost";
$_username= "root";
$_password= "root";

mysql_connect("localhost", "root", "root") or die(mysql_error());
//mysql_connect("94.73.149.241", "council", "Can123") or die(mysql_error());
mysql_select_db("ECouncil") or die (mysql_error());
mysql_set_charset('utf8');	



	function getuser($user_id){			// matches the user id with user's first and last name
		
		$sql = "SELECT first_name, last_name FROM user WHERE user_id=$user_id";
		$query = mysql_query($sql) or die('mysql_error_1');
		
		while($row = mysql_fetch_array($query)){
			$firstname = $row['first_name'];
			$lastname = $row['last_name'];
		}
	
		return $firstname . " " . $lastname;	
		
	}
		
	function getusername ($id) {			// matches the user id with username
		
		$sql = "SELECT username FROM user WHERE user_id=$id";
		$query = mysql_query($sql) or die('mysql_error_2');
		
		while ($row = mysql_fetch_array($query)) {
			$username = $row['username'];
		}
			return $username;
	}
	
	function getusertype ($id) {			// determines what kind of user is logged in to display the correct menu
		
		$sql = "SELECT user_type FROM user WHERE user_id=$id";
		$query = mysql_query($sql) or die('mysql_error_2');
		
		while ($row = mysql_fetch_array($query)) {
			$user_type = $row['user_type'];
		}
			return $user_type; 
	}


	function checklogin($user_id){
		if ($user_id=""){   				 // not logged in
			header("location:login.php");
		} 
	}
	
	function logout() {						// logs out
		session_destroy();
		header("location:login.php");
	}
	
	function humanDate ($date){				// matches the month number with month name
	    $months = array ('','January','February','March','April','May','June','July','August','September','October','November','December');
	    $date = explode("-", $date);
	    $month = $date[1];
	    $month = intval($month);
		$date = $date[2] . " " . $months[$month] . " " .  $date[0];
        
        return $date;
	}
?>