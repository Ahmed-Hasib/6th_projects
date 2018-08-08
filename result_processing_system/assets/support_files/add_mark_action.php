<?php
 function show_subject($con,$semester,$dpt){
	$sql="select * from subject where `semester`='$semester'  and `dpt`='$dpt' ";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($result)){
		
		    $row_return=search_from_marks($con,$row['code']);
		   if($row_return==0)
		   {
		 echo '
		    <tr>
                  <td>'.$row['subject_name'].'</td>
                  <td >'.$row['code'].'</td>
                  <td><a href="add.php?code='.$row['code'].'&credit='.$row['credit'].'  ">Add marks</a></td>
               </tr>
			   
			   ';
		   }
		   else{
			      echo '
		    <tr>
                  <td>'.$row['subject_name'].'</td>
                  <td >'.$row['code'].'</td>
                  <td>Marks Added</td>
               </tr>
			   
			   ';
			   
			   }
		}
	
	
	 
	 }
	 
	 
	 function search_from_marks($con,$code){
		 $roll=$_SESSION['roll'];
		 $semester=$_SESSION['semester'];
		 
		 $ssql="select * from marks where `s_roll`='$roll' and `semester`='$semester' and `sub_code`='$code' ";
		 $result=mysqli_query($con,$ssql);
		 $rows=mysqli_num_rows($result);
		 return $rows; 
		 
		 
		 }
	 

?>