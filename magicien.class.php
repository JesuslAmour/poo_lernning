<?php

/**
 *
 */
class magicien
{

  function __construct()
  {
    echo "Je suis le constructeur !";
  }
  function __destruct()
  {
    echo "Je suis le destructeur !";
  }
  function __call($method, $arguments)
  {
    echo "Je suis la methode ".$method." !";
  }
  function saluer()
  {
    echo "Bonjour la *poo !";
  }
}

?>
