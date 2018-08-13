<?php
function show_this_student($con,$id){
	$sql="select * from student where `roll`='$id' ";
	$result=mysqli_query($con,$sql);
	$row_return=mysqli_num_rows($result);
	if($row_return==0)
	{
		echo "<h1>Roll number is Incorrect</h1>";
		
	}
	while($row=mysqli_fetch_assoc($result))
	 {
  echo '
        <tr>
            <td>Name : '.$row['name'].'</td>
            <td>Roll : '.$row['roll'].'</td>
            <td>Department : '.$row['department'].'</td>
            <td>Session : '.$row['session'].'</td>
          </tr>
     
      ';
	 }
}//show_this_student function ends here

  //show result sequence
  
  if(isset($_POST['submit']))
  {
	if($_POST['semester']!=0)
	{
		
		 $semester=$_POST['semester'];
		 $sql="select * from marks where `s_roll`='$id' and `semester`='$semester' ";
		 $result=mysqli_query($con,$sql);
		 while($row=mysqli_fetch_assoc($result))
		 {
			echo '
			<tr>
              <td>'.$row['sub_code'].'</td>
              <td>'.$row['credit'].'</td>
              <td></td>
              
            </tr>
			
			';
			    
		 }
	}
	else
	{
		$tmp="please choose semester first";
	}
	 
  }
?>