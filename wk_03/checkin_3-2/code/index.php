<?php

$queryName = $_GET;

foreach ($queryName as $key => $bool) {
  if ($bool == true) {
    echo "<h1>The value of the variable '" . $key . "' is " . $bool . "</h1>";
  } else {
    echo "<h1>The value of the variable '" . $key . "' is " . $bool . "</h1>";
  }
}

?>
