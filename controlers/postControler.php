<?php 
  $letters = getUnserializedLetters($_POST['serializedLetters']);
  $triedLetter = $_POST['triedLetter'];
  $triedLetters = $_POST['triedLetters'];
   $wordIndex = $_POST['wordIndex'];
   $trials = $_POST['trials'];
   $replacementString = $_POST['replacementString'];

$wordFound = false;

  $triedLetters .= $triedLetter;
  $letters[$triedLetter] = false;
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

  $serializedLetters = getSerializedLetters($letters);