<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>News Site</title>
    <link rel='stylesheet' href='css/css.css'>
  </head>

  <body>

    <?php

    include 'inc/nav.php';

    if (isset($_GET['section'])) { // CHECK IF SECTION IS SET. IF NOT, INCLUDE HOME TEMPLATE

      if (file_exists("inc/sections/" . $_GET['section'] . "/section-template.php")) { // CHECK IF SET SECTION EXISTS. IF NOT, WARN USER

        if (isset($_GET['article'])) { // CHECK IF ARTICLE IS SET. IF NOT, INCLUDE SECTION TEMPLATE

          if (file_exists("inc/articles/" . $_GET['article'] . "/article-template.php")) { //CHECK IF SET ARTICLE EXISTS. IF NOT, WARN USER

            include 'inc/articles/' . $_GET['article'] . '/article-template.php';

          } else {

            echo "<p>Sorry, the article you're looking for does not exist.</p>";

          }

        } else {

          include 'inc/sections/' . $_GET['section'] . '/section-template.php';

        }

      } else {

        echo "<p>sorry, the section you're looking for does not exist.</p>";

      }

    } else {

      include 'inc/home-template.php';

    }


    ?>


  </body>
</html>
