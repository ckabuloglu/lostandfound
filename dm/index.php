<?

  if (isset($_POST['submit'])){
    $user = $_POST['user'];
    $password = $_POST['password'];

    if ($user == "type1") {
        header("location:main_no_access.html");
    } elseif ($user == "type2") {
        header("location:main_restricted.html");
    } else {
        $error = " <span style = 'color: #DE2626'> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Wrong username or password </span> ";
    }
  }

?>
<html>

<head>

  <meta charset="UTF-8">

  <title> Lost And Found </title>

    <link rel="stylesheet" href="css/style.css">

    <script src="js/modernizr.js"></script>

</head>

<body>

  <h1>Lost and Found</h1>



    <div class="inner-screen">
      <div class="form" method="POST">
        <form name="Login" method="POST">
        <input type="text" id="user" name="user" class="zocial-dribbble" placeholder="Enter your username" />
        <input type="text" id="password" name="password" placeholder="Password" />
         <input type="submit" id="submit" name="submit" value="Login" />
        <a href="forget.html">Lost your password?</a>
        <? echo $error;    echo $type1;
    echo $type2; ?>
      </form>
      </div> 
    </div> 

<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>