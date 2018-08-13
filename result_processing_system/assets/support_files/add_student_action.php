<?php
 if(isset($_POST['submit']))
 {
	 
   if(!empty($_POST['name']) && !empty($_POST['roll']) && !empty($_POST['session']) && $_POST['dpt']!="0" &&  $_POST['gender']!="0")
   {
	   
	   $name=$_POST['name'];
	   $roll=$_POST['roll'];
	   $dpt=$_POST['dpt'];
	   $session=$_POST['session'];	 
	   $gender= $_POST['gender'];
	   
	   $tmp=add_student($con,$name,$roll,$session,$dpt,$gender);
	   
   }
	else
	{
	$tmp="Fill up the form perfectly";	 
	}
 }

   function add_student($con,$name,$roll,$session,$dpt,$gender){
	      
		  $sql="INSERT INTO `student`(`name`, `roll`, `department`, `session`, `gender`) VALUES ('$name','$roll','$dpt','$session','$gender')";
		  $result=mysqli_query($con,$sql);
		  if($result)
		   return "Student Added Successfully";
	   }

?>