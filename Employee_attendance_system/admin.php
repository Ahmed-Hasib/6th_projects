<?php
date_default_timezone_set("Asia/Dhaka");
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
<title>Admin</title>
<link href="assets/css/admin_style.css" rel="stylesheet" type="text/css">
<link rel="icon" href="assets/images/icone.png">
</head>

<body>
    <div class="header"><a href="index.php">Back to Home</a><p>Employee Attendance System</p></div>
  <div class="main">
    <div class="main_container">
    <table>
  <tr>
    <th>Date</th>
    <th>Name</th>
    <th>Id</th>
    <th>Log In</th>
    <th>Log Out</th>
    <th>Late (Minutes)</th>
    <th>Status</th>
  </tr>
  <?php echo show_employee($con); ?>
  
</table>
 </div>
</div>
  
</body>
</html>