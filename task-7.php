<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 7</title>
</head>
<body>

<style>
		body{
			padding: 5%;
		}
	</style>


	<p>
		By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
		What is the 10 001 st prime number?

		<p style="color: red;">
			Can't solve
		</p>
		
	</p>


<?php

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
}

//print_r(getPrimes(13));

echo getPrimes(13)[0]; // get first element if array
echo '<br/>';
$arr = getPrimes(188772);
$lastel =  end($arr); // get first element if array
$key = array_search ($lastel, $arr);
echo $key;

?>

<script>
	'use strict';

const primes = [2, 3, 5, 7, 11, 13];

function isPrime(number) {
    // Получаем лимит для делителя
    const dividersLimit = number / 2;

    // Проверяем делители с шагом 2
    for (let i = 3; i < dividersLimit; i += 2) {
        if (number % i === 0) {
            return false;
        }
    }

    return true;
}

// Начнем поиск, например, с 15 с шагом 2 (так как кроме двойки парных простых чисел больше нет)
for (let i = 15; i < Number.MAX_SAFE_INTEGER; i += 2) {
    if (isPrime(i)) {
        primes.push(i);

        if (primes.length === 10001) {
            console.log('Result:', i);
            break;
        }
    }
}
</script>


	
</body>
</html>