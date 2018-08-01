<?php
date_default_timezone_set("Asia/Dhaka");
$day=date("m") ;
echo $day+1;
echo "The time is " . date("h:i:sa");
$firstDate=date("Y-m-d",strtotime("sunday this week"));
echo $firstDate;
?>