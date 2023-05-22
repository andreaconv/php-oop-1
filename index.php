<?php

require_once 'models/Movie.php';

require_once 'db-movies.php';

// var_dump($movies)

?>

<?php require_once 'partials/head.php'; ?>

<body class="bg-dark">
<!-- <body class=""> -->

  <div class="container my-5">

    <h1 class="text-primary mb-3">Movies</h1>

    <table class="table text-white">
      <thead>
        <tr>
          <!-- <th scope="col"></th> -->
          <th scope="col" class="text-info">Titolo</th>
          <th scope="col" class="text-info">Genere</th>
          <th scope="col" class="text-info">Durata</th>
          <th scope="col" class="text-info">Anno</th>
          <th scope="col" class="text-info">Voto</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($movies as $movie) : ?>
          <tr>
            <!-- <th scope="row"><?php echo $movie->$index ?></th> -->
            <td><?php echo $movie->titolo ?></td>
            <td><?php echo $movie->genere ?></td>
            <td><?php echo $movie->lunghezza ?></td>
            <td><?php echo $movie->dettagli->anno ?></td>
            <td><?php echo $movie->dettagli->voto ?>/5</td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>


  </div>
  
</body>
</html>