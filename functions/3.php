<?php

	// generateur de code 
        $char = '0123456789';
        $number = '';
        for ($i = 0; $i < 16; $i++) {
            $number .= $char[rand() % strlen($char)];
        }
//echo $number;

  settype($number, 'string');
  $sumTable = array(
    array(0,1,2,3,4,5,6,7,8,9),
    array(0,2,4,6,8,1,3,5,7,9));
  $sum = 0;
  $flip = 0;
  for ($i = strlen($number) - 1; $i >= 0; $i--) {
    $sum += $sumTable[$flip++ & 0x1][$number[$i]];
  }
  $result = $sum % 10 === 0;
  echo $result;
