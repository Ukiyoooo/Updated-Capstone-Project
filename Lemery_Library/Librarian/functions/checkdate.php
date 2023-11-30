<?php

$tz = 'Asia/Hong_Kong';
$timestamp = time();
                            $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
                            $dt->setTimestamp($timestamp);
                            $date=(new DateTime('now'));
                            $now = date_format($date,"Y-m-d");
$timeout=date_format($dt,"Y-m-d h:i:s");
echo $timeout;
?>