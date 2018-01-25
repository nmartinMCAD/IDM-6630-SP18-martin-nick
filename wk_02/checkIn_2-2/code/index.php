<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>We be Loopin'</title>
  </head>
  <body>
    <?php

      $myArray = array("Lima","Romeo","Sierra", 480, 920.575);
      $arrayTwo = array("Echo", "Charlie", "Zulu", 8820, 7.85);
      $arrayThree = array("Yankee", "India", "Kilo", 75, 44.25);

      function myFunction($arrayToList) {
          echo "<ul>";
          foreach ($arrayToList as $value) {
            echo "<li>$value</li>";
          }
          echo "</ul>";
        }

      myFunction($myArray);
      myFunction($arrayTwo);
      myFunction($arrayThree);

    ?>
  </body>
</html>
