<?php
  if(isset($_POST['submit']))
  {
	  
	echo $_POST['me'];  
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>t</title>
</head>

<body>
<form method="post" action="">
    <input type="text" name="me">
    <input type="submit" name="submit">
</form>
<br>
<form method="post" action="">
    <input type="text" name="me">
    <input type="submit" name="submit">
</form>
</body>
</html>