<?php
$arr = array("A" => 1, "B" => 1);

function array_compare(&$key1, &$key2)
  {
    $GLOBALS['a'] = &$key2;
    unset($key2);
    return 1;
  }

uksort($arr, "array_compare");
var_dump($a);

?>