<?php
  $now = time();
  //echo $now;
  $num = date("w"); // echo $num; w -> means week.
  if ($num == 0){
	 $sub = 6;
  }
  else{
	 $sub = ($num - 1 ); // 0 1 2 3 4 5
  }

   $WeekMon = mktime( 0 , 0 , 0 , date("m" , $now) , date("d" , $now) - $sub , date("y" , $now ) ) ;
   $todayh = getdate($WeekMon);
   
   $d = $todayh[mday]; //Numeric representation of the day of the month
   $m = $todayh[mon];
   $y = $todayh[year];
   echo "$d-$m-$y"; //getdate converted day
   echo "<br>";
   echo date("d-m-y" , strtotime ("+1 week 2 days 4 hours 2 seconds") ) ; 
   // can define the date using strtotime method 
   // 24 hours (86400 secs )
   
?>