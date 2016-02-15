<?php
# require $wordlist array and $spCarList
 require('wordList.php'); 
 
#Declare variables
$wordCount = count($wordList);
$spChar = count($spCharList);
$ranWordArray = [];
$passwordFinal = "";
$ranNum = "";
$pwCount = 4;
$pwNum = "";
$pwSpChar = "";
$enabled = "";



# check if form elements have been passed and validate value as > 0 or NaN
if (isset($_GET['pwCount']) && $_GET['pwCount'] > 0 &&  $_GET['pwCount'] <= 9 ){
	$pwCount = $_GET['pwCount'];
	}elseif( !isset($_GET['pwCount'])){
		$enabled = "";
	}else{
		$enabled = "enabled";
	}

if (isset($_GET['pwNum'])){
	$pwNum = $_GET['pwNum'];
	}
	
if (isset($_GET['pwSpChar'])){
	$pwSpChar = $_GET['pwSpChar'];
	}


	for ($x = 1; $x <= $pwCount; $x++) {
		$ranNum = rand(0,  ($wordCount - 1));
		#Create camelCase password string
		$passwordFinal .= ucfirst($wordList[$ranNum]);
	} 
	
	#Append Number if checkbox is checked
	if($pwNum == "yes"){
		$passwordFinal .= $ranNum;
	}
	
	if($pwSpChar == "yes"){
		$spCharRanNum = rand(0,  ($spChar - 1));
		$passwordFinal .= $spCharList[$spCharRanNum];
	}


 ?>