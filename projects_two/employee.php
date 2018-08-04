<?php
date_default_timezone_set("Asia/Dhaka");
session_start();

include 'db.php';
include 'assets/support_files/employee_action.php';
if(isset($_SESSION['e_id']))
{
	$user_id=$_SESSION['e_id'];
}
else
{
	header ("Location:employee_log_in.php");
}

$office_start_time=date('10:0:0a');
$sql="select * from employee where e_id='$user_id'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
	
	 $user_name=$row['name'];
	//after log in  code starts here//	        	  
	 $late=late_calculation();  
	 $e_id=$row['e_id'];
	 insert($user_name,$user_id,$late,$con);
    
}
if(isset($_POST['submit']))
{
	
	setlog_out_time($con,$user_id);
  	header ("Location:employee_log_in.php");
}
?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Employee</title>
        <link href="assets/css/employee_style.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="assets/images/icone.png">
    </head>

    <body>
       
        <div class="main_section">
            <div class="main_section_container">
                <div class="user_info">
                <h2>Welcome <?php echo $user_name;?></h2>
                   
                <form method="post" action="">
                 <input type="submit" value="Log out" name="submit">
                </form>
                </div>
                <div class="user_attendance">
                <h2>Attendance sheet</h2>
    <table id="customers">
  <tr>
    <th>Date</th>
    <th>Logged in time</th>
    <th>logged out time</th>
    <th>Late(Minutes)</th>
    <th>Status</th>
  </tr>
  <?php  show_employee($user_id,$con);?>
 
 
</table>

    <table id="customers">
    <?php echo attendance_result($con,$user_id); ?>
   </table>
                </div>
            </div>
        </div>
    </body>

    </html>