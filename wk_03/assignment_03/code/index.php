<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>News Site</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Press+Start+2P|Righteous" rel="stylesheet">
    <link rel='stylesheet' href='css/css.css'>
  </head>

  <body>

    <?php

    include 'inc/header.php';

    ?>

    <main>
    <?php

    if (isset($_GET['section'])) { // CHECK IF SECTION IS SET. IF NOT, INCLUDE HOME TEMPLATE

      $section = $_GET['section'];

      if (file_exists("inc/sections/" . $section . "/section-template.php")) { // CHECK IF SET SECTION EXISTS. IF NOT, WARN USER

        if (isset($_GET['article'])) { // CHECK IF ARTICLE IS SET. IF NOT, INCLUDE SECTION TEMPLATE

          $article = $_GET['article'];

          if (file_exists("inc/articles/" . $article . "/article-template.php")) { //CHECK IF SET ARTICLE EXISTS. IF NOT, WARN USER

            include 'inc/articles/' . $article . '/article-template.php';

          } else {

            echo "<p class='error'>Sorry, the article you're looking for does not exist.</p>";
            echo "<img class='errorIcon' src='img/errorIcon.svg'>";

          }

        } else {

          include 'inc/sections/' . $section . '/section-template.php';

        }

      } else {

        echo "<p class='error'>Sorry, the section you're looking for does not exist.</p>";
        echo "<img class='errorIcon' src='img/errorIcon.svg'>";

      }

    } else {

      include 'inc/home-template.php';

    }


    ?>
    </main>

  </body>
</html>
