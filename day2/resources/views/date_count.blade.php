<?php

$date1 = date_create(NOW());
$date2 = date_create('2021-12-20');
  
$interval = date_diff($date1, $date2);
  
echo $interval->format('Sisa hari menuju hari ulang tahun adalah %R%a Hari');
?>