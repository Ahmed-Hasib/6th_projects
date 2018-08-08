<?php
  $code=$_SESSION['code'];
  $semester=$_SESSION['semester'];
  $name=$_SESSION['name'];
  $roll=$_SESSION['roll'];
  $dpt=$_SESSION['department'];
  $credit=$_SESSION['credit'];
  
 if(isset($_POST['submit']))
  {
  if($_POST['assignment']!=-1 && !empty($_POST['class_test']) && !empty($_POST['mid'])  && !empty($_POST['final']))
     {
		 $assignment=$_POST['assignment'];
		 $class_test=$_POST['class_test'];
		 $mid=$_POST['mid'];
		 $final=$_POST['final'];
	  
	  $sql="INSERT INTO `marks`(`assignment`, `class_test`, `mid_term`, `final_exam`, `sub_code`, `semester`, `s_roll`,`credit`) VALUES      ('$assignment','$class_test','$mid','$final','$code','$semester','$roll','$credit')";
	  $result=mysqli_query($con,$sql);
	  if($result)
	  {
		  $tmp="Successfully added";
		  header("Location:add_marks.php");
	  }
	  
	}
	else
	{
	   $tmp="Please Insert All the value";	
	}
  }
  
?>