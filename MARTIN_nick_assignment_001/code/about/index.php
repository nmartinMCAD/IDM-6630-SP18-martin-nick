<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IDM 6630 20 Fall 2018</title>
    <?php include "../vars/index.php"; ?>
    <?php echo "$fontLink"; ?>
    <?php echo "$cssLink"; ?>
  </head>
  <body>

    <nav>
      <?php include "../inc/nav.php"; ?>
    </nav>

    <main>
      <?php echo "<h1>About</h1>"; ?>

      <img class="floatImg" src="../img/arthurClarkeAbout.jpg" alt="black and white image of Arthur C Clarke smiling">

      <article class="bioContainer">
        <?php echo "$bioContent"; ?>
      </article>
    </main>

  </body>
</html>
