<?php
$today=new DateTime();
$date2 = new DateTime("1995-03-08");
$diff = $today->diff($date2);

echo "difference " . $diff->y . " years, " . $diff->m." months, ".$diff->d." days ";

echo "<br>";

$today=new DateTime();
$date2 = new DateTime("1995-06-30");
$diff = $today->diff($date2);

echo "difference " . $diff->y . " years, " . $diff->m." months, ".$diff->d." days, ".$diff->h." hours, ".$diff->i." minutes, ".$diff->s.' seconds';