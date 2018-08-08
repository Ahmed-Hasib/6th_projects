<?php
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
             <li><a href="admin_add_student.php">Add Student</a></li>
             <li><input type="text" name="search" placeholder="Search..."></li>
              <li>
                 <select>
                   <option>--------Choose Department--------</option>
                   <option>CSE</option>
                   <option>BBA</option>
                   <option>ECE</option>
                 </select>
             </li>
             <li>
                 <select>
                   <option>--------Choose Semester--------</option>
                   <option>1s semester</option>
                   <option>2nd semester</option>
                   <option>3rd semester</option>
                   <option>4th semester</option>
                   <option>5th semester</option>
                   <option>6th semester</option>
                   <option>7th semester</option>
                   <option>8th semester</option>
                 </select>
             </li>
             <li><input type="text" name="session" placeholder="Session..."></li>
             <li><input type="submit" value="Go" name="submit"></li>
          </ul>
       </div>
       <div class="right_side">
       <table>
  <tr>
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