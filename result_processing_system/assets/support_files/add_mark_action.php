<?php
 function show_subject($con,$semester,$dpt){
	$sql="select * from subject where `semester`='$semester'  and `dpt`='$dpt' ";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($result)){
		 echo '
		    <tr>
                  <td>'.$row['subject_name'].'</td>
                  <td >'.$row['code'].'</td>
                  <td><button class="add_mark_btn" value='.$row['code'].'>Add marks</button></td>
               </tr>
			   
			   ';
		
		}
	
	
	 
	 }
	 

?>