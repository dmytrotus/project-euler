<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project euler 6</title>
</head>
<body>

	<style>
		body{
			padding: 5%;
		}
	</style>


<p>
The sum of the squares of the first ten natural numbers is,

12 + 22 + ... + 102 = 385
The square of the sum of the first ten natural numbers is,

(1 + 2 + ... + 10)2 = 552 = 3025
Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.

Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
</p>


<?php

//sum of the squares 
$result = array();

for ($i=1; $i < 11; $i++) { 
	
	$y = $i**2;
	array_push($result, $y);

}
$resultsum = array_sum($result);

echo 'Sum of squares '.$resultsum.'<br/>';

//squares of the sum 
$resultsq = array();

for ($i=1; $i < 11; $i++) { 
	
	
	array_push($resultsq, $i);

}
$resultsquare = array_sum($resultsq)**2;

echo 'Squares of the sum  '.$resultsquare.'<br/>';
echo 'difference is ';
echo $resultsquare - $resultsum;



?>

<div>From 1 to 100</div>

<?php

//sum of the squares 
$result = array();

for ($i=1; $i < 101; $i++) { 
	
	$y = $i**2;
	array_push($result, $y);

}
$resultsum = array_sum($result);

echo 'Sum of squares '.$resultsum.'<br/>';

//squares of the sum 
$resultsq = array();

for ($i=1; $i < 101; $i++) { 
	
	
	array_push($resultsq, $i);

}
$resultsquare = array_sum($resultsq)**2;

echo 'Squares of the sum  '.$resultsquare.'<br/>';
echo 'difference is ';
echo $resultsquare - $resultsum;



?>
	
</body>
</html>