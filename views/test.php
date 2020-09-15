<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/test.css">
    <title>Document</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <h1>Hola mundo</h1>
    <p>hey, esto es una prueba </p>
    <p>hey, esto es una prueba </p>
    <p>hey, esto es una prueba </p>
    <?php
    echo'hola';
    
    ?>
    <p>hey, esto es una prueba </p>
    <p>hey, esto es una prueba </p>

    <div id="id_container" class="container"></div>
  <?php 
  echo"<script>console.log('hey');
  myfunction();
  function myfunction(){
      console.log('esto es mi function');
      $('#id_container').addClass('rojo');
  }
  </script>";
  ?>
</body>
</html>