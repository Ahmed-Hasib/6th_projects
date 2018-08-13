<?php
function show_student($con){
	
	$sql="select * from student";
	
	if(isset($_SESSION['sql']))
	{
		$sql=$_SESSION['sql'];
	}
	
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($result))
	
 {
	echo '
<form method="post" action="././add_marks.php">
<input type="text" name="roll" value='.$row['roll'].'  class="hid">
 
  <tr>
  <td><a href="admin_result.php?id='.$row['roll'].' ">Result</a></td>
    <td>'.$row['name'].'</td>
    <td>'.$row['roll'].'</td>
    <td>'.$row['department'].'</td>
    <td>'.$row['session'].'</td>
	
    <td class="chose_semester">
       <select name="semester">
                   <option value=0>Choose Semester</option>
                   <option value="1">1s semester</option>
                   <option value="2">2nd semester</option>
                   <option value="3">3rd semester</option>
                   <option value="4">4th semester</option>
                   <option value="5">5th semester</option>
                   <option value="5">6th semester</option>
                   <option value="7">7th semester</option>
                   <option value="8">8th semester</option>
         </select>
    </td>
    <td><input type="submit" name="submit" value="Go"></td>
	
  </tr>
	 </form>
	';
 }
}//show Studnet function ends here

 


if(isset($_POST['submit']))
{
	if(!empty($_POST['search']) && empty($_POST['session']))
	{
		$search=$_POST['search'];
		$sql="SELECT * FROM `student` where  `name` like '%$search%' or `roll` like '%$search%'  ";
		$_SESSION['sql']=$sql;
	    
	}
	
	
	if(empty($_POST['search']) && !empty($_POST['session']))
	{
		$search=$_POST['session'];
		$sql="SELECT * FROM `student` where  session='$search' ";
		$_SESSION['sql']=$sql;
	    
	}
	
	if(!empty($_POST['search']) && !empty($_POST['session']))
	{
		$search=$_POST['search'];
		$search1=$_POST['session'];
		$sql="SELECT * FROM `student` where  session='$search1' and `name` like '%$search%' ";
		$_SESSION['sql']=$sql;
	    
	}
	
	
	if($_POST['dpt']!="0" )
	{
		$search=$_POST['dpt'];
		$sql="SELECT * FROM `student` where  department='$search' ";
		$_SESSION['sql']=$sql;
	    
	}
	
	if($_POST['dpt']!="0" && !empty($_POST['session']) )
	{
		$search=$_POST['dpt'];
		$search1=$_POST['session'];
		$sql="SELECT * FROM `student` where  department='$search' and session='$search1' ";
		$_SESSION['sql']=$sql;
	    
	}
	
	//if all the value of input is empty
	if(empty($_POST['session']) && $_POST['dpt']=="0"  && empty($_POST['search']))
	{
		$sql="select * from student";
		$_SESSION['sql']=$sql;
	}
	
	
	
	
	
	

	
	
	
	
	
	
}




?>