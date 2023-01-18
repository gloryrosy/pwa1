 
    

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE USING PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  
<body>
<div id="frm">
   <h1>LOGIN</h1>
	<form name="frm" action="login.php" method="POST" >
		<p>
	        <LABEL>USER NAME:</LABEL>
	        <input type="text" name="name"/>
        </p><p>
        	<label>PASSWORD:</label>
            <input type="password" name="password"/>
        </p>
        <p>
        	<input type="submit" name="btn" value="login"/>
        </p>
    </form>
</div>
</body>
</html>
<?php
$db = pg_connect("host=localhost port=5432 dbname=Login user=postgres password=g123");
$result = pg_query($db, "SELECT * FROM login where name = '$_POST[name]' and password = '$_POST[password]'");
$login_check=pg_num_rows($result);
if($login_check > 0)
  {
    echo '<script>alert("login successful")</script>';
  }
   else
   {
    echo '<script>alert("login unsuccessful")</script>';
  }
 ?>