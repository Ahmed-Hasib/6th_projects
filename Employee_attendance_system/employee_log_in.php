<?php
session_start();
session_unset(); 

  include 'db.php';
  if(isset($_POST['submit']))
  {
	  if(!empty($_POST['username']) && !empty($_POST['password']))
	  {
		  $tmp=0;
		  $username=$_POST['username'];
		  $pass=$_POST['password'];
		  $sql="select * from employee where e_id='$username ' and pass='$pass' ";
		  $result=mysqli_query($con,$sql);
		  $row_return=mysqli_num_rows($result);
		  if($row_return==0)
		  {
			  $tmp=-2;
		   }
		   while($row=mysqli_fetch_assoc($result))
		   {
			   $_SESSION['e_id']=$row['e_id'];
			   header('Location:employee.php');
			   
		    }
	  }
	  else
	  {
		  $tmp=-1;
		  
	  }
	  
  }
  
  
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log In:Employee Attendance System</title>
<link href="assets/css/employee_log_in_style.css" rel="stylesheet" type="text/css">
<link rel="icon" href="assets/images/icone.png">
</head>

<body>
<div class="header"><a href="index.php">Back to Home</a><p>Employee Attendance System</p></div>
    <div class="log_in">
       <div class="log_in_container">
              <form action="" method="post">
                 <h3><?php
				  if(isset($tmp))
				    {
						if($tmp==-1) echo "Please enter username and password";
						if($tmp==-2) echo "You are not registered";
					}
				  ?></h3>
                <input type="text" name="username" placeholder="Username"></br>
                <input type="password" name="password" placeholder="Password"></br>
                <input type="submit" name="submit"  value="Log In">
              </form>
       </div>
       
    </div>
</body>
</html>