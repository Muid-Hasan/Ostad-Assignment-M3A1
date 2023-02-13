<?php

function IsEven($x) {
  if ($x % 2 == 0) {
    return "The number $x is even.";
  } else {
    return "The number $x is odd.";
  }
}

$num=6;
echo IsEven($num) . "\n";

$Num=7;
echo IsEven($Num) ;


