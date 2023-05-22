<?php

class Movie{
  public $titolo;
  public $genere;
  public $lunghezza;

  function __construct($_titolo, $_genere, $_lunghezza){
    $this->titolo = $_titolo;
    $this->genere = $_genere;
    $this->lunghezza = $this->getTime($_lunghezza);
  }

  public function getTime($_lunghezza){

    // return number_format($_lunghezza/60, 2, '.', "") . ' ore';
    // return new DateTime()->format('%H:')


    $zero    = new DateTime('@0');
    $offset  = new DateTime('@' . $_lunghezza * 60);
    $diff    = $zero->diff($offset);
    return $diff->format('%hh, %Im');


  }
}

$babyDriver = new Movie('Baby Driver', 'Azione', 115);
$theMask = new Movie('The Mask', 'Commedia', 100);

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