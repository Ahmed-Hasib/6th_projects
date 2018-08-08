<?php
include 'db.php';
include 'assets/support_files/admin_action.php';
  $current_date=date("d:m:y");
  $row=todays_date($con);//todays date checks if exits
  if($row==0)
  {
	   insert($con);
	 
  }
  


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Employee Attendance System</title>
<link href="assets/css/index_style.css" rel="stylesheet" type="text/css">
<link rel="icon" href="assets/images/icone.png">
</head>

<body>
 <div class="header"><p>Employee Attendance System</p></div>
  <div class="main">
     <div class="main_container">
         <a href="admin.php">Admin</a>
         <a href="employee_log_in.php">Employee</a>
     </div>
  </div>
</body>
</html>