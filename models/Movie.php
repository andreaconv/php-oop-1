<?php

require_once 'Dettagli.php';

class Movie{
  public $titolo;
  public $genere;
  public $lunghezza;

  public $dettagli;

  function __construct($_titolo, $_genere, $_lunghezza, Dettagli $_dettagli){
    $this->titolo = $_titolo;
    $this->genere = $_genere;
    $this->lunghezza = $this->getTime($_lunghezza);

    $this->dettagli = $_dettagli;

  }

  public function getTime($_lunghezza){
    $zero    = new DateTime('@0');
    $offset  = new DateTime('@' . $_lunghezza * 60);
    $diff    = $zero->diff($offset);
    return $diff->format('%hh %Im');
  }
}
