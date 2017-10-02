<?php

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br><br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<br><br>";

//-----------------------------------------
//				PHP BASICS
//-----------------------------------------

#2
$date = str_replace('-', '/', $date);
echo "2." . str_repeat('&nbsp;', 5);  
echo $date; 

echo "<br><br>";

//-----------------------------------------
#3
echo "3." . str_repeat('&nbsp;', 5);  

$fixedDate = strtotime($date); 
$fixedTar  = strtotime($tar);
$result = $fixedTar - $fixedDate; 

if ($result > 0)
  echo "The Future";

else if ($result < 0)
   echo "The Past";

else if ($result == 0)
  echo "Oops"; 

echo "<br><br>";

//-----------------------------------------
#4
echo "4." . str_repeat('&nbsp;', 5);  

$pos = 0;

for ($i = 0; $i <= strlen($date); $i++){
	$char = substr($date, $i, 1);
	if($char == '/'){
		echo $i . " ";
	}
}

$findReplace = substr_replace($date, ' ' , 0);
echo $findReplace;

echo "<br><br>"; 
//-----------------------------------------

#5
echo "5." . str_repeat('&nbsp;', 5);  

$wordCount = str_word_count($date);
echo "\$date: " . $date . "<br>";

echo str_repeat('&nbsp;', 8) . "ANS: " . $wordCount . " words";

echo "<br><br>";
//-----------------------------------------

#6
echo "6." . str_repeat('&nbsp;', 5);  
$string2 = "splish";
$strLength = strlen($string2);
echo $strLength; 

echo "<br><br>";
//-----------------------------------------

#7
echo "7." . str_repeat('&nbsp;', 5);  
$string2 = "splash";
$getASCII = ord($string2);
echo $getASCII; 

echo "<br><br>";
//-----------------------------------------

#8
echo "8." . str_repeat('&nbsp;', 5);  

$lastTwo = substr($date, -2);
echo $lastTwo; 

echo "<br><br>";

//-----------------------------------------
#9
echo "9." . str_repeat('&nbsp;', 5);  

$splitString = explode('/', $date);
$delimitString = implode(" ", $splitString);

echo $delimitString; 
// $arrLength = count($splitString);
// for($x = 0; $x < $arrLength; $x++) {
//     echo $splitString[$x];
//     echo " ";
// }
echo "<br><br>";

//-----------------------------------------

#10
echo "10." . str_repeat('&nbsp;', 5);  

foreach ($year as $value) {

		switch ($value){

			case (($value % 100 == 0) && ($value % 400 == 0)):
				echo "<br>" . $value . " TRUE";
				break;

			case (($value % 4 == 0) && ($value % 100 != 0) ):
				echo "<br>" . $value . " TRUE";
				
				break;

			default:
				echo "<br>" . $value . " FALSE";
				
				break;
			
		}
	
}

echo "<br><br>";



?>