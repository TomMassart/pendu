<?php

if ($words = getWordsArray()){
// se qui se passe si post
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'postControler.php';
  } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include 'getControler.php';
  } else {
    die('Tu n’as rien à faire ici avec cette méthode HTTP');
  }
}else{
  die("Il n'a pas été possible de récupérer les mots depuis la base de donnée");
}
