<?php
# require $wordlist and $spCarList array
 require('wordList.php'); 
 
#Declare variables
$wordCount = count($wordList);
$spChar = count($spCharList);
$ranWordArray = [];
$passwordFinal = "";
$ranNum = "";
$pwCount = 4; #Set default word count
$pwNum = "";
$pwSpChar = "";
$enabled = "";



# check if form elements have been passed and validate value as > 0, <= 9,  or NaN. 
# Enable Error state on fail
if (isset($_GET['pwCount']) && $_GET['pwCount'] > 0 &&  $_GET['pwCount'] <= 9 ){
	$pwCount = $_GET['pwCount'];
}elseif( !isset($_GET['pwCount'])){
	$enabled = "";
}else{
	$enabled = "enabled";
}

#Check if Number is set
if (isset($_GET['pwNum'])){
	$pwNum = $_GET['pwNum'];
}

#Check if Special Character is set
if (isset($_GET['pwSpChar'])){
	$pwSpChar = $_GET['pwSpChar'];
}

#Create password string length of users word count
for ($x = 1; $x <= $pwCount; $x++) {
	$ranNum = rand(0,  ($wordCount - 1));
	#Create camelCase password string
	$passwordFinal .= ucfirst($wordList[$ranNum]);
} 
	
#Append Number if checkbox is checked, reuse $ranNum 
if($pwNum == "yes"){
	$passwordFinal .= $ranNum;
}
	
#Append Sp Char if checkbox is checked
if($pwSpChar == "yes"){
	$spCharRanNum = rand(0,  ($spChar - 1));
	$passwordFinal .= $spCharList[$spCharRanNum];
}


 ?>