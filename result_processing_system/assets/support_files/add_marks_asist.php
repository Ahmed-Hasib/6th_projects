<?php
session_start();
include '../../db.php';

        $name=$_SESSION['name'];
		$roll=$_SESSION['roll'];
	 	$dpt=$_SESSION['department'];
		$semester=$_SESSION['semester'];
		$sub_code=$_POST['code'];
		
		$final=$_POST['final'];
        $mid=$_POST['mid'];
		$class_test=$_POST['class_test'];
		$assignment=$_POST['assignment'];
	$sql="INSERT INTO `marks`(`assignment`, `class_test`, `mid_term`, `final_exam`, `sub_code`, `semester`, `s_roll`) VALUES ('$assignment','$class_test','$mid','$final','$sub_code','$semester','$roll')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo 0;
	}
	else
	{
	  echo -1;	
	}

/*
$final=$_POST['final'];
$mid=$_POST['mid'];
$class_test=$_POST['class_test'];
$assignment=$_POST['assignment'];
echo $final;
echo $class_test;
echo $mid;
echo $assignment;
*/
?>