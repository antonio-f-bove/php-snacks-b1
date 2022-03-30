<?php

extract($_GET); // $name, $address, $age
// oppure uno a uno e si usa il ternario
// $name = (isset($_GET('name')) ? $_GET('name') : '');
$flag = true;

if (isset($name) && isset($address) && isset($age)) {

  if (strlen($name) < 3) {
    echo 'Name too short => ';
    $flag = false;
  }

  if (substr_count($address, '@') != 1 || !strpos($address, '.', -4)) {
    // verifica se l'email contiene una sola '@' e se il punto è tra gli ultimi 4 caratteri
    echo 'invalid email address => ';
    $flag = false;
  }

  if (!intval($age)) {
    echo 'Age is not a number => ';
    $flag = false;
  }

  if ($flag) {
    // se ha passato tutti i controlli
    echo 'Access GRANTED';
  } else {
    echo 'Access DENIED';
  }

} else {

  echo 'missing arguments';
}