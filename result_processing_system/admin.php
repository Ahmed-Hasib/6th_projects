<?php
session_start();
include 'db.php';
include 'assets/support_files/admin_action.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Result Processing System</title>
<link href="assets/images/270025.png" rel="icon">
<link href="assets/css/admin_stye.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="header">
   <div class="header_container">
       <a href="index.php">Back to home</a>
       <p>Result Processing System</p>
   </div>
 </div>
 <div class="main">
   <div class="main_section">
       <div class="left_side">
       <h1>Filter</h1>
          <ul>
             <li><a href="add_student.php">Add Student</a></li>
         <form method="post" action="">
             <li><input type="text" name="search" placeholder="Search By Name Or Roll"></li>
              <li>
                 <select name="dpt">
                   <option value="0">--------Choose Department--------</option>
                   <option value="CSE">CSE</option>
                   <option value="BBA">BBA</option>
                   
                 </select>
             </li>
             <li><input type="text" name="session" placeholder="Session..."></li>
             <li><input type="submit" value="Go" name="submit"></li>
           </form>
          </ul>
          <h2>
		  <?php if(isset($tmp)){ 
		              echo $tmp;
		       } 
		  ?>
          </h2>
       </div>
       <div class="right_side">
       <table>
  <tr>
    <th>Action</th>
    <th>Name</th>
    <th>Roll</th>
    <th>Dpt</th>
    <th>Session</th>
    <th>chose semester</th>
    <th>Action</th>
  </tr>
  <?php  show_student($con); ?>

  
  
</table>
       
       </div>
   </div>
 </div>
</body>
</html>