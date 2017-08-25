<?php
	$nextWeek = time() + (7 * 24 * 60 * 60);
	// 7 days; 24 hours; 60 mins; 60 secs
	echo "<br>"; 
	echo 'Now:       '. date('Y-m-d') ."\n";
	echo "<br>"; 
	echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
	echo "<br>"; 
	// or using strtotime():
	echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";
    echo "<br>"; 
	
	date_default_timezone_set("UTC");
	echo "UTC : " . time();
	echo "<br>"; 

	date_default_timezone_set("Europe/Helsinki"); 
	echo "Europe/Helsinki:".time(); 
	echo "<br>"; 
?>