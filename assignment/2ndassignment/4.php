<?php
function repeat($str, $num) {
    $count = array();
    $char2 = array();
    for ($inner = 0; $inner < strlen($str); $inner++) {
      $char = $str[$inner];
      if (isset($count[$char])) {
        $count[$char]++;
      } else {
        $count[$char] = 1;
      }
    }
    foreach ($count as $char => $count) {
      if ($count >= $num) {
        array_push($char2, $char);
      }
    }
    return $char2;
  }
  print_r(repeat("abcddef", 2));
  print_r(repeat("tfghhhplffzaaa", 3));
?>