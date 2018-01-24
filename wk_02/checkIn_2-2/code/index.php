<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>We be Loopin'</title>
  </head>
  <body>
    <?php

      $myArray = array("Lima","Romeo","Sierra", 480, 920.575);

      function myFunction() {
        foreach ($myArray as $value) {
          echo
          "<ul>
            <li>$value</li>
          </ul>";
        }
      }

      myFunction();

    ?>

  </body>
</html>
