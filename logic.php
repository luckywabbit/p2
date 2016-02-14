<?php
 require('wordList.php'); 
 
$wordCount = count($wordList);
$spChar = count($spCharList);
$ranWordArray = [];
$passwordFinal = "";
$ranNum = "";
$pwCount = 4;
$pwNum = "";
$pwSpChar = "";



if (isset($_GET['pwCount'])){
	$pwCount = $_GET['pwCount'];
	}

if (isset($_GET['pwNum'])){
	$pwNum = $_GET['pwNum'];
	}
	
if (isset($_GET['pwSpChar'])){
	$pwSpChar = $_GET['pwSpChar'];
	}


if($pwCount > 0){
	for ($x = 1; $x <= $pwCount; $x++) {
		$ranNum = rand(0,  ($wordCount - 1));
		$passwordFinal .= $wordList[$ranNum] . ' ';
	} 
	
	if($pwNum == "yes"){
		$passwordFinal .= $ranNum . ' ';
	}
	
	if($pwSpChar == "yes"){
		$spCharRanNum = rand(0,  ($spChar - 1));
		$passwordFinal .= $spCharList[$spCharRanNum] . ' ';
	}
}

 ?>