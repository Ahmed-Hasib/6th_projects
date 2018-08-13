<?php
include 'db.php';
include 'assets/support_files/add_student_action.php';

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add new Studnet</title>
<link href="assets/css/add_student_style.css" rel="stylesheet" type="text/css">
<link href="assets/images/270025.png" rel="icon">
</head>

<body>
<div class="header">
   <div class="header_container">
       <a href="admin.php">Back to Admin</a>
       <p>Result Processing System</p>
   </div>
 </div>
 <div class="main">
   <div class="main_container">
   <h2>Student Registration Form</h2>
   <h3><?php  if(isset($tmp)) {echo $tmp;}?></h3>
   <form method="post" action="">
     <table>
        <tr>
           <td>Name </td>
           <td><input type="text" name="name" placeholder="Studnet Name"></td>
        </tr>
        <tr>
           <td>Department</td>
           <td>
              <select name="dpt">
                 <option value="0">Choose</option>
                 <option value="CSE">CSE</option>
                 <option value="BBA">BBA</option>
              </select>
           </td>
        </tr>
        <tr>
           <td>Gender </td>
           <td>
                <select name="gender">
                 <option value="0">Choose</option>
                 <option value="Male">Male</option>
                 <option value="Female">Female</option>
                 <option value="Other">Other</option>
              </select>
           </td>
        </tr>
        <tr>
           <td>Roll </td>
           <td><input type="number" name="roll" placeholder="1545"></td>
        </tr>
        <tr>
           <td>Session  </td>
           <td><input type="text" name="session" placeholder="Example : 2014-2015"></td>
        </tr>
        <tr><td colspan="2"><input type="submit" name="submit" value="Add"></td></tr>
     </table>
    </form>
   </div>
 </div>
</body>
</html>