<h1>Task4</h1>

<p>
Число-палиндром с обеих сторон (справа налево и слева направо) читается одинаково. Самое большое число-палиндром, полученное умножением двух двузначных чисел – 9009 = 91 × 99.
Найдите самый большой палиндром, полученный умножением двух трехзначных чисел.
</p>

<p>
A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
Find the largest palindrome made from the product of two 3-digit numbers.
</p>

<?php
$num_min = 100;
$num_max = 999;
$numbers = array();
$multipliers = array();


function is_polindrom($num){
	$reversenum = strrev($num);
	if( $num == $reversenum){
		return true;
	} else {
		return false;
	};
};


for($firstNr = $num_min; $firstNr <= $num_max; $firstNr++){
		for($secondNr = $num_min; $secondNr <= $num_max; $secondNr++){
		if(is_polindrom($firstNr * $secondNr) == true)
		{
			array_push($numbers, $firstNr * $secondNr);
		}
	}
}

echo 'Максимальное значение палиндром '.(max($numbers));


?>