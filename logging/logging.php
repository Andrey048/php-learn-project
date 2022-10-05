<?php
$fd = fopen(dirname(__FILE__) . '/log-bd.txt', 'a');

$dateArray = getdate();
$time = $dateArray['hours'] . ':' . $dateArray['minutes']; 
$date = $dateArray['mday'] . '-' . $dateArray['mon'] . '-' . $dateArray['year'];

$dataLog = $time . ' ' . $date . ' ' . $_SERVER['HTTP_USER_AGENT'] . "\n";

fwrite($fd, $dataLog);

fclose($fd);
?>