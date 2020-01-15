<?php

function getDateFromDB($data) {
  $timeFrmt = 'g:i A,d-M-Y';
  $convertToDate = date($timeFrmt, strtotime($data));

  $dateArr = explode(',', $convertToDate);
  $created = array('time' => $dateArr[0], 'date' => $dateArr[1]);

  return $created;
 }
  
  print_r(getDateFromDB('2020-01-15 10:49:30'));
  
?>