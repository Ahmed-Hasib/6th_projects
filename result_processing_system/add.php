<?php
session_start();
include 'db.php';
include 'assets/support_files/add_action.php';
if(isset($_GET["code"]) && isset($_GET["credit"]))
  {
	$code=  $_GET["code"];
	$_SESSION['code']=$code;
	
	$credit=$_GET['credit'];
	$_SESSION['credit']=$credit;
  }
 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Result Processing System</title>
<link href="assets/images/270025.png" rel="icon">
<link href="assets/css/add_style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="header">
   <div class="header_container">
       <a href="add_marks.php">Back to Subjects</a>
       <p>Result Processing System</p>
   </div>
</div>
 <div class="main">
   <div class="main_container">
   <h2><?php 
   if(isset($tmp)){ echo $tmp; }  ?></h2>
     <form method="post" action="">
        <table>
            <tr>
               <td>Assignment</td>
               <td>
                  <select name="assignment">
                      <option value="-1">Choose</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                  </select>
               </td>
            </tr>
            <tr>
               <td>Class Test</td>
               <td><input type="number" name="class_test" ></td>
            </tr>
            <tr>
               <td>Mid Term</td>
               <td><input type="number" name="mid"></td>
            </tr>
            <tr>
               <td>Final</td>
               <td><input type="number" name="final"></td>
            </tr>
            <tr ><td  colspan="4"><input type="submit" name="submit" class="submit"></td></tr>
        </table>
     </form>
   </div>
 </div>

</body>
</html>