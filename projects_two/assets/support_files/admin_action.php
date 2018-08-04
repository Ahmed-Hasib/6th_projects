<?php
//search to days date if exits
function todays_date($con){
	  $current_date=date("d:m:y");
	  $sql="select date from admin_employee where date='$current_date' ";
	  $result=mysqli_query($con,$sql);
	  $row=mysqli_num_rows($result);
	  return $row;
}

//if  not exits then insert new date with all employee
  function insert($con){
	  
	  $current_date=date("d:m:y");
	  $e_sql="select name,e_id from employee";
	  $e_result=mysqli_query($con,$e_sql);
	  while($e_rows=mysqli_fetch_assoc($e_result))
	  {
		  
		  $e_name=$e_rows['name'];
		  $e_id=$e_rows['e_id'];
		  $status=0;
		  $e_sql_nested="INSERT INTO `admin_employee`(`date`, `e_id`, `name`, `status`) VALUES ('$current_date','$e_id','$e_name','$status')";
		  $result=mysqli_query($con,$e_sql_nested);
		  
	  }
	  mysqli_close($con);
	  
}
//show employee history at table
  function show_employee($con){
	  $sql="select * from admin_employee";
	  $result=mysqli_query($con,$sql);
	  while($rows=mysqli_fetch_assoc($result))
	  {
		  echo 
		    '
	    <tr>
         <td>'.$rows['date'].'</td>
         <td>'.$rows['name'].'</td>
         <td>'.$rows['e_id'].'</td>
		 ' ;
		   
		   if($rows['status']==0)
		   {
			   echo '
			      <td>--</td>
                  <td>--</td>
                  <td>--</td>
				  <td>Absent</td>
			   ';
			
			}
			else{
				echo '
				 <td>'.$rows['log_in'].'</td>
                 <td>'.$rows['log_out'].'</td>
                 <td>'.$rows['late'].'</td>
				 <td>Present</td>';
				}
		 
		echo '
		 
		</tr>';
      
	  }
	  
	  
}


?>