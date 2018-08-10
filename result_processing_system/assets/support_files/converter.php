<?php

  function gpa_calculator($assignment,$test,$mid,$final){
	    
	   if($assignment>0)
	   {
	    $assignment=5;
	   }
	   else
	   {
		$assignment=0;   
		}
	   //let assign mark is 5;
		$total_mark=$assignment+$test+$mid+$final;
		
		if($total_mark>=80)
		$total_mark="A+";
		else if($total_mark>=70)
		$total_mark="A";
		else if($total_mark>=60)
		$total_mark="A-";
		return $total_mark;
	  }
?>