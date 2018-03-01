<?php
  if(!isset($_COOKIE['pendu'])){
      die("Les cookies ne sont pas acceptés");
  }
  extract(decode(($_COOKIE['pendu'])));
  $triedLetter = $_POST['triedLetter'];
//  $triedLetters = $_POST['triedLetters'];
//   $wordIndex = $_POST['wordIndex'];
//   $trials = $_POST['trials'];
//   $replacementString = $_POST['replacementString'];

$wordFound = false;

  $triedLetters .= $triedLetter;
  $word = getWord($words, $wordIndex);
  $wordLength = strlen($word);
  $letterFound = false;
  for ($i=0; $i < $wordLength; $i++) { 
    $l = substr($word, $i, 1);
    if ($triedLetter === $l) {
      $letterFound = true;
      $replacementString = substr_replace($replacementString, $l, $i, 1);
    }
  }
  if($letterFound){
  	$trials++;
  }else{
  	if($word === $replacementString){
  	$wordFound = true;
  }
}

  $remainingTrials = MAX_TRIALS-$trials;	


  setcookie( "pendu", encode(compact("triedLetters","wordIndex", "trials", "replacementString", "letters")));