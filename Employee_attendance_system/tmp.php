<?php
date_default_timezone_set("Asia/Dhaka");
//echo $day=date("da")."<br>";
//echo $day;
//echo "The time is " . date("h:i:sa")."<br>";
//$firstDate=date("Y-m-d",strtotime("sunday this week"));
//echo $firstDate;
//echo $time=date("h:i:sa");
//echo date("12:10:1a")-date("1:10:10p");
/*
echo date('m')."<br>";
 
  function late_calculation(){
	        if(date("a")=="pm")
			{
				 $late_h=date('h')+2;
				 $late_m=date('i');
			return $total_late=$late_h*60+$late_m; 
			}
			else if(date("a")=="am")
			{
				 if(date("h")<10)
				 {
				$late_h=date("h")-10;
				$late_m=date('i');
				return $total_late=$late_h*60+$late_m;
				 }
				 return 0;
			} 
	      
		}
			  
		echo $late=late_calculation();
*/
//ays difference ;
/*
$date1=date_create("2018-03-12");
$date2=date_create("2018-3-15");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
*/
 echo $current_date=date("d:m:y");

?>