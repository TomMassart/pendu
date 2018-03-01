<?php 
$triedLetters = '';
 // Ce qui se passe si get
  // configuration des données utiles
  // $words = @file(SOURCE_PATH, FILE_IGNORE_NEW_LINES); @ supprime l'avertissement
  $letters = getLettersArray();
  $wordIndex = getRandomIndex($words);
  $word = getWord($words,$wordIndex);
  $wordLength = strlen($word);
  $replacementString = getReplacementString($wordLength);
  $remainingTrials = MAX_TRIALS;
  $wordFound = false;
  $trials = 0;
  $triedLetters = "";
setcookie( "pendu", encode(compact("wordIndex", "trials", "replacementString", "triedLetters", "letters")));