<?
	session_start();
	if (isset($_SESSION['user_id'])){		//logged in
		header("location:navi.php");
	}
			
	include("function.php");
	
	if (isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$error = " <br/> <br/> <span style = 'color: #DE2626'> Wrong username or password </span> ";
				
		$sql = "SELECT password, user_id, username FROM user WHERE username='$username'";
				$query = mysql_query($sql);
		while($row = mysql_fetch_array($query)){
			$truepass = $row['password'];
						$user_id = $row['user_id'];
						if ($password == $truepass){
							$_SESSION['user_id'] = $user_id;
							header("location:navi.php");
						}
		}

	}

?>

<html>
	<head>
		<title> Lost and Found  </title>
		<link rel = "stylesheet" href = "style.css" type = "text/css" title="no title" charset="utf-8">
		<meta charset='utf-8'>
	</head>
	
	<body>
		<div class='container'>
			
			<div id= "loginbox" name= "login">
				<h> <b>Please Login</b> </h>
				<form name="Login" method="POST">
	  				<p> Username: <input type= "text" title= "Enter Your Username" id= "username" name= "username"/> </p>
	  				<p> Password:&nbsp  <input type= "password" title= "Enter Your Password" id= "password" name= "password"/> </p>
	  				<input type= "submit" name='submit' value="Login" />
				</form>
				<a href= "forgotPass.php"> Forgot Password </a>
			  <? echo $error; ?>
			</div>
			
		</div>
	</body>
</html>

