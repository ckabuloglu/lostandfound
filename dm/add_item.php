<?

?>


<html>

<head>

  <meta charset="UTF-8">

  <title> Add Item </title>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/modernizr.js"></script>

</head>

<body>

  <h1> Add Item </h1>
  </br></br></br></br>
      <div class="add">
        <form name="item" method="POST">
        	<table>
				<tr> <td> Valuable: </td><td><input type="checkbox" name="value" value="Value"></td></tr><tr><td></td></tr>
				<tr><td>Building Where Held:</td>
				<td><select name="building">
					<option value="klaus">Klaus</option>
					<option value="culc">Clough Undergraduate Learning Commons</option>
					<option value="skiles">Skiles</option>
					<option value="vl">Van Leer</option>
				</select></td></tr><tr><td></td></tr>
				<tr><td>Where Found: </td><td><input name="where" placeholder="Building" /></td></tr><tr><td></td></tr>
				<tr><td>When Found: </td><td><input name="when" placeholder="When" /></td></tr><tr><td></td></tr>
				<tr><td>Type:</td>
				<td><select name="type">
					<option value="personal">Personal</option>
					<option value="elec">Electronic</option>
					<option value="wallet">Wallet</option>
					<option value="book">Bookr/option>
				</select></td></tr><tr><td></td></tr>
				<tr> <td>Description:</td> <td><input name="title" cols="50" placeholder="Title" /></td> </tr><tr><td></td></tr>
				<tr> <td></td> <td><textarea cols="50" rows="4" name="description" placeholder="Description"></textarea></td> </tr><tr><td></td></tr>
				<tr><td>Upload Image</td><td> <input type="file" name="image" /> </td></tr><tr><td></td></tr>
			</table>
			

        </form>
    </div>

<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>