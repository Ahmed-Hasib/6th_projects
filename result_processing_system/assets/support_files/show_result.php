<?php
session_start();
include '../../db.php';
include 'converter.php';
if(isset($_SESSION['id']))
 {
 $id=$_SESSION['id'];	
 }
  if(!empty($_POST['semester']))
   {
	 $semester=$_POST['semester'];
	 
	 $sql="select * from marks where `s_roll`='$id' and semester='$semester' ";
	 $result=mysqli_query($con,$sql);
	 $row_return=mysqli_num_rows($result);
	 
	 if($row_return!=0)
	 {
	 echo '<tr><td colspan="">Semester No : '.$semester.'</td></tr>
            <tr>
              <th>Subject Code</th>
              <th>Credit</th>
              <th>Earned GPA</th>
            </tr>';
	
	 
	 $subject_cr=0;
	 $obtain_gpa=0;
	 while($row=mysqli_fetch_assoc($result)){
		    
		$gpa=gpa_calculator($row['assignment'],$row['class_test'],$row['mid_term'],$row['final_exam']);
		 
		 echo '
		 <tr>
              <th>'.$row['sub_code'].'</th>
              <th>'.$row['credit'].'</th>
              <th>'.$gpa.'</th>
            </tr>
		     ';
			 
		 // if($gpa)	 
		  $subject_cr=$subject_cr+$row['credit'];	 
		  $obtain_gpa=$obtain_gpa+$row['credit']*$gpa;
			 
		 }
		 $total_result=$obtain_gpa/$subject_cr;
		 echo '<tr>
		     <td>Total result (CGPA) : '.round($total_result,2).'</td>
		 </tr>';
		 
		  }
	 else
	 {
		 echo "incomplete semester";
	  }
   }
?>