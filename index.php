<?php

class Movie{
  public $titolo;
  public $genere;

  function __construct($_titolo, $_genere){
    $this->titolo = $_titolo;
    $this->genere = $_genere;
  }
}

$babyDriver = new Movie('Baby Driver', 'Azione');
$theMask = new Movie('The Mask', 'Commedia');

var_dump($babyDriver);
var_dump($theMask);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>