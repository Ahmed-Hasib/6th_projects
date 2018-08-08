<?php
session_start();
include 'db.php';
include 'assets/support_files/add_mark_action.php';
if(isset($_POST['submit']))
{
    $semester=$_POST['semester'];	
	if($semester==0)
	{
	$tmp="No semester selected,pleas get back and choose semester first";	
	}
	$_SESSION['semester']=$semester;
	
    $roll=$_POST['roll'];
	$sql="select * from student where roll='$roll' ";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($result))
	{
		$name=$row['name'];
	    $roll=$row['roll'];
		$dpt=$row['department'];
		$session=$row['session'];
		
		$_SESSION['name']=$name;
		$_SESSION['roll']=$roll;
		$_SESSION['department']=$dpt;
		$_SESSION['session']=$session;
		
	}
}
if(isset($_SESSION['semester']) && isset($_SESSION['roll']))
{
	
	    $name=$_SESSION['name'];
		$roll=$_SESSION['roll'];
		$dpt=$_SESSION['department'];
		$session=$_SESSION['session'];
		$semester=$_SESSION['semester'];
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Result Processing System</title>
<link href="assets/images/270025.png" rel="icon">
<link href="assets/css/add_marks_style.css" rel="stylesheet" type="text/css">
<link href="assets/css/dialog_box.css" rel="stylesheet" type="text/css">
</head>

<body>



<div class="header">
   <div class="header_container">
       <a href="admin.php">Back to Admin</a>
       <p>Result Processing System</p>
   </div>
 </div>
 <div class="student_info">
    <div class="student_info_container">
        <p>Name: <?php echo $name;?></p>
        <p>Roll:<?php echo $roll;?></p>
        <p>Department:<?php echo $dpt;?></p>
        <p>session:<?php echo $session;?></p>
        <p>Semester no: <?php echo $semester;?></p>
    </div>
    <div class="subject_add">
    <h3><?php  if(isset($tmp)){echo $tmp;}?></h3>
      <table>
  <tr>
    <th>Name</th>
    <td>Code</td>
    <th>Action</th>
    
  </tr>
  
  <?php  show_subject($con,$semester,$dpt);?>
  
 
</table>
    </div>
    
 </div>
 <script src="assets/js/jquery-3.3.1.js"></script>
 <script src="assets/js/add_marks_action.js"></script>

</body>
</html>