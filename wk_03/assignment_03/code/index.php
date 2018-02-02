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

    if (isset($_GET['article'])) {
      $article = $_GET['article'];
       if (isset($article)) {
         include 'inc/articles/' . $article . '/article-template.php';
      } else {
        echo "<p>sorry, the article you're looking for does not exist.</p>";
      }
    } else if (isset($_GET['section'])) {
        $section = $_GET['section'];
          if (isset($section)) {
            include 'inc/sections/' . $section . '/section-template.php';
          } else {
              echo "<p>sorry, the section you're looking for does not exist.</p>";
          }
    } else {
        include 'inc/home-template.php';
    }


    ?>


  </body>
</html>
