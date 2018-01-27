<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nick's Picks</title>
    <link href="https://fonts.googleapis.com/css?family=Archivo:400,700" rel="stylesheet">
    <link rel='stylesheet' href='css/css.css'>
  </head>
  <body>

    <?php
      $movie5 = array(
        'ranking' => '#5',
        'title' => 'The Thing',
        'imdbURL' => 'http://www.imdb.com/title/tt0084787/',
        'year' => 1982,
        'rottenTomatoesScore' => 83,
        'genre' => 'Sci-Fi/Horror',
        'poster' => 'img/theThing.jpg'
      );

      $movie4 = array(
        'ranking' => '#4',
        'title' => 'Princess Mononoke',
        'imdbURL' => 'http://www.imdb.com/title/tt0119698/',
        'year' => 1997,
        'rottenTomatoesScore' => 92,
        'genre' => 'Animation/Adventure/Fantasy',
        'poster' => 'img/princessMononoke.jpg'
      );

      $movie3 = array(
        'ranking' => '#3',
        'title' => 'Starship Troopers',
        'imdbURL' => 'http://www.imdb.com/title/tt0120201/',
        'year' => 1997,
        'rottenTomatoesScore' => 63,
        'genre' => 'Sci-Fi/Action/Adventure',
        'poster' => 'img/starshipTroopers.jpg'
      );

      $movie2 = array(
        'ranking' => '#2',
        'title' => 'Ravenous',
        'imdbURL' => 'http://www.imdb.com/title/tt0129332/',
        'year' => 1999,
        'rottenTomatoesScore' => 45,
        'genre' => 'Horror',
        'poster' => 'img/ravenous.jpg'
      );

      $movie1 = array(
        'ranking' => '#1',
        'title' => 'Alien',
        'imdbURL' => 'http://www.imdb.com/title/tt0078748/',
        'year' => 1979,
        'rottenTomatoesScore' => 94,
        'genre' => 'Sci-Fi/Horror',
        'poster' => 'img/alien.jpg'
      );


      $movie_list = array();

      array_push($movie_list, $movie5, $movie4, $movie3, $movie2, $movie1);


      function create_movie_lists() {
        foreach($movie_list as $current_movie) {
          list_movie($current_movie);
        }
      }

      function list_movie($movie_to_list) {
        echo "<ul>";
        echo "<li>$movie_to_list[ranking]</li>";
        echo "<li>$movie_to_list[title]</li>";
        echo "<img src=" . $movie_to_list['poster'] . ">";
        echo "<li>$movie_to_list[year]</li>";
        echo "<li>$movie_to_list[genre]</li>";
        echo "<li>Rotten Tomatoes Score : " . $movie_to_list['rottenTomatoesScore'] . "</li>";
        echo "<li><a href=" . $movie_to_list['imdbURL']. " target='_blank'>IMDB</a></li>";
        echo "</ul>";
        // OF COURSE, your echo output should have mark up!
      }
    ?>

    <main>
      <h1>Nick's Picks</h1>
      <h2>Top 5 Movies According to Yours Truly</h2>

      <?php echo list_movie($movie5); ?>
      <?php echo list_movie($movie4); ?>
      <?php echo list_movie($movie3); ?>
      <?php echo list_movie($movie2); ?>
      <?php echo list_movie($movie1); ?>
    </main>

    <footer>
      <a href="#">Back to Top</a>
    </footer>

  </body>
</html>
