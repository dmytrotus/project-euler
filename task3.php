<h1>Task 3</h1>
<p>
The prime factors of 13195 are 5, 7, 13 and 29.
What is the largest prime factor of the number 600851475143 ?
</p>
<p>
Простые делители числа 13195 - это 5, 7, 13 и 29.
Каков самый большой делитель числа 600851475143, являющийся простым числом?
</p>

<?php
//search primes
function getPrimes($max_number)
{
	$primes = [];
	$is_composite = [];
	for ($i=4; $i<=$max_number; $i+=2){
		$is_composite[$i] = true;	
	}
	$next_prime = 3;
	while ($next_prime<=(int)sqrt($max_number)){
		for ($i=$next_prime*2; $i<=$max_number; $i+=$next_prime){
			$is_composite[$i] = true;	
		}
		$next_prime += 2;
		while ($next_prime<=$max_number && isset($is_composite[$next_prime])){
			$next_prime+=2;	
		}
	}
	for ($i=2; $i<=$max_number; $i++){
			if (!isset($is_composite[$i]))
				$primes[] = $i;
		}
	return $primes;
	
};
$max_number = 600851475143;
//print_r(getPrimes($max_number));

//$primesArray = getPrimes($max_number);
$resultArray = array();

echo 'The prime factors of '.$max_number.' are ';
for ($key = 1; $key = $max_number; $key++) {
	if($max_number % $key == 0) {
		//echo $key.',';
		array_push($resultArray, $key);
	};
	//print_r($resultArray);
};

getPrimes($resultArray);

?>