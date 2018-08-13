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
		$total_mark=4.00;
		else if($total_mark>=75)
		$total_mark=3.75;
		else if($total_mark>=70)
		$total_mark=3.50;
		else if($total_mark>=65)
		$total_mark=3.25;
		else if($total_mark>=60)
		$total_mark=3.00;
		else if($total_mark>=55)
		$total_mark=2.75;
		else if($total_mark>=50)
		$total_mark=2.50;
		else if($total_mark>=45)
		$total_mark=2.25;
		else if($total_mark>=40)
		$total_mark=2.00;
		else 
		$total_mark=0.00;
		return $total_mark;
	  }
?>