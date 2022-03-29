<?php

$arr = [];

while (count($arr) < 15) {
  $new_int = rand(1, 100);

  if(!in_array($new_int, $arr)) array_push($arr, $new_int);
}

var_dump($arr);