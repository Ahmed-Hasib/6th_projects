<?php
session_start();
include 'db.php';
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $_SESSION['id']=$id;	
}
if(isset($_SESSION['id']))
{
$id=$_SESSION['id'];	
}

include 'assets/support_files/admin_result_action.php';

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Result Processing System</title>
<link href="assets/images/270025.png" rel="icon">
<link href="assets/css/admin_result_style.css" rel="stylesheet" type="text/css"> 
</head>

<body>
<div class="header">
   <div class="header_container">
       <a href="admin.php">Back to Admin page</a>
       <p>Result Processing System</p>
   </div>
 </div>
 <div class="main">
   <div class="main_section">
      <div class="student_info">
        <table>
      <?php   show_this_student($con,$id); ?>
        </table>
        
      </div>
      <div class="result"> 
         <div class="form">
            <form method="post" action="">
              
                     <select name="semester">
                     <option value="0">Chose semester</option>
                     <option value="1">1st semester</option>
                     <option value="2">2nd semester</option>
                     <option value="3">3rd semester</option>
                     <option value="4">4th semester</option>
                     <option value="5">5th semester</option>
                     <option value="6">6th semester</option>
                     <option value="7">7th semester</option>
                     <option value="8">8th semester</option>
                  </select>
                 <input type="submit" value="Find" name="submit">
                  
               
            </form>
         </div>
         <table>
         <tr><td colspan="">Semester No :</td></tr>
            <tr>
              <th>Subject Code</th>
              <th>Credit</th>
              <th>Earned GPA</th>
            </tr>
            
         </table>
     </div>
 </div>
</body>
</html>