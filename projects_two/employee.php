<?php
session_start();
include 'db.php';
$user_id=$_SESSION['e_id'];
$sql="select * from employee where e_id='$user_id'";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result))
{
	
	$user_name=$row['name'];
    
}

?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Employee</title>
        <link href="assets/css/employee_style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
       
        <div class="main_section">
            <div class="main_section_container">
                <div class="user_info">
                <h2>Welcome <?php echo $user_name;?></h2>
                   
                <a href="index.php"><h3>Log Out</h3></a>
                </div>
                <div class="user_attendance">
                <h2>Attendance sheet</h2>
    <table id="customers">
  <tr>
    <th>Date</th>
    <th>Logged in time</th>
    <th>logged out time</th>
    <th>Late</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>1-8-2018</td>
    <td>9am</td>
    <td>4pm</td>
    <td>2hour</td>
    <td>Present</td>
  </tr>
  <tr>
    <td>2-8-2018</td>
    <td>Null</td>
    <td>Null</td>
    <td>Null</td>
    <td>Absent</td>
  </tr>  
 <tr>
    <td>3-8-2018</td>
    <td>9am</td>
    <td>4pm</td>
    <td>2hour</td>
    <td>Present</td>
  </tr>
 
</table>

    <table id="customers">
  <tr>
    <th>Total Working days : 25</th>
    <th>Present : 20 days</th>
    <th>Absent : 4 dayes</th>
    <th>Late : 10 hours</th>
  </tr>
 
 
</table>
                </div>
            </div>
        </div>
    </body>

    </html>