<?php
function show_student($con){
	$sql="select * from student";
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
}

?>