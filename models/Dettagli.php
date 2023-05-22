<?php

class Dettagli{
  public $anno;
  public $voto;

  function __construct($_anno, $_voto){
    $this->anno = $_anno;
    $this->voto = $_voto;
  }
}