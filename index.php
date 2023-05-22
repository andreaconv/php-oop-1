<?php

require_once 'models/Movie.php';

$babyDriver = new Movie('Baby Driver', 'Azione', 115, new Dettagli(2017, '3.4/5'));
$theMask = new Movie('The Mask', 'Commedia', 100, new Dettagli(1994, '4.3/5'));

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