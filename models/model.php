<?php

  function getLettersArray(){
return  [
  "a"=>true,
  "b"=>true,
  "c"=>true,
  "d"=>true,
  "e"=>true,
  "f"=>true,
  "g"=>true,
  "h"=>true,
  "i"=>true,
  "j"=>true,
  "k"=>true,
  "l"=>true,
  "m"=>true,
  "n"=>true,
  "o"=>true,
  "p"=>true,
  "q"=>true,
  "r"=>true,
  "s"=>true,
  "t"=>true,
  "u"=>true,
  "v"=>true,
  "w"=>true,
  "x"=>true,
  "y"=>true,
  "z"=>true,
];
}

	function decode($datas){

		return json_decode(base64_decode($datas), true);
	}

	function encode($datas){

		return base64_encode(json_encode($datas));
	}

	function getWordsArray(){
		return @file(SOURCE_PATH, FILE_IGNORE_NEW_LINES) ?: /* traduire par ou bien à gauche ou bien à droite */false;
	}
	function getRandomIndex($array){

		return rand(0, count($array) -1 );
	}

	function getWord($words,$wordIndex){
		return strtolower($words[$wordIndex]);
	}

	function getReplacementString($wordLength){
		
		return str_pad('',$wordLength, REPLACEMENT_CHAR);
	}