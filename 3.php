<?php 

function getBetweenDays($start, $end, $format = 'Y-m-d') { 
	$array = array(); 
	$interval = new DateInterval('P1D'); 

	$realEnd = new DateTime($end); 
	$realEnd->add($interval); 

	$period = new DatePeriod(new DateTime($start), $interval, $realEnd); 

	foreach($period as $date) {				 
		$array[] = $date->format($format); 
	} 
	return $array; 
} 

$daterange = getBetweenDays('2019-07-01', '2019-07-31'); 

foreach($daterange as $row){
    echo $row . '<br/>';
} 

?> 
