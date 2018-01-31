<?php

  echo "<ul>";

  $queryArray = $_GET;

  foreach ($queryArray as $key => $value) {
    echo "<li>" . $key . ": " . $value . "</li>";
  }

  echo "</ul>";


?>
