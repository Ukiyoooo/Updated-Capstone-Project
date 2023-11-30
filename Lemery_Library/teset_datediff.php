<?php
$tz = 'Asia/Hong_Kong';
							$timestamp = time();
							$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
							$dt->setTimestamp($timestamp);
							$date=(new DateTime('now'));
							$now = date_format($date,"Y-m-d H:i:s");
$datenow = new DateTime($now);
$duedate = new DateTime('2022-10-24');
// otherwise the  end date is excluded (bug?)
 // $duedate->modify('+1 day');



$interval = $duedate->diff($datenow);
// total days
// $days = $interval->days;
$days = intval($interval->format("%R%a"));
// create an iterateable period of date (P1D equates to 1 day)
$period = new DatePeriod($duedate, new DateInterval('P1D'), $datenow);



foreach($period as $dt) {
    $curr = $dt->format('D');

    // substract if Saturday or Sunday
    if ($curr == 'Sat' || $curr == 'Sun') {
        $days--;
    }

   
}
$penalty=0;
if ($days>0){
$penalty = $days*5;	
}else{
	$penalty = 0;
}

echo $penalty; 

?>